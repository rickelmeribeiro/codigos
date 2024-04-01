<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/funcao.php";

$conn = conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $NOMEVARIAVEL1 = $_POST["NOMEINPUT1"];
    $NOMEVARIAVEL2 = $_POST['NOMEINPUT2'];

    try {


        $query = "INSERT INTO TABELA (CAMPOS) VALUES (:CAMPOS)";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(":NOMECAMPO1", $NOMEVARIAVEL1);
        $stmt->bindParam(":NOMECAMPO2", $NOMEVARIAVEL2);
        $stmt->execute();

        header("Location: index.php");
        exit();
    } catch (PDOException $e) {

        echo "Erro ao inserir registro: " . $e->getMessage();
    }
} else {

    header("Location: funcao.php");
    exit();
}
?>
