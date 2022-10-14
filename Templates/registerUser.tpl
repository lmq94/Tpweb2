{include file="header.tpl" props=$props}


<div class="container mb-3">
  <h3>Ingrese los siguientes datos para crear su usuario </h3>

  <form class="form-alta m-4" action='insertar-usuario' method="POST">
    <div class="col-md-4">
      <label for="validationServer01" class="form-label">Usuario</label>
      <input type="text" class="form-control" id="validationServer01" name="username" value="" required>
    </div>
    <div class="col-md-4">
      <label for="exampleInputEmail1" class="form-label">Direccion E-mail</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
      <div id="emailHelp" class="form-text">Nunca vamos a compartir su direccion E-mail con nadie</div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password"  required>
    </div>
    <select class="form-select-m3" aria-label="Default select example" name='id_client'>
                    <option selected>Seleccionar cliente</option>
                    {foreach from=$clients item=$client}
                        <option value="{$client->id_client}">{$client->alias}</option>
                    {/foreach}
    </select>
    <p class="mt-3">Nota: un cliente solo puede tener un usuario asociado a el</p>
    <div class="form-check mt-3 mb-3">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Acepto los terminos y condiciones
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  
    <button type="submit" class="btn btn-primary">Crear usuario</button>
  </form>
</div>




{include file="footer.tpl"}