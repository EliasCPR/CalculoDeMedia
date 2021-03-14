<?php
  $quantidade = $_POST['QTnotas'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="./styles-global.css" />
  <title>Informe as notas</title>
</head>
<body>
  <form action="calcula.php" method="POST">
    <?php
      for($i = 1; $i <= $quantidade; $i++){
    ?>
      <div class="input-group">
        <label for="nota<?= $i ?>">Digite a nota <?= $i ?></label>
        <input type="number" min="0" max="10" placeholder="digite sua nota"name="nota<?= $i ?>" id="nota<?= $i ?>" />
      </div>
    <?php
      }
    ?>
    <button>Calcular</button>
    <button type="reset">Apagar</button>
  </form>
</body>
</html>