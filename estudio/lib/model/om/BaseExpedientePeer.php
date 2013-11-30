<?php


/**
 * Base static class for performing query and update operations on the 'expediente' table.
 *
 *
 *
 * @package propel.generator.lib.model.om
 */
abstract class BaseExpedientePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'propel';

    /** the table name for this class */
    const TABLE_NAME = 'expediente';

    /** the related Propel class for this table */
    const OM_CLASS = 'Expediente';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ExpedienteTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the id_expediente field */
    const ID_EXPEDIENTE = 'expediente.id_expediente';

    /** the column name for the caratula field */
    const CARATULA = 'expediente.caratula';

    /** the column name for the num_expte field */
    const NUM_EXPTE = 'expediente.num_expte';

    /** the column name for the anio field */
    const ANIO = 'expediente.anio';

    /** the column name for the juzgado field */
    const JUZGADO = 'expediente.juzgado';

    /** the column name for the tipo_de_parte field */
    const TIPO_DE_PARTE = 'expediente.tipo_de_parte';

    /** the column name for the abogado_contraparte field */
    const ABOGADO_CONTRAPARTE = 'expediente.abogado_contraparte';

    /** the column name for the nombre_contraparte field */
    const NOMBRE_CONTRAPARTE = 'expediente.nombre_contraparte';

    /** the column name for the domicilio_const_contraparte field */
    const DOMICILIO_CONST_CONTRAPARTE = 'expediente.domicilio_const_contraparte';

    /** the column name for the domicilio_real_contraparte field */
    const DOMICILIO_REAL_CONTRAPARTE = 'expediente.domicilio_real_contraparte';

    /** the column name for the circunscripcion field */
    const CIRCUNSCRIPCION = 'expediente.circunscripcion';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of Expediente objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Expediente[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ExpedientePeer::$fieldNames[ExpedientePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdExpediente', 'Caratula', 'NumExpte', 'Anio', 'Juzgado', 'TipoDeParte', 'AbogadoContraparte', 'NombreContraparte', 'DomicilioConstContraparte', 'DomicilioRealContraparte', 'Circunscripcion', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idExpediente', 'caratula', 'numExpte', 'anio', 'juzgado', 'tipoDeParte', 'abogadoContraparte', 'nombreContraparte', 'domicilioConstContraparte', 'domicilioRealContraparte', 'circunscripcion', ),
        BasePeer::TYPE_COLNAME => array (ExpedientePeer::ID_EXPEDIENTE, ExpedientePeer::CARATULA, ExpedientePeer::NUM_EXPTE, ExpedientePeer::ANIO, ExpedientePeer::JUZGADO, ExpedientePeer::TIPO_DE_PARTE, ExpedientePeer::ABOGADO_CONTRAPARTE, ExpedientePeer::NOMBRE_CONTRAPARTE, ExpedientePeer::DOMICILIO_CONST_CONTRAPARTE, ExpedientePeer::DOMICILIO_REAL_CONTRAPARTE, ExpedientePeer::CIRCUNSCRIPCION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_EXPEDIENTE', 'CARATULA', 'NUM_EXPTE', 'ANIO', 'JUZGADO', 'TIPO_DE_PARTE', 'ABOGADO_CONTRAPARTE', 'NOMBRE_CONTRAPARTE', 'DOMICILIO_CONST_CONTRAPARTE', 'DOMICILIO_REAL_CONTRAPARTE', 'CIRCUNSCRIPCION', ),
        BasePeer::TYPE_FIELDNAME => array ('id_expediente', 'caratula', 'num_expte', 'anio', 'juzgado', 'tipo_de_parte', 'abogado_contraparte', 'nombre_contraparte', 'domicilio_const_contraparte', 'domicilio_real_contraparte', 'circunscripcion', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ExpedientePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdExpediente' => 0, 'Caratula' => 1, 'NumExpte' => 2, 'Anio' => 3, 'Juzgado' => 4, 'TipoDeParte' => 5, 'AbogadoContraparte' => 6, 'NombreContraparte' => 7, 'DomicilioConstContraparte' => 8, 'DomicilioRealContraparte' => 9, 'Circunscripcion' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idExpediente' => 0, 'caratula' => 1, 'numExpte' => 2, 'anio' => 3, 'juzgado' => 4, 'tipoDeParte' => 5, 'abogadoContraparte' => 6, 'nombreContraparte' => 7, 'domicilioConstContraparte' => 8, 'domicilioRealContraparte' => 9, 'circunscripcion' => 10, ),
        BasePeer::TYPE_COLNAME => array (ExpedientePeer::ID_EXPEDIENTE => 0, ExpedientePeer::CARATULA => 1, ExpedientePeer::NUM_EXPTE => 2, ExpedientePeer::ANIO => 3, ExpedientePeer::JUZGADO => 4, ExpedientePeer::TIPO_DE_PARTE => 5, ExpedientePeer::ABOGADO_CONTRAPARTE => 6, ExpedientePeer::NOMBRE_CONTRAPARTE => 7, ExpedientePeer::DOMICILIO_CONST_CONTRAPARTE => 8, ExpedientePeer::DOMICILIO_REAL_CONTRAPARTE => 9, ExpedientePeer::CIRCUNSCRIPCION => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_EXPEDIENTE' => 0, 'CARATULA' => 1, 'NUM_EXPTE' => 2, 'ANIO' => 3, 'JUZGADO' => 4, 'TIPO_DE_PARTE' => 5, 'ABOGADO_CONTRAPARTE' => 6, 'NOMBRE_CONTRAPARTE' => 7, 'DOMICILIO_CONST_CONTRAPARTE' => 8, 'DOMICILIO_REAL_CONTRAPARTE' => 9, 'CIRCUNSCRIPCION' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('id_expediente' => 0, 'caratula' => 1, 'num_expte' => 2, 'anio' => 3, 'juzgado' => 4, 'tipo_de_parte' => 5, 'abogado_contraparte' => 6, 'nombre_contraparte' => 7, 'domicilio_const_contraparte' => 8, 'domicilio_real_contraparte' => 9, 'circunscripcion' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $toNames = ExpedientePeer::getFieldNames($toType);
        $key = isset(ExpedientePeer::$fieldKeys[$fromType][$name]) ? ExpedientePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ExpedientePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ExpedientePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ExpedientePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ExpedientePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ExpedientePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ExpedientePeer::ID_EXPEDIENTE);
            $criteria->addSelectColumn(ExpedientePeer::CARATULA);
            $criteria->addSelectColumn(ExpedientePeer::NUM_EXPTE);
            $criteria->addSelectColumn(ExpedientePeer::ANIO);
            $criteria->addSelectColumn(ExpedientePeer::JUZGADO);
            $criteria->addSelectColumn(ExpedientePeer::TIPO_DE_PARTE);
            $criteria->addSelectColumn(ExpedientePeer::ABOGADO_CONTRAPARTE);
            $criteria->addSelectColumn(ExpedientePeer::NOMBRE_CONTRAPARTE);
            $criteria->addSelectColumn(ExpedientePeer::DOMICILIO_CONST_CONTRAPARTE);
            $criteria->addSelectColumn(ExpedientePeer::DOMICILIO_REAL_CONTRAPARTE);
            $criteria->addSelectColumn(ExpedientePeer::CIRCUNSCRIPCION);
        } else {
            $criteria->addSelectColumn($alias . '.id_expediente');
            $criteria->addSelectColumn($alias . '.caratula');
            $criteria->addSelectColumn($alias . '.num_expte');
            $criteria->addSelectColumn($alias . '.anio');
            $criteria->addSelectColumn($alias . '.juzgado');
            $criteria->addSelectColumn($alias . '.tipo_de_parte');
            $criteria->addSelectColumn($alias . '.abogado_contraparte');
            $criteria->addSelectColumn($alias . '.nombre_contraparte');
            $criteria->addSelectColumn($alias . '.domicilio_const_contraparte');
            $criteria->addSelectColumn($alias . '.domicilio_real_contraparte');
            $criteria->addSelectColumn($alias . '.circunscripcion');
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
        $criteria->setPrimaryTableName(ExpedientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ExpedientePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedientePeer', $criteria, $con);
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
     * @return                 Expediente
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ExpedientePeer::doSelect($critcopy, $con);
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
        return ExpedientePeer::populateObjects(ExpedientePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ExpedientePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ExpedientePeer::DATABASE_NAME);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseExpedientePeer', $criteria, $con);
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
     * @param      Expediente $obj A Expediente object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdExpediente();
            } // if key === null
            ExpedientePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Expediente object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Expediente) {
                $key = (string) $value->getIdExpediente();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Expediente object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ExpedientePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Expediente Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ExpedientePeer::$instances[$key])) {
                return ExpedientePeer::$instances[$key];
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
        foreach (ExpedientePeer::$instances as $instance)
        {
          $instance->clearAllReferences(true);
        }
      }
        ExpedientePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to expediente
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
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
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

        return (int) $row[$startcol];
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
        $cls = ExpedientePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ExpedientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ExpedientePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ExpedientePeer::addInstanceToPool($obj, $key);
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
     * @return array (Expediente object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ExpedientePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ExpedientePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ExpedientePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ExpedientePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ExpedientePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(ExpedientePeer::DATABASE_NAME)->getTable(ExpedientePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseExpedientePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseExpedientePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new ExpedienteTableMap());
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
        return ExpedientePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Expediente or Criteria object.
     *
     * @param      mixed $values Criteria or Expediente object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Expediente object
        }

        if ($criteria->containsKey(ExpedientePeer::ID_EXPEDIENTE) && $criteria->keyContainsValue(ExpedientePeer::ID_EXPEDIENTE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ExpedientePeer::ID_EXPEDIENTE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ExpedientePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Expediente or Criteria object.
     *
     * @param      mixed $values Criteria or Expediente object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ExpedientePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ExpedientePeer::ID_EXPEDIENTE);
            $value = $criteria->remove(ExpedientePeer::ID_EXPEDIENTE);
            if ($value) {
                $selectCriteria->add(ExpedientePeer::ID_EXPEDIENTE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ExpedientePeer::TABLE_NAME);
            }

        } else { // $values is Expediente object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ExpedientePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the expediente table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ExpedientePeer::TABLE_NAME, $con, ExpedientePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ExpedientePeer::clearInstancePool();
            ExpedientePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Expediente or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Expediente object or primary key or array of primary keys
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
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ExpedientePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Expediente) { // it's a model object
            // invalidate the cache for this single object
            ExpedientePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ExpedientePeer::DATABASE_NAME);
            $criteria->add(ExpedientePeer::ID_EXPEDIENTE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ExpedientePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ExpedientePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ExpedientePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Expediente object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Expediente $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ExpedientePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ExpedientePeer::TABLE_NAME);

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

        return BasePeer::doValidate(ExpedientePeer::DATABASE_NAME, ExpedientePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Expediente
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ExpedientePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ExpedientePeer::DATABASE_NAME);
        $criteria->add(ExpedientePeer::ID_EXPEDIENTE, $pk);

        $v = ExpedientePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Expediente[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ExpedientePeer::DATABASE_NAME);
            $criteria->add(ExpedientePeer::ID_EXPEDIENTE, $pks, Criteria::IN);
            $objs = ExpedientePeer::doSelect($criteria, $con);
        }

        return $objs;
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
        return sprintf('BaseExpedientePeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
      }

      throw new LogicException(sprintf('Unrecognized function "%s"', $method));
    }

} // BaseExpedientePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseExpedientePeer::buildTableMap();

