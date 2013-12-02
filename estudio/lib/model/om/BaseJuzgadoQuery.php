<?php


/**
 * Base class that represents a query for the 'juzgado' table.
 *
 *
 *
 * @method JuzgadoQuery orderByIdJuzgado($order = Criteria::ASC) Order by the id_juzgado column
 * @method JuzgadoQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method JuzgadoQuery orderByJuez($order = Criteria::ASC) Order by the juez column
 * @method JuzgadoQuery orderBySecretario($order = Criteria::ASC) Order by the secretario column
 * @method JuzgadoQuery orderByDireccion($order = Criteria::ASC) Order by the direccion column
 * @method JuzgadoQuery orderByCiudad($order = Criteria::ASC) Order by the ciudad column
 *
 * @method JuzgadoQuery groupByIdJuzgado() Group by the id_juzgado column
 * @method JuzgadoQuery groupByNombre() Group by the nombre column
 * @method JuzgadoQuery groupByJuez() Group by the juez column
 * @method JuzgadoQuery groupBySecretario() Group by the secretario column
 * @method JuzgadoQuery groupByDireccion() Group by the direccion column
 * @method JuzgadoQuery groupByCiudad() Group by the ciudad column
 *
 * @method JuzgadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method JuzgadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method JuzgadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Juzgado findOne(PropelPDO $con = null) Return the first Juzgado matching the query
 * @method Juzgado findOneOrCreate(PropelPDO $con = null) Return the first Juzgado matching the query, or a new Juzgado object populated from the query conditions when no match is found
 *
 * @method Juzgado findOneByNombre(string $nombre) Return the first Juzgado filtered by the nombre column
 * @method Juzgado findOneByJuez(string $juez) Return the first Juzgado filtered by the juez column
 * @method Juzgado findOneBySecretario(string $secretario) Return the first Juzgado filtered by the secretario column
 * @method Juzgado findOneByDireccion(string $direccion) Return the first Juzgado filtered by the direccion column
 * @method Juzgado findOneByCiudad(string $ciudad) Return the first Juzgado filtered by the ciudad column
 *
 * @method array findByIdJuzgado(int $id_juzgado) Return Juzgado objects filtered by the id_juzgado column
 * @method array findByNombre(string $nombre) Return Juzgado objects filtered by the nombre column
 * @method array findByJuez(string $juez) Return Juzgado objects filtered by the juez column
 * @method array findBySecretario(string $secretario) Return Juzgado objects filtered by the secretario column
 * @method array findByDireccion(string $direccion) Return Juzgado objects filtered by the direccion column
 * @method array findByCiudad(string $ciudad) Return Juzgado objects filtered by the ciudad column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseJuzgadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseJuzgadoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Juzgado', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new JuzgadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   JuzgadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return JuzgadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof JuzgadoQuery) {
            return $criteria;
        }
        $query = new JuzgadoQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
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
     * @return   Juzgado|Juzgado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = JuzgadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(JuzgadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Juzgado A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdJuzgado($key, $con = null)
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
     * @return                 Juzgado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_juzgado`, `nombre`, `juez`, `secretario`, `direccion`, `ciudad` FROM `juzgado` WHERE `id_juzgado` = :p0';
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
            $obj = new Juzgado();
            $obj->hydrate($row);
            JuzgadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Juzgado|Juzgado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Juzgado[]|mixed the list of results, formatted by the current formatter
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
     * @return JuzgadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(JuzgadoPeer::ID_JUZGADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return JuzgadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(JuzgadoPeer::ID_JUZGADO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_juzgado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdJuzgado(1234); // WHERE id_juzgado = 1234
     * $query->filterByIdJuzgado(array(12, 34)); // WHERE id_juzgado IN (12, 34)
     * $query->filterByIdJuzgado(array('min' => 12)); // WHERE id_juzgado >= 12
     * $query->filterByIdJuzgado(array('max' => 12)); // WHERE id_juzgado <= 12
     * </code>
     *
     * @param     mixed $idJuzgado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JuzgadoQuery The current query, for fluid interface
     */
    public function filterByIdJuzgado($idJuzgado = null, $comparison = null)
    {
        if (is_array($idJuzgado)) {
            $useMinMax = false;
            if (isset($idJuzgado['min'])) {
                $this->addUsingAlias(JuzgadoPeer::ID_JUZGADO, $idJuzgado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idJuzgado['max'])) {
                $this->addUsingAlias(JuzgadoPeer::ID_JUZGADO, $idJuzgado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JuzgadoPeer::ID_JUZGADO, $idJuzgado, $comparison);
    }

    /**
     * Filter the query on the nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
     * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JuzgadoQuery The current query, for fluid interface
     */
    public function filterByNombre($nombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombre)) {
                $nombre = str_replace('*', '%', $nombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JuzgadoPeer::NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query on the juez column
     *
     * Example usage:
     * <code>
     * $query->filterByJuez('fooValue');   // WHERE juez = 'fooValue'
     * $query->filterByJuez('%fooValue%'); // WHERE juez LIKE '%fooValue%'
     * </code>
     *
     * @param     string $juez The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JuzgadoQuery The current query, for fluid interface
     */
    public function filterByJuez($juez = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($juez)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $juez)) {
                $juez = str_replace('*', '%', $juez);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JuzgadoPeer::JUEZ, $juez, $comparison);
    }

    /**
     * Filter the query on the secretario column
     *
     * Example usage:
     * <code>
     * $query->filterBySecretario('fooValue');   // WHERE secretario = 'fooValue'
     * $query->filterBySecretario('%fooValue%'); // WHERE secretario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $secretario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JuzgadoQuery The current query, for fluid interface
     */
    public function filterBySecretario($secretario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($secretario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $secretario)) {
                $secretario = str_replace('*', '%', $secretario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JuzgadoPeer::SECRETARIO, $secretario, $comparison);
    }

    /**
     * Filter the query on the direccion column
     *
     * Example usage:
     * <code>
     * $query->filterByDireccion('fooValue');   // WHERE direccion = 'fooValue'
     * $query->filterByDireccion('%fooValue%'); // WHERE direccion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $direccion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JuzgadoQuery The current query, for fluid interface
     */
    public function filterByDireccion($direccion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($direccion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $direccion)) {
                $direccion = str_replace('*', '%', $direccion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JuzgadoPeer::DIRECCION, $direccion, $comparison);
    }

    /**
     * Filter the query on the ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByCiudad('fooValue');   // WHERE ciudad = 'fooValue'
     * $query->filterByCiudad('%fooValue%'); // WHERE ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ciudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JuzgadoQuery The current query, for fluid interface
     */
    public function filterByCiudad($ciudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ciudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ciudad)) {
                $ciudad = str_replace('*', '%', $ciudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JuzgadoPeer::CIUDAD, $ciudad, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Juzgado $juzgado Object to remove from the list of results
     *
     * @return JuzgadoQuery The current query, for fluid interface
     */
    public function prune($juzgado = null)
    {
        if ($juzgado) {
            $this->addUsingAlias(JuzgadoPeer::ID_JUZGADO, $juzgado->getIdJuzgado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
