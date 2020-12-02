<?php
require_once File::build_path(array("config","Conf.php"));
class Model {


    public static $pdo;

    public static function Init(){
        $hostname = Conf::getHostname();
        $database_name = Conf::getDatabase();
        $login = Conf::getLogin();
        $password = Conf::getPassword();

        try{
            // Connexion à la base de données            
            // Le dernier argument sert à ce que toutes les chaines de caractères 
            // en entrée et sortie de MySql soit dans le codage UTF-8
            self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
                                 array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            // On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur PDO est survenue.';
            }
            die();
        }
    }   

    public function selectAll(){
    $table_name = static::$object;
    $class_name = 'Model'.ucfirst($table_name);
    
    $rep = Model::$pdo->query("SELECT * FROM p_".$table_name);

    $rep->setFetchMode(PDO::FETCH_CLASS, $class_name);
    $tab_object = $rep->fetchAll();
    return $tab_object;
    }

    public static function select($primary_value) {
    $table_name = 'p_'.static::$object;
    $class_name = 'Model'.ucfirst(static::$object);
    $primary_key = static::$primary;

    $sql = 'SELECT * FROM '.$table_name .' WHERE '. $primary_key. '=:nom_tag';
    //echo $sql;
    //echo $primary_value;
    try{
        $req_prep = Model::$pdo->prepare($sql);
        $values = array("nom_tag" => $primary_value);
        $req_prep->execute($values);
        $req_prep->setFetchMode(PDO::FETCH_CLASS, $class_name);
        $tab_object = $req_prep->fetchAll();
    } catch(PDOException $e) {
        echo $e->getMessage();
        die();
    }
    echo 'yoooo';
    if (empty($tab_object)){
        return false;
    }
    echo 'yoooo';
    return $tab_object[0];

  }

  
}
Model::Init();
?>