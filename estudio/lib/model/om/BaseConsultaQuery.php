<?php


/**
 * Base class that represents a query for the 'consulta' table.
 *
 *
 *
 * @method ConsultaQuery orderByIdConsulta($order = Criteria::ASC) Order by the id_consulta column
 * @method ConsultaQuery orderByFecha($order = Criteria::ASC) Order by the fecha column
 * @method ConsultaQuery orderByAbogadoId($order = Criteria::ASC) Order by the abogado_id column
 * @method ConsultaQuery orderByClienteId($order = Criteria::ASC) Order by the cliente_id column
 * @method ConsultaQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 *
 * @method ConsultaQuery groupByIdConsulta() Group by the id_consulta column
 * @method ConsultaQuery groupByFecha() Group by the fecha column
 * @method ConsultaQuery groupByAbogadoId() Group by the abogado_id column
 * @method ConsultaQuery groupByClienteId() Group by the cliente_id column
 * @method ConsultaQuery groupByDescripcion() Group by the descripcion column
 *
 * @method ConsultaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConsultaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConsultaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConsultaQuery leftJoinAbogado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Abogado relation
 * @method ConsultaQuery rightJoinAbogado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Abogado relation
 * @method ConsultaQuery innerJoinAbogado($relationAlias = null) Adds a INNER JOIN clause to the query using the Abogado relation
 *
 * @method ConsultaQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method ConsultaQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method ConsultaQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method Consulta findOne(PropelPDO $con = null) Return the first Consulta matching the query
 * @method Consulta findOneOrCreate(PropelPDO $con = null) Return the first Consulta matching the query, or a new Consulta object populated from the query conditions when no match is found
 *
 * @method Consulta findOneByFecha(string $fecha) Return the first Consulta filtered by the fecha column
 * @method Consulta findOneByAbogadoId(int $abogado_id) Return the first Consulta filtered by the abogado_id column
 * @method Consulta findOneByClienteId(int $cliente_id) Return the first Consulta filtered by the cliente_id column
 * @method Consulta findOneByDescripcion(string $descripcion) Return the first Consulta filtered by the descripcion column
 *
 * @method array findByIdConsulta(int $id_consulta) Return Consulta objects filtered by the id_consulta column
 * @method array findByFecha(string $fecha) Return Consulta objects filtered by the fecha column
 * @method array findByAbogadoId(int $abogado_id) Return Consulta objects filtered by the abogado_id column
 * @method array findByClienteId(int $cliente_id) Return Consulta objects filtered by the cliente_id column
 * @method array findByDescripcion(string $descripcion) Return Consulta objects filtered by the descripcion column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseConsultaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConsultaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Consulta', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConsultaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConsultaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConsultaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConsultaQuery) {
            return $criteria;
        }
        $query = new ConsultaQuery();
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
     * @return   Consulta|Consulta[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConsultaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Consulta A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdConsulta($key, $con = null)
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
     * @return                 Consulta A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_consulta`, `fecha`, `abogado_id`, `cliente_id`, `descripcion` FROM `consulta` WHERE `id_consulta` = :p0';
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
            $obj = new Consulta();
            $obj->hydrate($row);
            ConsultaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Consulta|Consulta[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Consulta[]|mixed the list of results, formatted by the current formatter
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
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConsultaPeer::ID_CONSULTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConsultaPeer::ID_CONSULTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_consulta column
     *
     * Example usage:
     * <code>
     * $query->filterByIdConsulta(1234); // WHERE id_consulta = 1234
     * $query->filterByIdConsulta(array(12, 34)); // WHERE id_consulta IN (12, 34)
     * $query->filterByIdConsulta(array('min' => 12)); // WHERE id_consulta >= 12
     * $query->filterByIdConsulta(array('max' => 12)); // WHERE id_consulta <= 12
     * </code>
     *
     * @param     mixed $idConsulta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByIdConsulta($idConsulta = null, $comparison = null)
    {
        if (is_array($idConsulta)) {
            $useMinMax = false;
            if (isset($idConsulta['min'])) {
                $this->addUsingAlias(ConsultaPeer::ID_CONSULTA, $idConsulta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idConsulta['max'])) {
                $this->addUsingAlias(ConsultaPeer::ID_CONSULTA, $idConsulta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::ID_CONSULTA, $idConsulta, $comparison);
    }

    /**
     * Filter the query on the fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByFecha('2011-03-14'); // WHERE fecha = '2011-03-14'
     * $query->filterByFecha('now'); // WHERE fecha = '2011-03-14'
     * $query->filterByFecha(array('max' => 'yesterday')); // WHERE fecha > '2011-03-13'
     * </code>
     *
     * @param     mixed $fecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByFecha($fecha = null, $comparison = null)
    {
        if (is_array($fecha)) {
            $useMinMax = false;
            if (isset($fecha['min'])) {
                $this->addUsingAlias(ConsultaPeer::FECHA, $fecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecha['max'])) {
                $this->addUsingAlias(ConsultaPeer::FECHA, $fecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::FECHA, $fecha, $comparison);
    }

    /**
     * Filter the query on the abogado_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAbogadoId(1234); // WHERE abogado_id = 1234
     * $query->filterByAbogadoId(array(12, 34)); // WHERE abogado_id IN (12, 34)
     * $query->filterByAbogadoId(array('min' => 12)); // WHERE abogado_id >= 12
     * $query->filterByAbogadoId(array('max' => 12)); // WHERE abogado_id <= 12
     * </code>
     *
     * @see       filterByAbogado()
     *
     * @param     mixed $abogadoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByAbogadoId($abogadoId = null, $comparison = null)
    {
        if (is_array($abogadoId)) {
            $useMinMax = false;
            if (isset($abogadoId['min'])) {
                $this->addUsingAlias(ConsultaPeer::ABOGADO_ID, $abogadoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abogadoId['max'])) {
                $this->addUsingAlias(ConsultaPeer::ABOGADO_ID, $abogadoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::ABOGADO_ID, $abogadoId, $comparison);
    }

    /**
     * Filter the query on the cliente_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteId(1234); // WHERE cliente_id = 1234
     * $query->filterByClienteId(array(12, 34)); // WHERE cliente_id IN (12, 34)
     * $query->filterByClienteId(array('min' => 12)); // WHERE cliente_id >= 12
     * $query->filterByClienteId(array('max' => 12)); // WHERE cliente_id <= 12
     * </code>
     *
     * @see       filterByCliente()
     *
     * @param     mixed $clienteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByClienteId($clienteId = null, $comparison = null)
    {
        if (is_array($clienteId)) {
            $useMinMax = false;
            if (isset($clienteId['min'])) {
                $this->addUsingAlias(ConsultaPeer::CLIENTE_ID, $clienteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clienteId['max'])) {
                $this->addUsingAlias(ConsultaPeer::CLIENTE_ID, $clienteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::CLIENTE_ID, $clienteId, $comparison);
    }

    /**
     * Filter the query on the descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
     * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByDescripcion($descripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripcion)) {
                $descripcion = str_replace('*', '%', $descripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query by a related Abogado object
     *
     * @param   Abogado|PropelObjectCollection $abogado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConsultaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAbogado($abogado, $comparison = null)
    {
        if ($abogado instanceof Abogado) {
            return $this
                ->addUsingAlias(ConsultaPeer::ABOGADO_ID, $abogado->getIdAbogado(), $comparison);
        } elseif ($abogado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ConsultaPeer::ABOGADO_ID, $abogado->toKeyValue('PrimaryKey', 'IdAbogado'), $comparison);
        } else {
            throw new PropelException('filterByAbogado() only accepts arguments of type Abogado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Abogado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function joinAbogado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Abogado');

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
            $this->addJoinObject($join, 'Abogado');
        }

        return $this;
    }

    /**
     * Use the Abogado relation Abogado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AbogadoQuery A secondary query class using the current class as primary query
     */
    public function useAbogadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAbogado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Abogado', 'AbogadoQuery');
    }

    /**
     * Filter the query by a related Cliente object
     *
     * @param   Cliente|PropelObjectCollection $cliente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConsultaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCliente($cliente, $comparison = null)
    {
        if ($cliente instanceof Cliente) {
            return $this
                ->addUsingAlias(ConsultaPeer::CLIENTE_ID, $cliente->getIdCliente(), $comparison);
        } elseif ($cliente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ConsultaPeer::CLIENTE_ID, $cliente->toKeyValue('PrimaryKey', 'IdCliente'), $comparison);
        } else {
            throw new PropelException('filterByCliente() only accepts arguments of type Cliente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cliente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function joinCliente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cliente');

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
            $this->addJoinObject($join, 'Cliente');
        }

        return $this;
    }

    /**
     * Use the Cliente relation Cliente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClienteQuery A secondary query class using the current class as primary query
     */
    public function useClienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCliente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cliente', 'ClienteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Consulta $consulta Object to remove from the list of results
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function prune($consulta = null)
    {
        if ($consulta) {
            $this->addUsingAlias(ConsultaPeer::ID_CONSULTA, $consulta->getIdConsulta(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
