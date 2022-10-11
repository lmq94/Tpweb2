
{include file="header.tpl"}



   
            <div class="d-flex " action="home">
                {if $props.islogged}
                    {include file="panel.tpl"}

                    <h1 class="m-3">Hola {$smarty.session.user->username}!</h1>

                    <h1 class="m-3">Bienvenido al banco de Villa Gesell</h1>

                    <h1 class="m-3"> Haga click en "menu de usuario" para empezar</h1>  

                {else}
                    <div class="card m-3">
                            <img src="./Images/cuenta.jpg" class="card-img-top" alt="cuenta">
                            <div class="card-body">
                                <h5 class="card-title">Abri tu primer cuenta gratis!</h5>
                                <p class="card-text">Cansado de guardar tu dinero en tu bolsillo y que te asalten el dia que cobras tu sueldo a la noche? No lo piensen mas!! abrite tu primera cuenta sin costo de mantenimiento</p>
                                <a href="registrar-usuario" class="btn btn-primary">Registrate</a>
                            </div>
                    </div>
                    <div class="card m-3" >
                            <img src="./Images/dolares.png" class="card-img-top" alt="dolares">
                            <div class="card-body">
                                <h5 class="card-title">Compra dolares</h5>
                                <p class="card-text">Ahorraste todo el año, pero con la inflacion ahora no te alcanza ni para un caramelo? Pasa tus ahorros a dolares ahora mismo, el arbolito numero 1 de Gesell  ahora trabaja para nosotros!</p>
                                <a href='menu-login' class="btn btn-primary">Comprar ahora</a>
                            </div>
                    </div>
                {/if}
                        
            </div>
    



{include file="footer.tpl"}