<?php
session_start();
$data = $_POST;
$data['p'] = rand(0,999);
$_SESSION = $data;

$justificar = $data['justificar'];
$especificar = $data['especificar'];
$vt1 = $data["vt1"];
$vt2 = $data["vt2"];

unset($data["justificar"]);
unset($data["especificar"]);
unset($data["vt1"]);
unset($data["vt2"]);
unset($data["phone2"]);

if(in_array('', $data)){
    header("location: index.php?msg="."O campo deverá ser preenchido!");
    exit();
}

//espeficar
if(
    $data["opcao"] == "2via" ||
    $data["opcao"] == "declaracao" ||
    $data["opcao"] == "diploma" ||
    $data["opcao"] == "segunda" ||
    $data["opcao"] == "trancamento" ||
    $data["opcao"] == "validacao"
){
    if(empty($especificar)){
        header("location: index.php?msg="."Especifique sua escolha");
        exit();
    }
}

//Justificar
if(
    $data["opcao"] == "matricula" ||
    $data["opcao"] == "colcacao" ||
    $data["opcao"] == "segunda"
){
    if(empty($justificar)){
        header("location: index.php?msg="."Justifique sua escolha");
        exit();
    }
}

if(isset($data["ch_v"]) && $data["ch_v"] == "s"){
    if(empty($vt1)){
        header("location: index.php?msg="."Informe o que se pede");
        exit();
    }
}

if(isset($data["ch_b"]) && $data["ch_b"] == "s"){
    if(empty($vt2)){
        header("location: index.php?msg="."Informe o que se pede");
        exit();
    }
}

header("location: visualizar.php");
