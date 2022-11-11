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

    public function customer_add($db, $cardcode, $partname)
    {
        $sql = "INSERT INTO OCRD (cardcode, partname, parttype)
        VALUES (:cardcode, :partname, 'C')";
        $requete = $db->prepare($sql);
        $requete->bindValue(':cardcode', $cardcode);
        $requete->bindValue(':partname', $partname);

        $requete->execute();

        return $requete;        
    }

    public function client_nextcode($db)
    {
        $sql = "SELECT IFNULL((SELECT CASE WHEN RIGHT(LEFT(cardcode,3),2)=RIGHT(YEAR(CURDATE()),2)THEN CONCAT(\"C\", RIGHT(YEAR(CURDATE()),2), LPAD(RIGHT(cardcode,6)+1, 6, \"0\")) ELSE CONCAT(\"C\", RIGHT(YEAR(CURDATE()),2), LPAD(1, 6, \"0\")) END FROM OCRD ORDER BY cardcode DESC LIMIT 1), CONCAT(\"C\", RIGHT(YEAR(CURDATE()),2), LPAD(1, 6, \"0\"))) as \"codeclient\";";
        $requete = $db->prepare($sql);
        $requete->execute();
        $row = $requete->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}

?>