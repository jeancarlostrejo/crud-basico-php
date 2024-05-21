<?php

if (!empty($_POST["btnRegister"])) {
    if (empty($_POST["name"]) || empty($_POST["lastname"]) || empty($_POST["email"]) || empty($_POST["dni"]) || empty($_POST["birthday"])) {
        echo "<div class='alert alert-danger'>Todos los campos son olbigatorios</div>";
    } else {
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $dni = $_POST["dni"];
        $birthday = $_POST["birthday"];

        try {
            $stm = $pdo->prepare("SELECT id FROM users where email=?");
            $stm->bindParam(1, $email);
            $stm->execute();

            if ($stm->rowCount() > 0) {
                echo "<div class='alert alert-danger'>Correo ya está en uso</div>";
            } else {
                $stm = $pdo->prepare("INSERT INTO users (name,lastname,email,dni,birthday) values(?,?,?,?,?)");

                $stm->bindParam(1, $name);
                $stm->bindParam(2, $lastname);
                $stm->bindParam(3, $email);
                $stm->bindParam(4, $dni);
                $stm->bindParam(5, $birthday);
                $stm->execute();

                if ($stm->rowCount() > 0) {
                    echo "<div class='alert alert-success'>Usuario registrado correctamente</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error al registrar usuario</div>";
                }
            }
        } catch (PDOException $th) {
            echo "Error generado: " . $th->getMessage();
        }
    }
}
?>
<script>
history.replaceState(null, null, location.pathname);
</script>