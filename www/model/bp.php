<?php

class partner
{

    public function client_get_all($db)
    {
        $requete = $db->prepare("select * from OCRD WHERE parttype='C'");
        $requete->execute();
        $rows = $requete->fetchAll();
        return $rows;
    }
}

?>