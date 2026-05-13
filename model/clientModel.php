<?php
require_once(ROOT."bd/database.php");
function getAllclients(){
    $sql="SELECT * FROM client";
   return excuteSelect($sql);
}
function getAllProduits(){
    $sql="SELECT * FROM produit";
   return excuteSelect($sql);
}
