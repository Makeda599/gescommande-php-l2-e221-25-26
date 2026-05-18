<?php
require_once ROOT."/model/clientModel.php";
$liste=function(){
$clients = getAllclients();

    var_dump(getAllProduits());
$clients = getAllclients();
require_once(ROOT."view/clients/liste.php");
};

$ajout=function(){
echo "je ajoute un client";
};

$detail=function(){
echo "je detail un client";
};

$modifier=function(){
echo "je modifie un client";
};

$supprimer=function(){
echo "je supprime un client";
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
         echo "page introuvable c client";
         exit();
}
         
