<?php
namespace OTS\Core\Validators;

abstract class Validatior{

  public $success = true, $msg = '', $field, $additionalFieldData=[], $rule, $includeDeleted = false;
  protected $_obj;

  public function __construct($obj, $params){
    $this->_obj = $obj;
    if(!array_key_exists('field', $params)){
      throw new \Exception("You must add fields to the params array");
    }
    $this->field = $params['field'];
    if(is_array($params['field'])){
      $this->field = $params['field'][0];
      array_shift($params['field']);
      $this->additionalFieldData = $params['field'];
    }
    if(!property_exists($this->obj, $this->field)){
      throw new \Exception("The field must exist as a property on the model object");
    }
  }
  abstract public function runValidation();
}


