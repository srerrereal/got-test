<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="model/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>Game Of Thrones - Tabela de Familias(Teste FC)</title>

  </head>
  <header>

        <div class="container-fluid" style=" padding-left: 0;  padding-right: 0;">

        <div class="row">
          <div class="col-md-12">

          <img src="model/img/got.jpg" alt="" class="img-fluid">

          </div>
        </div>
      </div>

  </header>
  <body>

    <div class="row">

        <!--Family Button -->

      <div class="col-md-6 text-right">
        <input type="image" src="model/img/familybtn.jpg" onclick="toggleFamily()" class="btnLayout">
        <p class="text" style="margin-right: 130px;">Familias</p>
      </div>

      <!--War Button -->

      <div class="col-md-6 text-left" style="position: relative; margin: 0 auto;">
        <input type="image" src="model/img/warbtn.jpg" onclick="toggleWar()" class="btnLayout">
          <p class="text" style="margin-left: 130px;">Guerras</p>
      </div>
    </div>

                        <!--Family table  -->

    <div class="container-fluid">
    <div id="tablefamily" class="container" style="display: none;">
      <div class="container">
                <table class="table table-hover">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col"><i class="far fa-id-card icons"></i>Nome</th>
                          <th scope="col"><i class="fas fa-users icons"></i>Membros</th>
                          <th scope="col"><i class="fas fa-crown icons"></i>Guerras</th>
                          <th scope="col"><i class="fas fa-trophy icons"></i>Vitórias</th>
                          <th scope="col"><i class="fas fa-trophy icons"></i>Derrotas</th>
                          <th scope="col text-center"><i class="fas fa-exclamation icons"></i>Ações</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">Stark</th>
                          <td>8</td>
                          <td>3</td>
                          <td>1</td>
                          <td>2</td>
                          <td><button class="btn btn-info" label="Editar"><i class="far fa-edit icons"></i>Editar</button></td>
                          <td><button class="btn btn-danger" label="Excluir"><i class="far fa-trash-alt icons"></i>Excluir</button></td>
                        </tr>

                        <!--Lannister-->

                        <tr>
                          <th scope="row">Lannister</th>
                          <td>5</td>
                          <td>4</td>
                          <td>2</td>
                          <td>2</td>
                          <td><button class="btn btn-info" label="Editar"><i class="far fa-edit icons"></i>Editar</button></td>
                          <td><button class="btn btn-danger" label="Excluir"><i class="far fa-trash-alt icons"></i>Excluir</button></td>
                        </tr>

                        <!--Tyrell-->

                        <tr>
                          <th scope="row">Tyrell</th>
                          <td>4</td>
                          <td>4</td>
                          <td>3</td>
                          <td>1</td>
                          <td><button class="btn btn-info" label="Editar"><i class="far fa-edit icons"></i>Editar</button></td>
                          <td><button class="btn btn-danger" label="Excluir"><i class="far fa-trash-alt icons"></i>Excluir</button></td>
                        </tr>
                        <tr>
                          <th scope="row">Baratheon</th>
                          <td>6</td>
                          <td>5</td>
                          <td>4</td>
                          <td>1</td>
                          <td><button class="btn btn-info" label="Editar"><i class="far fa-edit icons"></i>Editar</button></td>
                          <td><button class="btn btn-danger" label="Excluir"><i class="far fa-trash-alt icons"></i>Excluir</button></td>
                        </tr>

                      </tbody>
                    </table>


                <div class="row text-center">
                    <div class="col">
                        <button type="button" class="btn btn-success"><i class="fas fa-plus icons"></i>Adicionar Familias</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

                      <!--Family table End-->

                      <!-- War table -->


      <div class="container-fluid">
      <div id="tablewar" class="container" style="display: none;">
          <form>
            <div id="dateFilter" class="row">
              <div class="col-md-4">

              <div class="form-group">
              <label for="date">Data Inicio</label>
              <input type="date" class="form-control" id="date" placeholder="DD/MM/AAAA" min="1000-12-1" max="1002-12-31">
            </div>

          </div>
              <div class="col-md-4">

              <div class="form-group">
              <label for="date">Data Final</label>
              <input type="date" class="form-control" id="date" placeholder="DD/MM/AAAA" min="1000-12-1" max="1002-12-31">
            </div>

          </div>
          <div class="col-md-4 text-center">
            <button class="btn btn-info align-self-middle" style="margin-top: 2em;width: 300px;height: 42px;"><i class="fas fa-search icons"></i>Pesquisar</button>

          </div>

          </div>
          </form>
                  <table class="table table-hover">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col"> <i class="fas fa-users icons"> </i>Familia Desafiadora</th>
                            <th scope="col"> <i class="fas fa-users icons"> </i>Familia Desafiada</th>
                            <th scope="col"> <i class="far fa-calendar icons"> </i>Inicio</th>
                            <th scope="col"> <i class="fas fa-calendar icons">   </i>Fim</th>
                            <th scope="col"> <i class="fas fa-trophy icons"></i>  Vencedora</th>
                            <th scope="col text-center"> <i class="fas fa-exclamation icons"></i> Ações</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Stark</th>
                            <td>Lannister</td>
                            <td>02/09/1001</td>
                            <td>02/12/1001</td>
                            <td>Lannister</td>
                            <td><button class="btn btn-info" label="Editar"><i class="far fa-edit icons"></i>Editar</button></td>
                            <td><button class="btn btn-danger" label="Excluir"><i class="far fa-trash-alt icons"></i>Excluir</button></td>
                          </tr>

                          <!--Lannister-->

                          <tr>
                            <th scope="row">Lannister</th>
                            <td>Baratheon</td>
                            <td>01/10/1000</td>
                            <td>23/12/1000</td>
                            <td>Baratheon</td>
                            <td><button class="btn btn-info" label="Editar"><i class="far fa-edit icons"></i>Editar</button></td>
                            <td><button class="btn btn-danger" label="Excluir"><i class="far fa-trash-alt icons"></i>Excluir</button></td>
                          </tr>

                          <!--Tyrell-->

                          <tr>
                            <th scope="row">Targaryen</th>
                            <td>Baratheon</td>
                            <td>01/05/1001</td>
                            <td>12/12/1002</td>
                            <td>Baratheon</td>
                            <td><button class="btn btn-info" label="Editar"><i class="far fa-edit icons"></i>Editar</button></td>
                            <td><button class="btn btn-danger" label="Excluir"><i class="far fa-trash-alt icons"></i>Excluir</button></td>
                          </tr>

                        </tbody>
                      </table>


                  <div class="row text-center">
                      <div class="col">
                          <button type="button" class="btn btn-success"><i class="fas fa-plus icon"></i> Adicionar Guerra</button>
                      </div>
                  </div>

              </div>
          </div>
      </div>


  </body>
  <footer>
  </footer>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script>
function toggleFamily() {
    var x = document.getElementById("tablefamily");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
<script>
function toggleWar() {
    var x = document.getElementById("tablewar");
    if (x.style.display === "none") {
        x.style.display = "block"
    } else {
        x.style.display = "none";
    }
}
</script>


</html>
