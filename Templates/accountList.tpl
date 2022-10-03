{include file="header.tpl"}

<table class="table">
  <thead>
    <tr>
      <th scope="col">Numero de cliente</th>
      <th scope="col">Monto</th>
      <th scope="col">Tipo de cuenta</th>
      <th scope="col">Tipo de moneda</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$Accounts item=$account}
        <tr>
        <td>{$Account->id_cliente}</td>
        <td>{$Account->amount}</td>
        <td>{$Account->type}</td>
        <td>{$Account->coin}</td>
        <td> <a href='delete/{$account->id}' type='button' class='btn btn-danger'>Cerrar cuenta</a></td>
        </tr>
      {/foreach}
  </tbody>
</table>


{include file="footer.tpl"}