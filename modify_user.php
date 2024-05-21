<?php

require_once "./db/conection.php";
if (empty($_GET["id"])) {
    header("Location: index.php");
}

$stm = $pdo->prepare("SELECT * FROM users WHERE id=?");
$stm->bindParam(1, $_GET["id"]);
$stm->execute();

$user = $stm->fetch();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en PHP</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a790f86fcc.js"
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center m-4">

            <?php if ($stm->rowCount() <= 0): ?>
            <div class="alert alert-danger ">No existe el Usuario</div>
            <a href="./index.php"
                class=" col-sm-4 col-md-4 col-lg-4 col-xl-4 btn btn-danger">Regresar</a>
            <?php else: ?>
            <form class="col-sm-12 col-md-12 col-lg-6 col-xl-6" method="POST">
                <h3 class="text-center text-secondary">Modificar Usuario</h3>
                <input type="hidden" value="<?=$_GET["id"];?>" name="id">

                <?php
                require_once "./module/modify.php";
                ?>

                <div class="mb-3">
                    <label for="inputName" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name"
                        id="inputName" value="<?=$user["name"];?>">
                </div>
                <div class="mb-3">
                    <label for="inputLastname"
                        class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="lastname"
                        id="inputLastname" value="<?=$user["lastname"];?>">
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="email"
                        id="inputEmail" value="<?=$user["email"];?>">
                </div>
                <div class="mb-3">
                    <label for="inputDNI" class="form-label">DNI</label>
                    <input type="text" class="form-control" name="dni"
                        id="inputDNI" value="<?=$user["dni"];?>">
                </div>
                <div class="mb-3">
                    <label for="inputBirthday" class="form-label">Fecha de
                        nacimiento</label>
                    <input type="date" class="form-control" name="birthday"
                        id="inputBirthday"
                        value="<?=date("Y-m-d", strtotime($user["birthday"]));?>">
                </div>
                <button type="submit" class="btn btn-primary" name="btnModify"
                    value="ok">Modificar</button>
                <a href="./index.php" class="btn btn-danger">Regresar</a>
            </form>
            <?php endif;?>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>