<?php


/**
 * Base class that represents a row from the 'paciente' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BasePaciente extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PacientePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PacientePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idpaciente field.
     * @var        int
     */
    protected $idpaciente;

    /**
     * The value for the paciente_nombre field.
     * @var        string
     */
    protected $paciente_nombre;

    /**
     * The value for the paciente_ap field.
     * @var        string
     */
    protected $paciente_ap;

    /**
     * The value for the paciente_am field.
     * @var        string
     */
    protected $paciente_am;

    /**
     * The value for the paciente_calle field.
     * @var        string
     */
    protected $paciente_calle;

    /**
     * The value for the paciente_noexterior field.
     * @var        string
     */
    protected $paciente_noexterior;

    /**
     * The value for the paciente_nointerior field.
     * @var        string
     */
    protected $paciente_nointerior;

    /**
     * The value for the paciente_colonia field.
     * @var        string
     */
    protected $paciente_colonia;

    /**
     * The value for the paciente_ciudad field.
     * @var        string
     */
    protected $paciente_ciudad;

    /**
     * The value for the paciente_estado field.
     * @var        string
     */
    protected $paciente_estado;

    /**
     * The value for the paciente_pais field.
     * @var        string
     */
    protected $paciente_pais;

    /**
     * The value for the paciente_telefono field.
     * @var        string
     */
    protected $paciente_telefono;

    /**
     * The value for the paciente_telefonocelular field.
     * @var        string
     */
    protected $paciente_telefonocelular;

    /**
     * The value for the paciente_edad field.
     * @var        string
     */
    protected $paciente_edad;

    /**
     * The value for the paciente_sexo field.
     * @var        string
     */
    protected $paciente_sexo;

    /**
     * The value for the paciente_estadocivil field.
     * @var        string
     */
    protected $paciente_estadocivil;

    /**
     * The value for the paciente_ocupacion field.
     * @var        string
     */
    protected $paciente_ocupacion;

    /**
     * The value for the paciente_conyuge field.
     * @var        string
     */
    protected $paciente_conyuge;

    /**
     * The value for the paciente_padre field.
     * @var        string
     */
    protected $paciente_padre;

    /**
     * The value for the paciente_madre field.
     * @var        string
     */
    protected $paciente_madre;

    /**
     * The value for the paciente_responsable field.
     * @var        string
     */
    protected $paciente_responsable;

    /**
     * The value for the paciente_telefonoresponsable field.
     * @var        string
     */
    protected $paciente_telefonoresponsable;

    /**
     * @var        PropelObjectCollection|Admision[] Collection to store aggregation of Admision objects.
     */
    protected $collAdmisions;
    protected $collAdmisionsPartial;

    /**
     * @var        PropelObjectCollection|Cita[] Collection to store aggregation of Cita objects.
     */
    protected $collCitas;
    protected $collCitasPartial;

    /**
     * @var        PropelObjectCollection|Consulta[] Collection to store aggregation of Consulta objects.
     */
    protected $collConsultas;
    protected $collConsultasPartial;

    /**
     * @var        PropelObjectCollection|Datosfacturacion[] Collection to store aggregation of Datosfacturacion objects.
     */
    protected $collDatosfacturacions;
    protected $collDatosfacturacionsPartial;

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
    protected $admisionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $citasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $consultasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $datosfacturacionsScheduledForDeletion = null;

    /**
     * Get the [idpaciente] column value.
     *
     * @return int
     */
    public function getIdpaciente()
    {

        return $this->idpaciente;
    }

    /**
     * Get the [paciente_nombre] column value.
     *
     * @return string
     */
    public function getPacienteNombre()
    {

        return $this->paciente_nombre;
    }

    /**
     * Get the [paciente_ap] column value.
     *
     * @return string
     */
    public function getPacienteAp()
    {

        return $this->paciente_ap;
    }

    /**
     * Get the [paciente_am] column value.
     *
     * @return string
     */
    public function getPacienteAm()
    {

        return $this->paciente_am;
    }

    /**
     * Get the [paciente_calle] column value.
     *
     * @return string
     */
    public function getPacienteCalle()
    {

        return $this->paciente_calle;
    }

    /**
     * Get the [paciente_noexterior] column value.
     *
     * @return string
     */
    public function getPacienteNoexterior()
    {

        return $this->paciente_noexterior;
    }

    /**
     * Get the [paciente_nointerior] column value.
     *
     * @return string
     */
    public function getPacienteNointerior()
    {

        return $this->paciente_nointerior;
    }

    /**
     * Get the [paciente_colonia] column value.
     *
     * @return string
     */
    public function getPacienteColonia()
    {

        return $this->paciente_colonia;
    }

    /**
     * Get the [paciente_ciudad] column value.
     *
     * @return string
     */
    public function getPacienteCiudad()
    {

        return $this->paciente_ciudad;
    }

    /**
     * Get the [paciente_estado] column value.
     *
     * @return string
     */
    public function getPacienteEstado()
    {

        return $this->paciente_estado;
    }

    /**
     * Get the [paciente_pais] column value.
     *
     * @return string
     */
    public function getPacientePais()
    {

        return $this->paciente_pais;
    }

    /**
     * Get the [paciente_telefono] column value.
     *
     * @return string
     */
    public function getPacienteTelefono()
    {

        return $this->paciente_telefono;
    }

    /**
     * Get the [paciente_telefonocelular] column value.
     *
     * @return string
     */
    public function getPacienteTelefonocelular()
    {

        return $this->paciente_telefonocelular;
    }

    /**
     * Get the [paciente_edad] column value.
     *
     * @return string
     */
    public function getPacienteEdad()
    {

        return $this->paciente_edad;
    }

    /**
     * Get the [paciente_sexo] column value.
     *
     * @return string
     */
    public function getPacienteSexo()
    {

        return $this->paciente_sexo;
    }

    /**
     * Get the [paciente_estadocivil] column value.
     *
     * @return string
     */
    public function getPacienteEstadocivil()
    {

        return $this->paciente_estadocivil;
    }

    /**
     * Get the [paciente_ocupacion] column value.
     *
     * @return string
     */
    public function getPacienteOcupacion()
    {

        return $this->paciente_ocupacion;
    }

    /**
     * Get the [paciente_conyuge] column value.
     *
     * @return string
     */
    public function getPacienteConyuge()
    {

        return $this->paciente_conyuge;
    }

    /**
     * Get the [paciente_padre] column value.
     *
     * @return string
     */
    public function getPacientePadre()
    {

        return $this->paciente_padre;
    }

    /**
     * Get the [paciente_madre] column value.
     *
     * @return string
     */
    public function getPacienteMadre()
    {

        return $this->paciente_madre;
    }

    /**
     * Get the [paciente_responsable] column value.
     *
     * @return string
     */
    public function getPacienteResponsable()
    {

        return $this->paciente_responsable;
    }

    /**
     * Get the [paciente_telefonoresponsable] column value.
     *
     * @return string
     */
    public function getPacienteTelefonoresponsable()
    {

        return $this->paciente_telefonoresponsable;
    }

    /**
     * Set the value of [idpaciente] column.
     *
     * @param  int $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setIdpaciente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpaciente !== $v) {
            $this->idpaciente = $v;
            $this->modifiedColumns[] = PacientePeer::IDPACIENTE;
        }


        return $this;
    } // setIdpaciente()

    /**
     * Set the value of [paciente_nombre] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_nombre !== $v) {
            $this->paciente_nombre = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_NOMBRE;
        }


        return $this;
    } // setPacienteNombre()

    /**
     * Set the value of [paciente_ap] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteAp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_ap !== $v) {
            $this->paciente_ap = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_AP;
        }


        return $this;
    } // setPacienteAp()

    /**
     * Set the value of [paciente_am] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteAm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_am !== $v) {
            $this->paciente_am = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_AM;
        }


        return $this;
    } // setPacienteAm()

    /**
     * Set the value of [paciente_calle] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_calle !== $v) {
            $this->paciente_calle = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_CALLE;
        }


        return $this;
    } // setPacienteCalle()

    /**
     * Set the value of [paciente_noexterior] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteNoexterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_noexterior !== $v) {
            $this->paciente_noexterior = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_NOEXTERIOR;
        }


        return $this;
    } // setPacienteNoexterior()

    /**
     * Set the value of [paciente_nointerior] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteNointerior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_nointerior !== $v) {
            $this->paciente_nointerior = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_NOINTERIOR;
        }


        return $this;
    } // setPacienteNointerior()

    /**
     * Set the value of [paciente_colonia] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_colonia !== $v) {
            $this->paciente_colonia = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_COLONIA;
        }


        return $this;
    } // setPacienteColonia()

    /**
     * Set the value of [paciente_ciudad] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_ciudad !== $v) {
            $this->paciente_ciudad = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_CIUDAD;
        }


        return $this;
    } // setPacienteCiudad()

    /**
     * Set the value of [paciente_estado] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_estado !== $v) {
            $this->paciente_estado = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_ESTADO;
        }


        return $this;
    } // setPacienteEstado()

    /**
     * Set the value of [paciente_pais] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacientePais($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_pais !== $v) {
            $this->paciente_pais = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_PAIS;
        }


        return $this;
    } // setPacientePais()

    /**
     * Set the value of [paciente_telefono] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_telefono !== $v) {
            $this->paciente_telefono = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_TELEFONO;
        }


        return $this;
    } // setPacienteTelefono()

    /**
     * Set the value of [paciente_telefonocelular] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteTelefonocelular($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_telefonocelular !== $v) {
            $this->paciente_telefonocelular = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_TELEFONOCELULAR;
        }


        return $this;
    } // setPacienteTelefonocelular()

    /**
     * Set the value of [paciente_edad] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteEdad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_edad !== $v) {
            $this->paciente_edad = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_EDAD;
        }


        return $this;
    } // setPacienteEdad()

    /**
     * Set the value of [paciente_sexo] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteSexo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_sexo !== $v) {
            $this->paciente_sexo = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_SEXO;
        }


        return $this;
    } // setPacienteSexo()

    /**
     * Set the value of [paciente_estadocivil] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteEstadocivil($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_estadocivil !== $v) {
            $this->paciente_estadocivil = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_ESTADOCIVIL;
        }


        return $this;
    } // setPacienteEstadocivil()

    /**
     * Set the value of [paciente_ocupacion] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteOcupacion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_ocupacion !== $v) {
            $this->paciente_ocupacion = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_OCUPACION;
        }


        return $this;
    } // setPacienteOcupacion()

    /**
     * Set the value of [paciente_conyuge] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteConyuge($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_conyuge !== $v) {
            $this->paciente_conyuge = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_CONYUGE;
        }


        return $this;
    } // setPacienteConyuge()

    /**
     * Set the value of [paciente_padre] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacientePadre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_padre !== $v) {
            $this->paciente_padre = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_PADRE;
        }


        return $this;
    } // setPacientePadre()

    /**
     * Set the value of [paciente_madre] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteMadre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_madre !== $v) {
            $this->paciente_madre = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_MADRE;
        }


        return $this;
    } // setPacienteMadre()

    /**
     * Set the value of [paciente_responsable] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteResponsable($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_responsable !== $v) {
            $this->paciente_responsable = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_RESPONSABLE;
        }


        return $this;
    } // setPacienteResponsable()

    /**
     * Set the value of [paciente_telefonoresponsable] column.
     *
     * @param  string $v new value
     * @return Paciente The current object (for fluent API support)
     */
    public function setPacienteTelefonoresponsable($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->paciente_telefonoresponsable !== $v) {
            $this->paciente_telefonoresponsable = $v;
            $this->modifiedColumns[] = PacientePeer::PACIENTE_TELEFONORESPONSABLE;
        }


        return $this;
    } // setPacienteTelefonoresponsable()

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

            $this->idpaciente = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->paciente_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->paciente_ap = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->paciente_am = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->paciente_calle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->paciente_noexterior = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->paciente_nointerior = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->paciente_colonia = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->paciente_ciudad = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->paciente_estado = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->paciente_pais = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->paciente_telefono = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->paciente_telefonocelular = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->paciente_edad = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->paciente_sexo = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->paciente_estadocivil = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->paciente_ocupacion = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->paciente_conyuge = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->paciente_padre = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->paciente_madre = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->paciente_responsable = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->paciente_telefonoresponsable = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 22; // 22 = PacientePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Paciente object", $e);
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
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PacientePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collAdmisions = null;

            $this->collCitas = null;

            $this->collConsultas = null;

            $this->collDatosfacturacions = null;

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
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PacienteQuery::create()
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
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PacientePeer::addInstanceToPool($this);
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

            if ($this->admisionsScheduledForDeletion !== null) {
                if (!$this->admisionsScheduledForDeletion->isEmpty()) {
                    AdmisionQuery::create()
                        ->filterByPrimaryKeys($this->admisionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->admisionsScheduledForDeletion = null;
                }
            }

            if ($this->collAdmisions !== null) {
                foreach ($this->collAdmisions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->citasScheduledForDeletion !== null) {
                if (!$this->citasScheduledForDeletion->isEmpty()) {
                    CitaQuery::create()
                        ->filterByPrimaryKeys($this->citasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->citasScheduledForDeletion = null;
                }
            }

            if ($this->collCitas !== null) {
                foreach ($this->collCitas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->consultasScheduledForDeletion !== null) {
                if (!$this->consultasScheduledForDeletion->isEmpty()) {
                    ConsultaQuery::create()
                        ->filterByPrimaryKeys($this->consultasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->consultasScheduledForDeletion = null;
                }
            }

            if ($this->collConsultas !== null) {
                foreach ($this->collConsultas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->datosfacturacionsScheduledForDeletion !== null) {
                if (!$this->datosfacturacionsScheduledForDeletion->isEmpty()) {
                    DatosfacturacionQuery::create()
                        ->filterByPrimaryKeys($this->datosfacturacionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->datosfacturacionsScheduledForDeletion = null;
                }
            }

            if ($this->collDatosfacturacions !== null) {
                foreach ($this->collDatosfacturacions as $referrerFK) {
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

        $this->modifiedColumns[] = PacientePeer::IDPACIENTE;
        if (null !== $this->idpaciente) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PacientePeer::IDPACIENTE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PacientePeer::IDPACIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idpaciente`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_nombre`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_AP)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_ap`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_AM)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_am`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_calle`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_NOEXTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_noexterior`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_NOINTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_nointerior`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_colonia`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_ciudad`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_estado`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_PAIS)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_pais`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_telefono`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_TELEFONOCELULAR)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_telefonocelular`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_EDAD)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_edad`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_SEXO)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_sexo`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_ESTADOCIVIL)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_estadocivil`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_OCUPACION)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_ocupacion`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_CONYUGE)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_conyuge`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_PADRE)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_padre`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_MADRE)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_madre`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_RESPONSABLE)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_responsable`';
        }
        if ($this->isColumnModified(PacientePeer::PACIENTE_TELEFONORESPONSABLE)) {
            $modifiedColumns[':p' . $index++]  = '`paciente_telefonoresponsable`';
        }

        $sql = sprintf(
            'INSERT INTO `paciente` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idpaciente`':
                        $stmt->bindValue($identifier, $this->idpaciente, PDO::PARAM_INT);
                        break;
                    case '`paciente_nombre`':
                        $stmt->bindValue($identifier, $this->paciente_nombre, PDO::PARAM_STR);
                        break;
                    case '`paciente_ap`':
                        $stmt->bindValue($identifier, $this->paciente_ap, PDO::PARAM_STR);
                        break;
                    case '`paciente_am`':
                        $stmt->bindValue($identifier, $this->paciente_am, PDO::PARAM_STR);
                        break;
                    case '`paciente_calle`':
                        $stmt->bindValue($identifier, $this->paciente_calle, PDO::PARAM_STR);
                        break;
                    case '`paciente_noexterior`':
                        $stmt->bindValue($identifier, $this->paciente_noexterior, PDO::PARAM_STR);
                        break;
                    case '`paciente_nointerior`':
                        $stmt->bindValue($identifier, $this->paciente_nointerior, PDO::PARAM_STR);
                        break;
                    case '`paciente_colonia`':
                        $stmt->bindValue($identifier, $this->paciente_colonia, PDO::PARAM_STR);
                        break;
                    case '`paciente_ciudad`':
                        $stmt->bindValue($identifier, $this->paciente_ciudad, PDO::PARAM_STR);
                        break;
                    case '`paciente_estado`':
                        $stmt->bindValue($identifier, $this->paciente_estado, PDO::PARAM_STR);
                        break;
                    case '`paciente_pais`':
                        $stmt->bindValue($identifier, $this->paciente_pais, PDO::PARAM_STR);
                        break;
                    case '`paciente_telefono`':
                        $stmt->bindValue($identifier, $this->paciente_telefono, PDO::PARAM_STR);
                        break;
                    case '`paciente_telefonocelular`':
                        $stmt->bindValue($identifier, $this->paciente_telefonocelular, PDO::PARAM_STR);
                        break;
                    case '`paciente_edad`':
                        $stmt->bindValue($identifier, $this->paciente_edad, PDO::PARAM_STR);
                        break;
                    case '`paciente_sexo`':
                        $stmt->bindValue($identifier, $this->paciente_sexo, PDO::PARAM_STR);
                        break;
                    case '`paciente_estadocivil`':
                        $stmt->bindValue($identifier, $this->paciente_estadocivil, PDO::PARAM_STR);
                        break;
                    case '`paciente_ocupacion`':
                        $stmt->bindValue($identifier, $this->paciente_ocupacion, PDO::PARAM_STR);
                        break;
                    case '`paciente_conyuge`':
                        $stmt->bindValue($identifier, $this->paciente_conyuge, PDO::PARAM_STR);
                        break;
                    case '`paciente_padre`':
                        $stmt->bindValue($identifier, $this->paciente_padre, PDO::PARAM_STR);
                        break;
                    case '`paciente_madre`':
                        $stmt->bindValue($identifier, $this->paciente_madre, PDO::PARAM_STR);
                        break;
                    case '`paciente_responsable`':
                        $stmt->bindValue($identifier, $this->paciente_responsable, PDO::PARAM_STR);
                        break;
                    case '`paciente_telefonoresponsable`':
                        $stmt->bindValue($identifier, $this->paciente_telefonoresponsable, PDO::PARAM_STR);
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
        $this->setIdpaciente($pk);

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


            if (($retval = PacientePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAdmisions !== null) {
                    foreach ($this->collAdmisions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCitas !== null) {
                    foreach ($this->collCitas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collConsultas !== null) {
                    foreach ($this->collConsultas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDatosfacturacions !== null) {
                    foreach ($this->collDatosfacturacions as $referrerFK) {
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
        $pos = PacientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdpaciente();
                break;
            case 1:
                return $this->getPacienteNombre();
                break;
            case 2:
                return $this->getPacienteAp();
                break;
            case 3:
                return $this->getPacienteAm();
                break;
            case 4:
                return $this->getPacienteCalle();
                break;
            case 5:
                return $this->getPacienteNoexterior();
                break;
            case 6:
                return $this->getPacienteNointerior();
                break;
            case 7:
                return $this->getPacienteColonia();
                break;
            case 8:
                return $this->getPacienteCiudad();
                break;
            case 9:
                return $this->getPacienteEstado();
                break;
            case 10:
                return $this->getPacientePais();
                break;
            case 11:
                return $this->getPacienteTelefono();
                break;
            case 12:
                return $this->getPacienteTelefonocelular();
                break;
            case 13:
                return $this->getPacienteEdad();
                break;
            case 14:
                return $this->getPacienteSexo();
                break;
            case 15:
                return $this->getPacienteEstadocivil();
                break;
            case 16:
                return $this->getPacienteOcupacion();
                break;
            case 17:
                return $this->getPacienteConyuge();
                break;
            case 18:
                return $this->getPacientePadre();
                break;
            case 19:
                return $this->getPacienteMadre();
                break;
            case 20:
                return $this->getPacienteResponsable();
                break;
            case 21:
                return $this->getPacienteTelefonoresponsable();
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
        if (isset($alreadyDumpedObjects['Paciente'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Paciente'][$this->getPrimaryKey()] = true;
        $keys = PacientePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdpaciente(),
            $keys[1] => $this->getPacienteNombre(),
            $keys[2] => $this->getPacienteAp(),
            $keys[3] => $this->getPacienteAm(),
            $keys[4] => $this->getPacienteCalle(),
            $keys[5] => $this->getPacienteNoexterior(),
            $keys[6] => $this->getPacienteNointerior(),
            $keys[7] => $this->getPacienteColonia(),
            $keys[8] => $this->getPacienteCiudad(),
            $keys[9] => $this->getPacienteEstado(),
            $keys[10] => $this->getPacientePais(),
            $keys[11] => $this->getPacienteTelefono(),
            $keys[12] => $this->getPacienteTelefonocelular(),
            $keys[13] => $this->getPacienteEdad(),
            $keys[14] => $this->getPacienteSexo(),
            $keys[15] => $this->getPacienteEstadocivil(),
            $keys[16] => $this->getPacienteOcupacion(),
            $keys[17] => $this->getPacienteConyuge(),
            $keys[18] => $this->getPacientePadre(),
            $keys[19] => $this->getPacienteMadre(),
            $keys[20] => $this->getPacienteResponsable(),
            $keys[21] => $this->getPacienteTelefonoresponsable(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collAdmisions) {
                $result['Admisions'] = $this->collAdmisions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCitas) {
                $result['Citas'] = $this->collCitas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collConsultas) {
                $result['Consultas'] = $this->collConsultas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDatosfacturacions) {
                $result['Datosfacturacions'] = $this->collDatosfacturacions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PacientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdpaciente($value);
                break;
            case 1:
                $this->setPacienteNombre($value);
                break;
            case 2:
                $this->setPacienteAp($value);
                break;
            case 3:
                $this->setPacienteAm($value);
                break;
            case 4:
                $this->setPacienteCalle($value);
                break;
            case 5:
                $this->setPacienteNoexterior($value);
                break;
            case 6:
                $this->setPacienteNointerior($value);
                break;
            case 7:
                $this->setPacienteColonia($value);
                break;
            case 8:
                $this->setPacienteCiudad($value);
                break;
            case 9:
                $this->setPacienteEstado($value);
                break;
            case 10:
                $this->setPacientePais($value);
                break;
            case 11:
                $this->setPacienteTelefono($value);
                break;
            case 12:
                $this->setPacienteTelefonocelular($value);
                break;
            case 13:
                $this->setPacienteEdad($value);
                break;
            case 14:
                $this->setPacienteSexo($value);
                break;
            case 15:
                $this->setPacienteEstadocivil($value);
                break;
            case 16:
                $this->setPacienteOcupacion($value);
                break;
            case 17:
                $this->setPacienteConyuge($value);
                break;
            case 18:
                $this->setPacientePadre($value);
                break;
            case 19:
                $this->setPacienteMadre($value);
                break;
            case 20:
                $this->setPacienteResponsable($value);
                break;
            case 21:
                $this->setPacienteTelefonoresponsable($value);
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
        $keys = PacientePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdpaciente($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPacienteNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPacienteAp($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPacienteAm($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPacienteCalle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPacienteNoexterior($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPacienteNointerior($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPacienteColonia($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPacienteCiudad($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPacienteEstado($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPacientePais($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPacienteTelefono($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPacienteTelefonocelular($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPacienteEdad($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPacienteSexo($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPacienteEstadocivil($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setPacienteOcupacion($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPacienteConyuge($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setPacientePadre($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setPacienteMadre($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPacienteResponsable($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setPacienteTelefonoresponsable($arr[$keys[21]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PacientePeer::DATABASE_NAME);

        if ($this->isColumnModified(PacientePeer::IDPACIENTE)) $criteria->add(PacientePeer::IDPACIENTE, $this->idpaciente);
        if ($this->isColumnModified(PacientePeer::PACIENTE_NOMBRE)) $criteria->add(PacientePeer::PACIENTE_NOMBRE, $this->paciente_nombre);
        if ($this->isColumnModified(PacientePeer::PACIENTE_AP)) $criteria->add(PacientePeer::PACIENTE_AP, $this->paciente_ap);
        if ($this->isColumnModified(PacientePeer::PACIENTE_AM)) $criteria->add(PacientePeer::PACIENTE_AM, $this->paciente_am);
        if ($this->isColumnModified(PacientePeer::PACIENTE_CALLE)) $criteria->add(PacientePeer::PACIENTE_CALLE, $this->paciente_calle);
        if ($this->isColumnModified(PacientePeer::PACIENTE_NOEXTERIOR)) $criteria->add(PacientePeer::PACIENTE_NOEXTERIOR, $this->paciente_noexterior);
        if ($this->isColumnModified(PacientePeer::PACIENTE_NOINTERIOR)) $criteria->add(PacientePeer::PACIENTE_NOINTERIOR, $this->paciente_nointerior);
        if ($this->isColumnModified(PacientePeer::PACIENTE_COLONIA)) $criteria->add(PacientePeer::PACIENTE_COLONIA, $this->paciente_colonia);
        if ($this->isColumnModified(PacientePeer::PACIENTE_CIUDAD)) $criteria->add(PacientePeer::PACIENTE_CIUDAD, $this->paciente_ciudad);
        if ($this->isColumnModified(PacientePeer::PACIENTE_ESTADO)) $criteria->add(PacientePeer::PACIENTE_ESTADO, $this->paciente_estado);
        if ($this->isColumnModified(PacientePeer::PACIENTE_PAIS)) $criteria->add(PacientePeer::PACIENTE_PAIS, $this->paciente_pais);
        if ($this->isColumnModified(PacientePeer::PACIENTE_TELEFONO)) $criteria->add(PacientePeer::PACIENTE_TELEFONO, $this->paciente_telefono);
        if ($this->isColumnModified(PacientePeer::PACIENTE_TELEFONOCELULAR)) $criteria->add(PacientePeer::PACIENTE_TELEFONOCELULAR, $this->paciente_telefonocelular);
        if ($this->isColumnModified(PacientePeer::PACIENTE_EDAD)) $criteria->add(PacientePeer::PACIENTE_EDAD, $this->paciente_edad);
        if ($this->isColumnModified(PacientePeer::PACIENTE_SEXO)) $criteria->add(PacientePeer::PACIENTE_SEXO, $this->paciente_sexo);
        if ($this->isColumnModified(PacientePeer::PACIENTE_ESTADOCIVIL)) $criteria->add(PacientePeer::PACIENTE_ESTADOCIVIL, $this->paciente_estadocivil);
        if ($this->isColumnModified(PacientePeer::PACIENTE_OCUPACION)) $criteria->add(PacientePeer::PACIENTE_OCUPACION, $this->paciente_ocupacion);
        if ($this->isColumnModified(PacientePeer::PACIENTE_CONYUGE)) $criteria->add(PacientePeer::PACIENTE_CONYUGE, $this->paciente_conyuge);
        if ($this->isColumnModified(PacientePeer::PACIENTE_PADRE)) $criteria->add(PacientePeer::PACIENTE_PADRE, $this->paciente_padre);
        if ($this->isColumnModified(PacientePeer::PACIENTE_MADRE)) $criteria->add(PacientePeer::PACIENTE_MADRE, $this->paciente_madre);
        if ($this->isColumnModified(PacientePeer::PACIENTE_RESPONSABLE)) $criteria->add(PacientePeer::PACIENTE_RESPONSABLE, $this->paciente_responsable);
        if ($this->isColumnModified(PacientePeer::PACIENTE_TELEFONORESPONSABLE)) $criteria->add(PacientePeer::PACIENTE_TELEFONORESPONSABLE, $this->paciente_telefonoresponsable);

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
        $criteria = new Criteria(PacientePeer::DATABASE_NAME);
        $criteria->add(PacientePeer::IDPACIENTE, $this->idpaciente);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdpaciente();
    }

    /**
     * Generic method to set the primary key (idpaciente column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdpaciente($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdpaciente();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Paciente (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPacienteNombre($this->getPacienteNombre());
        $copyObj->setPacienteAp($this->getPacienteAp());
        $copyObj->setPacienteAm($this->getPacienteAm());
        $copyObj->setPacienteCalle($this->getPacienteCalle());
        $copyObj->setPacienteNoexterior($this->getPacienteNoexterior());
        $copyObj->setPacienteNointerior($this->getPacienteNointerior());
        $copyObj->setPacienteColonia($this->getPacienteColonia());
        $copyObj->setPacienteCiudad($this->getPacienteCiudad());
        $copyObj->setPacienteEstado($this->getPacienteEstado());
        $copyObj->setPacientePais($this->getPacientePais());
        $copyObj->setPacienteTelefono($this->getPacienteTelefono());
        $copyObj->setPacienteTelefonocelular($this->getPacienteTelefonocelular());
        $copyObj->setPacienteEdad($this->getPacienteEdad());
        $copyObj->setPacienteSexo($this->getPacienteSexo());
        $copyObj->setPacienteEstadocivil($this->getPacienteEstadocivil());
        $copyObj->setPacienteOcupacion($this->getPacienteOcupacion());
        $copyObj->setPacienteConyuge($this->getPacienteConyuge());
        $copyObj->setPacientePadre($this->getPacientePadre());
        $copyObj->setPacienteMadre($this->getPacienteMadre());
        $copyObj->setPacienteResponsable($this->getPacienteResponsable());
        $copyObj->setPacienteTelefonoresponsable($this->getPacienteTelefonoresponsable());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAdmisions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAdmision($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCitas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCita($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getConsultas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addConsulta($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDatosfacturacions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDatosfacturacion($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdpaciente(NULL); // this is a auto-increment column, so set to default value
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
     * @return Paciente Clone of current object.
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
     * @return PacientePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PacientePeer();
        }

        return self::$peer;
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
        if ('Admision' == $relationName) {
            $this->initAdmisions();
        }
        if ('Cita' == $relationName) {
            $this->initCitas();
        }
        if ('Consulta' == $relationName) {
            $this->initConsultas();
        }
        if ('Datosfacturacion' == $relationName) {
            $this->initDatosfacturacions();
        }
    }

    /**
     * Clears out the collAdmisions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Paciente The current object (for fluent API support)
     * @see        addAdmisions()
     */
    public function clearAdmisions()
    {
        $this->collAdmisions = null; // important to set this to null since that means it is uninitialized
        $this->collAdmisionsPartial = null;

        return $this;
    }

    /**
     * reset is the collAdmisions collection loaded partially
     *
     * @return void
     */
    public function resetPartialAdmisions($v = true)
    {
        $this->collAdmisionsPartial = $v;
    }

    /**
     * Initializes the collAdmisions collection.
     *
     * By default this just sets the collAdmisions collection to an empty array (like clearcollAdmisions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAdmisions($overrideExisting = true)
    {
        if (null !== $this->collAdmisions && !$overrideExisting) {
            return;
        }
        $this->collAdmisions = new PropelObjectCollection();
        $this->collAdmisions->setModel('Admision');
    }

    /**
     * Gets an array of Admision objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Paciente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Admision[] List of Admision objects
     * @throws PropelException
     */
    public function getAdmisions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAdmisionsPartial && !$this->isNew();
        if (null === $this->collAdmisions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAdmisions) {
                // return empty collection
                $this->initAdmisions();
            } else {
                $collAdmisions = AdmisionQuery::create(null, $criteria)
                    ->filterByPaciente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAdmisionsPartial && count($collAdmisions)) {
                      $this->initAdmisions(false);

                      foreach ($collAdmisions as $obj) {
                        if (false == $this->collAdmisions->contains($obj)) {
                          $this->collAdmisions->append($obj);
                        }
                      }

                      $this->collAdmisionsPartial = true;
                    }

                    $collAdmisions->getInternalIterator()->rewind();

                    return $collAdmisions;
                }

                if ($partial && $this->collAdmisions) {
                    foreach ($this->collAdmisions as $obj) {
                        if ($obj->isNew()) {
                            $collAdmisions[] = $obj;
                        }
                    }
                }

                $this->collAdmisions = $collAdmisions;
                $this->collAdmisionsPartial = false;
            }
        }

        return $this->collAdmisions;
    }

    /**
     * Sets a collection of Admision objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $admisions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Paciente The current object (for fluent API support)
     */
    public function setAdmisions(PropelCollection $admisions, PropelPDO $con = null)
    {
        $admisionsToDelete = $this->getAdmisions(new Criteria(), $con)->diff($admisions);


        $this->admisionsScheduledForDeletion = $admisionsToDelete;

        foreach ($admisionsToDelete as $admisionRemoved) {
            $admisionRemoved->setPaciente(null);
        }

        $this->collAdmisions = null;
        foreach ($admisions as $admision) {
            $this->addAdmision($admision);
        }

        $this->collAdmisions = $admisions;
        $this->collAdmisionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Admision objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Admision objects.
     * @throws PropelException
     */
    public function countAdmisions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAdmisionsPartial && !$this->isNew();
        if (null === $this->collAdmisions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAdmisions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAdmisions());
            }
            $query = AdmisionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPaciente($this)
                ->count($con);
        }

        return count($this->collAdmisions);
    }

    /**
     * Method called to associate a Admision object to this object
     * through the Admision foreign key attribute.
     *
     * @param    Admision $l Admision
     * @return Paciente The current object (for fluent API support)
     */
    public function addAdmision(Admision $l)
    {
        if ($this->collAdmisions === null) {
            $this->initAdmisions();
            $this->collAdmisionsPartial = true;
        }

        if (!in_array($l, $this->collAdmisions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAdmision($l);

            if ($this->admisionsScheduledForDeletion and $this->admisionsScheduledForDeletion->contains($l)) {
                $this->admisionsScheduledForDeletion->remove($this->admisionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Admision $admision The admision object to add.
     */
    protected function doAddAdmision($admision)
    {
        $this->collAdmisions[]= $admision;
        $admision->setPaciente($this);
    }

    /**
     * @param	Admision $admision The admision object to remove.
     * @return Paciente The current object (for fluent API support)
     */
    public function removeAdmision($admision)
    {
        if ($this->getAdmisions()->contains($admision)) {
            $this->collAdmisions->remove($this->collAdmisions->search($admision));
            if (null === $this->admisionsScheduledForDeletion) {
                $this->admisionsScheduledForDeletion = clone $this->collAdmisions;
                $this->admisionsScheduledForDeletion->clear();
            }
            $this->admisionsScheduledForDeletion[]= clone $admision;
            $admision->setPaciente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Admisions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Admision[] List of Admision objects
     */
    public function getAdmisionsJoinCuarto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AdmisionQuery::create(null, $criteria);
        $query->joinWith('Cuarto', $join_behavior);

        return $this->getAdmisions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Admisions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Admision[] List of Admision objects
     */
    public function getAdmisionsJoinMedico($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AdmisionQuery::create(null, $criteria);
        $query->joinWith('Medico', $join_behavior);

        return $this->getAdmisions($query, $con);
    }

    /**
     * Clears out the collCitas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Paciente The current object (for fluent API support)
     * @see        addCitas()
     */
    public function clearCitas()
    {
        $this->collCitas = null; // important to set this to null since that means it is uninitialized
        $this->collCitasPartial = null;

        return $this;
    }

    /**
     * reset is the collCitas collection loaded partially
     *
     * @return void
     */
    public function resetPartialCitas($v = true)
    {
        $this->collCitasPartial = $v;
    }

    /**
     * Initializes the collCitas collection.
     *
     * By default this just sets the collCitas collection to an empty array (like clearcollCitas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCitas($overrideExisting = true)
    {
        if (null !== $this->collCitas && !$overrideExisting) {
            return;
        }
        $this->collCitas = new PropelObjectCollection();
        $this->collCitas->setModel('Cita');
    }

    /**
     * Gets an array of Cita objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Paciente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cita[] List of Cita objects
     * @throws PropelException
     */
    public function getCitas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCitasPartial && !$this->isNew();
        if (null === $this->collCitas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCitas) {
                // return empty collection
                $this->initCitas();
            } else {
                $collCitas = CitaQuery::create(null, $criteria)
                    ->filterByPaciente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCitasPartial && count($collCitas)) {
                      $this->initCitas(false);

                      foreach ($collCitas as $obj) {
                        if (false == $this->collCitas->contains($obj)) {
                          $this->collCitas->append($obj);
                        }
                      }

                      $this->collCitasPartial = true;
                    }

                    $collCitas->getInternalIterator()->rewind();

                    return $collCitas;
                }

                if ($partial && $this->collCitas) {
                    foreach ($this->collCitas as $obj) {
                        if ($obj->isNew()) {
                            $collCitas[] = $obj;
                        }
                    }
                }

                $this->collCitas = $collCitas;
                $this->collCitasPartial = false;
            }
        }

        return $this->collCitas;
    }

    /**
     * Sets a collection of Cita objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $citas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Paciente The current object (for fluent API support)
     */
    public function setCitas(PropelCollection $citas, PropelPDO $con = null)
    {
        $citasToDelete = $this->getCitas(new Criteria(), $con)->diff($citas);


        $this->citasScheduledForDeletion = $citasToDelete;

        foreach ($citasToDelete as $citaRemoved) {
            $citaRemoved->setPaciente(null);
        }

        $this->collCitas = null;
        foreach ($citas as $cita) {
            $this->addCita($cita);
        }

        $this->collCitas = $citas;
        $this->collCitasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cita objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cita objects.
     * @throws PropelException
     */
    public function countCitas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCitasPartial && !$this->isNew();
        if (null === $this->collCitas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCitas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCitas());
            }
            $query = CitaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPaciente($this)
                ->count($con);
        }

        return count($this->collCitas);
    }

    /**
     * Method called to associate a Cita object to this object
     * through the Cita foreign key attribute.
     *
     * @param    Cita $l Cita
     * @return Paciente The current object (for fluent API support)
     */
    public function addCita(Cita $l)
    {
        if ($this->collCitas === null) {
            $this->initCitas();
            $this->collCitasPartial = true;
        }

        if (!in_array($l, $this->collCitas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCita($l);

            if ($this->citasScheduledForDeletion and $this->citasScheduledForDeletion->contains($l)) {
                $this->citasScheduledForDeletion->remove($this->citasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Cita $cita The cita object to add.
     */
    protected function doAddCita($cita)
    {
        $this->collCitas[]= $cita;
        $cita->setPaciente($this);
    }

    /**
     * @param	Cita $cita The cita object to remove.
     * @return Paciente The current object (for fluent API support)
     */
    public function removeCita($cita)
    {
        if ($this->getCitas()->contains($cita)) {
            $this->collCitas->remove($this->collCitas->search($cita));
            if (null === $this->citasScheduledForDeletion) {
                $this->citasScheduledForDeletion = clone $this->collCitas;
                $this->citasScheduledForDeletion->clear();
            }
            $this->citasScheduledForDeletion[]= clone $cita;
            $cita->setPaciente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Citas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cita[] List of Cita objects
     */
    public function getCitasJoinMedico($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CitaQuery::create(null, $criteria);
        $query->joinWith('Medico', $join_behavior);

        return $this->getCitas($query, $con);
    }

    /**
     * Clears out the collConsultas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Paciente The current object (for fluent API support)
     * @see        addConsultas()
     */
    public function clearConsultas()
    {
        $this->collConsultas = null; // important to set this to null since that means it is uninitialized
        $this->collConsultasPartial = null;

        return $this;
    }

    /**
     * reset is the collConsultas collection loaded partially
     *
     * @return void
     */
    public function resetPartialConsultas($v = true)
    {
        $this->collConsultasPartial = $v;
    }

    /**
     * Initializes the collConsultas collection.
     *
     * By default this just sets the collConsultas collection to an empty array (like clearcollConsultas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initConsultas($overrideExisting = true)
    {
        if (null !== $this->collConsultas && !$overrideExisting) {
            return;
        }
        $this->collConsultas = new PropelObjectCollection();
        $this->collConsultas->setModel('Consulta');
    }

    /**
     * Gets an array of Consulta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Paciente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Consulta[] List of Consulta objects
     * @throws PropelException
     */
    public function getConsultas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collConsultasPartial && !$this->isNew();
        if (null === $this->collConsultas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collConsultas) {
                // return empty collection
                $this->initConsultas();
            } else {
                $collConsultas = ConsultaQuery::create(null, $criteria)
                    ->filterByPaciente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collConsultasPartial && count($collConsultas)) {
                      $this->initConsultas(false);

                      foreach ($collConsultas as $obj) {
                        if (false == $this->collConsultas->contains($obj)) {
                          $this->collConsultas->append($obj);
                        }
                      }

                      $this->collConsultasPartial = true;
                    }

                    $collConsultas->getInternalIterator()->rewind();

                    return $collConsultas;
                }

                if ($partial && $this->collConsultas) {
                    foreach ($this->collConsultas as $obj) {
                        if ($obj->isNew()) {
                            $collConsultas[] = $obj;
                        }
                    }
                }

                $this->collConsultas = $collConsultas;
                $this->collConsultasPartial = false;
            }
        }

        return $this->collConsultas;
    }

    /**
     * Sets a collection of Consulta objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $consultas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Paciente The current object (for fluent API support)
     */
    public function setConsultas(PropelCollection $consultas, PropelPDO $con = null)
    {
        $consultasToDelete = $this->getConsultas(new Criteria(), $con)->diff($consultas);


        $this->consultasScheduledForDeletion = $consultasToDelete;

        foreach ($consultasToDelete as $consultaRemoved) {
            $consultaRemoved->setPaciente(null);
        }

        $this->collConsultas = null;
        foreach ($consultas as $consulta) {
            $this->addConsulta($consulta);
        }

        $this->collConsultas = $consultas;
        $this->collConsultasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Consulta objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Consulta objects.
     * @throws PropelException
     */
    public function countConsultas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collConsultasPartial && !$this->isNew();
        if (null === $this->collConsultas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collConsultas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getConsultas());
            }
            $query = ConsultaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPaciente($this)
                ->count($con);
        }

        return count($this->collConsultas);
    }

    /**
     * Method called to associate a Consulta object to this object
     * through the Consulta foreign key attribute.
     *
     * @param    Consulta $l Consulta
     * @return Paciente The current object (for fluent API support)
     */
    public function addConsulta(Consulta $l)
    {
        if ($this->collConsultas === null) {
            $this->initConsultas();
            $this->collConsultasPartial = true;
        }

        if (!in_array($l, $this->collConsultas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddConsulta($l);

            if ($this->consultasScheduledForDeletion and $this->consultasScheduledForDeletion->contains($l)) {
                $this->consultasScheduledForDeletion->remove($this->consultasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Consulta $consulta The consulta object to add.
     */
    protected function doAddConsulta($consulta)
    {
        $this->collConsultas[]= $consulta;
        $consulta->setPaciente($this);
    }

    /**
     * @param	Consulta $consulta The consulta object to remove.
     * @return Paciente The current object (for fluent API support)
     */
    public function removeConsulta($consulta)
    {
        if ($this->getConsultas()->contains($consulta)) {
            $this->collConsultas->remove($this->collConsultas->search($consulta));
            if (null === $this->consultasScheduledForDeletion) {
                $this->consultasScheduledForDeletion = clone $this->collConsultas;
                $this->consultasScheduledForDeletion->clear();
            }
            $this->consultasScheduledForDeletion[]= clone $consulta;
            $consulta->setPaciente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Consultas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Consulta[] List of Consulta objects
     */
    public function getConsultasJoinCuarto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ConsultaQuery::create(null, $criteria);
        $query->joinWith('Cuarto', $join_behavior);

        return $this->getConsultas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Paciente is new, it will return
     * an empty collection; or if this Paciente has previously
     * been saved, it will retrieve related Consultas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Paciente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Consulta[] List of Consulta objects
     */
    public function getConsultasJoinMedico($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ConsultaQuery::create(null, $criteria);
        $query->joinWith('Medico', $join_behavior);

        return $this->getConsultas($query, $con);
    }

    /**
     * Clears out the collDatosfacturacions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Paciente The current object (for fluent API support)
     * @see        addDatosfacturacions()
     */
    public function clearDatosfacturacions()
    {
        $this->collDatosfacturacions = null; // important to set this to null since that means it is uninitialized
        $this->collDatosfacturacionsPartial = null;

        return $this;
    }

    /**
     * reset is the collDatosfacturacions collection loaded partially
     *
     * @return void
     */
    public function resetPartialDatosfacturacions($v = true)
    {
        $this->collDatosfacturacionsPartial = $v;
    }

    /**
     * Initializes the collDatosfacturacions collection.
     *
     * By default this just sets the collDatosfacturacions collection to an empty array (like clearcollDatosfacturacions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDatosfacturacions($overrideExisting = true)
    {
        if (null !== $this->collDatosfacturacions && !$overrideExisting) {
            return;
        }
        $this->collDatosfacturacions = new PropelObjectCollection();
        $this->collDatosfacturacions->setModel('Datosfacturacion');
    }

    /**
     * Gets an array of Datosfacturacion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Paciente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Datosfacturacion[] List of Datosfacturacion objects
     * @throws PropelException
     */
    public function getDatosfacturacions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDatosfacturacionsPartial && !$this->isNew();
        if (null === $this->collDatosfacturacions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDatosfacturacions) {
                // return empty collection
                $this->initDatosfacturacions();
            } else {
                $collDatosfacturacions = DatosfacturacionQuery::create(null, $criteria)
                    ->filterByPaciente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDatosfacturacionsPartial && count($collDatosfacturacions)) {
                      $this->initDatosfacturacions(false);

                      foreach ($collDatosfacturacions as $obj) {
                        if (false == $this->collDatosfacturacions->contains($obj)) {
                          $this->collDatosfacturacions->append($obj);
                        }
                      }

                      $this->collDatosfacturacionsPartial = true;
                    }

                    $collDatosfacturacions->getInternalIterator()->rewind();

                    return $collDatosfacturacions;
                }

                if ($partial && $this->collDatosfacturacions) {
                    foreach ($this->collDatosfacturacions as $obj) {
                        if ($obj->isNew()) {
                            $collDatosfacturacions[] = $obj;
                        }
                    }
                }

                $this->collDatosfacturacions = $collDatosfacturacions;
                $this->collDatosfacturacionsPartial = false;
            }
        }

        return $this->collDatosfacturacions;
    }

    /**
     * Sets a collection of Datosfacturacion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $datosfacturacions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Paciente The current object (for fluent API support)
     */
    public function setDatosfacturacions(PropelCollection $datosfacturacions, PropelPDO $con = null)
    {
        $datosfacturacionsToDelete = $this->getDatosfacturacions(new Criteria(), $con)->diff($datosfacturacions);


        $this->datosfacturacionsScheduledForDeletion = $datosfacturacionsToDelete;

        foreach ($datosfacturacionsToDelete as $datosfacturacionRemoved) {
            $datosfacturacionRemoved->setPaciente(null);
        }

        $this->collDatosfacturacions = null;
        foreach ($datosfacturacions as $datosfacturacion) {
            $this->addDatosfacturacion($datosfacturacion);
        }

        $this->collDatosfacturacions = $datosfacturacions;
        $this->collDatosfacturacionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Datosfacturacion objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Datosfacturacion objects.
     * @throws PropelException
     */
    public function countDatosfacturacions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDatosfacturacionsPartial && !$this->isNew();
        if (null === $this->collDatosfacturacions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDatosfacturacions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDatosfacturacions());
            }
            $query = DatosfacturacionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPaciente($this)
                ->count($con);
        }

        return count($this->collDatosfacturacions);
    }

    /**
     * Method called to associate a Datosfacturacion object to this object
     * through the Datosfacturacion foreign key attribute.
     *
     * @param    Datosfacturacion $l Datosfacturacion
     * @return Paciente The current object (for fluent API support)
     */
    public function addDatosfacturacion(Datosfacturacion $l)
    {
        if ($this->collDatosfacturacions === null) {
            $this->initDatosfacturacions();
            $this->collDatosfacturacionsPartial = true;
        }

        if (!in_array($l, $this->collDatosfacturacions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddDatosfacturacion($l);

            if ($this->datosfacturacionsScheduledForDeletion and $this->datosfacturacionsScheduledForDeletion->contains($l)) {
                $this->datosfacturacionsScheduledForDeletion->remove($this->datosfacturacionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Datosfacturacion $datosfacturacion The datosfacturacion object to add.
     */
    protected function doAddDatosfacturacion($datosfacturacion)
    {
        $this->collDatosfacturacions[]= $datosfacturacion;
        $datosfacturacion->setPaciente($this);
    }

    /**
     * @param	Datosfacturacion $datosfacturacion The datosfacturacion object to remove.
     * @return Paciente The current object (for fluent API support)
     */
    public function removeDatosfacturacion($datosfacturacion)
    {
        if ($this->getDatosfacturacions()->contains($datosfacturacion)) {
            $this->collDatosfacturacions->remove($this->collDatosfacturacions->search($datosfacturacion));
            if (null === $this->datosfacturacionsScheduledForDeletion) {
                $this->datosfacturacionsScheduledForDeletion = clone $this->collDatosfacturacions;
                $this->datosfacturacionsScheduledForDeletion->clear();
            }
            $this->datosfacturacionsScheduledForDeletion[]= clone $datosfacturacion;
            $datosfacturacion->setPaciente(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idpaciente = null;
        $this->paciente_nombre = null;
        $this->paciente_ap = null;
        $this->paciente_am = null;
        $this->paciente_calle = null;
        $this->paciente_noexterior = null;
        $this->paciente_nointerior = null;
        $this->paciente_colonia = null;
        $this->paciente_ciudad = null;
        $this->paciente_estado = null;
        $this->paciente_pais = null;
        $this->paciente_telefono = null;
        $this->paciente_telefonocelular = null;
        $this->paciente_edad = null;
        $this->paciente_sexo = null;
        $this->paciente_estadocivil = null;
        $this->paciente_ocupacion = null;
        $this->paciente_conyuge = null;
        $this->paciente_padre = null;
        $this->paciente_madre = null;
        $this->paciente_responsable = null;
        $this->paciente_telefonoresponsable = null;
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
            if ($this->collAdmisions) {
                foreach ($this->collAdmisions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCitas) {
                foreach ($this->collCitas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collConsultas) {
                foreach ($this->collConsultas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDatosfacturacions) {
                foreach ($this->collDatosfacturacions as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collAdmisions instanceof PropelCollection) {
            $this->collAdmisions->clearIterator();
        }
        $this->collAdmisions = null;
        if ($this->collCitas instanceof PropelCollection) {
            $this->collCitas->clearIterator();
        }
        $this->collCitas = null;
        if ($this->collConsultas instanceof PropelCollection) {
            $this->collConsultas->clearIterator();
        }
        $this->collConsultas = null;
        if ($this->collDatosfacturacions instanceof PropelCollection) {
            $this->collDatosfacturacions->clearIterator();
        }
        $this->collDatosfacturacions = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PacientePeer::DEFAULT_STRING_FORMAT);
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
