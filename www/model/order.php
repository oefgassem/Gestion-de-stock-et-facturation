<?php

class order
{

    public function order_get_all($db)
    {
        $requete = $db->prepare('select * from ORDR');
        $requete->execute();
        $rows = $requete->fetchAll();
        return $rows;
    }

    public function order_next($db)
    {
        $sql = "SELECT CASE WHEN LEFT(DocNum,4)=CONCAT(RIGHT(YEAR(CURDATE()),2), LPAD(MONTH(CURDATE()),2,\"0\")) THEN DocNum+1 ELSE CONCAT(RIGHT(YEAR(CURDATE()),2), LPAD(MONTH(CURDATE()),2,\"0\"), '000001') END as \"docnumber\" FROM ORDR ORDER BY DocNum DESC;";
        $requete = $db->prepare($sql);
        $requete->execute();
        $row = $requete->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function order_insert($db, $docnum, $docdate, $part_id, $part_name, $doctotal)
    {
        $sql = "INSERT INTO ORDR (DocNum, DocDate, DocType, CANCELED, DocStatus, part_id, part_name, Totalvalue, VAT, DocTotal) 
        VALUES (:docnum, :docdate, '1', 'N', 'O', :part_id, :part_name, :doctotal, '0', :doctotal);";
        $requete = $db->prepare($sql);
        $requete->bindValue(':docnum', $docnum);
        $requete->bindValue(':docdate', $docdate);
        $requete->bindValue(':part_id', $part_id);
        $requete->bindValue(':part_name', $part_name);
        $requete->bindValue(':doctotal', $doctotal);

        $requete->execute();

        echo "\nPDOStatement::errorInfo():\n";
        $arr = $requete->errorInfo();
        print_r($arr);


        return $requete;  

    }
}

?>