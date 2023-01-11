<?php


function gosave($elts) {
    require 'connect.php';
    $sql = $pdo->prepare( 'INSERT into student (firstname,lastname,email,password) VALUES (?, ?, ?, ?)');
    $sql->execute([$elts['firstname'],$elts['lastname'], $elts['email'], $elts['password']]);
}



function student_list(){

    require 'connect.php';
    $sql = $pdo->prepare( 'SELECT * from student');
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows ;

}

function rechercheEtudiant($id) {
    require 'connect.php';
    $sql = $pdo->prepare( 'SELECT * from student WHERE id = ?');
    $sql->execute([$id]);
    $row = $sql->fetch();
    return $row ;
}

function gosave3($elts) {
    require 'connect.php';

    foreach($elts['cours'] as $id_cours){
    
    $sql = $pdo->prepare( 'INSERT into inscription (id_cours, id_student) VALUES (?, ?)');
    $sql->execute([$id_cours,$elts['id_student']]);

    }
}





?>