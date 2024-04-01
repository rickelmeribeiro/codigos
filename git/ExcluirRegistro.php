<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/funcao.php";

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//echo json_encode($Dados);

if (isset($Dados) && !empty($Dados)) {

    $NOMEVARIAVEL = isset($Dados['NOMEDOIDREGSATADO']) ? addslashes($Dados['NOMEDOIDREGSATADO']) : '';


    $retornoInsert = NOMEFUNCAO($NOMEVARIAVEL);


    if ($retornoInsert > 0) {
        echo json_encode(['success' => true, 'message' => "picanha"], JSON_THROW_ON_ERROR);
        header('location: adm.php');
    } else {
        echo json_encode(['success' => false, 'message' => "picanha! Error Bd"], JSON_THROW_ON_ERROR);
    }
} else {
    echo json_encode(['success' => false, 'message' => "picanha! Error Variável"], JSON_THROW_ON_ERROR);
}


