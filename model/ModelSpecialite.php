<?php
require_once File::build_path(array('model', 'Model.php'));

class ModelSpecialite extends Model {


  protected static $object = "list_specialite";
  protected static $primary = 'customer_id';
  protected static $class = "Specialite";



}

?>
