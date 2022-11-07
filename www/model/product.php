<?php

class produit
{

    public function produit_get_all($db)
    {
        $requete = $db->prepare('select * from PROD');
        $requete->execute();
        $rows = $requete->fetchAll();
        return $rows;
    }

    public function produit_add($db, $prodcode, $prodname, $proddesc, $prodimg, $prodcat, $price)
    {
        $sql = "INSERT INTO PROD (prodcode, prodname, proddesc, prodimg, prodcat, price)
        VALUES (:prodcode, :prodname, :proddesc, :prodimg, :prodcat, :price)";
        $requete = $db->prepare($sql);
        $requete->bindValue(':prodcode', $prodcode);
        $requete->bindValue(':prodname', $prodname);
        $requete->bindValue(':proddesc', $proddesc);
        $requete->bindValue(':prodimg', $prodimg);
        $requete->bindValue(':prodcat', $prodcat);
        $requete->bindValue(':price', $price);

        $requete->execute();

        return $requete;        
    }

    public function produit_last($db)
    {
        $sql = "SELECT CONCAT('ART',LPAD(RIGHT(prodcode,6)+1,6,0)) as \"code\" FROM PROD order by prodcode DESC limit 1";
        $requete = $db->prepare($sql);
        $requete->execute();
        $row = $requete->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function product_get_by_name($db, $prodname)
    {
        $sql = "SELECT * FROM PROD WHERE prodname=:prodname";
        $requete = $db->prepare($sql);
        $requete->bindValue(':prodname', $prodname);
        $requete->execute();
        $row = $requete->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

}

?>