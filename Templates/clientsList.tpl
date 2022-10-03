{include file="header.tpl"}


<h1>Datos de los clientes registrados en el banco </h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Dni</th>
      <th scope="col">Alias</th>
      <th scope="col">City</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$clients item=$client}
        <tr>
        <td>{$client->dni}</td>
        <td>{$client->alias}</td>
        <td>{$client->city}</td>
        <td> <a href='delete/{$client->id}' type='button' class='btn btn-danger'>Eliminar cliente</a></td>
        </tr>
      {/foreach}
  </tbody>
</table>


{include file="footer.tpl"}