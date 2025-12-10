<?php
    require_once '243biblioteca.php';
    include 'header.php';
    $nombre=$_GET['nombre'];
    $cantidad=(int)$_GET['cantidad'];
    $precio=(float)$_GET['precio'];
    //Podría haber un bucle que añade a ticket más productos    
    $ticket[] = añadirProducto($nombre, $precio, $cantidad);
    mostrarTicket($ticket);
    include 'footer.php';
?>