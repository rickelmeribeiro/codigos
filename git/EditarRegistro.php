<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/funcao.php";

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//echo json_encode($Dados);

if (isset($Dados) && !empty($Dados)) {

    $NOMEVARIAVEL1 = isset($Dados['NOMEDOIDREGSATADO']) ? addslashes($Dados['NOMEDOIDREGSATADO']) : '';
    $NOMEVARIAVEL2 = isset($Dados['NOMEINPUT2']) ? addslashes($Dados['NOMEINPUT2']) : '';
    $NOMEVARIAVEL3 = isset($Dados['NOMEINPUT3']) ? addslashes($Dados['NOMEINPUT3']) : '';


    $retornoInsert = NOMEFUNCAO($NOMEVARIAVEL1, $NOMEVARIAVEL2, $NOMEVARIAVEL3);


    if ($retornoInsert > 0) {
        echo json_encode(['success' => true, 'message' => "Deu Certo!"], JSON_THROW_ON_ERROR);
    } else {
        echo json_encode(['success' => false, 'message' => "Deu Erro! Error Bd"], JSON_THROW_ON_ERROR);
    }
} else {
    echo json_encode(['success' => false, 'message' => "Deu Erro! Error Variável"], JSON_THROW_ON_ERROR);
}


