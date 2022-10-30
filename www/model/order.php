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
        $sql = "SELECT AUTO_INCREMENT
        FROM information_schema.tables
        WHERE table_name = 'OCRD' and TABLE_SCHEMA='gestock';";
        $requete = $db->prepare($sql);
        $requete->execute();
        $row = $requete->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

}

?>