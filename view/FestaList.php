<?php 
include "../controller/FestaController.php";

   $festa = new FestaController();

  if(!empty($_GET['id'])){
    $festa->deletar($_GET['id']);
    header("location: FestaList.php");
  }
  if(!empty($_POST)){
    $load = $festa->pesquisar($_POST);

  }else{
    $load = $festa->carregar();

  }
   //var_dump($load);
  // exit();
?>

<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  </head>
  <body>
    <div class="conteiner">
      <h1><a href="../index.php"><i class="fa-solid fa-arrow-left" style="color: #707070;"></i></a> 
     Listagem de Festas</h1>
      <form action="FestaList.php" method="post">
        <div class="row align-items-end">
          <div class="col-2">
            <select name="campo" class="form-select">
              <option value="aniversariante">Aniversariante</option>
              <option value="animatronic">Animatronic</option>
              <option value="data">data</option>
              <option value="hora">hora</option>
            </select>
          </div>
          <div class="col">
            <input type="text" name="valor" class="form-control" Placeholder="Pesquisar"/>
          </div>
          <div class="col-3">
            <button class="btn btn-primary" type="submit">
              <i class="fa-solid fa-magnifying-glass"></i> Buscar
            </button>
            <a href="FestaForm.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Cadastrar</a>
          </div>
        </div>
      </form>
      <table class="table table-striped">
          <tr>
              <th>ID</th>
              <th>Aniversariante</th>
              <th>Animatronic</th>
              <th>Data</th>
              <th>Hora</th>
              <th></th>
              <th></th>
          </tr>
      <?php 
      foreach($load as $item){
        echo"<tr>
          <td>$item->id</td>
          <td>$item->aniversariante</td>
          <td>$item->animatronic</td>
          <td>$item->data</td>
          <td>$item->hora</td>
          <td><a href='./FestaForm.php?id=$item->id'><i class='fa-solid fa-pen-to-square' style='color:darkorange'></i></a></td>
          <td><a href='./FestaList.php?id=$item->id'
            onclick='return confirm(\"Deseja Excluir?\")'
          ><i class='fa-solid fa-trash' style='color:red'></i></a></td>
        </tr>";
      }
          ?>
      </table>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </div>
  </body>
</html>