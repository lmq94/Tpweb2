{include file="header.tpl"}

<div class="d-flex ">

  {include file="panel.tpl"}

  {if $smarty.session.user->rol == "admin" }

    <h3>Cuentas registradas en el banco en el banco </h3>
  {else}
    <h3>Tus cuentas</h3>
  {/if}

  <table class="table table-bordered">
    <thead>
      <tr>
        {if $smarty.session.user->rol=="admin"}
          <th scope="col">Numero del cliente</th>
        {/if}
        <th scope="col">Monto</th>
        <th scope="col">Tipo de cuenta</th>
        <th scope="col">Tipo de moneda</th>
        <th scope="col">Borrar</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$accounts item=$account}
          <tr>
            {if $smarty.session.user->rol=="admin"}
              <td>{$account->id_client}</td>
            {/if}
            {if ($editAccount) && ($id_account == $account->id_account)}
              <form action='update-account/{$account->id_account}' method="POST">
                <td> <input name="amount" type="text" required> </td>
                <td> <input name="type_account" type="text" required> </td>
                <td> <input name="coin" type="text" required> </td>
                <td class="d-flex">  <button  type='submit' class='btn btn-success mx-3 mt-3 m-3'>Listo</button>
              </form>
                  <a href='delete-client/{$account->id_account}' type='button' class='btn btn-danger mx-3 mt-3 m-3'>Eliminar Cuenta</a> </td>
            {else}
              <td>{$account->amount}</td>
              <td>{$account->type_account}</td>
              <td>{$account->coin}</td>
              <td class="d-flex">
                        {if $smarty.session.user->rol == "admin" } 
                          <a href='edit-account/{$account->id_account}' type='button' class='btn btn-primary mx-3 mt-3 m-3'>Editar Cuenta</a>
                        {/if}
                          <a href='delete-account/{$account->id_account}' type='button' class='btn btn-danger mx-3 mt-3 m-3'>Eliminar cuenta</a>
            {/if}
            
              </td>
          </tr>
        {/foreach}
    </tbody>
  </table>

    <a href='register-account' type='button' class="btn btn-success mx-3 mt-3 m-3">Abrir una cuenta</a>
</div>





{include file="footer.tpl"}