<?php


/**
 * Base class that represents a query for the 'expediente_cliente_abogado' table.
 *
 *
 *
 * @method ExpedienteClienteAbogadoQuery orderByClienteId($order = Criteria::ASC) Order by the cliente_id column
 * @method ExpedienteClienteAbogadoQuery orderByAbogadoId($order = Criteria::ASC) Order by the abogado_id column
 * @method ExpedienteClienteAbogadoQuery orderByExpedienteId($order = Criteria::ASC) Order by the expediente_id column
 *
 * @method ExpedienteClienteAbogadoQuery groupByClienteId() Group by the cliente_id column
 * @method ExpedienteClienteAbogadoQuery groupByAbogadoId() Group by the abogado_id column
 * @method ExpedienteClienteAbogadoQuery groupByExpedienteId() Group by the expediente_id column
 *
 * @method ExpedienteClienteAbogadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ExpedienteClienteAbogadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ExpedienteClienteAbogadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ExpedienteClienteAbogadoQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method ExpedienteClienteAbogadoQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method ExpedienteClienteAbogadoQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method ExpedienteClienteAbogadoQuery leftJoinAbogado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Abogado relation
 * @method ExpedienteClienteAbogadoQuery rightJoinAbogado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Abogado relation
 * @method ExpedienteClienteAbogadoQuery innerJoinAbogado($relationAlias = null) Adds a INNER JOIN clause to the query using the Abogado relation
 *
 * @method ExpedienteClienteAbogadoQuery leftJoinExpediente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expediente relation
 * @method ExpedienteClienteAbogadoQuery rightJoinExpediente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expediente relation
 * @method ExpedienteClienteAbogadoQuery innerJoinExpediente($relationAlias = null) Adds a INNER JOIN clause to the query using the Expediente relation
 *
 * @method ExpedienteClienteAbogado findOne(PropelPDO $con = null) Return the first ExpedienteClienteAbogado matching the query
 * @method ExpedienteClienteAbogado findOneOrCreate(PropelPDO $con = null) Return the first ExpedienteClienteAbogado matching the query, or a new ExpedienteClienteAbogado object populated from the query conditions when no match is found
 *
 * @method ExpedienteClienteAbogado findOneByClienteId(int $cliente_id) Return the first ExpedienteClienteAbogado filtered by the cliente_id column
 * @method ExpedienteClienteAbogado findOneByAbogadoId(int $abogado_id) Return the first ExpedienteClienteAbogado filtered by the abogado_id column
 * @method ExpedienteClienteAbogado findOneByExpedienteId(int $expediente_id) Return the first ExpedienteClienteAbogado filtered by the expediente_id column
 *
 * @method array findByClienteId(int $cliente_id) Return ExpedienteClienteAbogado objects filtered by the cliente_id column
 * @method array findByAbogadoId(int $abogado_id) Return ExpedienteClienteAbogado objects filtered by the abogado_id column
 * @method array findByExpedienteId(int $expediente_id) Return ExpedienteClienteAbogado objects filtered by the expediente_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseExpedienteClienteAbogadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseExpedienteClienteAbogadoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'ExpedienteClienteAbogado', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ExpedienteClienteAbogadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ExpedienteClienteAbogadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ExpedienteClienteAbogadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ExpedienteClienteAbogadoQuery) {
            return $criteria;
        }
        $query = new ExpedienteClienteAbogadoQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$cliente_id, $abogado_id, $expediente_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ExpedienteClienteAbogado|ExpedienteClienteAbogado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExpedienteClienteAbogadoPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ExpedienteClienteAbogado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `cliente_id`, `abogado_id`, `expediente_id` FROM `expediente_cliente_abogado` WHERE `cliente_id` = :p0 AND `abogado_id` = :p1 AND `expediente_id` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ExpedienteClienteAbogado();
            $obj->hydrate($row);
            ExpedienteClienteAbogadoPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return ExpedienteClienteAbogado|ExpedienteClienteAbogado[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|ExpedienteClienteAbogado[]|mixed the list of results, formatted by the current formatter
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
     * @return ExpedienteClienteAbogadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ExpedienteClienteAbogadoPeer::CLIENTE_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ExpedienteClienteAbogadoPeer::ABOGADO_ID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ExpedienteClienteAbogadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ExpedienteClienteAbogadoPeer::CLIENTE_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ExpedienteClienteAbogadoPeer::ABOGADO_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return ExpedienteClienteAbogadoQuery The current query, for fluid interface
     */
    public function filterByClienteId($clienteId = null, $comparison = null)
    {
        if (is_array($clienteId)) {
            $useMinMax = false;
            if (isset($clienteId['min'])) {
                $this->addUsingAlias(ExpedienteClienteAbogadoPeer::CLIENTE_ID, $clienteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clienteId['max'])) {
                $this->addUsingAlias(ExpedienteClienteAbogadoPeer::CLIENTE_ID, $clienteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedienteClienteAbogadoPeer::CLIENTE_ID, $clienteId, $comparison);
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
     * @return ExpedienteClienteAbogadoQuery The current query, for fluid interface
     */
    public function filterByAbogadoId($abogadoId = null, $comparison = null)
    {
        if (is_array($abogadoId)) {
            $useMinMax = false;
            if (isset($abogadoId['min'])) {
                $this->addUsingAlias(ExpedienteClienteAbogadoPeer::ABOGADO_ID, $abogadoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abogadoId['max'])) {
                $this->addUsingAlias(ExpedienteClienteAbogadoPeer::ABOGADO_ID, $abogadoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedienteClienteAbogadoPeer::ABOGADO_ID, $abogadoId, $comparison);
    }

    /**
     * Filter the query on the expediente_id column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteId(1234); // WHERE expediente_id = 1234
     * $query->filterByExpedienteId(array(12, 34)); // WHERE expediente_id IN (12, 34)
     * $query->filterByExpedienteId(array('min' => 12)); // WHERE expediente_id >= 12
     * $query->filterByExpedienteId(array('max' => 12)); // WHERE expediente_id <= 12
     * </code>
     *
     * @see       filterByExpediente()
     *
     * @param     mixed $expedienteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteClienteAbogadoQuery The current query, for fluid interface
     */
    public function filterByExpedienteId($expedienteId = null, $comparison = null)
    {
        if (is_array($expedienteId)) {
            $useMinMax = false;
            if (isset($expedienteId['min'])) {
                $this->addUsingAlias(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, $expedienteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedienteId['max'])) {
                $this->addUsingAlias(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, $expedienteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, $expedienteId, $comparison);
    }

    /**
     * Filter the query by a related Cliente object
     *
     * @param   Cliente|PropelObjectCollection $cliente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteClienteAbogadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCliente($cliente, $comparison = null)
    {
        if ($cliente instanceof Cliente) {
            return $this
                ->addUsingAlias(ExpedienteClienteAbogadoPeer::CLIENTE_ID, $cliente->getIdCliente(), $comparison);
        } elseif ($cliente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedienteClienteAbogadoPeer::CLIENTE_ID, $cliente->toKeyValue('PrimaryKey', 'IdCliente'), $comparison);
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
     * @return ExpedienteClienteAbogadoQuery The current query, for fluid interface
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
     * Filter the query by a related Abogado object
     *
     * @param   Abogado|PropelObjectCollection $abogado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteClienteAbogadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAbogado($abogado, $comparison = null)
    {
        if ($abogado instanceof Abogado) {
            return $this
                ->addUsingAlias(ExpedienteClienteAbogadoPeer::ABOGADO_ID, $abogado->getIdAbogado(), $comparison);
        } elseif ($abogado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedienteClienteAbogadoPeer::ABOGADO_ID, $abogado->toKeyValue('PrimaryKey', 'IdAbogado'), $comparison);
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
     * @return ExpedienteClienteAbogadoQuery The current query, for fluid interface
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
     * Filter the query by a related Expediente object
     *
     * @param   Expediente|PropelObjectCollection $expediente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteClienteAbogadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpediente($expediente, $comparison = null)
    {
        if ($expediente instanceof Expediente) {
            return $this
                ->addUsingAlias(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, $expediente->getIdExpediente(), $comparison);
        } elseif ($expediente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, $expediente->toKeyValue('PrimaryKey', 'IdExpediente'), $comparison);
        } else {
            throw new PropelException('filterByExpediente() only accepts arguments of type Expediente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Expediente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedienteClienteAbogadoQuery The current query, for fluid interface
     */
    public function joinExpediente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Expediente');

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
            $this->addJoinObject($join, 'Expediente');
        }

        return $this;
    }

    /**
     * Use the Expediente relation Expediente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExpedienteQuery A secondary query class using the current class as primary query
     */
    public function useExpedienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExpediente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Expediente', 'ExpedienteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ExpedienteClienteAbogado $expedienteClienteAbogado Object to remove from the list of results
     *
     * @return ExpedienteClienteAbogadoQuery The current query, for fluid interface
     */
    public function prune($expedienteClienteAbogado = null)
    {
        if ($expedienteClienteAbogado) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ExpedienteClienteAbogadoPeer::CLIENTE_ID), $expedienteClienteAbogado->getClienteId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ExpedienteClienteAbogadoPeer::ABOGADO_ID), $expedienteClienteAbogado->getAbogadoId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID), $expedienteClienteAbogado->getExpedienteId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
