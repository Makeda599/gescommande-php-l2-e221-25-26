<?php
function openConnection() {
    $con = null;
try
{
    $con = new PDO('mysql:host=localhost;dbname=gestion_commande_l2E221_25_26;charset=utf8', 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

}catch (PDOException $e)
{
    echo ('Erreur : ' . $e->getMessage());
}

return $con;
}

function closeConnection($con){
    $con=null;
}

function excuteSelect($sql,$one=false){
      $datas=null;
    $pdo=openConnection();
   $stm= $pdo->query($sql);
    $datas= $stm->fetchAll();
    closeConnection($pdo);
    return  $datas;
    
}
function excuteUpdate($sql){

}