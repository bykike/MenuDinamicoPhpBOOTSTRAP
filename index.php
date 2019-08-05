<?php
include 'head.php';
?>

<ul class="list-group">

<?php
    //bucle para recorrer los elementos del array
    for ($i = 0; $i<count($listaItems); $i++) {
        ?>
	<li class="list-group-item">
		<?php echo '<a class="link" href="playa.php?id=' . $i . '">' . $listaItems[$i]["nombre"]["content"]. '</a>'; ?>
</li>

<?php
    } //cerramos bucle
?>

</ul>

</html>
