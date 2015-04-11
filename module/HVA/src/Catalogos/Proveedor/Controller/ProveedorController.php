<?php

namespace Catalogos\Proveedor\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Proveedor\Form\ProveedorForm;

//// Filter ////
use Catalogos\Proveedor\Filter\ProveedorFilter;

//// Propel ////
use Proveedor;
use ProveedorQuery;
use BasePeer;

class ProveedorController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Almacenamos en un arreglo todas las especialidades
        $especialidadCollection = \EspecialidadQuery::create()->find();
        $especialidadArray = array();
        foreach ($especialidadCollection as $especialidad){
            $especialidadArray[$especialidad->getIdespecialidad()] = $especialidad->getEspecialidadNombre();
        }
        
        //Intanciamos nuestro formulario
        $proveedorForm = new ProveedorForm($especialidadArray);
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro
            $proveedorFilter = new ProveedorFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $proveedorForm->setInputFilter($proveedorFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $proveedorForm->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($proveedorForm->isValid()){
                
                //Instanciamos un nuevo objeto de nuestro objeto proveedor
                $proveedor = new Proveedor();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Proveedor
                foreach ($proveedorForm->getData() as $proveedorKey => $proveedorValue){
                    $proveedor->setByName($proveedorKey, $proveedorValue, \BasePeer::TYPE_FIELDNAME);
                }
              
                //Guardamos en nuestra base de datos
                $proveedor->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Proveedor guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('proveedor');
                
            }else{
                
            }
        }
        
        return new ViewModel(array(
            'proveedorForm' => $proveedorForm,
        ));

    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario proveedorForm
        $proveedorForm = new proveedorForm();

        $proveedorQuery = new ProveedorQuery();

        $result = $proveedorQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();

        return new ViewModel(array(
            'proveedores' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));    
    }

    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id', 0);
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('proveedor', array(
                'action' => 'nuevo'
            ));
        }
        
        //Verificamos que el Id proveedor que se quiere modificar exista
        if(ProveedorQuery::create()->filterByIdproveedor($id)->exists()){
            
            //Instanciamos nuestro proveedor
            $proveedor = ProveedorQuery::create()->findPk($id);
            
            //Almacenamos en un arreglo todas las especialidades
            $especialidadCollection = \EspecialidadQuery::create()->find();
            $especialidadArray = array();
            foreach ($especialidadCollection as $especialidad){
                $especialidadArray[$especialidad->getIdespecialidad()] = $especialidad->getEspecialidadNombre();
            }
            
            //Instanciamos nuestro formulario
            $proveedorForm = new ProveedorForm($especialidadArray);
            
            //Le ponemos los datos de nuestro proveedor a nuestro formulario
            $proveedorForm->setData($proveedor->toArray(BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
               
                //Instanciamos nuestro filtro
                $proveedorFilter = new ProveedorFilter();

                //Le ponemos nuestro filtro a nuesto fromulario
                $proveedorForm->setInputFilter($proveedorFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $proveedorForm->setData($request->getPost());
                
                //Validamos nuestro formulario
                if($proveedorForm->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto proveedor
                    foreach ($proveedorForm->getData() as $proveedorKey => $proveedorValue){
                        $proveedor->setByName($proveedorKey, $proveedorValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //Guardamos en nuestra base de datos
                    $proveedor->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Proveedor guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('proveedor');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'proveedorForm' => $proveedorForm,
            ));
        }

    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id', 0);
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('proveedor');
        }
        
        //Verificamos que el Id proveedor que se quiere eliminar exista
        if(ProveedorQuery::create()->filterByIdproveedor($id)->exists()){
            
            //Instanciamos nuestro proveedor
            $proveedor = ProveedorQuery::create()->findPk($id);
            
            $proveedor->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Proveedor eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('proveedor');
            
        }

    }
}