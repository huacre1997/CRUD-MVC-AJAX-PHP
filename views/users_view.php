<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Lista de Usuarios</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    </head>
    <body>
    <br>
    <br>
    <div class="container">
    <div class="form-group">
    <a  a="index.php?c=user&a=new&id=" id="add" class="btn btn-primary"><i class="fa fa-user-plus"></i>&nbsp;Registrar</a>
</div>
        <table  class="table  table-hover table-responsive" >
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Creación</th>
                    <th class="text-center">Modificación</th>
                    <th class="text-center" colspan="2">Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $user): ?>
                <tr>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['phone']; ?></td>
                    <td><?php echo $user['created']; ?></td>
                    <td><?php echo $user['modified']; ?></td>
                    <td>
                <a a='index.php?c=user&a=get_by_id&id=<?php echo $user['id']; ?>' class="edit btn btn-warning"><i class="fa fa-edit"></i>&nbsp;Editar</a>
            </td>
            <td>
                <a a='index.php?c=user&a=delete&id=<?php echo $user['id']; ?>' class="delete btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Eliminar</a>
            </td>
                </tr>
                <?php endforeach; ?>
            </tbody>    
        </table>
        </div>

    </body>
    <script src="assets/jquery.js" ></script>

    <script src="assets/confirm.js" ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</html>