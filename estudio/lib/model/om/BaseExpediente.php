<?php


/**
 * Base class that represents a row from the 'expediente' table.
 *
 *
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseExpediente extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ExpedientePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ExpedientePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_expediente field.
     * @var        int
     */
    protected $id_expediente;

    /**
     * The value for the caratula field.
     * @var        string
     */
    protected $caratula;

    /**
     * The value for the num_expte field.
     * @var        int
     */
    protected $num_expte;

    /**
     * The value for the anio field.
     * @var        int
     */
    protected $anio;

    /**
     * The value for the juzgado field.
     * @var        string
     */
    protected $juzgado;

    /**
     * The value for the tipo_de_parte field.
     * @var        string
     */
    protected $tipo_de_parte;

    /**
     * The value for the abogado_contraparte field.
     * @var        string
     */
    protected $abogado_contraparte;

    /**
     * The value for the nombre_contraparte field.
     * @var        string
     */
    protected $nombre_contraparte;

    /**
     * The value for the domicilio_const_contraparte field.
     * @var        string
     */
    protected $domicilio_const_contraparte;

    /**
     * The value for the domicilio_real_contraparte field.
     * @var        string
     */
    protected $domicilio_real_contraparte;

    /**
     * The value for the circunscripcion field.
     * @var        string
     */
    protected $circunscripcion;

    /**
     * @var        PropelObjectCollection|ExpedienteClienteAbogado[] Collection to store aggregation of ExpedienteClienteAbogado objects.
     */
    protected $collExpedienteClienteAbogados;
    protected $collExpedienteClienteAbogadosPartial;

    /**
     * @var        PropelObjectCollection|UltimoProv[] Collection to store aggregation of UltimoProv objects.
     */
    protected $collUltimoProvs;
    protected $collUltimoProvsPartial;

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
    protected $expedienteClienteAbogadosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ultimoProvsScheduledForDeletion = null;

    /**
     * Get the [id_expediente] column value.
     *
     * @return int
     */
    public function getIdExpediente()
    {
        return $this->id_expediente;
    }

    /**
     * Get the [caratula] column value.
     *
     * @return string
     */
    public function getCaratula()
    {
        return $this->caratula;
    }

    /**
     * Get the [num_expte] column value.
     *
     * @return int
     */
    public function getNumExpte()
    {
        return $this->num_expte;
    }

    /**
     * Get the [anio] column value.
     *
     * @return int
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Get the [juzgado] column value.
     *
     * @return string
     */
    public function getJuzgado()
    {
        return $this->juzgado;
    }

    /**
     * Get the [tipo_de_parte] column value.
     *
     * @return string
     */
    public function getTipoDeParte()
    {
        return $this->tipo_de_parte;
    }

    /**
     * Get the [abogado_contraparte] column value.
     *
     * @return string
     */
    public function getAbogadoContraparte()
    {
        return $this->abogado_contraparte;
    }

    /**
     * Get the [nombre_contraparte] column value.
     *
     * @return string
     */
    public function getNombreContraparte()
    {
        return $this->nombre_contraparte;
    }

    /**
     * Get the [domicilio_const_contraparte] column value.
     *
     * @return string
     */
    public function getDomicilioConstContraparte()
    {
        return $this->domicilio_const_contraparte;
    }

    /**
     * Get the [domicilio_real_contraparte] column value.
     *
     * @return string
     */
    public function getDomicilioRealContraparte()
    {
        return $this->domicilio_real_contraparte;
    }

    /**
     * Get the [circunscripcion] column value.
     *
     * @return string
     */
    public function getCircunscripcion()
    {
        return $this->circunscripcion;
    }

    /**
     * Set the value of [id_expediente] column.
     *
     * @param int $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setIdExpediente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_expediente !== $v) {
            $this->id_expediente = $v;
            $this->modifiedColumns[] = ExpedientePeer::ID_EXPEDIENTE;
        }


        return $this;
    } // setIdExpediente()

    /**
     * Set the value of [caratula] column.
     *
     * @param string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setCaratula($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->caratula !== $v) {
            $this->caratula = $v;
            $this->modifiedColumns[] = ExpedientePeer::CARATULA;
        }


        return $this;
    } // setCaratula()

    /**
     * Set the value of [num_expte] column.
     *
     * @param int $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setNumExpte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->num_expte !== $v) {
            $this->num_expte = $v;
            $this->modifiedColumns[] = ExpedientePeer::NUM_EXPTE;
        }


        return $this;
    } // setNumExpte()

    /**
     * Set the value of [anio] column.
     *
     * @param int $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setAnio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->anio !== $v) {
            $this->anio = $v;
            $this->modifiedColumns[] = ExpedientePeer::ANIO;
        }


        return $this;
    } // setAnio()

    /**
     * Set the value of [juzgado] column.
     *
     * @param string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setJuzgado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->juzgado !== $v) {
            $this->juzgado = $v;
            $this->modifiedColumns[] = ExpedientePeer::JUZGADO;
        }


        return $this;
    } // setJuzgado()

    /**
     * Set the value of [tipo_de_parte] column.
     *
     * @param string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setTipoDeParte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tipo_de_parte !== $v) {
            $this->tipo_de_parte = $v;
            $this->modifiedColumns[] = ExpedientePeer::TIPO_DE_PARTE;
        }


        return $this;
    } // setTipoDeParte()

    /**
     * Set the value of [abogado_contraparte] column.
     *
     * @param string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setAbogadoContraparte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abogado_contraparte !== $v) {
            $this->abogado_contraparte = $v;
            $this->modifiedColumns[] = ExpedientePeer::ABOGADO_CONTRAPARTE;
        }


        return $this;
    } // setAbogadoContraparte()

    /**
     * Set the value of [nombre_contraparte] column.
     *
     * @param string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setNombreContraparte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nombre_contraparte !== $v) {
            $this->nombre_contraparte = $v;
            $this->modifiedColumns[] = ExpedientePeer::NOMBRE_CONTRAPARTE;
        }


        return $this;
    } // setNombreContraparte()

    /**
     * Set the value of [domicilio_const_contraparte] column.
     *
     * @param string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setDomicilioConstContraparte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->domicilio_const_contraparte !== $v) {
            $this->domicilio_const_contraparte = $v;
            $this->modifiedColumns[] = ExpedientePeer::DOMICILIO_CONST_CONTRAPARTE;
        }


        return $this;
    } // setDomicilioConstContraparte()

    /**
     * Set the value of [domicilio_real_contraparte] column.
     *
     * @param string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setDomicilioRealContraparte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->domicilio_real_contraparte !== $v) {
            $this->domicilio_real_contraparte = $v;
            $this->modifiedColumns[] = ExpedientePeer::DOMICILIO_REAL_CONTRAPARTE;
        }


        return $this;
    } // setDomicilioRealContraparte()

    /**
     * Set the value of [circunscripcion] column.
     *
     * @param string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setCircunscripcion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->circunscripcion !== $v) {
            $this->circunscripcion = $v;
            $this->modifiedColumns[] = ExpedientePeer::CIRCUNSCRIPCION;
        }


        return $this;
    } // setCircunscripcion()

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
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id_expediente = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->caratula = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->num_expte = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->anio = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->juzgado = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->tipo_de_parte = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->abogado_contraparte = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->nombre_contraparte = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->domicilio_const_contraparte = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->domicilio_real_contraparte = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->circunscripcion = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 11; // 11 = ExpedientePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Expediente object", $e);
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
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ExpedientePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collExpedienteClienteAbogados = null;

            $this->collUltimoProvs = null;

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
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ExpedienteQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseExpediente:delete:pre') as $callable)
            {
              if (call_user_func($callable, $this, $con))
              {
                $con->commit();
                return;
              }
            }

            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                // symfony_behaviors behavior
                foreach (sfMixer::getCallables('BaseExpediente:delete:post') as $callable)
                {
                  call_user_func($callable, $this, $con);
                }

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
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseExpediente:save:pre') as $callable)
            {
              if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
              {
                  $con->commit();
                return $affectedRows;
              }
            }

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
                // symfony_behaviors behavior
                foreach (sfMixer::getCallables('BaseExpediente:save:post') as $callable)
                {
                  call_user_func($callable, $this, $con, $affectedRows);
                }

                ExpedientePeer::addInstanceToPool($this);
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

            if ($this->expedienteClienteAbogadosScheduledForDeletion !== null) {
                if (!$this->expedienteClienteAbogadosScheduledForDeletion->isEmpty()) {
                    ExpedienteClienteAbogadoQuery::create()
                        ->filterByPrimaryKeys($this->expedienteClienteAbogadosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->expedienteClienteAbogadosScheduledForDeletion = null;
                }
            }

            if ($this->collExpedienteClienteAbogados !== null) {
                foreach ($this->collExpedienteClienteAbogados as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ultimoProvsScheduledForDeletion !== null) {
                if (!$this->ultimoProvsScheduledForDeletion->isEmpty()) {
                    UltimoProvQuery::create()
                        ->filterByPrimaryKeys($this->ultimoProvsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ultimoProvsScheduledForDeletion = null;
                }
            }

            if ($this->collUltimoProvs !== null) {
                foreach ($this->collUltimoProvs as $referrerFK) {
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

        $this->modifiedColumns[] = ExpedientePeer::ID_EXPEDIENTE;
        if (null !== $this->id_expediente) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ExpedientePeer::ID_EXPEDIENTE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ExpedientePeer::ID_EXPEDIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`id_expediente`';
        }
        if ($this->isColumnModified(ExpedientePeer::CARATULA)) {
            $modifiedColumns[':p' . $index++]  = '`caratula`';
        }
        if ($this->isColumnModified(ExpedientePeer::NUM_EXPTE)) {
            $modifiedColumns[':p' . $index++]  = '`num_expte`';
        }
        if ($this->isColumnModified(ExpedientePeer::ANIO)) {
            $modifiedColumns[':p' . $index++]  = '`anio`';
        }
        if ($this->isColumnModified(ExpedientePeer::JUZGADO)) {
            $modifiedColumns[':p' . $index++]  = '`juzgado`';
        }
        if ($this->isColumnModified(ExpedientePeer::TIPO_DE_PARTE)) {
            $modifiedColumns[':p' . $index++]  = '`tipo_de_parte`';
        }
        if ($this->isColumnModified(ExpedientePeer::ABOGADO_CONTRAPARTE)) {
            $modifiedColumns[':p' . $index++]  = '`abogado_contraparte`';
        }
        if ($this->isColumnModified(ExpedientePeer::NOMBRE_CONTRAPARTE)) {
            $modifiedColumns[':p' . $index++]  = '`nombre_contraparte`';
        }
        if ($this->isColumnModified(ExpedientePeer::DOMICILIO_CONST_CONTRAPARTE)) {
            $modifiedColumns[':p' . $index++]  = '`domicilio_const_contraparte`';
        }
        if ($this->isColumnModified(ExpedientePeer::DOMICILIO_REAL_CONTRAPARTE)) {
            $modifiedColumns[':p' . $index++]  = '`domicilio_real_contraparte`';
        }
        if ($this->isColumnModified(ExpedientePeer::CIRCUNSCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`circunscripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `expediente` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_expediente`':
                        $stmt->bindValue($identifier, $this->id_expediente, PDO::PARAM_INT);
                        break;
                    case '`caratula`':
                        $stmt->bindValue($identifier, $this->caratula, PDO::PARAM_STR);
                        break;
                    case '`num_expte`':
                        $stmt->bindValue($identifier, $this->num_expte, PDO::PARAM_INT);
                        break;
                    case '`anio`':
                        $stmt->bindValue($identifier, $this->anio, PDO::PARAM_INT);
                        break;
                    case '`juzgado`':
                        $stmt->bindValue($identifier, $this->juzgado, PDO::PARAM_STR);
                        break;
                    case '`tipo_de_parte`':
                        $stmt->bindValue($identifier, $this->tipo_de_parte, PDO::PARAM_STR);
                        break;
                    case '`abogado_contraparte`':
                        $stmt->bindValue($identifier, $this->abogado_contraparte, PDO::PARAM_STR);
                        break;
                    case '`nombre_contraparte`':
                        $stmt->bindValue($identifier, $this->nombre_contraparte, PDO::PARAM_STR);
                        break;
                    case '`domicilio_const_contraparte`':
                        $stmt->bindValue($identifier, $this->domicilio_const_contraparte, PDO::PARAM_STR);
                        break;
                    case '`domicilio_real_contraparte`':
                        $stmt->bindValue($identifier, $this->domicilio_real_contraparte, PDO::PARAM_STR);
                        break;
                    case '`circunscripcion`':
                        $stmt->bindValue($identifier, $this->circunscripcion, PDO::PARAM_STR);
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
        $this->setIdExpediente($pk);

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
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = ExpedientePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collExpedienteClienteAbogados !== null) {
                    foreach ($this->collExpedienteClienteAbogados as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collUltimoProvs !== null) {
                    foreach ($this->collUltimoProvs as $referrerFK) {
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
        $pos = ExpedientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdExpediente();
                break;
            case 1:
                return $this->getCaratula();
                break;
            case 2:
                return $this->getNumExpte();
                break;
            case 3:
                return $this->getAnio();
                break;
            case 4:
                return $this->getJuzgado();
                break;
            case 5:
                return $this->getTipoDeParte();
                break;
            case 6:
                return $this->getAbogadoContraparte();
                break;
            case 7:
                return $this->getNombreContraparte();
                break;
            case 8:
                return $this->getDomicilioConstContraparte();
                break;
            case 9:
                return $this->getDomicilioRealContraparte();
                break;
            case 10:
                return $this->getCircunscripcion();
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
        if (isset($alreadyDumpedObjects['Expediente'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Expediente'][$this->getPrimaryKey()] = true;
        $keys = ExpedientePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdExpediente(),
            $keys[1] => $this->getCaratula(),
            $keys[2] => $this->getNumExpte(),
            $keys[3] => $this->getAnio(),
            $keys[4] => $this->getJuzgado(),
            $keys[5] => $this->getTipoDeParte(),
            $keys[6] => $this->getAbogadoContraparte(),
            $keys[7] => $this->getNombreContraparte(),
            $keys[8] => $this->getDomicilioConstContraparte(),
            $keys[9] => $this->getDomicilioRealContraparte(),
            $keys[10] => $this->getCircunscripcion(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collExpedienteClienteAbogados) {
                $result['ExpedienteClienteAbogados'] = $this->collExpedienteClienteAbogados->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collUltimoProvs) {
                $result['UltimoProvs'] = $this->collUltimoProvs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ExpedientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdExpediente($value);
                break;
            case 1:
                $this->setCaratula($value);
                break;
            case 2:
                $this->setNumExpte($value);
                break;
            case 3:
                $this->setAnio($value);
                break;
            case 4:
                $this->setJuzgado($value);
                break;
            case 5:
                $this->setTipoDeParte($value);
                break;
            case 6:
                $this->setAbogadoContraparte($value);
                break;
            case 7:
                $this->setNombreContraparte($value);
                break;
            case 8:
                $this->setDomicilioConstContraparte($value);
                break;
            case 9:
                $this->setDomicilioRealContraparte($value);
                break;
            case 10:
                $this->setCircunscripcion($value);
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
        $keys = ExpedientePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdExpediente($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCaratula($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNumExpte($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAnio($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setJuzgado($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTipoDeParte($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAbogadoContraparte($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNombreContraparte($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDomicilioConstContraparte($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDomicilioRealContraparte($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCircunscripcion($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ExpedientePeer::DATABASE_NAME);

        if ($this->isColumnModified(ExpedientePeer::ID_EXPEDIENTE)) $criteria->add(ExpedientePeer::ID_EXPEDIENTE, $this->id_expediente);
        if ($this->isColumnModified(ExpedientePeer::CARATULA)) $criteria->add(ExpedientePeer::CARATULA, $this->caratula);
        if ($this->isColumnModified(ExpedientePeer::NUM_EXPTE)) $criteria->add(ExpedientePeer::NUM_EXPTE, $this->num_expte);
        if ($this->isColumnModified(ExpedientePeer::ANIO)) $criteria->add(ExpedientePeer::ANIO, $this->anio);
        if ($this->isColumnModified(ExpedientePeer::JUZGADO)) $criteria->add(ExpedientePeer::JUZGADO, $this->juzgado);
        if ($this->isColumnModified(ExpedientePeer::TIPO_DE_PARTE)) $criteria->add(ExpedientePeer::TIPO_DE_PARTE, $this->tipo_de_parte);
        if ($this->isColumnModified(ExpedientePeer::ABOGADO_CONTRAPARTE)) $criteria->add(ExpedientePeer::ABOGADO_CONTRAPARTE, $this->abogado_contraparte);
        if ($this->isColumnModified(ExpedientePeer::NOMBRE_CONTRAPARTE)) $criteria->add(ExpedientePeer::NOMBRE_CONTRAPARTE, $this->nombre_contraparte);
        if ($this->isColumnModified(ExpedientePeer::DOMICILIO_CONST_CONTRAPARTE)) $criteria->add(ExpedientePeer::DOMICILIO_CONST_CONTRAPARTE, $this->domicilio_const_contraparte);
        if ($this->isColumnModified(ExpedientePeer::DOMICILIO_REAL_CONTRAPARTE)) $criteria->add(ExpedientePeer::DOMICILIO_REAL_CONTRAPARTE, $this->domicilio_real_contraparte);
        if ($this->isColumnModified(ExpedientePeer::CIRCUNSCRIPCION)) $criteria->add(ExpedientePeer::CIRCUNSCRIPCION, $this->circunscripcion);

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
        $criteria = new Criteria(ExpedientePeer::DATABASE_NAME);
        $criteria->add(ExpedientePeer::ID_EXPEDIENTE, $this->id_expediente);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdExpediente();
    }

    /**
     * Generic method to set the primary key (id_expediente column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdExpediente($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdExpediente();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Expediente (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCaratula($this->getCaratula());
        $copyObj->setNumExpte($this->getNumExpte());
        $copyObj->setAnio($this->getAnio());
        $copyObj->setJuzgado($this->getJuzgado());
        $copyObj->setTipoDeParte($this->getTipoDeParte());
        $copyObj->setAbogadoContraparte($this->getAbogadoContraparte());
        $copyObj->setNombreContraparte($this->getNombreContraparte());
        $copyObj->setDomicilioConstContraparte($this->getDomicilioConstContraparte());
        $copyObj->setDomicilioRealContraparte($this->getDomicilioRealContraparte());
        $copyObj->setCircunscripcion($this->getCircunscripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getExpedienteClienteAbogados() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExpedienteClienteAbogado($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getUltimoProvs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUltimoProv($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdExpediente(NULL); // this is a auto-increment column, so set to default value
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
     * @return Expediente Clone of current object.
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
     * @return ExpedientePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ExpedientePeer();
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
        if ('ExpedienteClienteAbogado' == $relationName) {
            $this->initExpedienteClienteAbogados();
        }
        if ('UltimoProv' == $relationName) {
            $this->initUltimoProvs();
        }
    }

    /**
     * Clears out the collExpedienteClienteAbogados collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Expediente The current object (for fluent API support)
     * @see        addExpedienteClienteAbogados()
     */
    public function clearExpedienteClienteAbogados()
    {
        $this->collExpedienteClienteAbogados = null; // important to set this to null since that means it is uninitialized
        $this->collExpedienteClienteAbogadosPartial = null;

        return $this;
    }

    /**
     * reset is the collExpedienteClienteAbogados collection loaded partially
     *
     * @return void
     */
    public function resetPartialExpedienteClienteAbogados($v = true)
    {
        $this->collExpedienteClienteAbogadosPartial = $v;
    }

    /**
     * Initializes the collExpedienteClienteAbogados collection.
     *
     * By default this just sets the collExpedienteClienteAbogados collection to an empty array (like clearcollExpedienteClienteAbogados());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExpedienteClienteAbogados($overrideExisting = true)
    {
        if (null !== $this->collExpedienteClienteAbogados && !$overrideExisting) {
            return;
        }
        $this->collExpedienteClienteAbogados = new PropelObjectCollection();
        $this->collExpedienteClienteAbogados->setModel('ExpedienteClienteAbogado');
    }

    /**
     * Gets an array of ExpedienteClienteAbogado objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Expediente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExpedienteClienteAbogado[] List of ExpedienteClienteAbogado objects
     * @throws PropelException
     */
    public function getExpedienteClienteAbogados($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExpedienteClienteAbogadosPartial && !$this->isNew();
        if (null === $this->collExpedienteClienteAbogados || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExpedienteClienteAbogados) {
                // return empty collection
                $this->initExpedienteClienteAbogados();
            } else {
                $collExpedienteClienteAbogados = ExpedienteClienteAbogadoQuery::create(null, $criteria)
                    ->filterByExpediente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExpedienteClienteAbogadosPartial && count($collExpedienteClienteAbogados)) {
                      $this->initExpedienteClienteAbogados(false);

                      foreach($collExpedienteClienteAbogados as $obj) {
                        if (false == $this->collExpedienteClienteAbogados->contains($obj)) {
                          $this->collExpedienteClienteAbogados->append($obj);
                        }
                      }

                      $this->collExpedienteClienteAbogadosPartial = true;
                    }

                    $collExpedienteClienteAbogados->getInternalIterator()->rewind();
                    return $collExpedienteClienteAbogados;
                }

                if($partial && $this->collExpedienteClienteAbogados) {
                    foreach($this->collExpedienteClienteAbogados as $obj) {
                        if($obj->isNew()) {
                            $collExpedienteClienteAbogados[] = $obj;
                        }
                    }
                }

                $this->collExpedienteClienteAbogados = $collExpedienteClienteAbogados;
                $this->collExpedienteClienteAbogadosPartial = false;
            }
        }

        return $this->collExpedienteClienteAbogados;
    }

    /**
     * Sets a collection of ExpedienteClienteAbogado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $expedienteClienteAbogados A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteClienteAbogados(PropelCollection $expedienteClienteAbogados, PropelPDO $con = null)
    {
        $expedienteClienteAbogadosToDelete = $this->getExpedienteClienteAbogados(new Criteria(), $con)->diff($expedienteClienteAbogados);

        $this->expedienteClienteAbogadosScheduledForDeletion = unserialize(serialize($expedienteClienteAbogadosToDelete));

        foreach ($expedienteClienteAbogadosToDelete as $expedienteClienteAbogadoRemoved) {
            $expedienteClienteAbogadoRemoved->setExpediente(null);
        }

        $this->collExpedienteClienteAbogados = null;
        foreach ($expedienteClienteAbogados as $expedienteClienteAbogado) {
            $this->addExpedienteClienteAbogado($expedienteClienteAbogado);
        }

        $this->collExpedienteClienteAbogados = $expedienteClienteAbogados;
        $this->collExpedienteClienteAbogadosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExpedienteClienteAbogado objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExpedienteClienteAbogado objects.
     * @throws PropelException
     */
    public function countExpedienteClienteAbogados(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExpedienteClienteAbogadosPartial && !$this->isNew();
        if (null === $this->collExpedienteClienteAbogados || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExpedienteClienteAbogados) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getExpedienteClienteAbogados());
            }
            $query = ExpedienteClienteAbogadoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExpediente($this)
                ->count($con);
        }

        return count($this->collExpedienteClienteAbogados);
    }

    /**
     * Method called to associate a ExpedienteClienteAbogado object to this object
     * through the ExpedienteClienteAbogado foreign key attribute.
     *
     * @param    ExpedienteClienteAbogado $l ExpedienteClienteAbogado
     * @return Expediente The current object (for fluent API support)
     */
    public function addExpedienteClienteAbogado(ExpedienteClienteAbogado $l)
    {
        if ($this->collExpedienteClienteAbogados === null) {
            $this->initExpedienteClienteAbogados();
            $this->collExpedienteClienteAbogadosPartial = true;
        }
        if (!in_array($l, $this->collExpedienteClienteAbogados->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExpedienteClienteAbogado($l);
        }

        return $this;
    }

    /**
     * @param	ExpedienteClienteAbogado $expedienteClienteAbogado The expedienteClienteAbogado object to add.
     */
    protected function doAddExpedienteClienteAbogado($expedienteClienteAbogado)
    {
        $this->collExpedienteClienteAbogados[]= $expedienteClienteAbogado;
        $expedienteClienteAbogado->setExpediente($this);
    }

    /**
     * @param	ExpedienteClienteAbogado $expedienteClienteAbogado The expedienteClienteAbogado object to remove.
     * @return Expediente The current object (for fluent API support)
     */
    public function removeExpedienteClienteAbogado($expedienteClienteAbogado)
    {
        if ($this->getExpedienteClienteAbogados()->contains($expedienteClienteAbogado)) {
            $this->collExpedienteClienteAbogados->remove($this->collExpedienteClienteAbogados->search($expedienteClienteAbogado));
            if (null === $this->expedienteClienteAbogadosScheduledForDeletion) {
                $this->expedienteClienteAbogadosScheduledForDeletion = clone $this->collExpedienteClienteAbogados;
                $this->expedienteClienteAbogadosScheduledForDeletion->clear();
            }
            $this->expedienteClienteAbogadosScheduledForDeletion[]= clone $expedienteClienteAbogado;
            $expedienteClienteAbogado->setExpediente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Expediente is new, it will return
     * an empty collection; or if this Expediente has previously
     * been saved, it will retrieve related ExpedienteClienteAbogados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Expediente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExpedienteClienteAbogado[] List of ExpedienteClienteAbogado objects
     */
    public function getExpedienteClienteAbogadosJoinCliente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedienteClienteAbogadoQuery::create(null, $criteria);
        $query->joinWith('Cliente', $join_behavior);

        return $this->getExpedienteClienteAbogados($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Expediente is new, it will return
     * an empty collection; or if this Expediente has previously
     * been saved, it will retrieve related ExpedienteClienteAbogados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Expediente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExpedienteClienteAbogado[] List of ExpedienteClienteAbogado objects
     */
    public function getExpedienteClienteAbogadosJoinAbogado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedienteClienteAbogadoQuery::create(null, $criteria);
        $query->joinWith('Abogado', $join_behavior);

        return $this->getExpedienteClienteAbogados($query, $con);
    }

    /**
     * Clears out the collUltimoProvs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Expediente The current object (for fluent API support)
     * @see        addUltimoProvs()
     */
    public function clearUltimoProvs()
    {
        $this->collUltimoProvs = null; // important to set this to null since that means it is uninitialized
        $this->collUltimoProvsPartial = null;

        return $this;
    }

    /**
     * reset is the collUltimoProvs collection loaded partially
     *
     * @return void
     */
    public function resetPartialUltimoProvs($v = true)
    {
        $this->collUltimoProvsPartial = $v;
    }

    /**
     * Initializes the collUltimoProvs collection.
     *
     * By default this just sets the collUltimoProvs collection to an empty array (like clearcollUltimoProvs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUltimoProvs($overrideExisting = true)
    {
        if (null !== $this->collUltimoProvs && !$overrideExisting) {
            return;
        }
        $this->collUltimoProvs = new PropelObjectCollection();
        $this->collUltimoProvs->setModel('UltimoProv');
    }

    /**
     * Gets an array of UltimoProv objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Expediente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|UltimoProv[] List of UltimoProv objects
     * @throws PropelException
     */
    public function getUltimoProvs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUltimoProvsPartial && !$this->isNew();
        if (null === $this->collUltimoProvs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUltimoProvs) {
                // return empty collection
                $this->initUltimoProvs();
            } else {
                $collUltimoProvs = UltimoProvQuery::create(null, $criteria)
                    ->filterByExpediente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUltimoProvsPartial && count($collUltimoProvs)) {
                      $this->initUltimoProvs(false);

                      foreach($collUltimoProvs as $obj) {
                        if (false == $this->collUltimoProvs->contains($obj)) {
                          $this->collUltimoProvs->append($obj);
                        }
                      }

                      $this->collUltimoProvsPartial = true;
                    }

                    $collUltimoProvs->getInternalIterator()->rewind();
                    return $collUltimoProvs;
                }

                if($partial && $this->collUltimoProvs) {
                    foreach($this->collUltimoProvs as $obj) {
                        if($obj->isNew()) {
                            $collUltimoProvs[] = $obj;
                        }
                    }
                }

                $this->collUltimoProvs = $collUltimoProvs;
                $this->collUltimoProvsPartial = false;
            }
        }

        return $this->collUltimoProvs;
    }

    /**
     * Sets a collection of UltimoProv objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ultimoProvs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Expediente The current object (for fluent API support)
     */
    public function setUltimoProvs(PropelCollection $ultimoProvs, PropelPDO $con = null)
    {
        $ultimoProvsToDelete = $this->getUltimoProvs(new Criteria(), $con)->diff($ultimoProvs);

        $this->ultimoProvsScheduledForDeletion = unserialize(serialize($ultimoProvsToDelete));

        foreach ($ultimoProvsToDelete as $ultimoProvRemoved) {
            $ultimoProvRemoved->setExpediente(null);
        }

        $this->collUltimoProvs = null;
        foreach ($ultimoProvs as $ultimoProv) {
            $this->addUltimoProv($ultimoProv);
        }

        $this->collUltimoProvs = $ultimoProvs;
        $this->collUltimoProvsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related UltimoProv objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related UltimoProv objects.
     * @throws PropelException
     */
    public function countUltimoProvs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUltimoProvsPartial && !$this->isNew();
        if (null === $this->collUltimoProvs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUltimoProvs) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getUltimoProvs());
            }
            $query = UltimoProvQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExpediente($this)
                ->count($con);
        }

        return count($this->collUltimoProvs);
    }

    /**
     * Method called to associate a UltimoProv object to this object
     * through the UltimoProv foreign key attribute.
     *
     * @param    UltimoProv $l UltimoProv
     * @return Expediente The current object (for fluent API support)
     */
    public function addUltimoProv(UltimoProv $l)
    {
        if ($this->collUltimoProvs === null) {
            $this->initUltimoProvs();
            $this->collUltimoProvsPartial = true;
        }
        if (!in_array($l, $this->collUltimoProvs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddUltimoProv($l);
        }

        return $this;
    }

    /**
     * @param	UltimoProv $ultimoProv The ultimoProv object to add.
     */
    protected function doAddUltimoProv($ultimoProv)
    {
        $this->collUltimoProvs[]= $ultimoProv;
        $ultimoProv->setExpediente($this);
    }

    /**
     * @param	UltimoProv $ultimoProv The ultimoProv object to remove.
     * @return Expediente The current object (for fluent API support)
     */
    public function removeUltimoProv($ultimoProv)
    {
        if ($this->getUltimoProvs()->contains($ultimoProv)) {
            $this->collUltimoProvs->remove($this->collUltimoProvs->search($ultimoProv));
            if (null === $this->ultimoProvsScheduledForDeletion) {
                $this->ultimoProvsScheduledForDeletion = clone $this->collUltimoProvs;
                $this->ultimoProvsScheduledForDeletion->clear();
            }
            $this->ultimoProvsScheduledForDeletion[]= clone $ultimoProv;
            $ultimoProv->setExpediente(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_expediente = null;
        $this->caratula = null;
        $this->num_expte = null;
        $this->anio = null;
        $this->juzgado = null;
        $this->tipo_de_parte = null;
        $this->abogado_contraparte = null;
        $this->nombre_contraparte = null;
        $this->domicilio_const_contraparte = null;
        $this->domicilio_real_contraparte = null;
        $this->circunscripcion = null;
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
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collExpedienteClienteAbogados) {
                foreach ($this->collExpedienteClienteAbogados as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUltimoProvs) {
                foreach ($this->collUltimoProvs as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collExpedienteClienteAbogados instanceof PropelCollection) {
            $this->collExpedienteClienteAbogados->clearIterator();
        }
        $this->collExpedienteClienteAbogados = null;
        if ($this->collUltimoProvs instanceof PropelCollection) {
            $this->collUltimoProvs->clearIterator();
        }
        $this->collUltimoProvs = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ExpedientePeer::DEFAULT_STRING_FORMAT);
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

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {

        // symfony_behaviors behavior
        if ($callable = sfMixer::getCallable('BaseExpediente:' . $name))
        {
          array_unshift($params, $this);
          return call_user_func_array($callable, $params);
        }


        return parent::__call($name, $params);
    }

}
