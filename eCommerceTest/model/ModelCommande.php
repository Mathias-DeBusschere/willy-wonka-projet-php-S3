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

    /*public function getQuantite($idCommande,$idProduit){
        $sql = 'SELECT Quantite FROM p_contenu WHERE idCommande=:nom_tag1 AND idProduit=:nomtag2';

        try{
            $req_prep = Model::$pdo->prepare($sql);
            $values = array("nom_tag1" => $idCommande,"nom_tag2" => $idProduit);
            $req_prep->execute($values);
            $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelContenu');
            $tab_object = $req_prep->fetchAll();
        } catch(PDOException $e) {
            echo $e->getMessage();
            die();
        }
        if (empty($tab_object)){
            return false;
        }
        return $tab_object[0];

    }*/

    public static function selectAllContenu($idCommande){
      $table_name = 'p_contenu';
      $class_name = 'ModelContenu';
      
      $sql = 'SELECT * FROM p_contenu WHERE idCommande=:nom_tag';
      try{
            $req_prep = Model::$pdo->prepare($sql);
            $values = array("nom_tag" => $idCommande);
            $req_prep->execute($values);
            $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelContenu');
            $tab_object = $req_prep->fetchAll();
        } catch(PDOException $e) {
            echo $e->getMessage();
            die();
        }
        if (empty($tab_object)){
            return false;
        }
      return $tab_object;
    }


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
