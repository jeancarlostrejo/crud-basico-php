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
    <h1 class="text-center p-2">Crud con PHP</h1>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registrar Usuario</h3>
            <?php 
            require("./db/conection.php");
            require "./module/register.php";
            ?>
            <div class="mb-3">
                <label for="inputName" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name"
                    id="inputName">
            </div>
            <div class="mb-3">
                <label for="inputLastname" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="lastname"
                    id="inputLastname">
               
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Correo</label>
                <input type="email" class="form-control" name="email"
                    id="inputEmail">
                   
            </div>
            <div class="mb-3">
                <label for="inputDNI" class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni"
                    id="inputDNI">
                    
            </div>
            <div class="mb-3">
                <label for="inputBirthday" class="form-label">Fecha de
                    nacimiento</label>
                <input type="date" class="form-control" name="birthday" id="inputBirthday"
                   >
                 
            </div>

            <button type="submit" class="btn btn-primary"
                name="btnRegister" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead class="table-info">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "./db/conection.php";
                    $stm = $pdo->prepare("SELECT * FROM users");
                    $stm->execute();
                    $result = $stm->fetchAll();
                    ?>

                    <?php if ($stm->rowCount() <= 0): ?>
                        <tr>
                            <td colspan="6">
                                <h3 class="text-center text-black-50 ">No hay
                                    registros</h3>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($result as $user): ?>
                            <tr>
                                <td><?=$user["id"];?></td>
                                <td><?=$user["name"];?></td>
                                <td><?=$user["lastname"];?></td>
                                <td><?=$user["email"];?></td>
                                <td><?=$user["dni"];?></td>
                                <td><?=date("d/m/Y", strtotime($user["birthday"]));?>
                                </td>
                                <td>
                                    <a href="delete"
                                        class="btn btn-sm btn-warning m-1"><i
                                            class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                    <a href="delete"
                                        class="btn btn-sm btn-danger m-1"><i
                                            class="fa-solid fa-trash fa-lg"></i></a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    <?php endif;?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>