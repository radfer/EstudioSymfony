<?php



/**
 * This class defines the structure of the 'expediente_cliente_abogado' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class ExpedienteClienteAbogadoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.ExpedienteClienteAbogadoTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('expediente_cliente_abogado');
        $this->setPhpName('ExpedienteClienteAbogado');
        $this->setClassname('ExpedienteClienteAbogado');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('cliente_id', 'ClienteId', 'SMALLINT' , 'cliente', 'id_cliente', true, 5, 0);
        $this->addForeignPrimaryKey('abogado_id', 'AbogadoId', 'TINYINT' , 'abogado', 'id_abogado', true, 3, 0);
        $this->addForeignPrimaryKey('expediente_id', 'ExpedienteId', 'INTEGER' , 'expediente', 'id_expediente', true, 10, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cliente', 'Cliente', RelationMap::MANY_TO_ONE, array('cliente_id' => 'id_cliente', ), null, null);
        $this->addRelation('Abogado', 'Abogado', RelationMap::MANY_TO_ONE, array('abogado_id' => 'id_abogado', ), null, null);
        $this->addRelation('Expediente', 'Expediente', RelationMap::MANY_TO_ONE, array('expediente_id' => 'id_expediente', ), null, null);
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'symfony' =>  array (
  'form' => 'true',
  'filter' => 'true',
),
            'symfony_behaviors' =>  array (
),
        );
    } // getBehaviors()

} // ExpedienteClienteAbogadoTableMap
