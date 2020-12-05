 <?php
  require_once File::build_path(array("model","Model.php"));
  class ModelCommande extends Model{

    protected static $object = 'commande';  
    protected static $primary ='id';

    private $id;
    private $idProduit;
    private $idUtilisateur;


    // Getters
    public function getId(){return $this->id;}  

    public function getIdProduit(){return $this->idProduit;}  

    public function getIdUtilisateur(){return $this->idUtilisateur;}


    // Setters
    public function setId($id1){$this->id = $id1;}

    public function setIdProduit($idProduit){$this->idProduit = $idProduit;}

    public function setIdUtilisateur($idUtilisateur){$this->idUtilisateur = $idUtilisateur;}


    //Constructeur
    public function __construct($id = NULL, $idP = NULL, $idU = NULL) {
    if (!is_null($id) && !is_null($idP) && !is_null($idU)) {
      $this->id= $id;
      $this->idProduit = $idP;
      $this->idUtilisateur = $idU;
      }
    }
}
?>