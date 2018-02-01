<?php

class clients {

    public function __construct()
    {
        try {
            // On fait un try catch pour être sûr que la connexion à mysql se fasse
            $this->pdo = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '789789');
        }
        // On instancie un objet PDO. Le host est l'adresse locale sur laquelle on se connecte. dbname correspond au nom de la base de données.
        catch (Exception $e) {
            //die va arreter le chargement du script PHP et de la page et afficher l'erreur
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getClientList(){
        $clientResult = $this->pdo->query('SELECT `id`, `lastName`, `firstName`, DATE_FORMAT(`birthDate`, "%d/%m/%Y") AS `birthDate`,FLOOR( DATEDIFF( NOW(), `birthDate` ) / 365) AS `age`, `card`, `cardNumber` FROM `clients`');
        return $clientResult->fetchAll(PDO::FETCH_OBJ);
    }

    public function __destruct(){
        
    }
}

?>