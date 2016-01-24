<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: tabletmanagerdata.proto
//   Date: 2016-01-22 01:34:35

namespace Vitess\Proto\Tabletmanagerdata {

  class TableDefinition extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $schema = null;
    
    /**  @var string[]  */
    public $columns = array();
    
    /**  @var string[]  */
    public $primary_key_columns = array();
    
    /**  @var string */
    public $type = null;
    
    /**  @var int */
    public $data_length = null;
    
    /**  @var int */
    public $row_count = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'tabletmanagerdata.TableDefinition');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING schema = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "schema";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED STRING columns = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "columns";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REPEATED STRING primary_key_columns = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "primary_key_columns";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL STRING type = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 data_length = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "data_length";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 row_count = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "row_count";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <schema> has a value
     *
     * @return boolean
     */
    public function hasSchema(){
      return $this->_has(2);
    }
    
    /**
     * Clear <schema> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function clearSchema(){
      return $this->_clear(2);
    }
    
    /**
     * Get <schema> value
     *
     * @return string
     */
    public function getSchema(){
      return $this->_get(2);
    }
    
    /**
     * Set <schema> value
     *
     * @param string $value
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function setSchema( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <columns> has a value
     *
     * @return boolean
     */
    public function hasColumns(){
      return $this->_has(3);
    }
    
    /**
     * Clear <columns> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function clearColumns(){
      return $this->_clear(3);
    }
    
    /**
     * Get <columns> value
     *
     * @param int $idx
     * @return string
     */
    public function getColumns($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <columns> value
     *
     * @param string $value
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function setColumns( $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <columns>
     *
     * @return string[]
     */
    public function getColumnsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <columns>
     *
     * @param string $value
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function addColumns( $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <primary_key_columns> has a value
     *
     * @return boolean
     */
    public function hasPrimaryKeyColumns(){
      return $this->_has(4);
    }
    
    /**
     * Clear <primary_key_columns> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function clearPrimaryKeyColumns(){
      return $this->_clear(4);
    }
    
    /**
     * Get <primary_key_columns> value
     *
     * @param int $idx
     * @return string
     */
    public function getPrimaryKeyColumns($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <primary_key_columns> value
     *
     * @param string $value
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function setPrimaryKeyColumns( $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <primary_key_columns>
     *
     * @return string[]
     */
    public function getPrimaryKeyColumnsList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <primary_key_columns>
     *
     * @param string $value
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function addPrimaryKeyColumns( $value){
     return $this->_add(4, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(5);
    }
    
    /**
     * Clear <type> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function clearType(){
      return $this->_clear(5);
    }
    
    /**
     * Get <type> value
     *
     * @return string
     */
    public function getType(){
      return $this->_get(5);
    }
    
    /**
     * Set <type> value
     *
     * @param string $value
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function setType( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <data_length> has a value
     *
     * @return boolean
     */
    public function hasDataLength(){
      return $this->_has(6);
    }
    
    /**
     * Clear <data_length> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function clearDataLength(){
      return $this->_clear(6);
    }
    
    /**
     * Get <data_length> value
     *
     * @return int
     */
    public function getDataLength(){
      return $this->_get(6);
    }
    
    /**
     * Set <data_length> value
     *
     * @param int $value
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function setDataLength( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <row_count> has a value
     *
     * @return boolean
     */
    public function hasRowCount(){
      return $this->_has(7);
    }
    
    /**
     * Clear <row_count> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function clearRowCount(){
      return $this->_clear(7);
    }
    
    /**
     * Get <row_count> value
     *
     * @return int
     */
    public function getRowCount(){
      return $this->_get(7);
    }
    
    /**
     * Set <row_count> value
     *
     * @param int $value
     * @return \Vitess\Proto\Tabletmanagerdata\TableDefinition
     */
    public function setRowCount( $value){
      return $this->_set(7, $value);
    }
  }
}
