<?php
function getAllProduits(){
    $sql="SELECT * FROM produit";
   return executeSelect($sql);
}