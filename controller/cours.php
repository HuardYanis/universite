<?php

function add(){
    require ('view/creercours.php');
}


function record(){

    require('model/cours.php');
    gosave2($_POST);

}

function courslist(){

    require ('model/cours.php');
   
    $lescours = cours_list();
    require ('view/list_cours.php');


}

function participant($id_cours){
    require ('model/cours.php');

    $tab = listparticipant($id_cours);

    require ('view/participant.php');


}
?>