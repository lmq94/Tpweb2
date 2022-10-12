{include file="header.tpl"}

    <div class="d-flex">
      
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
                    <td>{$client->alias}</td>
                    <td>{$client->city}</td>
                    <td> <a href='delete-client/{$client->id_client}' type='button' class='btn btn-danger'>Eliminar cliente</a></td>
                    </tr>
                  {/foreach}
            </tbody>
          </table>

          <a href='register-client' type='button' class="btn btn-success mx-3 mt-3 m-3">Registrar un cliente nuevo</a>
          <a href='' type='button' class="btn btn-success mx-3 mt-3 m-3">Editar un cliente</a>      

       </div>
    </div>


{include file="footer.tpl"}