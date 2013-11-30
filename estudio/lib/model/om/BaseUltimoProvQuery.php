<?php


/**
 * Base class that represents a query for the 'ultimo_prov' table.
 *
 *
 *
 * @method UltimoProvQuery orderByIdProv($order = Criteria::ASC) Order by the id_prov column
 * @method UltimoProvQuery orderByIdExpediente($order = Criteria::ASC) Order by the id_expediente column
 * @method UltimoProvQuery orderByUltimoMovimiento($order = Criteria::ASC) Order by the ultimo_movimiento column
 *
 * @method UltimoProvQuery groupByIdProv() Group by the id_prov column
 * @method UltimoProvQuery groupByIdExpediente() Group by the id_expediente column
 * @method UltimoProvQuery groupByUltimoMovimiento() Group by the ultimo_movimiento column
 *
 * @method UltimoProvQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UltimoProvQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UltimoProvQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UltimoProvQuery leftJoinExpediente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expediente relation
 * @method UltimoProvQuery rightJoinExpediente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expediente relation
 * @method UltimoProvQuery innerJoinExpediente($relationAlias = null) Adds a INNER JOIN clause to the query using the Expediente relation
 *
 * @method UltimoProv findOne(PropelPDO $con = null) Return the first UltimoProv matching the query
 * @method UltimoProv findOneOrCreate(PropelPDO $con = null) Return the first UltimoProv matching the query, or a new UltimoProv object populated from the query conditions when no match is found
 *
 * @method UltimoProv findOneByIdExpediente(int $id_expediente) Return the first UltimoProv filtered by the id_expediente column
 * @method UltimoProv findOneByUltimoMovimiento(string $ultimo_movimiento) Return the first UltimoProv filtered by the ultimo_movimiento column
 *
 * @method array findByIdProv(int $id_prov) Return UltimoProv objects filtered by the id_prov column
 * @method array findByIdExpediente(int $id_expediente) Return UltimoProv objects filtered by the id_expediente column
 * @method array findByUltimoMovimiento(string $ultimo_movimiento) Return UltimoProv objects filtered by the ultimo_movimiento column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseUltimoProvQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUltimoProvQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'UltimoProv', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UltimoProvQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UltimoProvQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UltimoProvQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UltimoProvQuery) {
            return $criteria;
        }
        $query = new UltimoProvQuery();
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
     * @return   UltimoProv|UltimoProv[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UltimoProvPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UltimoProvPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 UltimoProv A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdProv($key, $con = null)
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
     * @return                 UltimoProv A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_prov`, `id_expediente`, `ultimo_movimiento` FROM `ultimo_prov` WHERE `id_prov` = :p0';
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
            $obj = new UltimoProv();
            $obj->hydrate($row);
            UltimoProvPeer::addInstanceToPool($obj, (string) $key);
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
     * @return UltimoProv|UltimoProv[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|UltimoProv[]|mixed the list of results, formatted by the current formatter
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
     * @return UltimoProvQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UltimoProvPeer::ID_PROV, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UltimoProvQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UltimoProvPeer::ID_PROV, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_prov column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProv(1234); // WHERE id_prov = 1234
     * $query->filterByIdProv(array(12, 34)); // WHERE id_prov IN (12, 34)
     * $query->filterByIdProv(array('min' => 12)); // WHERE id_prov >= 12
     * $query->filterByIdProv(array('max' => 12)); // WHERE id_prov <= 12
     * </code>
     *
     * @param     mixed $idProv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UltimoProvQuery The current query, for fluid interface
     */
    public function filterByIdProv($idProv = null, $comparison = null)
    {
        if (is_array($idProv)) {
            $useMinMax = false;
            if (isset($idProv['min'])) {
                $this->addUsingAlias(UltimoProvPeer::ID_PROV, $idProv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProv['max'])) {
                $this->addUsingAlias(UltimoProvPeer::ID_PROV, $idProv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UltimoProvPeer::ID_PROV, $idProv, $comparison);
    }

    /**
     * Filter the query on the id_expediente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdExpediente(1234); // WHERE id_expediente = 1234
     * $query->filterByIdExpediente(array(12, 34)); // WHERE id_expediente IN (12, 34)
     * $query->filterByIdExpediente(array('min' => 12)); // WHERE id_expediente >= 12
     * $query->filterByIdExpediente(array('max' => 12)); // WHERE id_expediente <= 12
     * </code>
     *
     * @see       filterByExpediente()
     *
     * @param     mixed $idExpediente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UltimoProvQuery The current query, for fluid interface
     */
    public function filterByIdExpediente($idExpediente = null, $comparison = null)
    {
        if (is_array($idExpediente)) {
            $useMinMax = false;
            if (isset($idExpediente['min'])) {
                $this->addUsingAlias(UltimoProvPeer::ID_EXPEDIENTE, $idExpediente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idExpediente['max'])) {
                $this->addUsingAlias(UltimoProvPeer::ID_EXPEDIENTE, $idExpediente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UltimoProvPeer::ID_EXPEDIENTE, $idExpediente, $comparison);
    }

    /**
     * Filter the query on the ultimo_movimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByUltimoMovimiento('fooValue');   // WHERE ultimo_movimiento = 'fooValue'
     * $query->filterByUltimoMovimiento('%fooValue%'); // WHERE ultimo_movimiento LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ultimoMovimiento The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UltimoProvQuery The current query, for fluid interface
     */
    public function filterByUltimoMovimiento($ultimoMovimiento = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ultimoMovimiento)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ultimoMovimiento)) {
                $ultimoMovimiento = str_replace('*', '%', $ultimoMovimiento);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UltimoProvPeer::ULTIMO_MOVIMIENTO, $ultimoMovimiento, $comparison);
    }

    /**
     * Filter the query by a related Expediente object
     *
     * @param   Expediente|PropelObjectCollection $expediente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UltimoProvQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpediente($expediente, $comparison = null)
    {
        if ($expediente instanceof Expediente) {
            return $this
                ->addUsingAlias(UltimoProvPeer::ID_EXPEDIENTE, $expediente->getIdExpediente(), $comparison);
        } elseif ($expediente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UltimoProvPeer::ID_EXPEDIENTE, $expediente->toKeyValue('PrimaryKey', 'IdExpediente'), $comparison);
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
     * @return UltimoProvQuery The current query, for fluid interface
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
     * @param   UltimoProv $ultimoProv Object to remove from the list of results
     *
     * @return UltimoProvQuery The current query, for fluid interface
     */
    public function prune($ultimoProv = null)
    {
        if ($ultimoProv) {
            $this->addUsingAlias(UltimoProvPeer::ID_PROV, $ultimoProv->getIdProv(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
