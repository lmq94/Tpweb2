

<div class="container p-3 bg-light">

    <button class="btn btn-success mx-3 mt-3 m-3" data-bs-toggle="offcanvas" data-bs-target="#intro">Menu de usuario</button>

    <div class="offcanvas offcanvas-start" id="intro">
        <h3> Bienvenido {$smarty.session.user->username}</h3>
        <div class="offcanvas-header">
        </div>
        <div class="offcanvas-body">
            <a href="show-profile"><p>Perfil</p></a>
                {if $smarty.session.user->rol=="admin"}
                <a href="show-clients"><p>Mostrar clientes</p></a>
                <a href="show-accounts"><p>Mostrar cuentas</p></a>
            {else}
                <a href='client-accounts/{$smarty.session.user->id_client}'> <p>Tus cuentas</p></a>
            {/if}
            <p>Configuracion</p>
            <a href="close-sesion"><button class="btn btn-primary">Cerrar sesion</button></a>
        </div>
    </div>




