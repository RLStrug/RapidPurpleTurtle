<?php
require_once File::build_path(array('model', 'Model.php'));

class ModelExpert extends Model {

  private $customer_id;
  private $customer_name;
  private $customer_email;
  private $customer_filiere;

  public function getCustomer_id(){return $this->customer_id;}
	public function setCustomer_id($customer_id){$this->customer_id = $customer_id;}
    public function getMedecine(){return $this->medecine;}
    public function setMedecine($medecine){$this->medecine = $medecine;}

	public function getFinance(){return $this->$finance;}
    public function setFinance($finance){$this->$finance = $finance;}

	public function getDroit(){return $this->$droit;}
	public function setDroit($droit){$this->$droit = $droit;}


  protected static $object = "list_specialite";
  protected static $primary = 'customer_id';
  protected static $class = "Expert";

  public function __construct( $customer_id = NULL, $medecine = NULL, $finance = NULL, $droit = NULL) {
       if (!is_null($customer_id) && !is_null($medecine) && !is_null($finance) && !is_null($droit)){
         $this->$customer_id = $customer_id;
         $this->$medecine = $medecine;
         $this->$finance = $finance;
         $this->$droit = $droit;
       }
   }



}

?>
