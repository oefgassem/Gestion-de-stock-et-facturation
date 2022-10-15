<?php

function user_check($db,$user_email,$user_password){
    $requete = $db->prepare('select * from USER where email = :email and password = MD5(:password);');

    $requete->bindValue(':email',$user_email);
    $requete->bindValue(':password',$user_password);

    $requete->execute();

    $user= $requete->fetchAll();

    if(count($user)>0){
        return true;
    }
    else return false;
}
?>