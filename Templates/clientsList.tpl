{include file="header.tpl"}

    <div class="d-flex ">
      
    {include file="panel.tpl"}

      <div class="container ">
        <h3>Clientes registrados en el banco </h3>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Dni</th>
                <th scope="col">Alias</th>
                <th scope="col">City</th>
                <th scope="col"> Borrar </th>
              </tr>
            </thead>
            <tbody>
                {foreach from=$clients item=$client}
                    <tr>
                    <td>{$client->dni}</td>
                    {if ($editClient) && ($id_client == $client->id_client)}
                      <form action='update-client/{$client->id_client}' method="POST">
                         <td> <input name="alias" type="text" required> </td>
                         <td> <input name="city" type="text" required> </td>
                         <td class="d-flex">  <button  type='submit' class='btn btn-success mx-3 mt-3 m-3'>Listo</button>
                      </form>
                          <a href='delete-client/{$client->id_client}' type='button' class='btn btn-danger mx-3 mt-3 m-3'>Eliminar cliente</a> </td>
                    {else}
                          <td>{$client->alias}</td>
                          <td>{$client->city}</td>
                          <td class="d-flex">  <a href='edit-client/{$client->id_client}' type='button' class='btn btn-primary mx-3 mt-3 m-3'>Editar cliente</a>
                          <a href='delete-client/{$client->id_client}' type='button' class='btn btn-danger mx-3 mt-3 m-3'>Eliminar cliente</a>
                    {/if}
                    
      
                    </td>
                    </tr>
                  {/foreach}
            </tbody>
          </table>

          <p>Nota: Si se elimina un cliente, tambien se eliminaran todas sus cuentas y el usuario asociado </p>

          <a href='register-client' type='button' class="btn btn-success mx-3 mt-3 m-3">Registrar un cliente nuevo</a>     

       </div>
    </div>


{include file="footer.tpl"}