<?php
require_once File::build_path(array("model","Model.php"));
class ModelUtilisateur extends Model {

    protected static $object = 'utilisateur';
    protected static $primary ='email';

    private $prenom;
    private $nom;
    private $gender;
    private $email;
    private $password;
    private $admin;


    // Getters
    public function getPrenom(){return $this->prenom;}

    public function getNom(){return $this->nom;}

    public function getGender(){return $this->gender;}

    public function getEmail(){return $this->email;}

    public function getPassword(){return $this->password;}

    public function getAdmin(){return $this->admin;}

    // Setters
    public function setPrenom($prenom){$this->prenom = $prenom;}

    public function setNom($nom){$this->nom = $nom;}

    public function setGender($gender){$this->gender = $gender;}

    public function setEmail($email){$this->email = $email;}

    public function setPassword($password){$this->password = $password;}

    public function setAdmin($admin){$this->admin = $admin;}


    //Constructeur
    public function __construct($prenom = NULL, $nom = NULL, $gender = NULL, $email = NULL, $password = NULL, $admin = NULL) {
        if (!is_null($prenom) && !is_null($nom) && !is_null($gender) && !is_null($email) && !is_null($password) && !is_null($admin)) {
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->gender = $gender;
            $this->email = $email;
            $this->password = $password;
            $this->admin = $admin;
        }
    }

    public static function checkPassword($email,$passwordhache) {

    }
}
?>