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
        $sql = "SELECT IFNULL((SELECT CASE WHEN LEFT(DocNum,4)=CONCAT(RIGHT(YEAR(CURDATE()),2), LPAD(MONTH(CURDATE()),2,\"0\")) THEN DocNum+1 ELSE CONCAT(RIGHT(YEAR(CURDATE()),2), LPAD(MONTH(CURDATE()),2,\"0\"), '000001') END as \"docnumber\" FROM ORDR ORDER BY DocNum DESC), CONCAT(RIGHT(YEAR(CURDATE()),2), LPAD(MONTH(CURDATE()),2,\"0\"), '000001')) as \"docnumber\";";
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

        // echo "\nPDOStatement::errorInfo():\n";
        // $arr = $requete->errorInfo();
        // print_r($arr);


        return $requete;  

    }

    // public function order_insert_lines($db, $order_id, $linenum, $prod_id, $prodname, $qty, $unitval, $direction, $warehouse_id, $linetotal)
    public function order_insert_lines($db, $row)
    {
        $sql = "INSERT INTO RDR1 (order_id, linenum, prod_id, prodname, qty, unitval, direction, warehouse_id, linetotal)
        VALUES (:order_id, :linenum, :prod_id, :prodname, :qty, :unitval, :direction, :warehouse_id, :linetotal);";
        $requete = $db->prepare($sql);
        // $requete->bindValue(':order_id', $order_id);
        // $requete->bindValue(':linenum', $linenum);
        // $requete->bindValue(':prod_id', $prod_id);
        // $requete->bindValue(':prodname', $prodname);
        // $requete->bindValue(':qty', $qty);
        // $requete->bindValue(':unitval', $unitval);
        // $requete->bindValue(':direction', $direction);
        // $requete->bindValue(':warehouse_id', $warehouse_id);
        // $requete->bindValue(':linetotal', $linetotal);
        $requete->execute($row);
        echo "\nPDOStatement::errorInfo():\n";
        $arr = $requete->errorInfo();
        print_r($arr);
        return $requete;
    }
}

?>