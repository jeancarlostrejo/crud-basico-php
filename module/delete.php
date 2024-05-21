<?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"];

    $stm = $pdo->prepare("DELETE from users where id=?");
    $stm->bindParam(1, $id);
    $stm->execute();

    if ($stm->rowCount() > 0) {
        echo "<div class='alert alert-success' >Persona eliminada correctamente</div>";
    } else {
        echo "<div class='alert alert-danger' >Error al eliminar</div>";
    }
}
