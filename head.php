
<?php
// index.php
// ubicacion JSON  y local
define('JSONlocal', 'playas.json');
// leer JSON  local
    $data = file_get_contents(JSONlocal);
    $items = json_decode($data, true);

//lista de items a recorrer
$listaItems = $items["directorios"]["directorio"];
?>

<html>
<head>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
</head>
<header>
  <h1><a href="index.php">Playas de Gijón</a></h1>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <?php
      //bucle para recorrer los elementos del array
      for ($i = 0; $i<count($listaItems); $i++) {
          ?>
      <li class="nav-item">
        <?php echo '<a class="nav-link" href="playa.php?id=' . $i . '">' . substr($listaItems[$i]["nombre"]["content"] , 9) . '</a>'; ?>
      </li>
      <?php
      } //cerramos bucle
      ?>
    </ul>
  </div>
</nav>
