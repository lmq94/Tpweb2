{include file="header.tpl"}

<table class="table">
  <thead>
    <tr>
      <th scope="col">$UserName</th>
      <th scope="col">Email</th>
      <th scope="col">Contraseña</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$$Users item=$User}
        <tr>
        <td>{$User->username}</td>
        <td>{$User->email}</td>
        <td>{$User->password}</td>
        <td> <a href='delete/{$User->id}' type='button' class='btn btn-danger'>Eliminar usuario</a></td>
        </tr>
      {/foreach}
  </tbody>
</table>


{include file="footer.tpl"}