<?php
require_once(ROOT."bd/database.php");
function getAllcommandes(){
    $sql="SELECT * FROM commande";
   return executeSelect($sql);
}
function getcommandeById($id){
    $sql="SELECT * FROM commande where id_commande=:id";
   return executeSelect($sql,["id"=>$id],true);
}