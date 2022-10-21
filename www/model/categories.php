<?php

class categorie
{

    public function categories_get_all($db)
    {
        $requete = $db->prepare('select * from CATG');
        $requete->execute();
        $rows = $requete->fetchAll();
        return $rows;
    }

    public function categories_get_details($db)
    {
        $sql = "SELECT c.id, c.CATD, c.DESCR, c.PARENT, COUNT(p.id) as \"produits\"
        FROM CATG c 
        LEFT OUTER JOIN PROD p ON p.prodcat = c.id 
        GROUP BY c.id, c.CATD, c.DESCR, c.PARENT";
        $requete = $db->prepare($sql);
        $requete->execute();
        $rowsd = $requete->fetchAll();
        return $rowsd;
    }

    public function categorie_add($db, $CATD, $DESCR, $PARENT)
    {
        $sql = "INSERT INTO CATG
        (CATD, DESCR, PARENT)
        VALUES(:CATD, :DESCR, :PARENT);";

        $requete = $db->prepare($sql);
        $requete->bindValue(':CATD', $CATD);
        $requete->bindValue(':DESCR', $DESCR);
        $requete->bindValue(':PARENT', $PARENT);

        $requete->execute();

        // echo $sql;

        return $requete;        
    }

}

?>