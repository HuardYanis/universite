<?php

function add(){
    require ('view/inscription.php');
}


function record(){

    require('model/student.php');
    gosave($_POST);
    $students = student_list();
    require ('view/list_student.php');

}

function studentlist(){

    require ('model/student.php');
   
    $students = student_list();
    require ('view/list_student.php');


}

function affichestudent(){

    require ('view/postuler.php');

}

function postuler($id) {
    require ('model/student.php');
    require ('model/cours.php');

    $etudiant = rechercheEtudiant($id);
    $lescours = cours_list();
    $cescours = cours_student($id);
    require('view/postuler.php');

}

function inscription() {
    require('model/student.php');
    gosave3($_POST);
}




   
    









?>