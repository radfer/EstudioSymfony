<?php



/**
 * This class defines the structure of the 'juzgado' table.
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
class JuzgadoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.JuzgadoTableMap';

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
        $this->setName('juzgado');
        $this->setPhpName('Juzgado');
        $this->setClassname('Juzgado');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_juzgado', 'IdJuzgado', 'INTEGER', true, 10, null);
        $this->addColumn('nombre', 'Nombre', 'VARCHAR', true, 45, null);
        $this->addColumn('juez', 'Juez', 'VARCHAR', true, 100, null);
        $this->addColumn('secretario', 'Secretario', 'VARCHAR', false, 45, null);
        $this->addColumn('direccion', 'Direccion', 'VARCHAR', true, 45, null);
        $this->addColumn('ciudad', 'Ciudad', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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

} // JuzgadoTableMap
