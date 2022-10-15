{include file="header.tpl"}

{include file="panel.tpl"}


<div class="container mb-3 bg-light">
  <h4>Registrar cliente</h4>
  <form class="row g-3" action='activation-client' method="POST">
    <div class="col-md-4">
      <label for="validationServer01" class="form-label">Alias</label>
      <input type="text" class="form-control " id="validationServer01" name="alias" value="" required>
    </div>
    <div class="col-md-4">
      <label for="validationServer02" class="form-label">Dni</label>
      <input type="number" class="form-control " id="validationServer02" name="dni" value="" required>
    </div>
    <div class="col-md-6">
      <label for="validationServer03" class="form-label">City</label>
      <input type="text" class="form-control mb-3 " id="validationServer03" name="city" value="" aria-describedby="validationServer03Feedback" required>
    <div class="col-12">
      <div class="form-check">
        <label for="invalidCheck3" class="form-label">Acepto las politicas de registro de clientes</label>
        <input class="form-check-input " type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Registrar</button>
    </div>
  </form>
</div>



{include file="footer.tpl"}