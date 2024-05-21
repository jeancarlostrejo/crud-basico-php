<?php
if (!empty($_POST["btnModify"])) {
    if (empty($_POST["name"]) || empty($_POST["lastname"]) || empty($_POST["email"]) || empty($_POST["dni"]) || empty($_POST["birthday"])) {
        echo "<div class='alert alert-danger'>Todos los campos son obligatorios</div>";
    } else {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $dni = $_POST["dni"];
        $birthday = $_POST["birthday"];

        $stm = $pdo->prepare("UPDATE users SET name=?, lastname=?, email=?, dni=?, birthday=? where id=?");
        $stm->bindParam(1, $name);
        $stm->bindParam(2, $lastname);
        $stm->bindParam(3, $email);
        $stm->bindParam(4, $dni);
        $stm->bindParam(5, $birthday);
        $stm->bindParam(6, $id);

        $stm->execute();

        if ($stm->rowCount() > 0) {
            header("Location: ../index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar le producto</div>";
        }
    }
}
?>