<?php

class kpi {
    public function nb_articles($db) {
        $sql = "SELECT COUNT(*) as \"nbproduits\" from PROD p ";
        $requete = $db->prepare($sql);
        $requete->execute();
        $nbproduits = $requete->fetch();
        return $nbproduits;
    }

}


?>