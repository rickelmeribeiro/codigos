<?php
function listarGeral($campos, $tabela)
{
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela");
        $sqlLista->execute();

        if ($sqlLista->rowCount() > 0) {
            $results = $sqlLista->fetchAll(PDO::FETCH_OBJ);
            $conn = null;
            return $results;
        } else {
            $conn = null;
            return array();
        }
    } catch (PDOException $e) {
        $conn = null;
        echo 'Exception -> ' . $e->getMessage();
        return false;
    }
}

function Editar($CAMPOS)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();

        $stmt = $conn->prepare("UPDATE TABELA SET $CAMPO1 = '$CAMPO1', $CAMPO2 = '$CAMPO2',$CAMPO3 = '$CAMPO3' WHERE NOMEID = $NOMEID");
        $stmt->execute();
        $conn->commit();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }
        return 'Vazio';

    } catch
    (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    }
    $conn = null;
}

function Add($CAMPOS)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();

        $stmt = $conn->prepare("INSERT INTO TABELA (CAMPOS) VALUES ('$CAMPOS')");
        $stmt->execute();
        $conn->commit();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }
        return 'Vazio';

    } catch
    (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    }
    $conn = null;
}

function Exc($NOMEID)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();

        $stmt = $conn->prepare("DELETE FROM TABELA WHERE $NOMEID =$NOMEID");
        $stmt->execute();
        $conn->commit();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }
        return 'Vazio';

    } catch
    (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    }
    $conn = null;
}