<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tienda</title>
    <link rel="stylesheet" href="styles.css"></li>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

 <header>
 <h1>Tienda ScareFace</h1>
 <hr>
 </header>  

    <main class="fondo text-white">

<div  class="container">
<div class="row justify-conntent-center">
<div class="col-4">
<form action="agregarDatos.php" method="POST"
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
                

                <div class="form-group">
                <label for="exampleInputEmail1">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellido">
                

                <div class="form-group">
                <label for="exampleInputEmail1">Contraseña</label>
                <input type="password" class="form-control" id="contraseña " name="contraseña">

                <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="text" class="form-control" id="email" name="email">

                <div class="form-group">
                <label for="exampleInputEmail1">Cedula</label>
                <input type="number" class="form-control" id="cedula " name="cedula">

                <div class="form-group">
                <label for="exampleInputEmail1">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad">

                <div class="form-group">
                <label for="exampleInputEmail1">Direccion</label>
                <input type="text" class="form-control" id="direccion " name="direccion"> 

                <button type="submit" class="btn btn-primary btn-primary " name="boton">Registrar</button>
                

                

                

                

                
            </div>

            </div>

            </div>
</form>
    </div>

    </div>

</div>
   </main>

<footer>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
