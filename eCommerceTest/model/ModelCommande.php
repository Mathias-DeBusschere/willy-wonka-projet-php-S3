 <?php
  require_once File::build_path(array("model","Model.php"));
  class ModelCommande extends Model{

    protected static $object = 'commande';  
    protected static $primary ='id';

    private $id;
    private $idUtilisateur;


    // Getters
    public function getId(){return $this->id;}   

    public function getIdUtilisateur(){return $this->idUtilisateur;}


    // Setters
    public function setId($id1){$this->id = $id1;}

    public function setIdUtilisateur($idUtilisateur){$this->idUtilisateur = $idUtilisateur;}


    //Constructeur
    public function __construct($id = NULL, $idU = NULL) {
    if (!is_null($id) && !is_null($idU)) {
      $this->id= $id;
      $this->idUtilisateur = $idU;
      }
    }
}
?>
