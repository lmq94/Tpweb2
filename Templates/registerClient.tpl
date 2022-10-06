{include file="header.tpl"}

{include file="panel.tpl"}

<h1>Registrar cliente</h1>


<form class="row g-3">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Alias</label>
    <input type="text" class="form-control is-valid" id="validationServer01" value="" required>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Dni</label>
    <input type="number" class="form-control is-valid" id="validationServer02" value="Otto" required>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">City</label>
    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar</button>
  </div>
</form>



{include file="footer.tpl"}