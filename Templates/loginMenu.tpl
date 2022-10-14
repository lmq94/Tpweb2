{include file="header.tpl"}






<div class="container mb-3">
    <form class="form-alta m-4" action=verify method="POST">
        <h2> Bienvenido </h2>
        <div class="col-md-4">
            <label for="email" class="form-label"> Correo electronico </label>
            <input type="email" class="form-control" name="email"  required>
        </div>
        <div class="col-md-4 mb-2 ">
            <label for="password" class="form-label"> Contraseña</label>
            <input type="password" class="form-control" name="password"  required>
        </div>
        <div class="col-md-4 form-check">
            <input type="checkbox" class="form-check-label" name="connected">
            <label for="connected" class="form-check-label"> Mantenerme conectado</label>
        </div>
        <div class="col-md-4"> 
            <button type="submit" class="btn btn-primary m-4 ">Iniciar sesion </button>
        </div>
        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}

        <div class="col-md-3 form-check"> 
            <span>No tenes cuenta? <a href="registrar-usuario"> Registrarse </a> </span>
        </div>
    </form>
</div>



{include file="footer.tpl"}














