<?php

function gosave2($elts) {
    require 'connect.php';
    $sql = $pdo->prepare( 'INSERT into cours (code, titre, language) VALUES (?, ?, ?)');
    $sql->execute([$elts['code'],$elts['titre'], $elts['language']]);
}

function cours_list(){

    require 'connect.php';
    $sql = $pdo->prepare( 'SELECT * from cours');
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows ;

}


function cours_student($id){

    require 'connect.php';
    $sql = $pdo->prepare( "SELECT * FROM inscription , student ,cours WHERE inscription.id_student= student.id AND inscription.id_cours= cours.id AND student.id=$id");
    $sql->execute();
    $tab = $sql->fetchAll();
    return $tab;
    
}


function listparticipant($id_cours){

    require 'connect.php';
    $sql = $pdo->prepare( "SELECT * FROM  inscription , student ,cours WHERE inscription.id_student= student.id AND inscription.id_cours= cours.id AND cours.id=$id_cours ");
    $sql->execute();
    $tab = $sql->fetchAll();
    return $tab;

}


?>