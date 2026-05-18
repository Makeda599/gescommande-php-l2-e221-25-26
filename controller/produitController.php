<?php
require_once ROOT."/model/produitModel.php";
$liste=function(){
$produits = getAllproduits();

require_once(ROOT."view/produits/liste.php");
};

$ajout=function(){
echo "je ajoute un produit";
};

$detail=function(){
echo "je detail un produit";
};

$modifier=function(){
echo "je modifie un produit";
};

$supprimer=function(){
echo "je supprime un produit";
};


$actions=[
    "liste"=>$liste,
    "ajout"=>$ajout,
    "detail"=>$detail,
    "modifier"=>$modifier,
    "supprimer"=>$supprimer
    
];
 $action=$_REQUEST["action"]??"liste";
 
 if (array_key_exists($action, $actions)) {
         $actions[$action]();
     }
     else{
         echo "page introuvable c produit";
         exit();
}
         
