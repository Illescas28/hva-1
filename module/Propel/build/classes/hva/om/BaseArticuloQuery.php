<?php


/**
 * Base class that represents a query for the 'articulo' table.
 *
 *
 *
 * @method ArticuloQuery orderByIdarticulo($order = Criteria::ASC) Order by the idarticulo column
 * @method ArticuloQuery orderByIdtipo($order = Criteria::ASC) Order by the idtipo column
 * @method ArticuloQuery orderByIdudm($order = Criteria::ASC) Order by the idudm column
 * @method ArticuloQuery orderByArticuloNombre($order = Criteria::ASC) Order by the articulo_nombre column
 * @method ArticuloQuery orderByArticuloCodigobarras($order = Criteria::ASC) Order by the articulo_codigobarras column
 * @method ArticuloQuery orderByArticuloDescripcion($order = Criteria::ASC) Order by the articulo_descripcion column
 * @method ArticuloQuery orderByArticuloTipopresentacion($order = Criteria::ASC) Order by the articulo_tipopresentacion column
 * @method ArticuloQuery orderByArticuloCantidadpresentacion($order = Criteria::ASC) Order by the articulo_cantidadpresentacion column
 * @method ArticuloQuery orderByArticuloExistencia($order = Criteria::ASC) Order by the articulo_existencia column
 * @method ArticuloQuery orderByArticuloCosto($order = Criteria::ASC) Order by the articulo_costo column
 * @method ArticuloQuery orderByArticuloPrecio($order = Criteria::ASC) Order by the articulo_precio column
 * @method ArticuloQuery orderByArticuloIva($order = Criteria::ASC) Order by the articulo_iva column
 * @method ArticuloQuery orderByArticuloInventariominimo($order = Criteria::ASC) Order by the articulo_inventariominimo column
 * @method ArticuloQuery orderByArticuloInventariomaximo($order = Criteria::ASC) Order by the articulo_inventariomaximo column
 * @method ArticuloQuery orderByArticuloReorden($order = Criteria::ASC) Order by the articulo_reorden column
 * @method ArticuloQuery orderByArticuloUbicacion($order = Criteria::ASC) Order by the articulo_ubicacion column
 *
 * @method ArticuloQuery groupByIdarticulo() Group by the idarticulo column
 * @method ArticuloQuery groupByIdtipo() Group by the idtipo column
 * @method ArticuloQuery groupByIdudm() Group by the idudm column
 * @method ArticuloQuery groupByArticuloNombre() Group by the articulo_nombre column
 * @method ArticuloQuery groupByArticuloCodigobarras() Group by the articulo_codigobarras column
 * @method ArticuloQuery groupByArticuloDescripcion() Group by the articulo_descripcion column
 * @method ArticuloQuery groupByArticuloTipopresentacion() Group by the articulo_tipopresentacion column
 * @method ArticuloQuery groupByArticuloCantidadpresentacion() Group by the articulo_cantidadpresentacion column
 * @method ArticuloQuery groupByArticuloExistencia() Group by the articulo_existencia column
 * @method ArticuloQuery groupByArticuloCosto() Group by the articulo_costo column
 * @method ArticuloQuery groupByArticuloPrecio() Group by the articulo_precio column
 * @method ArticuloQuery groupByArticuloIva() Group by the articulo_iva column
 * @method ArticuloQuery groupByArticuloInventariominimo() Group by the articulo_inventariominimo column
 * @method ArticuloQuery groupByArticuloInventariomaximo() Group by the articulo_inventariomaximo column
 * @method ArticuloQuery groupByArticuloReorden() Group by the articulo_reorden column
 * @method ArticuloQuery groupByArticuloUbicacion() Group by the articulo_ubicacion column
 *
 * @method ArticuloQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ArticuloQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ArticuloQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ArticuloQuery leftJoinTipo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tipo relation
 * @method ArticuloQuery rightJoinTipo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tipo relation
 * @method ArticuloQuery innerJoinTipo($relationAlias = null) Adds a INNER JOIN clause to the query using the Tipo relation
 *
 * @method ArticuloQuery leftJoinUdm($relationAlias = null) Adds a LEFT JOIN clause to the query using the Udm relation
 * @method ArticuloQuery rightJoinUdm($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Udm relation
 * @method ArticuloQuery innerJoinUdm($relationAlias = null) Adds a INNER JOIN clause to the query using the Udm relation
 *
 * @method ArticuloQuery leftJoinOrdencompradetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordencompradetalle relation
 * @method ArticuloQuery rightJoinOrdencompradetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordencompradetalle relation
 * @method ArticuloQuery innerJoinOrdencompradetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordencompradetalle relation
 *
 * @method ArticuloQuery leftJoinPaquetedetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paquetedetalle relation
 * @method ArticuloQuery rightJoinPaquetedetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paquetedetalle relation
 * @method ArticuloQuery innerJoinPaquetedetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Paquetedetalle relation
 *
 * @method Articulo findOne(PropelPDO $con = null) Return the first Articulo matching the query
 * @method Articulo findOneOrCreate(PropelPDO $con = null) Return the first Articulo matching the query, or a new Articulo object populated from the query conditions when no match is found
 *
 * @method Articulo findOneByIdtipo(int $idtipo) Return the first Articulo filtered by the idtipo column
 * @method Articulo findOneByIdudm(int $idudm) Return the first Articulo filtered by the idudm column
 * @method Articulo findOneByArticuloNombre(string $articulo_nombre) Return the first Articulo filtered by the articulo_nombre column
 * @method Articulo findOneByArticuloCodigobarras(string $articulo_codigobarras) Return the first Articulo filtered by the articulo_codigobarras column
 * @method Articulo findOneByArticuloDescripcion(string $articulo_descripcion) Return the first Articulo filtered by the articulo_descripcion column
 * @method Articulo findOneByArticuloTipopresentacion(string $articulo_tipopresentacion) Return the first Articulo filtered by the articulo_tipopresentacion column
 * @method Articulo findOneByArticuloCantidadpresentacion(int $articulo_cantidadpresentacion) Return the first Articulo filtered by the articulo_cantidadpresentacion column
 * @method Articulo findOneByArticuloExistencia(string $articulo_existencia) Return the first Articulo filtered by the articulo_existencia column
 * @method Articulo findOneByArticuloCosto(string $articulo_costo) Return the first Articulo filtered by the articulo_costo column
 * @method Articulo findOneByArticuloPrecio(string $articulo_precio) Return the first Articulo filtered by the articulo_precio column
 * @method Articulo findOneByArticuloIva(string $articulo_iva) Return the first Articulo filtered by the articulo_iva column
 * @method Articulo findOneByArticuloInventariominimo(string $articulo_inventariominimo) Return the first Articulo filtered by the articulo_inventariominimo column
 * @method Articulo findOneByArticuloInventariomaximo(string $articulo_inventariomaximo) Return the first Articulo filtered by the articulo_inventariomaximo column
 * @method Articulo findOneByArticuloReorden(string $articulo_reorden) Return the first Articulo filtered by the articulo_reorden column
 * @method Articulo findOneByArticuloUbicacion(string $articulo_ubicacion) Return the first Articulo filtered by the articulo_ubicacion column
 *
 * @method array findByIdarticulo(int $idarticulo) Return Articulo objects filtered by the idarticulo column
 * @method array findByIdtipo(int $idtipo) Return Articulo objects filtered by the idtipo column
 * @method array findByIdudm(int $idudm) Return Articulo objects filtered by the idudm column
 * @method array findByArticuloNombre(string $articulo_nombre) Return Articulo objects filtered by the articulo_nombre column
 * @method array findByArticuloCodigobarras(string $articulo_codigobarras) Return Articulo objects filtered by the articulo_codigobarras column
 * @method array findByArticuloDescripcion(string $articulo_descripcion) Return Articulo objects filtered by the articulo_descripcion column
 * @method array findByArticuloTipopresentacion(string $articulo_tipopresentacion) Return Articulo objects filtered by the articulo_tipopresentacion column
 * @method array findByArticuloCantidadpresentacion(int $articulo_cantidadpresentacion) Return Articulo objects filtered by the articulo_cantidadpresentacion column
 * @method array findByArticuloExistencia(string $articulo_existencia) Return Articulo objects filtered by the articulo_existencia column
 * @method array findByArticuloCosto(string $articulo_costo) Return Articulo objects filtered by the articulo_costo column
 * @method array findByArticuloPrecio(string $articulo_precio) Return Articulo objects filtered by the articulo_precio column
 * @method array findByArticuloIva(string $articulo_iva) Return Articulo objects filtered by the articulo_iva column
 * @method array findByArticuloInventariominimo(string $articulo_inventariominimo) Return Articulo objects filtered by the articulo_inventariominimo column
 * @method array findByArticuloInventariomaximo(string $articulo_inventariomaximo) Return Articulo objects filtered by the articulo_inventariomaximo column
 * @method array findByArticuloReorden(string $articulo_reorden) Return Articulo objects filtered by the articulo_reorden column
 * @method array findByArticuloUbicacion(string $articulo_ubicacion) Return Articulo objects filtered by the articulo_ubicacion column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseArticuloQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseArticuloQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'hva';
        }
        if (null === $modelName) {
            $modelName = 'Articulo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ArticuloQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ArticuloQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ArticuloQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ArticuloQuery) {
            return $criteria;
        }
        $query = new ArticuloQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Articulo|Articulo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ArticuloPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ArticuloPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Articulo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdarticulo($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Articulo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idarticulo`, `idtipo`, `idudm`, `articulo_nombre`, `articulo_codigobarras`, `articulo_descripcion`, `articulo_tipopresentacion`, `articulo_cantidadpresentacion`, `articulo_existencia`, `articulo_costo`, `articulo_precio`, `articulo_iva`, `articulo_inventariominimo`, `articulo_inventariomaximo`, `articulo_reorden`, `articulo_ubicacion` FROM `articulo` WHERE `idarticulo` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Articulo();
            $obj->hydrate($row);
            ArticuloPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Articulo|Articulo[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Articulo[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArticuloPeer::IDARTICULO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArticuloPeer::IDARTICULO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idarticulo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdarticulo(1234); // WHERE idarticulo = 1234
     * $query->filterByIdarticulo(array(12, 34)); // WHERE idarticulo IN (12, 34)
     * $query->filterByIdarticulo(array('min' => 12)); // WHERE idarticulo >= 12
     * $query->filterByIdarticulo(array('max' => 12)); // WHERE idarticulo <= 12
     * </code>
     *
     * @param     mixed $idarticulo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByIdarticulo($idarticulo = null, $comparison = null)
    {
        if (is_array($idarticulo)) {
            $useMinMax = false;
            if (isset($idarticulo['min'])) {
                $this->addUsingAlias(ArticuloPeer::IDARTICULO, $idarticulo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticulo['max'])) {
                $this->addUsingAlias(ArticuloPeer::IDARTICULO, $idarticulo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::IDARTICULO, $idarticulo, $comparison);
    }

    /**
     * Filter the query on the idtipo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtipo(1234); // WHERE idtipo = 1234
     * $query->filterByIdtipo(array(12, 34)); // WHERE idtipo IN (12, 34)
     * $query->filterByIdtipo(array('min' => 12)); // WHERE idtipo >= 12
     * $query->filterByIdtipo(array('max' => 12)); // WHERE idtipo <= 12
     * </code>
     *
     * @see       filterByTipo()
     *
     * @param     mixed $idtipo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByIdtipo($idtipo = null, $comparison = null)
    {
        if (is_array($idtipo)) {
            $useMinMax = false;
            if (isset($idtipo['min'])) {
                $this->addUsingAlias(ArticuloPeer::IDTIPO, $idtipo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtipo['max'])) {
                $this->addUsingAlias(ArticuloPeer::IDTIPO, $idtipo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::IDTIPO, $idtipo, $comparison);
    }

    /**
     * Filter the query on the idudm column
     *
     * Example usage:
     * <code>
     * $query->filterByIdudm(1234); // WHERE idudm = 1234
     * $query->filterByIdudm(array(12, 34)); // WHERE idudm IN (12, 34)
     * $query->filterByIdudm(array('min' => 12)); // WHERE idudm >= 12
     * $query->filterByIdudm(array('max' => 12)); // WHERE idudm <= 12
     * </code>
     *
     * @see       filterByUdm()
     *
     * @param     mixed $idudm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByIdudm($idudm = null, $comparison = null)
    {
        if (is_array($idudm)) {
            $useMinMax = false;
            if (isset($idudm['min'])) {
                $this->addUsingAlias(ArticuloPeer::IDUDM, $idudm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idudm['max'])) {
                $this->addUsingAlias(ArticuloPeer::IDUDM, $idudm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::IDUDM, $idudm, $comparison);
    }

    /**
     * Filter the query on the articulo_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloNombre('fooValue');   // WHERE articulo_nombre = 'fooValue'
     * $query->filterByArticuloNombre('%fooValue%'); // WHERE articulo_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $articuloNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloNombre($articuloNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($articuloNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $articuloNombre)) {
                $articuloNombre = str_replace('*', '%', $articuloNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_NOMBRE, $articuloNombre, $comparison);
    }

    /**
     * Filter the query on the articulo_codigobarras column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloCodigobarras('fooValue');   // WHERE articulo_codigobarras = 'fooValue'
     * $query->filterByArticuloCodigobarras('%fooValue%'); // WHERE articulo_codigobarras LIKE '%fooValue%'
     * </code>
     *
     * @param     string $articuloCodigobarras The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloCodigobarras($articuloCodigobarras = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($articuloCodigobarras)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $articuloCodigobarras)) {
                $articuloCodigobarras = str_replace('*', '%', $articuloCodigobarras);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_CODIGOBARRAS, $articuloCodigobarras, $comparison);
    }

    /**
     * Filter the query on the articulo_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloDescripcion('fooValue');   // WHERE articulo_descripcion = 'fooValue'
     * $query->filterByArticuloDescripcion('%fooValue%'); // WHERE articulo_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $articuloDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloDescripcion($articuloDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($articuloDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $articuloDescripcion)) {
                $articuloDescripcion = str_replace('*', '%', $articuloDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_DESCRIPCION, $articuloDescripcion, $comparison);
    }

    /**
     * Filter the query on the articulo_tipopresentacion column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloTipopresentacion('fooValue');   // WHERE articulo_tipopresentacion = 'fooValue'
     * $query->filterByArticuloTipopresentacion('%fooValue%'); // WHERE articulo_tipopresentacion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $articuloTipopresentacion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloTipopresentacion($articuloTipopresentacion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($articuloTipopresentacion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $articuloTipopresentacion)) {
                $articuloTipopresentacion = str_replace('*', '%', $articuloTipopresentacion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_TIPOPRESENTACION, $articuloTipopresentacion, $comparison);
    }

    /**
     * Filter the query on the articulo_cantidadpresentacion column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloCantidadpresentacion(1234); // WHERE articulo_cantidadpresentacion = 1234
     * $query->filterByArticuloCantidadpresentacion(array(12, 34)); // WHERE articulo_cantidadpresentacion IN (12, 34)
     * $query->filterByArticuloCantidadpresentacion(array('min' => 12)); // WHERE articulo_cantidadpresentacion >= 12
     * $query->filterByArticuloCantidadpresentacion(array('max' => 12)); // WHERE articulo_cantidadpresentacion <= 12
     * </code>
     *
     * @param     mixed $articuloCantidadpresentacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloCantidadpresentacion($articuloCantidadpresentacion = null, $comparison = null)
    {
        if (is_array($articuloCantidadpresentacion)) {
            $useMinMax = false;
            if (isset($articuloCantidadpresentacion['min'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_CANTIDADPRESENTACION, $articuloCantidadpresentacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($articuloCantidadpresentacion['max'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_CANTIDADPRESENTACION, $articuloCantidadpresentacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_CANTIDADPRESENTACION, $articuloCantidadpresentacion, $comparison);
    }

    /**
     * Filter the query on the articulo_existencia column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloExistencia(1234); // WHERE articulo_existencia = 1234
     * $query->filterByArticuloExistencia(array(12, 34)); // WHERE articulo_existencia IN (12, 34)
     * $query->filterByArticuloExistencia(array('min' => 12)); // WHERE articulo_existencia >= 12
     * $query->filterByArticuloExistencia(array('max' => 12)); // WHERE articulo_existencia <= 12
     * </code>
     *
     * @param     mixed $articuloExistencia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloExistencia($articuloExistencia = null, $comparison = null)
    {
        if (is_array($articuloExistencia)) {
            $useMinMax = false;
            if (isset($articuloExistencia['min'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_EXISTENCIA, $articuloExistencia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($articuloExistencia['max'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_EXISTENCIA, $articuloExistencia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_EXISTENCIA, $articuloExistencia, $comparison);
    }

    /**
     * Filter the query on the articulo_costo column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloCosto(1234); // WHERE articulo_costo = 1234
     * $query->filterByArticuloCosto(array(12, 34)); // WHERE articulo_costo IN (12, 34)
     * $query->filterByArticuloCosto(array('min' => 12)); // WHERE articulo_costo >= 12
     * $query->filterByArticuloCosto(array('max' => 12)); // WHERE articulo_costo <= 12
     * </code>
     *
     * @param     mixed $articuloCosto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloCosto($articuloCosto = null, $comparison = null)
    {
        if (is_array($articuloCosto)) {
            $useMinMax = false;
            if (isset($articuloCosto['min'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_COSTO, $articuloCosto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($articuloCosto['max'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_COSTO, $articuloCosto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_COSTO, $articuloCosto, $comparison);
    }

    /**
     * Filter the query on the articulo_precio column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloPrecio(1234); // WHERE articulo_precio = 1234
     * $query->filterByArticuloPrecio(array(12, 34)); // WHERE articulo_precio IN (12, 34)
     * $query->filterByArticuloPrecio(array('min' => 12)); // WHERE articulo_precio >= 12
     * $query->filterByArticuloPrecio(array('max' => 12)); // WHERE articulo_precio <= 12
     * </code>
     *
     * @param     mixed $articuloPrecio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloPrecio($articuloPrecio = null, $comparison = null)
    {
        if (is_array($articuloPrecio)) {
            $useMinMax = false;
            if (isset($articuloPrecio['min'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_PRECIO, $articuloPrecio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($articuloPrecio['max'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_PRECIO, $articuloPrecio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_PRECIO, $articuloPrecio, $comparison);
    }

    /**
     * Filter the query on the articulo_iva column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloIva(1234); // WHERE articulo_iva = 1234
     * $query->filterByArticuloIva(array(12, 34)); // WHERE articulo_iva IN (12, 34)
     * $query->filterByArticuloIva(array('min' => 12)); // WHERE articulo_iva >= 12
     * $query->filterByArticuloIva(array('max' => 12)); // WHERE articulo_iva <= 12
     * </code>
     *
     * @param     mixed $articuloIva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloIva($articuloIva = null, $comparison = null)
    {
        if (is_array($articuloIva)) {
            $useMinMax = false;
            if (isset($articuloIva['min'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_IVA, $articuloIva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($articuloIva['max'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_IVA, $articuloIva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_IVA, $articuloIva, $comparison);
    }

    /**
     * Filter the query on the articulo_inventariominimo column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloInventariominimo(1234); // WHERE articulo_inventariominimo = 1234
     * $query->filterByArticuloInventariominimo(array(12, 34)); // WHERE articulo_inventariominimo IN (12, 34)
     * $query->filterByArticuloInventariominimo(array('min' => 12)); // WHERE articulo_inventariominimo >= 12
     * $query->filterByArticuloInventariominimo(array('max' => 12)); // WHERE articulo_inventariominimo <= 12
     * </code>
     *
     * @param     mixed $articuloInventariominimo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloInventariominimo($articuloInventariominimo = null, $comparison = null)
    {
        if (is_array($articuloInventariominimo)) {
            $useMinMax = false;
            if (isset($articuloInventariominimo['min'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_INVENTARIOMINIMO, $articuloInventariominimo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($articuloInventariominimo['max'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_INVENTARIOMINIMO, $articuloInventariominimo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_INVENTARIOMINIMO, $articuloInventariominimo, $comparison);
    }

    /**
     * Filter the query on the articulo_inventariomaximo column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloInventariomaximo(1234); // WHERE articulo_inventariomaximo = 1234
     * $query->filterByArticuloInventariomaximo(array(12, 34)); // WHERE articulo_inventariomaximo IN (12, 34)
     * $query->filterByArticuloInventariomaximo(array('min' => 12)); // WHERE articulo_inventariomaximo >= 12
     * $query->filterByArticuloInventariomaximo(array('max' => 12)); // WHERE articulo_inventariomaximo <= 12
     * </code>
     *
     * @param     mixed $articuloInventariomaximo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloInventariomaximo($articuloInventariomaximo = null, $comparison = null)
    {
        if (is_array($articuloInventariomaximo)) {
            $useMinMax = false;
            if (isset($articuloInventariomaximo['min'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_INVENTARIOMAXIMO, $articuloInventariomaximo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($articuloInventariomaximo['max'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_INVENTARIOMAXIMO, $articuloInventariomaximo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_INVENTARIOMAXIMO, $articuloInventariomaximo, $comparison);
    }

    /**
     * Filter the query on the articulo_reorden column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloReorden(1234); // WHERE articulo_reorden = 1234
     * $query->filterByArticuloReorden(array(12, 34)); // WHERE articulo_reorden IN (12, 34)
     * $query->filterByArticuloReorden(array('min' => 12)); // WHERE articulo_reorden >= 12
     * $query->filterByArticuloReorden(array('max' => 12)); // WHERE articulo_reorden <= 12
     * </code>
     *
     * @param     mixed $articuloReorden The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloReorden($articuloReorden = null, $comparison = null)
    {
        if (is_array($articuloReorden)) {
            $useMinMax = false;
            if (isset($articuloReorden['min'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_REORDEN, $articuloReorden['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($articuloReorden['max'])) {
                $this->addUsingAlias(ArticuloPeer::ARTICULO_REORDEN, $articuloReorden['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_REORDEN, $articuloReorden, $comparison);
    }

    /**
     * Filter the query on the articulo_ubicacion column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloUbicacion('fooValue');   // WHERE articulo_ubicacion = 'fooValue'
     * $query->filterByArticuloUbicacion('%fooValue%'); // WHERE articulo_ubicacion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $articuloUbicacion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloUbicacion($articuloUbicacion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($articuloUbicacion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $articuloUbicacion)) {
                $articuloUbicacion = str_replace('*', '%', $articuloUbicacion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_UBICACION, $articuloUbicacion, $comparison);
    }

    /**
     * Filter the query by a related Tipo object
     *
     * @param   Tipo|PropelObjectCollection $tipo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticuloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTipo($tipo, $comparison = null)
    {
        if ($tipo instanceof Tipo) {
            return $this
                ->addUsingAlias(ArticuloPeer::IDTIPO, $tipo->getIdtipo(), $comparison);
        } elseif ($tipo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArticuloPeer::IDTIPO, $tipo->toKeyValue('PrimaryKey', 'Idtipo'), $comparison);
        } else {
            throw new PropelException('filterByTipo() only accepts arguments of type Tipo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tipo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function joinTipo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tipo');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Tipo');
        }

        return $this;
    }

    /**
     * Use the Tipo relation Tipo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TipoQuery A secondary query class using the current class as primary query
     */
    public function useTipoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTipo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tipo', 'TipoQuery');
    }

    /**
     * Filter the query by a related Udm object
     *
     * @param   Udm|PropelObjectCollection $udm The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticuloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUdm($udm, $comparison = null)
    {
        if ($udm instanceof Udm) {
            return $this
                ->addUsingAlias(ArticuloPeer::IDUDM, $udm->getIdudm(), $comparison);
        } elseif ($udm instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArticuloPeer::IDUDM, $udm->toKeyValue('PrimaryKey', 'Idudm'), $comparison);
        } else {
            throw new PropelException('filterByUdm() only accepts arguments of type Udm or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Udm relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function joinUdm($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Udm');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Udm');
        }

        return $this;
    }

    /**
     * Use the Udm relation Udm object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UdmQuery A secondary query class using the current class as primary query
     */
    public function useUdmQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUdm($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Udm', 'UdmQuery');
    }

    /**
     * Filter the query by a related Ordencompradetalle object
     *
     * @param   Ordencompradetalle|PropelObjectCollection $ordencompradetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticuloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdencompradetalle($ordencompradetalle, $comparison = null)
    {
        if ($ordencompradetalle instanceof Ordencompradetalle) {
            return $this
                ->addUsingAlias(ArticuloPeer::IDARTICULO, $ordencompradetalle->getIdarticulo(), $comparison);
        } elseif ($ordencompradetalle instanceof PropelObjectCollection) {
            return $this
                ->useOrdencompradetalleQuery()
                ->filterByPrimaryKeys($ordencompradetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOrdencompradetalle() only accepts arguments of type Ordencompradetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ordencompradetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function joinOrdencompradetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ordencompradetalle');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Ordencompradetalle');
        }

        return $this;
    }

    /**
     * Use the Ordencompradetalle relation Ordencompradetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdencompradetalleQuery A secondary query class using the current class as primary query
     */
    public function useOrdencompradetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdencompradetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ordencompradetalle', 'OrdencompradetalleQuery');
    }

    /**
     * Filter the query by a related Paquetedetalle object
     *
     * @param   Paquetedetalle|PropelObjectCollection $paquetedetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticuloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaquetedetalle($paquetedetalle, $comparison = null)
    {
        if ($paquetedetalle instanceof Paquetedetalle) {
            return $this
                ->addUsingAlias(ArticuloPeer::IDARTICULO, $paquetedetalle->getIdarticulo(), $comparison);
        } elseif ($paquetedetalle instanceof PropelObjectCollection) {
            return $this
                ->usePaquetedetalleQuery()
                ->filterByPrimaryKeys($paquetedetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPaquetedetalle() only accepts arguments of type Paquetedetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Paquetedetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function joinPaquetedetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Paquetedetalle');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Paquetedetalle');
        }

        return $this;
    }

    /**
     * Use the Paquetedetalle relation Paquetedetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PaquetedetalleQuery A secondary query class using the current class as primary query
     */
    public function usePaquetedetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPaquetedetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Paquetedetalle', 'PaquetedetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Articulo $articulo Object to remove from the list of results
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function prune($articulo = null)
    {
        if ($articulo) {
            $this->addUsingAlias(ArticuloPeer::IDARTICULO, $articulo->getIdarticulo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
