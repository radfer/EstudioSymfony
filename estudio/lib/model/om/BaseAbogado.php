<?php


/**
 * Base class that represents a row from the 'abogado' table.
 *
 *
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAbogado extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AbogadoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AbogadoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_abogado field.
     * @var        int
     */
    protected $id_abogado;

    /**
     * The value for the apellido field.
     * @var        string
     */
    protected $apellido;

    /**
     * The value for the nombre field.
     * @var        string
     */
    protected $nombre;

    /**
     * The value for the dni field.
     * @var        int
     */
    protected $dni;

    /**
     * The value for the matricula field.
     * @var        string
     */
    protected $matricula;

    /**
     * The value for the telefono field.
     * @var        string
     */
    protected $telefono;

    /**
     * The value for the mail field.
     * @var        string
     */
    protected $mail;

    /**
     * The value for the contrasenia field.
     * @var        string
     */
    protected $contrasenia;

    /**
     * @var        PropelObjectCollection|Consulta[] Collection to store aggregation of Consulta objects.
     */
    protected $collConsultas;
    protected $collConsultasPartial;

    /**
     * @var        PropelObjectCollection|ExpedienteClienteAbogado[] Collection to store aggregation of ExpedienteClienteAbogado objects.
     */
    protected $collExpedienteClienteAbogados;
    protected $collExpedienteClienteAbogadosPartial;

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
    protected $consultasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $expedienteClienteAbogadosScheduledForDeletion = null;

    /**
     * Get the [id_abogado] column value.
     *
     * @return int
     */
    public function getIdAbogado()
    {
        return $this->id_abogado;
    }

    /**
     * Get the [apellido] column value.
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Get the [nombre] column value.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the [dni] column value.
     *
     * @return int
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Get the [matricula] column value.
     *
     * @return string
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Get the [telefono] column value.
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Get the [mail] column value.
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Get the [contrasenia] column value.
     *
     * @return string
     */
    public function getContrasenia()
    {
        return $this->contrasenia;
    }

    /**
     * Set the value of [id_abogado] column.
     *
     * @param int $v new value
     * @return Abogado The current object (for fluent API support)
     */
    public function setIdAbogado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_abogado !== $v) {
            $this->id_abogado = $v;
            $this->modifiedColumns[] = AbogadoPeer::ID_ABOGADO;
        }


        return $this;
    } // setIdAbogado()

    /**
     * Set the value of [apellido] column.
     *
     * @param string $v new value
     * @return Abogado The current object (for fluent API support)
     */
    public function setApellido($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->apellido !== $v) {
            $this->apellido = $v;
            $this->modifiedColumns[] = AbogadoPeer::APELLIDO;
        }


        return $this;
    } // setApellido()

    /**
     * Set the value of [nombre] column.
     *
     * @param string $v new value
     * @return Abogado The current object (for fluent API support)
     */
    public function setNombre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nombre !== $v) {
            $this->nombre = $v;
            $this->modifiedColumns[] = AbogadoPeer::NOMBRE;
        }


        return $this;
    } // setNombre()

    /**
     * Set the value of [dni] column.
     *
     * @param int $v new value
     * @return Abogado The current object (for fluent API support)
     */
    public function setDni($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dni !== $v) {
            $this->dni = $v;
            $this->modifiedColumns[] = AbogadoPeer::DNI;
        }


        return $this;
    } // setDni()

    /**
     * Set the value of [matricula] column.
     *
     * @param string $v new value
     * @return Abogado The current object (for fluent API support)
     */
    public function setMatricula($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->matricula !== $v) {
            $this->matricula = $v;
            $this->modifiedColumns[] = AbogadoPeer::MATRICULA;
        }


        return $this;
    } // setMatricula()

    /**
     * Set the value of [telefono] column.
     *
     * @param string $v new value
     * @return Abogado The current object (for fluent API support)
     */
    public function setTelefono($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telefono !== $v) {
            $this->telefono = $v;
            $this->modifiedColumns[] = AbogadoPeer::TELEFONO;
        }


        return $this;
    } // setTelefono()

    /**
     * Set the value of [mail] column.
     *
     * @param string $v new value
     * @return Abogado The current object (for fluent API support)
     */
    public function setMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mail !== $v) {
            $this->mail = $v;
            $this->modifiedColumns[] = AbogadoPeer::MAIL;
        }


        return $this;
    } // setMail()

    /**
     * Set the value of [contrasenia] column.
     *
     * @param string $v new value
     * @return Abogado The current object (for fluent API support)
     */
    public function setContrasenia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contrasenia !== $v) {
            $this->contrasenia = $v;
            $this->modifiedColumns[] = AbogadoPeer::CONTRASENIA;
        }


        return $this;
    } // setContrasenia()

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

            $this->id_abogado = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->apellido = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->dni = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->matricula = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->telefono = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->mail = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->contrasenia = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 8; // 8 = AbogadoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Abogado object", $e);
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
            $con = Propel::getConnection(AbogadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AbogadoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collConsultas = null;

            $this->collExpedienteClienteAbogados = null;

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
            $con = Propel::getConnection(AbogadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AbogadoQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseAbogado:delete:pre') as $callable)
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
                foreach (sfMixer::getCallables('BaseAbogado:delete:post') as $callable)
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
            $con = Propel::getConnection(AbogadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseAbogado:save:pre') as $callable)
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
                foreach (sfMixer::getCallables('BaseAbogado:save:post') as $callable)
                {
                  call_user_func($callable, $this, $con, $affectedRows);
                }

                AbogadoPeer::addInstanceToPool($this);
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

            if ($this->consultasScheduledForDeletion !== null) {
                if (!$this->consultasScheduledForDeletion->isEmpty()) {
                    ConsultaQuery::create()
                        ->filterByPrimaryKeys($this->consultasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->consultasScheduledForDeletion = null;
                }
            }

            if ($this->collConsultas !== null) {
                foreach ($this->collConsultas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = AbogadoPeer::ID_ABOGADO;
        if (null !== $this->id_abogado) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AbogadoPeer::ID_ABOGADO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AbogadoPeer::ID_ABOGADO)) {
            $modifiedColumns[':p' . $index++]  = '`id_abogado`';
        }
        if ($this->isColumnModified(AbogadoPeer::APELLIDO)) {
            $modifiedColumns[':p' . $index++]  = '`apellido`';
        }
        if ($this->isColumnModified(AbogadoPeer::NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`nombre`';
        }
        if ($this->isColumnModified(AbogadoPeer::DNI)) {
            $modifiedColumns[':p' . $index++]  = '`dni`';
        }
        if ($this->isColumnModified(AbogadoPeer::MATRICULA)) {
            $modifiedColumns[':p' . $index++]  = '`matricula`';
        }
        if ($this->isColumnModified(AbogadoPeer::TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`telefono`';
        }
        if ($this->isColumnModified(AbogadoPeer::MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`mail`';
        }
        if ($this->isColumnModified(AbogadoPeer::CONTRASENIA)) {
            $modifiedColumns[':p' . $index++]  = '`contrasenia`';
        }

        $sql = sprintf(
            'INSERT INTO `abogado` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_abogado`':
                        $stmt->bindValue($identifier, $this->id_abogado, PDO::PARAM_INT);
                        break;
                    case '`apellido`':
                        $stmt->bindValue($identifier, $this->apellido, PDO::PARAM_STR);
                        break;
                    case '`nombre`':
                        $stmt->bindValue($identifier, $this->nombre, PDO::PARAM_STR);
                        break;
                    case '`dni`':
                        $stmt->bindValue($identifier, $this->dni, PDO::PARAM_INT);
                        break;
                    case '`matricula`':
                        $stmt->bindValue($identifier, $this->matricula, PDO::PARAM_STR);
                        break;
                    case '`telefono`':
                        $stmt->bindValue($identifier, $this->telefono, PDO::PARAM_STR);
                        break;
                    case '`mail`':
                        $stmt->bindValue($identifier, $this->mail, PDO::PARAM_STR);
                        break;
                    case '`contrasenia`':
                        $stmt->bindValue($identifier, $this->contrasenia, PDO::PARAM_STR);
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
        $this->setIdAbogado($pk);

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


            if (($retval = AbogadoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collConsultas !== null) {
                    foreach ($this->collConsultas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExpedienteClienteAbogados !== null) {
                    foreach ($this->collExpedienteClienteAbogados as $referrerFK) {
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
        $pos = AbogadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdAbogado();
                break;
            case 1:
                return $this->getApellido();
                break;
            case 2:
                return $this->getNombre();
                break;
            case 3:
                return $this->getDni();
                break;
            case 4:
                return $this->getMatricula();
                break;
            case 5:
                return $this->getTelefono();
                break;
            case 6:
                return $this->getMail();
                break;
            case 7:
                return $this->getContrasenia();
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
        if (isset($alreadyDumpedObjects['Abogado'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Abogado'][$this->getPrimaryKey()] = true;
        $keys = AbogadoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdAbogado(),
            $keys[1] => $this->getApellido(),
            $keys[2] => $this->getNombre(),
            $keys[3] => $this->getDni(),
            $keys[4] => $this->getMatricula(),
            $keys[5] => $this->getTelefono(),
            $keys[6] => $this->getMail(),
            $keys[7] => $this->getContrasenia(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collConsultas) {
                $result['Consultas'] = $this->collConsultas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExpedienteClienteAbogados) {
                $result['ExpedienteClienteAbogados'] = $this->collExpedienteClienteAbogados->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = AbogadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdAbogado($value);
                break;
            case 1:
                $this->setApellido($value);
                break;
            case 2:
                $this->setNombre($value);
                break;
            case 3:
                $this->setDni($value);
                break;
            case 4:
                $this->setMatricula($value);
                break;
            case 5:
                $this->setTelefono($value);
                break;
            case 6:
                $this->setMail($value);
                break;
            case 7:
                $this->setContrasenia($value);
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
        $keys = AbogadoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdAbogado($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setApellido($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNombre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDni($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMatricula($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTelefono($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMail($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setContrasenia($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AbogadoPeer::DATABASE_NAME);

        if ($this->isColumnModified(AbogadoPeer::ID_ABOGADO)) $criteria->add(AbogadoPeer::ID_ABOGADO, $this->id_abogado);
        if ($this->isColumnModified(AbogadoPeer::APELLIDO)) $criteria->add(AbogadoPeer::APELLIDO, $this->apellido);
        if ($this->isColumnModified(AbogadoPeer::NOMBRE)) $criteria->add(AbogadoPeer::NOMBRE, $this->nombre);
        if ($this->isColumnModified(AbogadoPeer::DNI)) $criteria->add(AbogadoPeer::DNI, $this->dni);
        if ($this->isColumnModified(AbogadoPeer::MATRICULA)) $criteria->add(AbogadoPeer::MATRICULA, $this->matricula);
        if ($this->isColumnModified(AbogadoPeer::TELEFONO)) $criteria->add(AbogadoPeer::TELEFONO, $this->telefono);
        if ($this->isColumnModified(AbogadoPeer::MAIL)) $criteria->add(AbogadoPeer::MAIL, $this->mail);
        if ($this->isColumnModified(AbogadoPeer::CONTRASENIA)) $criteria->add(AbogadoPeer::CONTRASENIA, $this->contrasenia);

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
        $criteria = new Criteria(AbogadoPeer::DATABASE_NAME);
        $criteria->add(AbogadoPeer::ID_ABOGADO, $this->id_abogado);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdAbogado();
    }

    /**
     * Generic method to set the primary key (id_abogado column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdAbogado($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdAbogado();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Abogado (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setApellido($this->getApellido());
        $copyObj->setNombre($this->getNombre());
        $copyObj->setDni($this->getDni());
        $copyObj->setMatricula($this->getMatricula());
        $copyObj->setTelefono($this->getTelefono());
        $copyObj->setMail($this->getMail());
        $copyObj->setContrasenia($this->getContrasenia());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getConsultas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addConsulta($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExpedienteClienteAbogados() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExpedienteClienteAbogado($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdAbogado(NULL); // this is a auto-increment column, so set to default value
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
     * @return Abogado Clone of current object.
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
     * @return AbogadoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AbogadoPeer();
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
        if ('Consulta' == $relationName) {
            $this->initConsultas();
        }
        if ('ExpedienteClienteAbogado' == $relationName) {
            $this->initExpedienteClienteAbogados();
        }
    }

    /**
     * Clears out the collConsultas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Abogado The current object (for fluent API support)
     * @see        addConsultas()
     */
    public function clearConsultas()
    {
        $this->collConsultas = null; // important to set this to null since that means it is uninitialized
        $this->collConsultasPartial = null;

        return $this;
    }

    /**
     * reset is the collConsultas collection loaded partially
     *
     * @return void
     */
    public function resetPartialConsultas($v = true)
    {
        $this->collConsultasPartial = $v;
    }

    /**
     * Initializes the collConsultas collection.
     *
     * By default this just sets the collConsultas collection to an empty array (like clearcollConsultas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initConsultas($overrideExisting = true)
    {
        if (null !== $this->collConsultas && !$overrideExisting) {
            return;
        }
        $this->collConsultas = new PropelObjectCollection();
        $this->collConsultas->setModel('Consulta');
    }

    /**
     * Gets an array of Consulta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Abogado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Consulta[] List of Consulta objects
     * @throws PropelException
     */
    public function getConsultas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collConsultasPartial && !$this->isNew();
        if (null === $this->collConsultas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collConsultas) {
                // return empty collection
                $this->initConsultas();
            } else {
                $collConsultas = ConsultaQuery::create(null, $criteria)
                    ->filterByAbogado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collConsultasPartial && count($collConsultas)) {
                      $this->initConsultas(false);

                      foreach($collConsultas as $obj) {
                        if (false == $this->collConsultas->contains($obj)) {
                          $this->collConsultas->append($obj);
                        }
                      }

                      $this->collConsultasPartial = true;
                    }

                    $collConsultas->getInternalIterator()->rewind();
                    return $collConsultas;
                }

                if($partial && $this->collConsultas) {
                    foreach($this->collConsultas as $obj) {
                        if($obj->isNew()) {
                            $collConsultas[] = $obj;
                        }
                    }
                }

                $this->collConsultas = $collConsultas;
                $this->collConsultasPartial = false;
            }
        }

        return $this->collConsultas;
    }

    /**
     * Sets a collection of Consulta objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $consultas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Abogado The current object (for fluent API support)
     */
    public function setConsultas(PropelCollection $consultas, PropelPDO $con = null)
    {
        $consultasToDelete = $this->getConsultas(new Criteria(), $con)->diff($consultas);

        $this->consultasScheduledForDeletion = unserialize(serialize($consultasToDelete));

        foreach ($consultasToDelete as $consultaRemoved) {
            $consultaRemoved->setAbogado(null);
        }

        $this->collConsultas = null;
        foreach ($consultas as $consulta) {
            $this->addConsulta($consulta);
        }

        $this->collConsultas = $consultas;
        $this->collConsultasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Consulta objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Consulta objects.
     * @throws PropelException
     */
    public function countConsultas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collConsultasPartial && !$this->isNew();
        if (null === $this->collConsultas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collConsultas) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getConsultas());
            }
            $query = ConsultaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAbogado($this)
                ->count($con);
        }

        return count($this->collConsultas);
    }

    /**
     * Method called to associate a Consulta object to this object
     * through the Consulta foreign key attribute.
     *
     * @param    Consulta $l Consulta
     * @return Abogado The current object (for fluent API support)
     */
    public function addConsulta(Consulta $l)
    {
        if ($this->collConsultas === null) {
            $this->initConsultas();
            $this->collConsultasPartial = true;
        }
        if (!in_array($l, $this->collConsultas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddConsulta($l);
        }

        return $this;
    }

    /**
     * @param	Consulta $consulta The consulta object to add.
     */
    protected function doAddConsulta($consulta)
    {
        $this->collConsultas[]= $consulta;
        $consulta->setAbogado($this);
    }

    /**
     * @param	Consulta $consulta The consulta object to remove.
     * @return Abogado The current object (for fluent API support)
     */
    public function removeConsulta($consulta)
    {
        if ($this->getConsultas()->contains($consulta)) {
            $this->collConsultas->remove($this->collConsultas->search($consulta));
            if (null === $this->consultasScheduledForDeletion) {
                $this->consultasScheduledForDeletion = clone $this->collConsultas;
                $this->consultasScheduledForDeletion->clear();
            }
            $this->consultasScheduledForDeletion[]= clone $consulta;
            $consulta->setAbogado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Abogado is new, it will return
     * an empty collection; or if this Abogado has previously
     * been saved, it will retrieve related Consultas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Abogado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Consulta[] List of Consulta objects
     */
    public function getConsultasJoinCliente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ConsultaQuery::create(null, $criteria);
        $query->joinWith('Cliente', $join_behavior);

        return $this->getConsultas($query, $con);
    }

    /**
     * Clears out the collExpedienteClienteAbogados collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Abogado The current object (for fluent API support)
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
     * If this Abogado is new, it will return
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
                    ->filterByAbogado($this)
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
     * @return Abogado The current object (for fluent API support)
     */
    public function setExpedienteClienteAbogados(PropelCollection $expedienteClienteAbogados, PropelPDO $con = null)
    {
        $expedienteClienteAbogadosToDelete = $this->getExpedienteClienteAbogados(new Criteria(), $con)->diff($expedienteClienteAbogados);

        $this->expedienteClienteAbogadosScheduledForDeletion = unserialize(serialize($expedienteClienteAbogadosToDelete));

        foreach ($expedienteClienteAbogadosToDelete as $expedienteClienteAbogadoRemoved) {
            $expedienteClienteAbogadoRemoved->setAbogado(null);
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
                ->filterByAbogado($this)
                ->count($con);
        }

        return count($this->collExpedienteClienteAbogados);
    }

    /**
     * Method called to associate a ExpedienteClienteAbogado object to this object
     * through the ExpedienteClienteAbogado foreign key attribute.
     *
     * @param    ExpedienteClienteAbogado $l ExpedienteClienteAbogado
     * @return Abogado The current object (for fluent API support)
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
        $expedienteClienteAbogado->setAbogado($this);
    }

    /**
     * @param	ExpedienteClienteAbogado $expedienteClienteAbogado The expedienteClienteAbogado object to remove.
     * @return Abogado The current object (for fluent API support)
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
            $expedienteClienteAbogado->setAbogado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Abogado is new, it will return
     * an empty collection; or if this Abogado has previously
     * been saved, it will retrieve related ExpedienteClienteAbogados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Abogado.
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
     * Otherwise if this Abogado is new, it will return
     * an empty collection; or if this Abogado has previously
     * been saved, it will retrieve related ExpedienteClienteAbogados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Abogado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExpedienteClienteAbogado[] List of ExpedienteClienteAbogado objects
     */
    public function getExpedienteClienteAbogadosJoinExpediente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedienteClienteAbogadoQuery::create(null, $criteria);
        $query->joinWith('Expediente', $join_behavior);

        return $this->getExpedienteClienteAbogados($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_abogado = null;
        $this->apellido = null;
        $this->nombre = null;
        $this->dni = null;
        $this->matricula = null;
        $this->telefono = null;
        $this->mail = null;
        $this->contrasenia = null;
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
            if ($this->collConsultas) {
                foreach ($this->collConsultas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExpedienteClienteAbogados) {
                foreach ($this->collExpedienteClienteAbogados as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collConsultas instanceof PropelCollection) {
            $this->collConsultas->clearIterator();
        }
        $this->collConsultas = null;
        if ($this->collExpedienteClienteAbogados instanceof PropelCollection) {
            $this->collExpedienteClienteAbogados->clearIterator();
        }
        $this->collExpedienteClienteAbogados = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AbogadoPeer::DEFAULT_STRING_FORMAT);
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
        if ($callable = sfMixer::getCallable('BaseAbogado:' . $name))
        {
          array_unshift($params, $this);
          return call_user_func_array($callable, $params);
        }


        return parent::__call($name, $params);
    }

}
