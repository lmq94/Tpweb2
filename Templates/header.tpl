<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="{BASE_URL}" />

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <link rel="stylesheet" href="{BASE_URL}Css/visual.css">

      <title>Banco de Gesell</title>
  </head>
  <body>
      <header>
          <img src="./Images/VillaGesell.jpg">
          <nav class="navbar navbar-expand-lg bg-primary">
              <div class="container-fluid">
                <a class="navbar-brand" >Banco de Gesell</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="about">About</a>
                    </li>
                      {if !$props.islogged}
                        <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="menu-login">Login</a>
                    </li>
                    {/if}
                  </ul>
                </div>
              </div>
            </nav>
      </header>

      <!-- inicio main container -->
      <main class="main-container">

