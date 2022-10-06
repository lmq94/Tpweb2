{include file="header.tpl"}


{include file="panel.tpl"}

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Numero de cliente</th>
      <th scope="col">Monto</th>
      <th scope="col">Tipo de cuenta</th>
      <th scope="col">Tipo de moneda</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$accounts item=$account}
        <tr>
        <td>{$account->id_cliente}</td>
        <td>{$account->amount}</td>
        <td>{$account->type}</td>
        <td>{$account->coin}</td>
        <td> <a href='delete/{$account->id}' type='button' class='btn btn-danger'>Cerrar cuenta</a></td>
        </tr>
      {/foreach}
  </tbody>
</table>


{include file="footer.tpl"}