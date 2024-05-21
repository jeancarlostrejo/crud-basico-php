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
        <form class="col-4 p-3">
            <h3 class="text-center text-secondary">Registrar Usuario</h3>
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
                <input type="email" class="form-control" name="lastname"
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
                <input type="date" class="form-control" name="birthday"
                    id="inputBirthday">
            </div>

            <button type="submit" class="btn btn-primary"
                name="btnRegister">Registrar</button>
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
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>None</td>
                        <td>
                            <a href="delete"
                                class="btn btn-sm btn-warning m-1"><i
                                    class="fa-solid fa-pen-to-square fa-lg"></i></a>
                            <a href="delete"
                                class="btn btn-sm btn-danger m-1"><i
                                    class="fa-solid fa-trash fa-lg"></i></a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>