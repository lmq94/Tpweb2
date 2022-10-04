{include file="header.tpl"}






<div class=login>
    <form class="mb-3" action=verify method="POST">
    <h2 class="titulo-login"> Bienvenido </h2>
        <div class="mb-4">
            <label for="email" class="form-label"> Correo electronico </label>
            <input type="email" class="form-control" name="email"  required>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label"> Contraseña</label>
            <input type="password" class="form-control" name="password"  required>
        </div>
        <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-label" name="connected">
            <label for="connected" class="form-check-label"> Mantenerme conectado</label>
        </div>
        <div class="d-grid"> 
            <button type="submit" class="btn btn-primary">Iniciar sesion </button>
        </div>
        <div class="my-3"> 
            <span>No tenes cuenta? <a href="registrar-usuario"> Registrarse </a> </span>
        </div>
    </form>

    <div class="col">
        <div class="text-end">
            <img src="Images\logo-municipalidad-Gesell.jpeg" alt="foto-login">
        </div>
    </div> 
</div>


{include file="footer.tpl"}














