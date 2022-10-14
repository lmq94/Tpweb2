{include file="header.tpl"}


        {include file="panel.tpl"}


        <form class="container-md" action="open-account" method="POST">
            {if $smarty.session.user->rol=="admin"}
                <h4> Seleccione un cliente</h4>
                <select class="form-select-m3" aria-label="Default select example" name='id_client'>
                    <option selected>Seleccionar cliente</option>
                    {foreach from=$clients item=$client}
                        <option value="{$client->id_client}">{$client->alias}</option>
                    {/foreach}
                </select>
            {/if}

            <div class="col-md-4">
                <label for="exampleInputPassword1" class="form-label"> <h4>Ingrese el monto inicial (opcional)</h4></label>
                <input type="number" class="form-control" id="exampleInputPassword1" value="" name="amount">
            </div>
            <h4> Seleccione el tipo de cuenta que desea abrir </h4>

            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="type_account" value="Caja de ahorro" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Caja de ahorro
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="type_account" value="Plazo fijo" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    Plazo fijo
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="type_account" value="Cuenta corriente" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault3">
                    Cuenta corriente
                </label>
            </div>

            <h4>Selecione el tipo de moneda que desea para su nueva cuenta </h4>

            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="coin" value="Peso Argentino" id="flexRadioDefault4">
                <label class="form-check-label" for="flexRadioDefault4">
                    Peso Argentino
                </label>
            </div>
            <div class="form-check mb-3 ">
                <input class="form-check-input" type="radio" name="coin" value="Dolar Estadounidense" id="flexRadioDefault5" >
                <label class="form-check-label" for="flexRadioDefault5">
                    Dolar Estadounidense
                </label>
            <div>
            <button type="submit" class="btn btn-primary mt-3">Crear cuenta</button>
            {if !($smarty.session.user->rol=="admin")}
                <h3 class="mt-3"> Importante: Esta cuenta tendra como titular al cliente asociado al usuario</h3>
            {/if}
        </form>  
        
  


{include file="footer.tpl"}