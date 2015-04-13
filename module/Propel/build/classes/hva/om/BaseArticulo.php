<?php


/**
 * Base class that represents a row from the 'articulo' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseArticulo extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ArticuloPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ArticuloPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idarticulo field.
     * @var        int
     */
    protected $idarticulo;

    /**
     * The value for the idtipo field.
     * @var        int
     */
    protected $idtipo;

    /**
     * The value for the idudm field.
     * @var        int
     */
    protected $idudm;

    /**
     * The value for the articulo_nombre field.
     * @var        string
     */
    protected $articulo_nombre;

    /**
     * The value for the articulo_codigobarras field.
     * @var        string
     */
    protected $articulo_codigobarras;

    /**
     * The value for the articulo_descripcion field.
     * @var        string
     */
    protected $articulo_descripcion;

    /**
     * The value for the articulo_tipopresentacion field.
     * @var        string
     */
    protected $articulo_tipopresentacion;

    /**
     * The value for the articulo_cantidadpresentacion field.
     * @var        int
     */
    protected $articulo_cantidadpresentacion;

    /**
     * The value for the articulo_existencia field.
     * @var        string
     */
    protected $articulo_existencia;

    /**
     * The value for the articulo_costo field.
     * @var        string
     */
    protected $articulo_costo;

    /**
     * The value for the articulo_precio field.
     * @var        string
     */
    protected $articulo_precio;

    /**
     * The value for the articulo_iva field.
     * @var        string
     */
    protected $articulo_iva;

    /**
     * The value for the articulo_inventariominimo field.
     * @var        string
     */
    protected $articulo_inventariominimo;

    /**
     * The value for the articulo_inventariomaximo field.
     * @var        string
     */
    protected $articulo_inventariomaximo;

    /**
     * The value for the articulo_reorden field.
     * @var        string
     */
    protected $articulo_reorden;

    /**
     * The value for the articulo_ubicacion field.
     * @var        string
     */
    protected $articulo_ubicacion;

    /**
     * @var        Tipo
     */
    protected $aTipo;

    /**
     * @var        Udm
     */
    protected $aUdm;

    /**
     * @var        PropelObjectCollection|Ordencompradetalle[] Collection to store aggregation of Ordencompradetalle objects.
     */
    protected $collOrdencompradetalles;
    protected $collOrdencompradetallesPartial;

    /**
     * @var        PropelObjectCollection|Paquetedetalle[] Collection to store aggregation of Paquetedetalle objects.
     */
    protected $collPaquetedetalles;
    protected $collPaquetedetallesPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ordencompradetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $paquetedetallesScheduledForDeletion = null;

    /**
     * Get the [idarticulo] column value.
     *
     * @return int
     */
    public function getIdarticulo()
    {

        return $this->idarticulo;
    }

    /**
     * Get the [idtipo] column value.
     *
     * @return int
     */
    public function getIdtipo()
    {

        return $this->idtipo;
    }

    /**
     * Get the [idudm] column value.
     *
     * @return int
     */
    public function getIdudm()
    {

        return $this->idudm;
    }

    /**
     * Get the [articulo_nombre] column value.
     *
     * @return string
     */
    public function getArticuloNombre()
    {

        return $this->articulo_nombre;
    }

    /**
     * Get the [articulo_codigobarras] column value.
     *
     * @return string
     */
    public function getArticuloCodigobarras()
    {

        return $this->articulo_codigobarras;
    }

    /**
     * Get the [articulo_descripcion] column value.
     *
     * @return string
     */
    public function getArticuloDescripcion()
    {

        return $this->articulo_descripcion;
    }

    /**
     * Get the [articulo_tipopresentacion] column value.
     *
     * @return string
     */
    public function getArticuloTipopresentacion()
    {

        return $this->articulo_tipopresentacion;
    }

    /**
     * Get the [articulo_cantidadpresentacion] column value.
     *
     * @return int
     */
    public function getArticuloCantidadpresentacion()
    {

        return $this->articulo_cantidadpresentacion;
    }

    /**
     * Get the [articulo_existencia] column value.
     *
     * @return string
     */
    public function getArticuloExistencia()
    {

        return $this->articulo_existencia;
    }

    /**
     * Get the [articulo_costo] column value.
     *
     * @return string
     */
    public function getArticuloCosto()
    {

        return $this->articulo_costo;
    }

    /**
     * Get the [articulo_precio] column value.
     *
     * @return string
     */
    public function getArticuloPrecio()
    {

        return $this->articulo_precio;
    }

    /**
     * Get the [articulo_iva] column value.
     *
     * @return string
     */
    public function getArticuloIva()
    {

        return $this->articulo_iva;
    }

    /**
     * Get the [articulo_inventariominimo] column value.
     *
     * @return string
     */
    public function getArticuloInventariominimo()
    {

        return $this->articulo_inventariominimo;
    }

    /**
     * Get the [articulo_inventariomaximo] column value.
     *
     * @return string
     */
    public function getArticuloInventariomaximo()
    {

        return $this->articulo_inventariomaximo;
    }

    /**
     * Get the [articulo_reorden] column value.
     *
     * @return string
     */
    public function getArticuloReorden()
    {

        return $this->articulo_reorden;
    }

    /**
     * Get the [articulo_ubicacion] column value.
     *
     * @return string
     */
    public function getArticuloUbicacion()
    {

        return $this->articulo_ubicacion;
    }

    /**
     * Set the value of [idarticulo] column.
     *
     * @param  int $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setIdarticulo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idarticulo !== $v) {
            $this->idarticulo = $v;
            $this->modifiedColumns[] = ArticuloPeer::IDARTICULO;
        }


        return $this;
    } // setIdarticulo()

    /**
     * Set the value of [idtipo] column.
     *
     * @param  int $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setIdtipo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtipo !== $v) {
            $this->idtipo = $v;
            $this->modifiedColumns[] = ArticuloPeer::IDTIPO;
        }

        if ($this->aTipo !== null && $this->aTipo->getIdtipo() !== $v) {
            $this->aTipo = null;
        }


        return $this;
    } // setIdtipo()

    /**
     * Set the value of [idudm] column.
     *
     * @param  int $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setIdudm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idudm !== $v) {
            $this->idudm = $v;
            $this->modifiedColumns[] = ArticuloPeer::IDUDM;
        }

        if ($this->aUdm !== null && $this->aUdm->getIdudm() !== $v) {
            $this->aUdm = null;
        }


        return $this;
    } // setIdudm()

    /**
     * Set the value of [articulo_nombre] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->articulo_nombre !== $v) {
            $this->articulo_nombre = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_NOMBRE;
        }


        return $this;
    } // setArticuloNombre()

    /**
     * Set the value of [articulo_codigobarras] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloCodigobarras($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->articulo_codigobarras !== $v) {
            $this->articulo_codigobarras = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_CODIGOBARRAS;
        }


        return $this;
    } // setArticuloCodigobarras()

    /**
     * Set the value of [articulo_descripcion] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->articulo_descripcion !== $v) {
            $this->articulo_descripcion = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_DESCRIPCION;
        }


        return $this;
    } // setArticuloDescripcion()

    /**
     * Set the value of [articulo_tipopresentacion] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloTipopresentacion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->articulo_tipopresentacion !== $v) {
            $this->articulo_tipopresentacion = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_TIPOPRESENTACION;
        }


        return $this;
    } // setArticuloTipopresentacion()

    /**
     * Set the value of [articulo_cantidadpresentacion] column.
     *
     * @param  int $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloCantidadpresentacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->articulo_cantidadpresentacion !== $v) {
            $this->articulo_cantidadpresentacion = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_CANTIDADPRESENTACION;
        }


        return $this;
    } // setArticuloCantidadpresentacion()

    /**
     * Set the value of [articulo_existencia] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloExistencia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->articulo_existencia !== $v) {
            $this->articulo_existencia = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_EXISTENCIA;
        }


        return $this;
    } // setArticuloExistencia()

    /**
     * Set the value of [articulo_costo] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloCosto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->articulo_costo !== $v) {
            $this->articulo_costo = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_COSTO;
        }


        return $this;
    } // setArticuloCosto()

    /**
     * Set the value of [articulo_precio] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloPrecio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->articulo_precio !== $v) {
            $this->articulo_precio = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_PRECIO;
        }


        return $this;
    } // setArticuloPrecio()

    /**
     * Set the value of [articulo_iva] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloIva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->articulo_iva !== $v) {
            $this->articulo_iva = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_IVA;
        }


        return $this;
    } // setArticuloIva()

    /**
     * Set the value of [articulo_inventariominimo] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloInventariominimo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->articulo_inventariominimo !== $v) {
            $this->articulo_inventariominimo = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_INVENTARIOMINIMO;
        }


        return $this;
    } // setArticuloInventariominimo()

    /**
     * Set the value of [articulo_inventariomaximo] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloInventariomaximo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->articulo_inventariomaximo !== $v) {
            $this->articulo_inventariomaximo = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_INVENTARIOMAXIMO;
        }


        return $this;
    } // setArticuloInventariomaximo()

    /**
     * Set the value of [articulo_reorden] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloReorden($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->articulo_reorden !== $v) {
            $this->articulo_reorden = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_REORDEN;
        }


        return $this;
    } // setArticuloReorden()

    /**
     * Set the value of [articulo_ubicacion] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloUbicacion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->articulo_ubicacion !== $v) {
            $this->articulo_ubicacion = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_UBICACION;
        }


        return $this;
    } // setArticuloUbicacion()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->idarticulo = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idtipo = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idudm = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->articulo_nombre = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->articulo_codigobarras = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->articulo_descripcion = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->articulo_tipopresentacion = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->articulo_cantidadpresentacion = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->articulo_existencia = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->articulo_costo = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->articulo_precio = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->articulo_iva = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->articulo_inventariominimo = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->articulo_inventariomaximo = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->articulo_reorden = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->articulo_ubicacion = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 16; // 16 = ArticuloPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Articulo object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aTipo !== null && $this->idtipo !== $this->aTipo->getIdtipo()) {
            $this->aTipo = null;
        }
        if ($this->aUdm !== null && $this->idudm !== $this->aUdm->getIdudm()) {
            $this->aUdm = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ArticuloPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ArticuloPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aTipo = null;
            $this->aUdm = null;
            $this->collOrdencompradetalles = null;

            $this->collPaquetedetalles = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ArticuloPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ArticuloQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ArticuloPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                ArticuloPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aTipo !== null) {
                if ($this->aTipo->isModified() || $this->aTipo->isNew()) {
                    $affectedRows += $this->aTipo->save($con);
                }
                $this->setTipo($this->aTipo);
            }

            if ($this->aUdm !== null) {
                if ($this->aUdm->isModified() || $this->aUdm->isNew()) {
                    $affectedRows += $this->aUdm->save($con);
                }
                $this->setUdm($this->aUdm);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->ordencompradetallesScheduledForDeletion !== null) {
                if (!$this->ordencompradetallesScheduledForDeletion->isEmpty()) {
                    OrdencompradetalleQuery::create()
                        ->filterByPrimaryKeys($this->ordencompradetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ordencompradetallesScheduledForDeletion = null;
                }
            }

            if ($this->collOrdencompradetalles !== null) {
                foreach ($this->collOrdencompradetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->paquetedetallesScheduledForDeletion !== null) {
                if (!$this->paquetedetallesScheduledForDeletion->isEmpty()) {
                    PaquetedetalleQuery::create()
                        ->filterByPrimaryKeys($this->paquetedetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->paquetedetallesScheduledForDeletion = null;
                }
            }

            if ($this->collPaquetedetalles !== null) {
                foreach ($this->collPaquetedetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = ArticuloPeer::IDARTICULO;
        if (null !== $this->idarticulo) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ArticuloPeer::IDARTICULO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ArticuloPeer::IDARTICULO)) {
            $modifiedColumns[':p' . $index++]  = '`idarticulo`';
        }
        if ($this->isColumnModified(ArticuloPeer::IDTIPO)) {
            $modifiedColumns[':p' . $index++]  = '`idtipo`';
        }
        if ($this->isColumnModified(ArticuloPeer::IDUDM)) {
            $modifiedColumns[':p' . $index++]  = '`idudm`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_nombre`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_CODIGOBARRAS)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_codigobarras`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_descripcion`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_TIPOPRESENTACION)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_tipopresentacion`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_CANTIDADPRESENTACION)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_cantidadpresentacion`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_EXISTENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_existencia`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_COSTO)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_costo`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_PRECIO)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_precio`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_IVA)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_iva`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_INVENTARIOMINIMO)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_inventariominimo`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_INVENTARIOMAXIMO)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_inventariomaximo`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_REORDEN)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_reorden`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_UBICACION)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_ubicacion`';
        }

        $sql = sprintf(
            'INSERT INTO `articulo` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idarticulo`':
                        $stmt->bindValue($identifier, $this->idarticulo, PDO::PARAM_INT);
                        break;
                    case '`idtipo`':
                        $stmt->bindValue($identifier, $this->idtipo, PDO::PARAM_INT);
                        break;
                    case '`idudm`':
                        $stmt->bindValue($identifier, $this->idudm, PDO::PARAM_INT);
                        break;
                    case '`articulo_nombre`':
                        $stmt->bindValue($identifier, $this->articulo_nombre, PDO::PARAM_STR);
                        break;
                    case '`articulo_codigobarras`':
                        $stmt->bindValue($identifier, $this->articulo_codigobarras, PDO::PARAM_STR);
                        break;
                    case '`articulo_descripcion`':
                        $stmt->bindValue($identifier, $this->articulo_descripcion, PDO::PARAM_STR);
                        break;
                    case '`articulo_tipopresentacion`':
                        $stmt->bindValue($identifier, $this->articulo_tipopresentacion, PDO::PARAM_STR);
                        break;
                    case '`articulo_cantidadpresentacion`':
                        $stmt->bindValue($identifier, $this->articulo_cantidadpresentacion, PDO::PARAM_INT);
                        break;
                    case '`articulo_existencia`':
                        $stmt->bindValue($identifier, $this->articulo_existencia, PDO::PARAM_STR);
                        break;
                    case '`articulo_costo`':
                        $stmt->bindValue($identifier, $this->articulo_costo, PDO::PARAM_STR);
                        break;
                    case '`articulo_precio`':
                        $stmt->bindValue($identifier, $this->articulo_precio, PDO::PARAM_STR);
                        break;
                    case '`articulo_iva`':
                        $stmt->bindValue($identifier, $this->articulo_iva, PDO::PARAM_STR);
                        break;
                    case '`articulo_inventariominimo`':
                        $stmt->bindValue($identifier, $this->articulo_inventariominimo, PDO::PARAM_STR);
                        break;
                    case '`articulo_inventariomaximo`':
                        $stmt->bindValue($identifier, $this->articulo_inventariomaximo, PDO::PARAM_STR);
                        break;
                    case '`articulo_reorden`':
                        $stmt->bindValue($identifier, $this->articulo_reorden, PDO::PARAM_STR);
                        break;
                    case '`articulo_ubicacion`':
                        $stmt->bindValue($identifier, $this->articulo_ubicacion, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdarticulo($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aTipo !== null) {
                if (!$this->aTipo->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTipo->getValidationFailures());
                }
            }

            if ($this->aUdm !== null) {
                if (!$this->aUdm->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUdm->getValidationFailures());
                }
            }


            if (($retval = ArticuloPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collOrdencompradetalles !== null) {
                    foreach ($this->collOrdencompradetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPaquetedetalles !== null) {
                    foreach ($this->collPaquetedetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ArticuloPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdarticulo();
                break;
            case 1:
                return $this->getIdtipo();
                break;
            case 2:
                return $this->getIdudm();
                break;
            case 3:
                return $this->getArticuloNombre();
                break;
            case 4:
                return $this->getArticuloCodigobarras();
                break;
            case 5:
                return $this->getArticuloDescripcion();
                break;
            case 6:
                return $this->getArticuloTipopresentacion();
                break;
            case 7:
                return $this->getArticuloCantidadpresentacion();
                break;
            case 8:
                return $this->getArticuloExistencia();
                break;
            case 9:
                return $this->getArticuloCosto();
                break;
            case 10:
                return $this->getArticuloPrecio();
                break;
            case 11:
                return $this->getArticuloIva();
                break;
            case 12:
                return $this->getArticuloInventariominimo();
                break;
            case 13:
                return $this->getArticuloInventariomaximo();
                break;
            case 14:
                return $this->getArticuloReorden();
                break;
            case 15:
                return $this->getArticuloUbicacion();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Articulo'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Articulo'][$this->getPrimaryKey()] = true;
        $keys = ArticuloPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdarticulo(),
            $keys[1] => $this->getIdtipo(),
            $keys[2] => $this->getIdudm(),
            $keys[3] => $this->getArticuloNombre(),
            $keys[4] => $this->getArticuloCodigobarras(),
            $keys[5] => $this->getArticuloDescripcion(),
            $keys[6] => $this->getArticuloTipopresentacion(),
            $keys[7] => $this->getArticuloCantidadpresentacion(),
            $keys[8] => $this->getArticuloExistencia(),
            $keys[9] => $this->getArticuloCosto(),
            $keys[10] => $this->getArticuloPrecio(),
            $keys[11] => $this->getArticuloIva(),
            $keys[12] => $this->getArticuloInventariominimo(),
            $keys[13] => $this->getArticuloInventariomaximo(),
            $keys[14] => $this->getArticuloReorden(),
            $keys[15] => $this->getArticuloUbicacion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aTipo) {
                $result['Tipo'] = $this->aTipo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUdm) {
                $result['Udm'] = $this->aUdm->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collOrdencompradetalles) {
                $result['Ordencompradetalles'] = $this->collOrdencompradetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPaquetedetalles) {
                $result['Paquetedetalles'] = $this->collPaquetedetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ArticuloPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdarticulo($value);
                break;
            case 1:
                $this->setIdtipo($value);
                break;
            case 2:
                $this->setIdudm($value);
                break;
            case 3:
                $this->setArticuloNombre($value);
                break;
            case 4:
                $this->setArticuloCodigobarras($value);
                break;
            case 5:
                $this->setArticuloDescripcion($value);
                break;
            case 6:
                $this->setArticuloTipopresentacion($value);
                break;
            case 7:
                $this->setArticuloCantidadpresentacion($value);
                break;
            case 8:
                $this->setArticuloExistencia($value);
                break;
            case 9:
                $this->setArticuloCosto($value);
                break;
            case 10:
                $this->setArticuloPrecio($value);
                break;
            case 11:
                $this->setArticuloIva($value);
                break;
            case 12:
                $this->setArticuloInventariominimo($value);
                break;
            case 13:
                $this->setArticuloInventariomaximo($value);
                break;
            case 14:
                $this->setArticuloReorden($value);
                break;
            case 15:
                $this->setArticuloUbicacion($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = ArticuloPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdarticulo($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdtipo($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdudm($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setArticuloNombre($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setArticuloCodigobarras($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setArticuloDescripcion($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setArticuloTipopresentacion($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setArticuloCantidadpresentacion($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setArticuloExistencia($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setArticuloCosto($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setArticuloPrecio($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setArticuloIva($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setArticuloInventariominimo($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setArticuloInventariomaximo($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setArticuloReorden($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setArticuloUbicacion($arr[$keys[15]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ArticuloPeer::DATABASE_NAME);

        if ($this->isColumnModified(ArticuloPeer::IDARTICULO)) $criteria->add(ArticuloPeer::IDARTICULO, $this->idarticulo);
        if ($this->isColumnModified(ArticuloPeer::IDTIPO)) $criteria->add(ArticuloPeer::IDTIPO, $this->idtipo);
        if ($this->isColumnModified(ArticuloPeer::IDUDM)) $criteria->add(ArticuloPeer::IDUDM, $this->idudm);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_NOMBRE)) $criteria->add(ArticuloPeer::ARTICULO_NOMBRE, $this->articulo_nombre);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_CODIGOBARRAS)) $criteria->add(ArticuloPeer::ARTICULO_CODIGOBARRAS, $this->articulo_codigobarras);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_DESCRIPCION)) $criteria->add(ArticuloPeer::ARTICULO_DESCRIPCION, $this->articulo_descripcion);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_TIPOPRESENTACION)) $criteria->add(ArticuloPeer::ARTICULO_TIPOPRESENTACION, $this->articulo_tipopresentacion);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_CANTIDADPRESENTACION)) $criteria->add(ArticuloPeer::ARTICULO_CANTIDADPRESENTACION, $this->articulo_cantidadpresentacion);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_EXISTENCIA)) $criteria->add(ArticuloPeer::ARTICULO_EXISTENCIA, $this->articulo_existencia);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_COSTO)) $criteria->add(ArticuloPeer::ARTICULO_COSTO, $this->articulo_costo);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_PRECIO)) $criteria->add(ArticuloPeer::ARTICULO_PRECIO, $this->articulo_precio);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_IVA)) $criteria->add(ArticuloPeer::ARTICULO_IVA, $this->articulo_iva);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_INVENTARIOMINIMO)) $criteria->add(ArticuloPeer::ARTICULO_INVENTARIOMINIMO, $this->articulo_inventariominimo);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_INVENTARIOMAXIMO)) $criteria->add(ArticuloPeer::ARTICULO_INVENTARIOMAXIMO, $this->articulo_inventariomaximo);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_REORDEN)) $criteria->add(ArticuloPeer::ARTICULO_REORDEN, $this->articulo_reorden);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_UBICACION)) $criteria->add(ArticuloPeer::ARTICULO_UBICACION, $this->articulo_ubicacion);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ArticuloPeer::DATABASE_NAME);
        $criteria->add(ArticuloPeer::IDARTICULO, $this->idarticulo);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdarticulo();
    }

    /**
     * Generic method to set the primary key (idarticulo column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdarticulo($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdarticulo();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Articulo (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdtipo($this->getIdtipo());
        $copyObj->setIdudm($this->getIdudm());
        $copyObj->setArticuloNombre($this->getArticuloNombre());
        $copyObj->setArticuloCodigobarras($this->getArticuloCodigobarras());
        $copyObj->setArticuloDescripcion($this->getArticuloDescripcion());
        $copyObj->setArticuloTipopresentacion($this->getArticuloTipopresentacion());
        $copyObj->setArticuloCantidadpresentacion($this->getArticuloCantidadpresentacion());
        $copyObj->setArticuloExistencia($this->getArticuloExistencia());
        $copyObj->setArticuloCosto($this->getArticuloCosto());
        $copyObj->setArticuloPrecio($this->getArticuloPrecio());
        $copyObj->setArticuloIva($this->getArticuloIva());
        $copyObj->setArticuloInventariominimo($this->getArticuloInventariominimo());
        $copyObj->setArticuloInventariomaximo($this->getArticuloInventariomaximo());
        $copyObj->setArticuloReorden($this->getArticuloReorden());
        $copyObj->setArticuloUbicacion($this->getArticuloUbicacion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getOrdencompradetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOrdencompradetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPaquetedetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPaquetedetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdarticulo(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Articulo Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return ArticuloPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ArticuloPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Tipo object.
     *
     * @param                  Tipo $v
     * @return Articulo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTipo(Tipo $v = null)
    {
        if ($v === null) {
            $this->setIdtipo(NULL);
        } else {
            $this->setIdtipo($v->getIdtipo());
        }

        $this->aTipo = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Tipo object, it will not be re-added.
        if ($v !== null) {
            $v->addArticulo($this);
        }


        return $this;
    }


    /**
     * Get the associated Tipo object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Tipo The associated Tipo object.
     * @throws PropelException
     */
    public function getTipo(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTipo === null && ($this->idtipo !== null) && $doQuery) {
            $this->aTipo = TipoQuery::create()->findPk($this->idtipo, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTipo->addArticulos($this);
             */
        }

        return $this->aTipo;
    }

    /**
     * Declares an association between this object and a Udm object.
     *
     * @param                  Udm $v
     * @return Articulo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUdm(Udm $v = null)
    {
        if ($v === null) {
            $this->setIdudm(NULL);
        } else {
            $this->setIdudm($v->getIdudm());
        }

        $this->aUdm = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Udm object, it will not be re-added.
        if ($v !== null) {
            $v->addArticulo($this);
        }


        return $this;
    }


    /**
     * Get the associated Udm object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Udm The associated Udm object.
     * @throws PropelException
     */
    public function getUdm(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUdm === null && ($this->idudm !== null) && $doQuery) {
            $this->aUdm = UdmQuery::create()->findPk($this->idudm, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUdm->addArticulos($this);
             */
        }

        return $this->aUdm;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Ordencompradetalle' == $relationName) {
            $this->initOrdencompradetalles();
        }
        if ('Paquetedetalle' == $relationName) {
            $this->initPaquetedetalles();
        }
    }

    /**
     * Clears out the collOrdencompradetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Articulo The current object (for fluent API support)
     * @see        addOrdencompradetalles()
     */
    public function clearOrdencompradetalles()
    {
        $this->collOrdencompradetalles = null; // important to set this to null since that means it is uninitialized
        $this->collOrdencompradetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collOrdencompradetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialOrdencompradetalles($v = true)
    {
        $this->collOrdencompradetallesPartial = $v;
    }

    /**
     * Initializes the collOrdencompradetalles collection.
     *
     * By default this just sets the collOrdencompradetalles collection to an empty array (like clearcollOrdencompradetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOrdencompradetalles($overrideExisting = true)
    {
        if (null !== $this->collOrdencompradetalles && !$overrideExisting) {
            return;
        }
        $this->collOrdencompradetalles = new PropelObjectCollection();
        $this->collOrdencompradetalles->setModel('Ordencompradetalle');
    }

    /**
     * Gets an array of Ordencompradetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Articulo is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ordencompradetalle[] List of Ordencompradetalle objects
     * @throws PropelException
     */
    public function getOrdencompradetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOrdencompradetallesPartial && !$this->isNew();
        if (null === $this->collOrdencompradetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOrdencompradetalles) {
                // return empty collection
                $this->initOrdencompradetalles();
            } else {
                $collOrdencompradetalles = OrdencompradetalleQuery::create(null, $criteria)
                    ->filterByArticulo($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOrdencompradetallesPartial && count($collOrdencompradetalles)) {
                      $this->initOrdencompradetalles(false);

                      foreach ($collOrdencompradetalles as $obj) {
                        if (false == $this->collOrdencompradetalles->contains($obj)) {
                          $this->collOrdencompradetalles->append($obj);
                        }
                      }

                      $this->collOrdencompradetallesPartial = true;
                    }

                    $collOrdencompradetalles->getInternalIterator()->rewind();

                    return $collOrdencompradetalles;
                }

                if ($partial && $this->collOrdencompradetalles) {
                    foreach ($this->collOrdencompradetalles as $obj) {
                        if ($obj->isNew()) {
                            $collOrdencompradetalles[] = $obj;
                        }
                    }
                }

                $this->collOrdencompradetalles = $collOrdencompradetalles;
                $this->collOrdencompradetallesPartial = false;
            }
        }

        return $this->collOrdencompradetalles;
    }

    /**
     * Sets a collection of Ordencompradetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ordencompradetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Articulo The current object (for fluent API support)
     */
    public function setOrdencompradetalles(PropelCollection $ordencompradetalles, PropelPDO $con = null)
    {
        $ordencompradetallesToDelete = $this->getOrdencompradetalles(new Criteria(), $con)->diff($ordencompradetalles);


        $this->ordencompradetallesScheduledForDeletion = $ordencompradetallesToDelete;

        foreach ($ordencompradetallesToDelete as $ordencompradetalleRemoved) {
            $ordencompradetalleRemoved->setArticulo(null);
        }

        $this->collOrdencompradetalles = null;
        foreach ($ordencompradetalles as $ordencompradetalle) {
            $this->addOrdencompradetalle($ordencompradetalle);
        }

        $this->collOrdencompradetalles = $ordencompradetalles;
        $this->collOrdencompradetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ordencompradetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ordencompradetalle objects.
     * @throws PropelException
     */
    public function countOrdencompradetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOrdencompradetallesPartial && !$this->isNew();
        if (null === $this->collOrdencompradetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOrdencompradetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOrdencompradetalles());
            }
            $query = OrdencompradetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByArticulo($this)
                ->count($con);
        }

        return count($this->collOrdencompradetalles);
    }

    /**
     * Method called to associate a Ordencompradetalle object to this object
     * through the Ordencompradetalle foreign key attribute.
     *
     * @param    Ordencompradetalle $l Ordencompradetalle
     * @return Articulo The current object (for fluent API support)
     */
    public function addOrdencompradetalle(Ordencompradetalle $l)
    {
        if ($this->collOrdencompradetalles === null) {
            $this->initOrdencompradetalles();
            $this->collOrdencompradetallesPartial = true;
        }

        if (!in_array($l, $this->collOrdencompradetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOrdencompradetalle($l);

            if ($this->ordencompradetallesScheduledForDeletion and $this->ordencompradetallesScheduledForDeletion->contains($l)) {
                $this->ordencompradetallesScheduledForDeletion->remove($this->ordencompradetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Ordencompradetalle $ordencompradetalle The ordencompradetalle object to add.
     */
    protected function doAddOrdencompradetalle($ordencompradetalle)
    {
        $this->collOrdencompradetalles[]= $ordencompradetalle;
        $ordencompradetalle->setArticulo($this);
    }

    /**
     * @param	Ordencompradetalle $ordencompradetalle The ordencompradetalle object to remove.
     * @return Articulo The current object (for fluent API support)
     */
    public function removeOrdencompradetalle($ordencompradetalle)
    {
        if ($this->getOrdencompradetalles()->contains($ordencompradetalle)) {
            $this->collOrdencompradetalles->remove($this->collOrdencompradetalles->search($ordencompradetalle));
            if (null === $this->ordencompradetallesScheduledForDeletion) {
                $this->ordencompradetallesScheduledForDeletion = clone $this->collOrdencompradetalles;
                $this->ordencompradetallesScheduledForDeletion->clear();
            }
            $this->ordencompradetallesScheduledForDeletion[]= clone $ordencompradetalle;
            $ordencompradetalle->setArticulo(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Articulo is new, it will return
     * an empty collection; or if this Articulo has previously
     * been saved, it will retrieve related Ordencompradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Articulo.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordencompradetalle[] List of Ordencompradetalle objects
     */
    public function getOrdencompradetallesJoinOrdencompra($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdencompradetalleQuery::create(null, $criteria);
        $query->joinWith('Ordencompra', $join_behavior);

        return $this->getOrdencompradetalles($query, $con);
    }

    /**
     * Clears out the collPaquetedetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Articulo The current object (for fluent API support)
     * @see        addPaquetedetalles()
     */
    public function clearPaquetedetalles()
    {
        $this->collPaquetedetalles = null; // important to set this to null since that means it is uninitialized
        $this->collPaquetedetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collPaquetedetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialPaquetedetalles($v = true)
    {
        $this->collPaquetedetallesPartial = $v;
    }

    /**
     * Initializes the collPaquetedetalles collection.
     *
     * By default this just sets the collPaquetedetalles collection to an empty array (like clearcollPaquetedetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPaquetedetalles($overrideExisting = true)
    {
        if (null !== $this->collPaquetedetalles && !$overrideExisting) {
            return;
        }
        $this->collPaquetedetalles = new PropelObjectCollection();
        $this->collPaquetedetalles->setModel('Paquetedetalle');
    }

    /**
     * Gets an array of Paquetedetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Articulo is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Paquetedetalle[] List of Paquetedetalle objects
     * @throws PropelException
     */
    public function getPaquetedetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPaquetedetallesPartial && !$this->isNew();
        if (null === $this->collPaquetedetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPaquetedetalles) {
                // return empty collection
                $this->initPaquetedetalles();
            } else {
                $collPaquetedetalles = PaquetedetalleQuery::create(null, $criteria)
                    ->filterByArticulo($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPaquetedetallesPartial && count($collPaquetedetalles)) {
                      $this->initPaquetedetalles(false);

                      foreach ($collPaquetedetalles as $obj) {
                        if (false == $this->collPaquetedetalles->contains($obj)) {
                          $this->collPaquetedetalles->append($obj);
                        }
                      }

                      $this->collPaquetedetallesPartial = true;
                    }

                    $collPaquetedetalles->getInternalIterator()->rewind();

                    return $collPaquetedetalles;
                }

                if ($partial && $this->collPaquetedetalles) {
                    foreach ($this->collPaquetedetalles as $obj) {
                        if ($obj->isNew()) {
                            $collPaquetedetalles[] = $obj;
                        }
                    }
                }

                $this->collPaquetedetalles = $collPaquetedetalles;
                $this->collPaquetedetallesPartial = false;
            }
        }

        return $this->collPaquetedetalles;
    }

    /**
     * Sets a collection of Paquetedetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $paquetedetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Articulo The current object (for fluent API support)
     */
    public function setPaquetedetalles(PropelCollection $paquetedetalles, PropelPDO $con = null)
    {
        $paquetedetallesToDelete = $this->getPaquetedetalles(new Criteria(), $con)->diff($paquetedetalles);


        $this->paquetedetallesScheduledForDeletion = $paquetedetallesToDelete;

        foreach ($paquetedetallesToDelete as $paquetedetalleRemoved) {
            $paquetedetalleRemoved->setArticulo(null);
        }

        $this->collPaquetedetalles = null;
        foreach ($paquetedetalles as $paquetedetalle) {
            $this->addPaquetedetalle($paquetedetalle);
        }

        $this->collPaquetedetalles = $paquetedetalles;
        $this->collPaquetedetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Paquetedetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Paquetedetalle objects.
     * @throws PropelException
     */
    public function countPaquetedetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPaquetedetallesPartial && !$this->isNew();
        if (null === $this->collPaquetedetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPaquetedetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPaquetedetalles());
            }
            $query = PaquetedetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByArticulo($this)
                ->count($con);
        }

        return count($this->collPaquetedetalles);
    }

    /**
     * Method called to associate a Paquetedetalle object to this object
     * through the Paquetedetalle foreign key attribute.
     *
     * @param    Paquetedetalle $l Paquetedetalle
     * @return Articulo The current object (for fluent API support)
     */
    public function addPaquetedetalle(Paquetedetalle $l)
    {
        if ($this->collPaquetedetalles === null) {
            $this->initPaquetedetalles();
            $this->collPaquetedetallesPartial = true;
        }

        if (!in_array($l, $this->collPaquetedetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPaquetedetalle($l);

            if ($this->paquetedetallesScheduledForDeletion and $this->paquetedetallesScheduledForDeletion->contains($l)) {
                $this->paquetedetallesScheduledForDeletion->remove($this->paquetedetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Paquetedetalle $paquetedetalle The paquetedetalle object to add.
     */
    protected function doAddPaquetedetalle($paquetedetalle)
    {
        $this->collPaquetedetalles[]= $paquetedetalle;
        $paquetedetalle->setArticulo($this);
    }

    /**
     * @param	Paquetedetalle $paquetedetalle The paquetedetalle object to remove.
     * @return Articulo The current object (for fluent API support)
     */
    public function removePaquetedetalle($paquetedetalle)
    {
        if ($this->getPaquetedetalles()->contains($paquetedetalle)) {
            $this->collPaquetedetalles->remove($this->collPaquetedetalles->search($paquetedetalle));
            if (null === $this->paquetedetallesScheduledForDeletion) {
                $this->paquetedetallesScheduledForDeletion = clone $this->collPaquetedetalles;
                $this->paquetedetallesScheduledForDeletion->clear();
            }
            $this->paquetedetallesScheduledForDeletion[]= $paquetedetalle;
            $paquetedetalle->setArticulo(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Articulo is new, it will return
     * an empty collection; or if this Articulo has previously
     * been saved, it will retrieve related Paquetedetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Articulo.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Paquetedetalle[] List of Paquetedetalle objects
     */
    public function getPaquetedetallesJoinPaquete($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PaquetedetalleQuery::create(null, $criteria);
        $query->joinWith('Paquete', $join_behavior);

        return $this->getPaquetedetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idarticulo = null;
        $this->idtipo = null;
        $this->idudm = null;
        $this->articulo_nombre = null;
        $this->articulo_codigobarras = null;
        $this->articulo_descripcion = null;
        $this->articulo_tipopresentacion = null;
        $this->articulo_cantidadpresentacion = null;
        $this->articulo_existencia = null;
        $this->articulo_costo = null;
        $this->articulo_precio = null;
        $this->articulo_iva = null;
        $this->articulo_inventariominimo = null;
        $this->articulo_inventariomaximo = null;
        $this->articulo_reorden = null;
        $this->articulo_ubicacion = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collOrdencompradetalles) {
                foreach ($this->collOrdencompradetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPaquetedetalles) {
                foreach ($this->collPaquetedetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aTipo instanceof Persistent) {
              $this->aTipo->clearAllReferences($deep);
            }
            if ($this->aUdm instanceof Persistent) {
              $this->aUdm->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collOrdencompradetalles instanceof PropelCollection) {
            $this->collOrdencompradetalles->clearIterator();
        }
        $this->collOrdencompradetalles = null;
        if ($this->collPaquetedetalles instanceof PropelCollection) {
            $this->collPaquetedetalles->clearIterator();
        }
        $this->collPaquetedetalles = null;
        $this->aTipo = null;
        $this->aUdm = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ArticuloPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
