<?php


/**
 * Base static class for performing query and update operations on the 'expediente_cliente_abogado' table.
 *
 *
 *
 * @package propel.generator.lib.model.om
 */
abstract class BaseExpedienteClienteAbogadoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'propel';

    /** the table name for this class */
    const TABLE_NAME = 'expediente_cliente_abogado';

    /** the related Propel class for this table */
    const OM_CLASS = 'ExpedienteClienteAbogado';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ExpedienteClienteAbogadoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 3;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 3;

    /** the column name for the cliente_id field */
    const CLIENTE_ID = 'expediente_cliente_abogado.cliente_id';

    /** the column name for the abogado_id field */
    const ABOGADO_ID = 'expediente_cliente_abogado.abogado_id';

    /** the column name for the expediente_id field */
    const EXPEDIENTE_ID = 'expediente_cliente_abogado.expediente_id';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of ExpedienteClienteAbogado objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ExpedienteClienteAbogado[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ExpedienteClienteAbogadoPeer::$fieldNames[ExpedienteClienteAbogadoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ClienteId', 'AbogadoId', 'ExpedienteId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('clienteId', 'abogadoId', 'expedienteId', ),
        BasePeer::TYPE_COLNAME => array (ExpedienteClienteAbogadoPeer::CLIENTE_ID, ExpedienteClienteAbogadoPeer::ABOGADO_ID, ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CLIENTE_ID', 'ABOGADO_ID', 'EXPEDIENTE_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('cliente_id', 'abogado_id', 'expediente_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ExpedienteClienteAbogadoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ClienteId' => 0, 'AbogadoId' => 1, 'ExpedienteId' => 2, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('clienteId' => 0, 'abogadoId' => 1, 'expedienteId' => 2, ),
        BasePeer::TYPE_COLNAME => array (ExpedienteClienteAbogadoPeer::CLIENTE_ID => 0, ExpedienteClienteAbogadoPeer::ABOGADO_ID => 1, ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID => 2, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CLIENTE_ID' => 0, 'ABOGADO_ID' => 1, 'EXPEDIENTE_ID' => 2, ),
        BasePeer::TYPE_FIELDNAME => array ('cliente_id' => 0, 'abogado_id' => 1, 'expediente_id' => 2, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = ExpedienteClienteAbogadoPeer::getFieldNames($toType);
        $key = isset(ExpedienteClienteAbogadoPeer::$fieldKeys[$fromType][$name]) ? ExpedienteClienteAbogadoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ExpedienteClienteAbogadoPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, ExpedienteClienteAbogadoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ExpedienteClienteAbogadoPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. ExpedienteClienteAbogadoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ExpedienteClienteAbogadoPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ExpedienteClienteAbogadoPeer::CLIENTE_ID);
            $criteria->addSelectColumn(ExpedienteClienteAbogadoPeer::ABOGADO_ID);
            $criteria->addSelectColumn(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID);
        } else {
            $criteria->addSelectColumn($alias . '.cliente_id');
            $criteria->addSelectColumn($alias . '.abogado_id');
            $criteria->addSelectColumn($alias . '.expediente_id');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedienteClienteAbogadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }

        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 ExpedienteClienteAbogado
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ExpedienteClienteAbogadoPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return ExpedienteClienteAbogadoPeer::populateObjects(ExpedienteClienteAbogadoPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }


        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      ExpedienteClienteAbogado $obj A ExpedienteClienteAbogado object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getClienteId(), (string) $obj->getAbogadoId(), (string) $obj->getExpedienteId()));
            } // if key === null
            ExpedienteClienteAbogadoPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A ExpedienteClienteAbogado object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ExpedienteClienteAbogado) {
                $key = serialize(array((string) $value->getClienteId(), (string) $value->getAbogadoId(), (string) $value->getExpedienteId()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ExpedienteClienteAbogado object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ExpedienteClienteAbogadoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   ExpedienteClienteAbogado Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ExpedienteClienteAbogadoPeer::$instances[$key])) {
                return ExpedienteClienteAbogadoPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references)
      {
        foreach (ExpedienteClienteAbogadoPeer::$instances as $instance)
        {
          $instance->clearAllReferences(true);
        }
      }
        ExpedienteClienteAbogadoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to expediente_cliente_abogado
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2]));
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return array((int) $row[$startcol], (int) $row[$startcol + 1], (int) $row[$startcol + 2]);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = ExpedienteClienteAbogadoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ExpedienteClienteAbogadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ExpedienteClienteAbogadoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ExpedienteClienteAbogadoPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (ExpedienteClienteAbogado object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ExpedienteClienteAbogadoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ExpedienteClienteAbogadoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ExpedienteClienteAbogadoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ExpedienteClienteAbogadoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ExpedienteClienteAbogadoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Cliente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCliente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedienteClienteAbogadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::CLIENTE_ID, ClientePeer::ID_CLIENTE, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Abogado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAbogado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedienteClienteAbogadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::ABOGADO_ID, AbogadoPeer::ID_ABOGADO, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Expediente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinExpediente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedienteClienteAbogadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, ExpedientePeer::ID_EXPEDIENTE, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of ExpedienteClienteAbogado objects pre-filled with their Cliente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ExpedienteClienteAbogado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCliente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);
        }

        ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        $startcol = ExpedienteClienteAbogadoPeer::NUM_HYDRATE_COLUMNS;
        ClientePeer::addSelectColumns($criteria);

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::CLIENTE_ID, ClientePeer::ID_CLIENTE, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedienteClienteAbogadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedienteClienteAbogadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ExpedienteClienteAbogadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedienteClienteAbogadoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ClientePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ClientePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ClientePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ExpedienteClienteAbogado) to $obj2 (Cliente)
                $obj2->addExpedienteClienteAbogado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ExpedienteClienteAbogado objects pre-filled with their Abogado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ExpedienteClienteAbogado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAbogado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);
        }

        ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        $startcol = ExpedienteClienteAbogadoPeer::NUM_HYDRATE_COLUMNS;
        AbogadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::ABOGADO_ID, AbogadoPeer::ID_ABOGADO, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedienteClienteAbogadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedienteClienteAbogadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ExpedienteClienteAbogadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedienteClienteAbogadoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = AbogadoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = AbogadoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = AbogadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    AbogadoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ExpedienteClienteAbogado) to $obj2 (Abogado)
                $obj2->addExpedienteClienteAbogado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ExpedienteClienteAbogado objects pre-filled with their Expediente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ExpedienteClienteAbogado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinExpediente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);
        }

        ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        $startcol = ExpedienteClienteAbogadoPeer::NUM_HYDRATE_COLUMNS;
        ExpedientePeer::addSelectColumns($criteria);

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, ExpedientePeer::ID_EXPEDIENTE, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedienteClienteAbogadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedienteClienteAbogadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ExpedienteClienteAbogadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedienteClienteAbogadoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ExpedientePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ExpedientePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ExpedientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ExpedientePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ExpedienteClienteAbogado) to $obj2 (Expediente)
                $obj2->addExpedienteClienteAbogado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedienteClienteAbogadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::CLIENTE_ID, ClientePeer::ID_CLIENTE, $join_behavior);

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::ABOGADO_ID, AbogadoPeer::ID_ABOGADO, $join_behavior);

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, ExpedientePeer::ID_EXPEDIENTE, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of ExpedienteClienteAbogado objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ExpedienteClienteAbogado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);
        }

        ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        $startcol2 = ExpedienteClienteAbogadoPeer::NUM_HYDRATE_COLUMNS;

        ClientePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientePeer::NUM_HYDRATE_COLUMNS;

        AbogadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + AbogadoPeer::NUM_HYDRATE_COLUMNS;

        ExpedientePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ExpedientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::CLIENTE_ID, ClientePeer::ID_CLIENTE, $join_behavior);

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::ABOGADO_ID, AbogadoPeer::ID_ABOGADO, $join_behavior);

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, ExpedientePeer::ID_EXPEDIENTE, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedienteClienteAbogadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedienteClienteAbogadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ExpedienteClienteAbogadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedienteClienteAbogadoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Cliente rows

            $key2 = ClientePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ClientePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (ExpedienteClienteAbogado) to the collection in $obj2 (Cliente)
                $obj2->addExpedienteClienteAbogado($obj1);
            } // if joined row not null

            // Add objects for joined Abogado rows

            $key3 = AbogadoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = AbogadoPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = AbogadoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    AbogadoPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (ExpedienteClienteAbogado) to the collection in $obj3 (Abogado)
                $obj3->addExpedienteClienteAbogado($obj1);
            } // if joined row not null

            // Add objects for joined Expediente rows

            $key4 = ExpedientePeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ExpedientePeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ExpedientePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ExpedientePeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (ExpedienteClienteAbogado) to the collection in $obj4 (Expediente)
                $obj4->addExpedienteClienteAbogado($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Cliente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCliente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedienteClienteAbogadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::ABOGADO_ID, AbogadoPeer::ID_ABOGADO, $join_behavior);

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, ExpedientePeer::ID_EXPEDIENTE, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Abogado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAbogado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedienteClienteAbogadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::CLIENTE_ID, ClientePeer::ID_CLIENTE, $join_behavior);

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, ExpedientePeer::ID_EXPEDIENTE, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Expediente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptExpediente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedienteClienteAbogadoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::CLIENTE_ID, ClientePeer::ID_CLIENTE, $join_behavior);

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::ABOGADO_ID, AbogadoPeer::ID_ABOGADO, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of ExpedienteClienteAbogado objects pre-filled with all related objects except Cliente.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ExpedienteClienteAbogado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCliente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);
        }

        ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        $startcol2 = ExpedienteClienteAbogadoPeer::NUM_HYDRATE_COLUMNS;

        AbogadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AbogadoPeer::NUM_HYDRATE_COLUMNS;

        ExpedientePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ExpedientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::ABOGADO_ID, AbogadoPeer::ID_ABOGADO, $join_behavior);

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, ExpedientePeer::ID_EXPEDIENTE, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedienteClienteAbogadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedienteClienteAbogadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ExpedienteClienteAbogadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedienteClienteAbogadoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Abogado rows

                $key2 = AbogadoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AbogadoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AbogadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AbogadoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ExpedienteClienteAbogado) to the collection in $obj2 (Abogado)
                $obj2->addExpedienteClienteAbogado($obj1);

            } // if joined row is not null

                // Add objects for joined Expediente rows

                $key3 = ExpedientePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ExpedientePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ExpedientePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ExpedientePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ExpedienteClienteAbogado) to the collection in $obj3 (Expediente)
                $obj3->addExpedienteClienteAbogado($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ExpedienteClienteAbogado objects pre-filled with all related objects except Abogado.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ExpedienteClienteAbogado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAbogado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);
        }

        ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        $startcol2 = ExpedienteClienteAbogadoPeer::NUM_HYDRATE_COLUMNS;

        ClientePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientePeer::NUM_HYDRATE_COLUMNS;

        ExpedientePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ExpedientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::CLIENTE_ID, ClientePeer::ID_CLIENTE, $join_behavior);

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, ExpedientePeer::ID_EXPEDIENTE, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedienteClienteAbogadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedienteClienteAbogadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ExpedienteClienteAbogadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedienteClienteAbogadoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Cliente rows

                $key2 = ClientePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientePeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ExpedienteClienteAbogado) to the collection in $obj2 (Cliente)
                $obj2->addExpedienteClienteAbogado($obj1);

            } // if joined row is not null

                // Add objects for joined Expediente rows

                $key3 = ExpedientePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ExpedientePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ExpedientePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ExpedientePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ExpedienteClienteAbogado) to the collection in $obj3 (Expediente)
                $obj3->addExpedienteClienteAbogado($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ExpedienteClienteAbogado objects pre-filled with all related objects except Expediente.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ExpedienteClienteAbogado objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptExpediente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);
        }

        ExpedienteClienteAbogadoPeer::addSelectColumns($criteria);
        $startcol2 = ExpedienteClienteAbogadoPeer::NUM_HYDRATE_COLUMNS;

        ClientePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientePeer::NUM_HYDRATE_COLUMNS;

        AbogadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + AbogadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::CLIENTE_ID, ClientePeer::ID_CLIENTE, $join_behavior);

        $criteria->addJoin(ExpedienteClienteAbogadoPeer::ABOGADO_ID, AbogadoPeer::ID_ABOGADO, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedienteClienteAbogadoPeer', $criteria, $con);
        }


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedienteClienteAbogadoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedienteClienteAbogadoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ExpedienteClienteAbogadoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedienteClienteAbogadoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Cliente rows

                $key2 = ClientePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ClientePeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ClientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ExpedienteClienteAbogado) to the collection in $obj2 (Cliente)
                $obj2->addExpedienteClienteAbogado($obj1);

            } // if joined row is not null

                // Add objects for joined Abogado rows

                $key3 = AbogadoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = AbogadoPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = AbogadoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    AbogadoPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ExpedienteClienteAbogado) to the collection in $obj3 (Abogado)
                $obj3->addExpedienteClienteAbogado($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(ExpedienteClienteAbogadoPeer::DATABASE_NAME)->getTable(ExpedienteClienteAbogadoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseExpedienteClienteAbogadoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseExpedienteClienteAbogadoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new ExpedienteClienteAbogadoTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return ExpedienteClienteAbogadoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ExpedienteClienteAbogado or Criteria object.
     *
     * @param      mixed $values Criteria or ExpedienteClienteAbogado object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ExpedienteClienteAbogado object
        }


        // Set the correct dbName
        $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a ExpedienteClienteAbogado or Criteria object.
     *
     * @param      mixed $values Criteria or ExpedienteClienteAbogado object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ExpedienteClienteAbogadoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ExpedienteClienteAbogadoPeer::CLIENTE_ID);
            $value = $criteria->remove(ExpedienteClienteAbogadoPeer::CLIENTE_ID);
            if ($value) {
                $selectCriteria->add(ExpedienteClienteAbogadoPeer::CLIENTE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ExpedienteClienteAbogadoPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ExpedienteClienteAbogadoPeer::ABOGADO_ID);
            $value = $criteria->remove(ExpedienteClienteAbogadoPeer::ABOGADO_ID);
            if ($value) {
                $selectCriteria->add(ExpedienteClienteAbogadoPeer::ABOGADO_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ExpedienteClienteAbogadoPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID);
            $value = $criteria->remove(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID);
            if ($value) {
                $selectCriteria->add(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ExpedienteClienteAbogadoPeer::TABLE_NAME);
            }

        } else { // $values is ExpedienteClienteAbogado object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the expediente_cliente_abogado table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ExpedienteClienteAbogadoPeer::TABLE_NAME, $con, ExpedienteClienteAbogadoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ExpedienteClienteAbogadoPeer::clearInstancePool();
            ExpedienteClienteAbogadoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ExpedienteClienteAbogado or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ExpedienteClienteAbogado object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ExpedienteClienteAbogadoPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ExpedienteClienteAbogado) { // it's a model object
            // invalidate the cache for this single object
            ExpedienteClienteAbogadoPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ExpedienteClienteAbogadoPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ExpedienteClienteAbogadoPeer::CLIENTE_ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ExpedienteClienteAbogadoPeer::ABOGADO_ID, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                ExpedienteClienteAbogadoPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ExpedienteClienteAbogadoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ExpedienteClienteAbogadoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ExpedienteClienteAbogado object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      ExpedienteClienteAbogado $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ExpedienteClienteAbogadoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ExpedienteClienteAbogadoPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(ExpedienteClienteAbogadoPeer::DATABASE_NAME, ExpedienteClienteAbogadoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $cliente_id
     * @param   int $abogado_id
     * @param   int $expediente_id
     * @param      PropelPDO $con
     * @return   ExpedienteClienteAbogado
     */
    public static function retrieveByPK($cliente_id, $abogado_id, $expediente_id, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $cliente_id, (string) $abogado_id, (string) $expediente_id));
         if (null !== ($obj = ExpedienteClienteAbogadoPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ExpedienteClienteAbogadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(ExpedienteClienteAbogadoPeer::DATABASE_NAME);
        $criteria->add(ExpedienteClienteAbogadoPeer::CLIENTE_ID, $cliente_id);
        $criteria->add(ExpedienteClienteAbogadoPeer::ABOGADO_ID, $abogado_id);
        $criteria->add(ExpedienteClienteAbogadoPeer::EXPEDIENTE_ID, $expediente_id);
        $v = ExpedienteClienteAbogadoPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
    // symfony behavior

    /**
     * Returns an array of arrays that contain columns in each unique index.
     *
     * @return array
     */
    static public function getUniqueColumnNames()
    {
      return array();
    }

    // symfony_behaviors behavior

    /**
     * Returns the name of the hook to call from inside the supplied method.
     *
     * @param string $method The calling method
     *
     * @return string A hook name for {@link sfMixer}
     *
     * @throws LogicException If the method name is not recognized
     */
    static private function getMixerPreSelectHook($method)
    {
      if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
      {
        return sprintf('BaseExpedienteClienteAbogadoPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
      }

      throw new LogicException(sprintf('Unrecognized function "%s"', $method));
    }

} // BaseExpedienteClienteAbogadoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseExpedienteClienteAbogadoPeer::buildTableMap();

