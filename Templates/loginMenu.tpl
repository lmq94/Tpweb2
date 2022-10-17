{include file="header.tpl"}






<div class="container mt-4 bg-light">

    <form class=" container justify-content-center m-4" action=verify method="POST">
        <h4> Bienvenido al banco de Gesell </h2>
        <div class="col-md-4">
            <label for="email" class="form-label"> Correo electronico </label>
            <input type="email" class="form-control" name="email"  required>
        </div>
        <div class="col-md-4 mb-2 ">
            <label for="password" class="form-label"> Contraseña</label>
            <input type="password" class="form-control" name="password"  required>
        </div>
        <div class="">
            <input type="checkbox" class="form-check-label" name="connected">
            <label for="connected" class="form-check-label"> Mantenerme conectado</label>
        </div>
        <div class="col-md-4"> 
            <button type="submit" class="btn btn-primary mt-4 ">Iniciar sesion </button>
        </div>
        {if $error} 
            <div class="alert alert-danger col-md-4  mt-3">
                {$error}
            </div>
        {/if}

        <div class="mt-3 "> 
            <span>No tenes cuenta? <a href="registrar-usuario"> Registrarse </a> </span>
        </div>
    </form>
</div>



{include file="footer.tpl"}














