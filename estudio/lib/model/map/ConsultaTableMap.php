<?php



/**
 * This class defines the structure of the 'consulta' table.
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
class ConsultaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.ConsultaTableMap';

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
        $this->setName('consulta');
        $this->setPhpName('Consulta');
        $this->setClassname('Consulta');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_consulta', 'IdConsulta', 'INTEGER', true, 10, null);
        $this->addColumn('fecha', 'Fecha', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addForeignKey('abogado_id', 'AbogadoId', 'TINYINT', 'abogado', 'id_abogado', true, 3, null);
        $this->addForeignKey('cliente_id', 'ClienteId', 'SMALLINT', 'cliente', 'id_cliente', true, 5, null);
        $this->addColumn('descripcion', 'Descripcion', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Abogado', 'Abogado', RelationMap::MANY_TO_ONE, array('abogado_id' => 'id_abogado', ), null, null);
        $this->addRelation('Cliente', 'Cliente', RelationMap::MANY_TO_ONE, array('cliente_id' => 'id_cliente', ), null, null);
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

} // ConsultaTableMap
