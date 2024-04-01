<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/funcao.php";

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//echo json_encode($Dados); {USADO PARA TESTAR SE ESTA SENDO ENVIADO OS DADOS DIGITADOS NO FORMULARIO}

if (isset($Dados) && !empty($Dados)) {

    $NOMEVARIAVEL1 = isset($Dados['NOMEDOINPUT1']) ? addslashes($Dados['NOMEDOINPUT1']) : '';
    $NOMEVARIAVEL2 = isset($Dados['NOMEDOINPUT2']) ? addslashes($Dados['NOMEDOINPUT2']) : '';


    $retornoInsert = NOMEFUNCAO($NOMEVARIAVEL1, $NOMEVARIAVEL2);


    if ($retornoInsert > 0) {
        echo json_encode(['success' => true, 'message' => "Deu Certo!"], JSON_THROW_ON_ERROR);
    } else {
        echo json_encode(['success' => false, 'message' => "Deu Erro! Error Bd"], JSON_THROW_ON_ERROR);
    }
} else {
    echo json_encode(['success' => false, 'message' => "Deu Erro! Error Variável"], JSON_THROW_ON_ERROR);
}


