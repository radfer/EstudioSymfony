<?php


/**
 * Base class that represents a query for the 'abogado' table.
 *
 *
 *
 * @method AbogadoQuery orderByIdAbogado($order = Criteria::ASC) Order by the id_abogado column
 * @method AbogadoQuery orderByApellido($order = Criteria::ASC) Order by the apellido column
 * @method AbogadoQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method AbogadoQuery orderByDni($order = Criteria::ASC) Order by the dni column
 * @method AbogadoQuery orderByMatricula($order = Criteria::ASC) Order by the matricula column
 * @method AbogadoQuery orderByTelefono($order = Criteria::ASC) Order by the telefono column
 * @method AbogadoQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method AbogadoQuery orderByContrasenia($order = Criteria::ASC) Order by the contrasenia column
 *
 * @method AbogadoQuery groupByIdAbogado() Group by the id_abogado column
 * @method AbogadoQuery groupByApellido() Group by the apellido column
 * @method AbogadoQuery groupByNombre() Group by the nombre column
 * @method AbogadoQuery groupByDni() Group by the dni column
 * @method AbogadoQuery groupByMatricula() Group by the matricula column
 * @method AbogadoQuery groupByTelefono() Group by the telefono column
 * @method AbogadoQuery groupByMail() Group by the mail column
 * @method AbogadoQuery groupByContrasenia() Group by the contrasenia column
 *
 * @method AbogadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AbogadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AbogadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AbogadoQuery leftJoinConsulta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Consulta relation
 * @method AbogadoQuery rightJoinConsulta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Consulta relation
 * @method AbogadoQuery innerJoinConsulta($relationAlias = null) Adds a INNER JOIN clause to the query using the Consulta relation
 *
 * @method AbogadoQuery leftJoinExpedienteClienteAbogado($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExpedienteClienteAbogado relation
 * @method AbogadoQuery rightJoinExpedienteClienteAbogado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExpedienteClienteAbogado relation
 * @method AbogadoQuery innerJoinExpedienteClienteAbogado($relationAlias = null) Adds a INNER JOIN clause to the query using the ExpedienteClienteAbogado relation
 *
 * @method Abogado findOne(PropelPDO $con = null) Return the first Abogado matching the query
 * @method Abogado findOneOrCreate(PropelPDO $con = null) Return the first Abogado matching the query, or a new Abogado object populated from the query conditions when no match is found
 *
 * @method Abogado findOneByApellido(string $apellido) Return the first Abogado filtered by the apellido column
 * @method Abogado findOneByNombre(string $nombre) Return the first Abogado filtered by the nombre column
 * @method Abogado findOneByDni(int $dni) Return the first Abogado filtered by the dni column
 * @method Abogado findOneByMatricula(string $matricula) Return the first Abogado filtered by the matricula column
 * @method Abogado findOneByTelefono(string $telefono) Return the first Abogado filtered by the telefono column
 * @method Abogado findOneByMail(string $mail) Return the first Abogado filtered by the mail column
 * @method Abogado findOneByContrasenia(string $contrasenia) Return the first Abogado filtered by the contrasenia column
 *
 * @method array findByIdAbogado(int $id_abogado) Return Abogado objects filtered by the id_abogado column
 * @method array findByApellido(string $apellido) Return Abogado objects filtered by the apellido column
 * @method array findByNombre(string $nombre) Return Abogado objects filtered by the nombre column
 * @method array findByDni(int $dni) Return Abogado objects filtered by the dni column
 * @method array findByMatricula(string $matricula) Return Abogado objects filtered by the matricula column
 * @method array findByTelefono(string $telefono) Return Abogado objects filtered by the telefono column
 * @method array findByMail(string $mail) Return Abogado objects filtered by the mail column
 * @method array findByContrasenia(string $contrasenia) Return Abogado objects filtered by the contrasenia column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAbogadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAbogadoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Abogado', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AbogadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AbogadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AbogadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AbogadoQuery) {
            return $criteria;
        }
        $query = new AbogadoQuery();
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
     * @return   Abogado|Abogado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AbogadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AbogadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Abogado A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAbogado($key, $con = null)
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
     * @return                 Abogado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_abogado`, `apellido`, `nombre`, `dni`, `matricula`, `telefono`, `mail`, `contrasenia` FROM `abogado` WHERE `id_abogado` = :p0';
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
            $obj = new Abogado();
            $obj->hydrate($row);
            AbogadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Abogado|Abogado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Abogado[]|mixed the list of results, formatted by the current formatter
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
     * @return AbogadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AbogadoPeer::ID_ABOGADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AbogadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AbogadoPeer::ID_ABOGADO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_abogado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAbogado(1234); // WHERE id_abogado = 1234
     * $query->filterByIdAbogado(array(12, 34)); // WHERE id_abogado IN (12, 34)
     * $query->filterByIdAbogado(array('min' => 12)); // WHERE id_abogado >= 12
     * $query->filterByIdAbogado(array('max' => 12)); // WHERE id_abogado <= 12
     * </code>
     *
     * @param     mixed $idAbogado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbogadoQuery The current query, for fluid interface
     */
    public function filterByIdAbogado($idAbogado = null, $comparison = null)
    {
        if (is_array($idAbogado)) {
            $useMinMax = false;
            if (isset($idAbogado['min'])) {
                $this->addUsingAlias(AbogadoPeer::ID_ABOGADO, $idAbogado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAbogado['max'])) {
                $this->addUsingAlias(AbogadoPeer::ID_ABOGADO, $idAbogado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbogadoPeer::ID_ABOGADO, $idAbogado, $comparison);
    }

    /**
     * Filter the query on the apellido column
     *
     * Example usage:
     * <code>
     * $query->filterByApellido('fooValue');   // WHERE apellido = 'fooValue'
     * $query->filterByApellido('%fooValue%'); // WHERE apellido LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apellido The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbogadoQuery The current query, for fluid interface
     */
    public function filterByApellido($apellido = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apellido)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apellido)) {
                $apellido = str_replace('*', '%', $apellido);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbogadoPeer::APELLIDO, $apellido, $comparison);
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
     * @return AbogadoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AbogadoPeer::NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query on the dni column
     *
     * Example usage:
     * <code>
     * $query->filterByDni(1234); // WHERE dni = 1234
     * $query->filterByDni(array(12, 34)); // WHERE dni IN (12, 34)
     * $query->filterByDni(array('min' => 12)); // WHERE dni >= 12
     * $query->filterByDni(array('max' => 12)); // WHERE dni <= 12
     * </code>
     *
     * @param     mixed $dni The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbogadoQuery The current query, for fluid interface
     */
    public function filterByDni($dni = null, $comparison = null)
    {
        if (is_array($dni)) {
            $useMinMax = false;
            if (isset($dni['min'])) {
                $this->addUsingAlias(AbogadoPeer::DNI, $dni['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dni['max'])) {
                $this->addUsingAlias(AbogadoPeer::DNI, $dni['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbogadoPeer::DNI, $dni, $comparison);
    }

    /**
     * Filter the query on the matricula column
     *
     * Example usage:
     * <code>
     * $query->filterByMatricula('fooValue');   // WHERE matricula = 'fooValue'
     * $query->filterByMatricula('%fooValue%'); // WHERE matricula LIKE '%fooValue%'
     * </code>
     *
     * @param     string $matricula The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbogadoQuery The current query, for fluid interface
     */
    public function filterByMatricula($matricula = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($matricula)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $matricula)) {
                $matricula = str_replace('*', '%', $matricula);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbogadoPeer::MATRICULA, $matricula, $comparison);
    }

    /**
     * Filter the query on the telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefono('fooValue');   // WHERE telefono = 'fooValue'
     * $query->filterByTelefono('%fooValue%'); // WHERE telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbogadoQuery The current query, for fluid interface
     */
    public function filterByTelefono($telefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefono)) {
                $telefono = str_replace('*', '%', $telefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbogadoPeer::TELEFONO, $telefono, $comparison);
    }

    /**
     * Filter the query on the mail column
     *
     * Example usage:
     * <code>
     * $query->filterByMail('fooValue');   // WHERE mail = 'fooValue'
     * $query->filterByMail('%fooValue%'); // WHERE mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbogadoQuery The current query, for fluid interface
     */
    public function filterByMail($mail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail)) {
                $mail = str_replace('*', '%', $mail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbogadoPeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the contrasenia column
     *
     * Example usage:
     * <code>
     * $query->filterByContrasenia('fooValue');   // WHERE contrasenia = 'fooValue'
     * $query->filterByContrasenia('%fooValue%'); // WHERE contrasenia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contrasenia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbogadoQuery The current query, for fluid interface
     */
    public function filterByContrasenia($contrasenia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contrasenia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contrasenia)) {
                $contrasenia = str_replace('*', '%', $contrasenia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbogadoPeer::CONTRASENIA, $contrasenia, $comparison);
    }

    /**
     * Filter the query by a related Consulta object
     *
     * @param   Consulta|PropelObjectCollection $consulta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AbogadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConsulta($consulta, $comparison = null)
    {
        if ($consulta instanceof Consulta) {
            return $this
                ->addUsingAlias(AbogadoPeer::ID_ABOGADO, $consulta->getAbogadoId(), $comparison);
        } elseif ($consulta instanceof PropelObjectCollection) {
            return $this
                ->useConsultaQuery()
                ->filterByPrimaryKeys($consulta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByConsulta() only accepts arguments of type Consulta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Consulta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AbogadoQuery The current query, for fluid interface
     */
    public function joinConsulta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Consulta');

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
            $this->addJoinObject($join, 'Consulta');
        }

        return $this;
    }

    /**
     * Use the Consulta relation Consulta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConsultaQuery A secondary query class using the current class as primary query
     */
    public function useConsultaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConsulta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Consulta', 'ConsultaQuery');
    }

    /**
     * Filter the query by a related ExpedienteClienteAbogado object
     *
     * @param   ExpedienteClienteAbogado|PropelObjectCollection $expedienteClienteAbogado  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AbogadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpedienteClienteAbogado($expedienteClienteAbogado, $comparison = null)
    {
        if ($expedienteClienteAbogado instanceof ExpedienteClienteAbogado) {
            return $this
                ->addUsingAlias(AbogadoPeer::ID_ABOGADO, $expedienteClienteAbogado->getAbogadoId(), $comparison);
        } elseif ($expedienteClienteAbogado instanceof PropelObjectCollection) {
            return $this
                ->useExpedienteClienteAbogadoQuery()
                ->filterByPrimaryKeys($expedienteClienteAbogado->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExpedienteClienteAbogado() only accepts arguments of type ExpedienteClienteAbogado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExpedienteClienteAbogado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AbogadoQuery The current query, for fluid interface
     */
    public function joinExpedienteClienteAbogado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExpedienteClienteAbogado');

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
            $this->addJoinObject($join, 'ExpedienteClienteAbogado');
        }

        return $this;
    }

    /**
     * Use the ExpedienteClienteAbogado relation ExpedienteClienteAbogado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExpedienteClienteAbogadoQuery A secondary query class using the current class as primary query
     */
    public function useExpedienteClienteAbogadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExpedienteClienteAbogado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExpedienteClienteAbogado', 'ExpedienteClienteAbogadoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Abogado $abogado Object to remove from the list of results
     *
     * @return AbogadoQuery The current query, for fluid interface
     */
    public function prune($abogado = null)
    {
        if ($abogado) {
            $this->addUsingAlias(AbogadoPeer::ID_ABOGADO, $abogado->getIdAbogado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
