{include file="header.tpl"}


    <form class="form-alta" action="agregar-cuenta" method="POST">
        <h1>Ingrese su numero de cliente </h1>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">id_cliente</span>
            <input type="text" class="form-control" name="id_cliente" value="id_cliente" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>


        <h1> Seleccione el tipo de cuenta que desea abrir </h1>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="caja_de_ahorro" vale="Caja de ahorro" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Caja de ahorro
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="plazo_fijo" vale="plazo_fijo" id="flexRadioDefault2" >
            <label class="form-check-label" for="flexRadioDefault2">
                Plazo fijo
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="cuenta_corriente" vale="cuenta_corriente" id="flexRadioDefault3" >
            <label class="form-check-label" for="flexRadioDefault3">
            Cuenta corriente
        </label>
        </div>

        <h1>Selecione el tipo de moneda que desea para su nueva cuenta </h1>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="peso" vale="peso" id="flexRadioDefault4">
            <label class="form-check-label" for="flexRadioDefault4">
                Peso Argentino
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="dolar" vale="dolar" id="flexRadioDefault5" >
            <label class="form-check-label" for="flexRadioDefault5">
                Dolar Estadounidense
            </label>

        <button type="submit" class="btn btn-primary">Crear cuenta</button>
    </form>    



{include file="footer.tpl"}