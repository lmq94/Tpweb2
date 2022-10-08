{include file="header.tpl"}

<div class="d-flex">

  {include file="panel.tpl"}

  {if $smarty.session.rol == "admin" }

    <h3>Cuentas registradas en el banco en el banco </h3>
  {else}
    <h3>Tus cuentas</h3>
  {/if}

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Numero de cliente</th>
        <th scope="col">Monto</th>
        <th scope="col">Tipo de cuenta</th>
        <th scope="col">Tipo de moneda</th>
        <th scope="col">Borrar</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$accounts item=$account}
          <tr>
          <td>{$account->id_client}</td>
          <td>{$account->amount}</td>
          <td>{$account->type}</td>
          <td>{$account->coin}</td>
          <td> <a href='delete/{$account->id}' type='button' class='btn btn-danger'>Cerrar cuenta</a></td>
          </tr>
        {/foreach}
    </tbody>
  </table>
</div>


{include file="footer.tpl"}