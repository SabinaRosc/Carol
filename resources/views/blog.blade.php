<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{asset('ccs/app.css')}}">
</head>

<!--
div#header(div#logo)+div#menu+div#contet+div#footer 
pulsar tab al final de la linea para usar emmet-->
<!--
--en terminal--
limpiar cache laravel  php artisan  cache:clear -->
<!-- es un echo en laravel: {{}} -->
<body>

<div id="header">
    <div id="logo"><img src="http://placehold.it/100x100" alt="logo"title="logo"></div>
</div>

<div id="menu">
  <ul>
      <li a href="">Inicio</li>
      <li a href="{{url('/nosotros')}}">Nosotros</li>
      <li a href="{{url('/blog')}}">Blog</li>
  </ul>  
</div>

<div id="contet">
    
</div>

<div id="footer" class="footer"></div>
    <p>2016 &copy; Sabina. Todos los Derechos Reservados</p>
    
</body>
</html>