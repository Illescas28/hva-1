<?php



/**
 * This class defines the structure of the 'articulo' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.hva.map
 */
class ArticuloTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.ArticuloTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('articulo');
        $this->setPhpName('Articulo');
        $this->setClassname('Articulo');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idarticulo', 'Idarticulo', 'INTEGER', true, null, null);
        $this->addForeignKey('idtipo', 'Idtipo', 'INTEGER', 'tipo', 'idtipo', true, null, null);
        $this->addForeignKey('idudm', 'Idudm', 'INTEGER', 'udm', 'idudm', true, null, null);
        $this->addColumn('articulo_nombre', 'ArticuloNombre', 'VARCHAR', false, 300, null);
        $this->addColumn('articulo_codigobarras', 'ArticuloCodigobarras', 'VARCHAR', false, 100, null);
        $this->addColumn('articulo_descripcion', 'ArticuloDescripcion', 'LONGVARCHAR', false, null, null);
        $this->addColumn('articulo_tipopresentacion', 'ArticuloTipopresentacion', 'CHAR', true, null, null);
        $this->getColumn('articulo_tipopresentacion', false)->setValueSet(array (
  0 => 'Caja',
));
        $this->addColumn('articulo_cantidadpresentacion', 'ArticuloCantidadpresentacion', 'INTEGER', false, null, null);
        $this->addColumn('articulo_existencia', 'ArticuloExistencia', 'DECIMAL', false, 10, null);
        $this->addColumn('articulo_costo', 'ArticuloCosto', 'DECIMAL', false, 10, null);
        $this->addColumn('articulo_precio', 'ArticuloPrecio', 'DECIMAL', false, 10, null);
        $this->addColumn('articulo_iva', 'ArticuloIva', 'DECIMAL', false, 10, null);
        $this->addColumn('articulo_inventariominimo', 'ArticuloInventariominimo', 'DECIMAL', false, 10, null);
        $this->addColumn('articulo_inventariomaximo', 'ArticuloInventariomaximo', 'DECIMAL', false, 10, null);
        $this->addColumn('articulo_reorden', 'ArticuloReorden', 'DECIMAL', false, 10, null);
        $this->addColumn('articulo_ubicacion', 'ArticuloUbicacion', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Tipo', 'Tipo', RelationMap::MANY_TO_ONE, array('idtipo' => 'idtipo', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Udm', 'Udm', RelationMap::MANY_TO_ONE, array('idudm' => 'idudm', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Ordencompradetalle', 'Ordencompradetalle', RelationMap::ONE_TO_MANY, array('idarticulo' => 'idarticulo', ), 'CASCADE', 'CASCADE', 'Ordencompradetalles');
        $this->addRelation('Paquetedetalle', 'Paquetedetalle', RelationMap::ONE_TO_MANY, array('idarticulo' => 'idarticulo', ), 'CASCADE', 'CASCADE', 'Paquetedetalles');
    } // buildRelations()

} // ArticuloTableMap
