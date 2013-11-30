<?php


/**
 * Base class that represents a query for the 'expediente' table.
 *
 *
 *
 * @method ExpedienteQuery orderByIdExpediente($order = Criteria::ASC) Order by the id_expediente column
 * @method ExpedienteQuery orderByCaratula($order = Criteria::ASC) Order by the caratula column
 * @method ExpedienteQuery orderByNumExpte($order = Criteria::ASC) Order by the num_expte column
 * @method ExpedienteQuery orderByAnio($order = Criteria::ASC) Order by the anio column
 * @method ExpedienteQuery orderByJuzgado($order = Criteria::ASC) Order by the juzgado column
 * @method ExpedienteQuery orderByTipoDeParte($order = Criteria::ASC) Order by the tipo_de_parte column
 * @method ExpedienteQuery orderByAbogadoContraparte($order = Criteria::ASC) Order by the abogado_contraparte column
 * @method ExpedienteQuery orderByNombreContraparte($order = Criteria::ASC) Order by the nombre_contraparte column
 * @method ExpedienteQuery orderByDomicilioConstContraparte($order = Criteria::ASC) Order by the domicilio_const_contraparte column
 * @method ExpedienteQuery orderByDomicilioRealContraparte($order = Criteria::ASC) Order by the domicilio_real_contraparte column
 * @method ExpedienteQuery orderByCircunscripcion($order = Criteria::ASC) Order by the circunscripcion column
 *
 * @method ExpedienteQuery groupByIdExpediente() Group by the id_expediente column
 * @method ExpedienteQuery groupByCaratula() Group by the caratula column
 * @method ExpedienteQuery groupByNumExpte() Group by the num_expte column
 * @method ExpedienteQuery groupByAnio() Group by the anio column
 * @method ExpedienteQuery groupByJuzgado() Group by the juzgado column
 * @method ExpedienteQuery groupByTipoDeParte() Group by the tipo_de_parte column
 * @method ExpedienteQuery groupByAbogadoContraparte() Group by the abogado_contraparte column
 * @method ExpedienteQuery groupByNombreContraparte() Group by the nombre_contraparte column
 * @method ExpedienteQuery groupByDomicilioConstContraparte() Group by the domicilio_const_contraparte column
 * @method ExpedienteQuery groupByDomicilioRealContraparte() Group by the domicilio_real_contraparte column
 * @method ExpedienteQuery groupByCircunscripcion() Group by the circunscripcion column
 *
 * @method ExpedienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ExpedienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ExpedienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ExpedienteQuery leftJoinExpedienteClienteAbogado($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExpedienteClienteAbogado relation
 * @method ExpedienteQuery rightJoinExpedienteClienteAbogado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExpedienteClienteAbogado relation
 * @method ExpedienteQuery innerJoinExpedienteClienteAbogado($relationAlias = null) Adds a INNER JOIN clause to the query using the ExpedienteClienteAbogado relation
 *
 * @method ExpedienteQuery leftJoinUltimoProv($relationAlias = null) Adds a LEFT JOIN clause to the query using the UltimoProv relation
 * @method ExpedienteQuery rightJoinUltimoProv($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UltimoProv relation
 * @method ExpedienteQuery innerJoinUltimoProv($relationAlias = null) Adds a INNER JOIN clause to the query using the UltimoProv relation
 *
 * @method Expediente findOne(PropelPDO $con = null) Return the first Expediente matching the query
 * @method Expediente findOneOrCreate(PropelPDO $con = null) Return the first Expediente matching the query, or a new Expediente object populated from the query conditions when no match is found
 *
 * @method Expediente findOneByCaratula(string $caratula) Return the first Expediente filtered by the caratula column
 * @method Expediente findOneByNumExpte(int $num_expte) Return the first Expediente filtered by the num_expte column
 * @method Expediente findOneByAnio(int $anio) Return the first Expediente filtered by the anio column
 * @method Expediente findOneByJuzgado(string $juzgado) Return the first Expediente filtered by the juzgado column
 * @method Expediente findOneByTipoDeParte(string $tipo_de_parte) Return the first Expediente filtered by the tipo_de_parte column
 * @method Expediente findOneByAbogadoContraparte(string $abogado_contraparte) Return the first Expediente filtered by the abogado_contraparte column
 * @method Expediente findOneByNombreContraparte(string $nombre_contraparte) Return the first Expediente filtered by the nombre_contraparte column
 * @method Expediente findOneByDomicilioConstContraparte(string $domicilio_const_contraparte) Return the first Expediente filtered by the domicilio_const_contraparte column
 * @method Expediente findOneByDomicilioRealContraparte(string $domicilio_real_contraparte) Return the first Expediente filtered by the domicilio_real_contraparte column
 * @method Expediente findOneByCircunscripcion(string $circunscripcion) Return the first Expediente filtered by the circunscripcion column
 *
 * @method array findByIdExpediente(int $id_expediente) Return Expediente objects filtered by the id_expediente column
 * @method array findByCaratula(string $caratula) Return Expediente objects filtered by the caratula column
 * @method array findByNumExpte(int $num_expte) Return Expediente objects filtered by the num_expte column
 * @method array findByAnio(int $anio) Return Expediente objects filtered by the anio column
 * @method array findByJuzgado(string $juzgado) Return Expediente objects filtered by the juzgado column
 * @method array findByTipoDeParte(string $tipo_de_parte) Return Expediente objects filtered by the tipo_de_parte column
 * @method array findByAbogadoContraparte(string $abogado_contraparte) Return Expediente objects filtered by the abogado_contraparte column
 * @method array findByNombreContraparte(string $nombre_contraparte) Return Expediente objects filtered by the nombre_contraparte column
 * @method array findByDomicilioConstContraparte(string $domicilio_const_contraparte) Return Expediente objects filtered by the domicilio_const_contraparte column
 * @method array findByDomicilioRealContraparte(string $domicilio_real_contraparte) Return Expediente objects filtered by the domicilio_real_contraparte column
 * @method array findByCircunscripcion(string $circunscripcion) Return Expediente objects filtered by the circunscripcion column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseExpedienteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseExpedienteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Expediente', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ExpedienteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ExpedienteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ExpedienteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ExpedienteQuery) {
            return $criteria;
        }
        $query = new ExpedienteQuery();
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
     * @return   Expediente|Expediente[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExpedientePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Expediente A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdExpediente($key, $con = null)
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
     * @return                 Expediente A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_expediente`, `caratula`, `num_expte`, `anio`, `juzgado`, `tipo_de_parte`, `abogado_contraparte`, `nombre_contraparte`, `domicilio_const_contraparte`, `domicilio_real_contraparte`, `circunscripcion` FROM `expediente` WHERE `id_expediente` = :p0';
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
            $obj = new Expediente();
            $obj->hydrate($row);
            ExpedientePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Expediente|Expediente[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Expediente[]|mixed the list of results, formatted by the current formatter
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
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ExpedientePeer::ID_EXPEDIENTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ExpedientePeer::ID_EXPEDIENTE, $keys, Criteria::IN);
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
     * @param     mixed $idExpediente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByIdExpediente($idExpediente = null, $comparison = null)
    {
        if (is_array($idExpediente)) {
            $useMinMax = false;
            if (isset($idExpediente['min'])) {
                $this->addUsingAlias(ExpedientePeer::ID_EXPEDIENTE, $idExpediente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idExpediente['max'])) {
                $this->addUsingAlias(ExpedientePeer::ID_EXPEDIENTE, $idExpediente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::ID_EXPEDIENTE, $idExpediente, $comparison);
    }

    /**
     * Filter the query on the caratula column
     *
     * Example usage:
     * <code>
     * $query->filterByCaratula('fooValue');   // WHERE caratula = 'fooValue'
     * $query->filterByCaratula('%fooValue%'); // WHERE caratula LIKE '%fooValue%'
     * </code>
     *
     * @param     string $caratula The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByCaratula($caratula = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($caratula)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $caratula)) {
                $caratula = str_replace('*', '%', $caratula);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::CARATULA, $caratula, $comparison);
    }

    /**
     * Filter the query on the num_expte column
     *
     * Example usage:
     * <code>
     * $query->filterByNumExpte(1234); // WHERE num_expte = 1234
     * $query->filterByNumExpte(array(12, 34)); // WHERE num_expte IN (12, 34)
     * $query->filterByNumExpte(array('min' => 12)); // WHERE num_expte >= 12
     * $query->filterByNumExpte(array('max' => 12)); // WHERE num_expte <= 12
     * </code>
     *
     * @param     mixed $numExpte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByNumExpte($numExpte = null, $comparison = null)
    {
        if (is_array($numExpte)) {
            $useMinMax = false;
            if (isset($numExpte['min'])) {
                $this->addUsingAlias(ExpedientePeer::NUM_EXPTE, $numExpte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numExpte['max'])) {
                $this->addUsingAlias(ExpedientePeer::NUM_EXPTE, $numExpte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::NUM_EXPTE, $numExpte, $comparison);
    }

    /**
     * Filter the query on the anio column
     *
     * Example usage:
     * <code>
     * $query->filterByAnio(1234); // WHERE anio = 1234
     * $query->filterByAnio(array(12, 34)); // WHERE anio IN (12, 34)
     * $query->filterByAnio(array('min' => 12)); // WHERE anio >= 12
     * $query->filterByAnio(array('max' => 12)); // WHERE anio <= 12
     * </code>
     *
     * @param     mixed $anio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByAnio($anio = null, $comparison = null)
    {
        if (is_array($anio)) {
            $useMinMax = false;
            if (isset($anio['min'])) {
                $this->addUsingAlias(ExpedientePeer::ANIO, $anio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($anio['max'])) {
                $this->addUsingAlias(ExpedientePeer::ANIO, $anio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::ANIO, $anio, $comparison);
    }

    /**
     * Filter the query on the juzgado column
     *
     * Example usage:
     * <code>
     * $query->filterByJuzgado('fooValue');   // WHERE juzgado = 'fooValue'
     * $query->filterByJuzgado('%fooValue%'); // WHERE juzgado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $juzgado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByJuzgado($juzgado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($juzgado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $juzgado)) {
                $juzgado = str_replace('*', '%', $juzgado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::JUZGADO, $juzgado, $comparison);
    }

    /**
     * Filter the query on the tipo_de_parte column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoDeParte('fooValue');   // WHERE tipo_de_parte = 'fooValue'
     * $query->filterByTipoDeParte('%fooValue%'); // WHERE tipo_de_parte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tipoDeParte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByTipoDeParte($tipoDeParte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tipoDeParte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tipoDeParte)) {
                $tipoDeParte = str_replace('*', '%', $tipoDeParte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::TIPO_DE_PARTE, $tipoDeParte, $comparison);
    }

    /**
     * Filter the query on the abogado_contraparte column
     *
     * Example usage:
     * <code>
     * $query->filterByAbogadoContraparte('fooValue');   // WHERE abogado_contraparte = 'fooValue'
     * $query->filterByAbogadoContraparte('%fooValue%'); // WHERE abogado_contraparte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abogadoContraparte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByAbogadoContraparte($abogadoContraparte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abogadoContraparte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abogadoContraparte)) {
                $abogadoContraparte = str_replace('*', '%', $abogadoContraparte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::ABOGADO_CONTRAPARTE, $abogadoContraparte, $comparison);
    }

    /**
     * Filter the query on the nombre_contraparte column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreContraparte('fooValue');   // WHERE nombre_contraparte = 'fooValue'
     * $query->filterByNombreContraparte('%fooValue%'); // WHERE nombre_contraparte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombreContraparte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByNombreContraparte($nombreContraparte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombreContraparte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombreContraparte)) {
                $nombreContraparte = str_replace('*', '%', $nombreContraparte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::NOMBRE_CONTRAPARTE, $nombreContraparte, $comparison);
    }

    /**
     * Filter the query on the domicilio_const_contraparte column
     *
     * Example usage:
     * <code>
     * $query->filterByDomicilioConstContraparte('fooValue');   // WHERE domicilio_const_contraparte = 'fooValue'
     * $query->filterByDomicilioConstContraparte('%fooValue%'); // WHERE domicilio_const_contraparte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $domicilioConstContraparte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByDomicilioConstContraparte($domicilioConstContraparte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($domicilioConstContraparte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $domicilioConstContraparte)) {
                $domicilioConstContraparte = str_replace('*', '%', $domicilioConstContraparte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::DOMICILIO_CONST_CONTRAPARTE, $domicilioConstContraparte, $comparison);
    }

    /**
     * Filter the query on the domicilio_real_contraparte column
     *
     * Example usage:
     * <code>
     * $query->filterByDomicilioRealContraparte('fooValue');   // WHERE domicilio_real_contraparte = 'fooValue'
     * $query->filterByDomicilioRealContraparte('%fooValue%'); // WHERE domicilio_real_contraparte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $domicilioRealContraparte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByDomicilioRealContraparte($domicilioRealContraparte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($domicilioRealContraparte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $domicilioRealContraparte)) {
                $domicilioRealContraparte = str_replace('*', '%', $domicilioRealContraparte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::DOMICILIO_REAL_CONTRAPARTE, $domicilioRealContraparte, $comparison);
    }

    /**
     * Filter the query on the circunscripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByCircunscripcion('fooValue');   // WHERE circunscripcion = 'fooValue'
     * $query->filterByCircunscripcion('%fooValue%'); // WHERE circunscripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $circunscripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByCircunscripcion($circunscripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($circunscripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $circunscripcion)) {
                $circunscripcion = str_replace('*', '%', $circunscripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::CIRCUNSCRIPCION, $circunscripcion, $comparison);
    }

    /**
     * Filter the query by a related ExpedienteClienteAbogado object
     *
     * @param   ExpedienteClienteAbogado|PropelObjectCollection $expedienteClienteAbogado  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpedienteClienteAbogado($expedienteClienteAbogado, $comparison = null)
    {
        if ($expedienteClienteAbogado instanceof ExpedienteClienteAbogado) {
            return $this
                ->addUsingAlias(ExpedientePeer::ID_EXPEDIENTE, $expedienteClienteAbogado->getExpedienteId(), $comparison);
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
     * @return ExpedienteQuery The current query, for fluid interface
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
     * Filter the query by a related UltimoProv object
     *
     * @param   UltimoProv|PropelObjectCollection $ultimoProv  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUltimoProv($ultimoProv, $comparison = null)
    {
        if ($ultimoProv instanceof UltimoProv) {
            return $this
                ->addUsingAlias(ExpedientePeer::ID_EXPEDIENTE, $ultimoProv->getIdExpediente(), $comparison);
        } elseif ($ultimoProv instanceof PropelObjectCollection) {
            return $this
                ->useUltimoProvQuery()
                ->filterByPrimaryKeys($ultimoProv->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUltimoProv() only accepts arguments of type UltimoProv or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UltimoProv relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function joinUltimoProv($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UltimoProv');

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
            $this->addJoinObject($join, 'UltimoProv');
        }

        return $this;
    }

    /**
     * Use the UltimoProv relation UltimoProv object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UltimoProvQuery A secondary query class using the current class as primary query
     */
    public function useUltimoProvQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUltimoProv($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UltimoProv', 'UltimoProvQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Expediente $expediente Object to remove from the list of results
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function prune($expediente = null)
    {
        if ($expediente) {
            $this->addUsingAlias(ExpedientePeer::ID_EXPEDIENTE, $expediente->getIdExpediente(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
