

<div class="container p-3">

    <button class="btn btn-success mx-3 mt-3 m-3" data-bs-toggle="offcanvas" data-bs-target="#intro">Menu de usuario</button>

    <div class="offcanvas offcanvas-start" id="intro">
        <h3> Bienvenido {$props.username}</h3>
        <div class="offcanvas-header">
        </div>
        <div class="offcanvas-body">
            <p>Perfil</p>
            <a href="mostrar-cuentas"><p>Mostrar clientes</p></a>
            <p>Mostrar cuentas</p>
            <p>Configuracion</p>
            <a href="cerrar-sesion"><button class="btn btn-primary">Cerrar sesion</button></a>
        </div>
    </div>




