
{include file="header.tpl"}


<div class="container">

    {include file="panel.tpl"}
    <div class="row">
        <div class="col-12 my-3 pt-3 shadow">
            <h1>Usuario {$smarty.session.user->username}</h1>
            <h3> Id de usuario: {$smarty.session.user->id_user}</h3>
            <h3>Correo electronico: {$smarty.session.user->email}</h3>
            <h3> Rango: {$smarty.session.user->rol} </h3>
        </div>
        {if !($smarty.session.user->rol=="admin")}
            <div class="col-12 my-3 pt-3 shadow">
                <h2>Tus datos de cliente</h2>
                <h3> Id de cliente : {$smarty.session.client->id_client} </h3>
                <h3>Nombre: {$smarty.session.client->alias}</h3>
                <h3>Dni: {$smarty.session.client->dni}</h3>
                <h3>Ciudad: {$smarty.session.client->city}</h3>
            </div>
        {/if}
    </div>
</div>




{include file="footer.tpl"}