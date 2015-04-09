<?php

namespace Catalogos\Medico\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Medico\Form\MedicoForm;

//// Filter ////
use Catalogos\Medico\Filter\MedicoFilter;

//// Propel ////
use Medico;
use MedicoQuery;
use BasePeer;
use EspecialidadQuery;

class MedicoController extends AbstractActionController
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
        $medicoForm = new MedicoForm($especialidadArray);
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro
            $medicoFilter = new MedicoFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $medicoForm->setInputFilter($medicoFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $medicoForm->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($medicoForm->isValid()){
                
                //Instanciamos un nuevo objeto de nuestro objeto Medico
                $medico = new Medico();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Medico
                foreach ($medicoForm->getData() as $medicoKey => $medicoValue){
                    $medico->setByName($medicoKey, $medicoValue, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos
                $medico->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Medico guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('medico');
                
            }else{
                //Si ocurrio algun error al validar el formulario
                foreach ($medicoForm->getMessages() as $message){
                    $this->flashMessenger()->addMessage('Error: ' .$message);
                }
            }
        }
        
        return new ViewModel(array(
            'medicoForm' => $medicoForm,
        ));

    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario medicoForm
        $medicoForm = new MedicoForm();

        $medicoQuery = new MedicoQuery();

        $result = $medicoQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();
        

        return new ViewModel(array(
            'medicos' => $dataCollection,
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
            return $this->redirect()->toRoute('medico', array(
                'action' => 'nuevo'
            ));
        }
        
        //Verificamos que el Id medico que se quiere modificar exista
        if(MedicoQuery::create()->filterByIdmedico($id)->exists()){
            
            //Instanciamos nuestro medico
            $medico = MedicoQuery::create()->findPk($id);
            
            //Almacenamos en un arreglo todas las especialidades
            $especialidadCollection = \EspecialidadQuery::create()->find();
            $especialidadArray = array();
            foreach ($especialidadCollection as $especialidad){
                $especialidadArray[$especialidad->getIdespecialidad()] = $especialidad->getEspecialidadNombre();
            }
            
            //Instanciamos nuestro formulario
            $medicoForm = new MedicoForm($especialidadArray);
            
            //Le ponemos los datos de nuestro medico a nuestro formulario
            $medicoForm->setData($medico->toArray(BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
               
                //Instanciamos nuestro filtro
                $medicoFilter = new MedicoFilter();

                //Le ponemos nuestro filtro a nuesto fromulario
                $medicoForm->setInputFilter($medicoFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $medicoForm->setData($request->getPost());
                
                //Validamos nuestro formulario
                if($medicoForm->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Medico
                    foreach ($medicoForm->getData() as $medicoKey => $medicoValue){
                        $medico->setByName($medicoKey, $medicoValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //Guardamos en nuestra base de datos
                    $medico->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Medico guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('medico');

                }else{
                    //Si ocurrio algun error al validar el formulario
                    foreach ($medicoForm->getMessages() as $message){
                        $this->flashMessenger()->addMessage('Error: ' .$message);
                    }
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'medicoForm' => $medicoForm,
            ));
        }

    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('medico');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                MedicoQuery::create()->filterByIdmedico($id)->delete();
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('medico');
        }

        $provedorEntity = MedicoQuery::create()->filterByIdmedico($id)->findOne();
        return array(
            'id'    => $id,
            'medico' => $provedorEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
        
        $medico = new Medico();

    }
}