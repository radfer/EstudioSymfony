<?php



/**
 * This class defines the structure of the 'abogado' table.
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
class AbogadoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.AbogadoTableMap';

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
        $this->setName('abogado');
        $this->setPhpName('Abogado');
        $this->setClassname('Abogado');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_abogado', 'IdAbogado', 'TINYINT', true, 3, null);
        $this->addColumn('apellido', 'Apellido', 'VARCHAR', true, 45, null);
        $this->addColumn('nombre', 'Nombre', 'VARCHAR', true, 45, null);
        $this->addColumn('dni', 'Dni', 'INTEGER', true, 10, null);
        $this->addColumn('matricula', 'Matricula', 'VARCHAR', true, 45, null);
        $this->addColumn('telefono', 'Telefono', 'VARCHAR', false, 40, null);
        $this->addColumn('mail', 'Mail', 'VARCHAR', true, 45, null);
        $this->addColumn('contrasenia', 'Contrasenia', 'VARCHAR', true, 8, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Consulta', 'Consulta', RelationMap::ONE_TO_MANY, array('id_abogado' => 'abogado_id', ), null, null, 'Consultas');
        $this->addRelation('ExpedienteClienteAbogado', 'ExpedienteClienteAbogado', RelationMap::ONE_TO_MANY, array('id_abogado' => 'abogado_id', ), null, null, 'ExpedienteClienteAbogados');
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

} // AbogadoTableMap
