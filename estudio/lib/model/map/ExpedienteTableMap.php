<?php



/**
 * This class defines the structure of the 'expediente' table.
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
class ExpedienteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.ExpedienteTableMap';

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
        $this->setName('expediente');
        $this->setPhpName('Expediente');
        $this->setClassname('Expediente');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_expediente', 'IdExpediente', 'INTEGER', true, 10, null);
        $this->addColumn('caratula', 'Caratula', 'VARCHAR', true, 90, null);
        $this->addColumn('num_expte', 'NumExpte', 'INTEGER', true, 10, null);
        $this->addColumn('anio', 'Anio', 'INTEGER', true, 4, null);
        $this->addColumn('juzgado', 'Juzgado', 'VARCHAR', true, 45, null);
        $this->addColumn('tipo_de_parte', 'TipoDeParte', 'CHAR', true, null, null);
        $this->addColumn('abogado_contraparte', 'AbogadoContraparte', 'VARCHAR', false, 45, null);
        $this->addColumn('nombre_contraparte', 'NombreContraparte', 'VARCHAR', true, 45, null);
        $this->addColumn('domicilio_const_contraparte', 'DomicilioConstContraparte', 'VARCHAR', false, 45, null);
        $this->addColumn('domicilio_real_contraparte', 'DomicilioRealContraparte', 'VARCHAR', false, 45, null);
        $this->addColumn('circunscripcion', 'Circunscripcion', 'VARCHAR', false, 30, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ExpedienteClienteAbogado', 'ExpedienteClienteAbogado', RelationMap::ONE_TO_MANY, array('id_expediente' => 'expediente_id', ), null, null, 'ExpedienteClienteAbogados');
        $this->addRelation('UltimoProv', 'UltimoProv', RelationMap::ONE_TO_MANY, array('id_expediente' => 'id_expediente', ), null, null, 'UltimoProvs');
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

} // ExpedienteTableMap
