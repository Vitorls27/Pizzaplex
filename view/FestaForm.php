<?php 
include "../controller/FestaController.php";

$festa = new FestaController();

  if(!empty($_POST['id'])){
    $festa->update($_POST);
    header("location: FestaList.php");

  } elseif(!empty($_POST)) {
    $festa->salvar($_POST);
    header("location: FestaList.php");
  }

  if(!empty($_GET['id'])){
    $data = $festa->buscar($_GET['id']);
  }
?>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <div class="conteiner">
      <h1>Formulário Festa</h1>
        <form action="FestaForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>"/><br>
            <div class="col-3">
              <label>Aniversariante</label><br>
              <input type="text" name="aniversariante" value="<?php echo !empty($data->aniversariante) ? $data->aniversariante : "" ?>"/><br>
            </div>
            <div class="col-3">
              <label>Animatronic</label><br>
              <input type="text" name="animatronic" value="<?php echo !empty($data->animatronic) ? $data->animatronic : "" ?>"/><br>
            </div>
            <div class="col-3">
              <label>Data</label><br>
              <input type="date" name="data" value="<?php echo !empty($data->data) ? $data->data : "" ?>"/><br>
            </div>
            <div class="col-3">
              <label>Hora</label><br>
              <input type="time" name="hora" value="<?php echo !empty($data->hora) ? $data->hora : "" ?>"/><br>
            </div><br>
            <button class="btn btn-success" type="submit">
              <i class="fa-solid fa-save"></i> Salvar
            </button>
            <a href="FestaList.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>Voltar</a>
        </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </div>
	</body>
</html>