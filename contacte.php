<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<link rel="icon" 
      type="image/png" 
      href="images/fav.png" />
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<title>ERMASSETS - Club de Muntanya d'Esporles</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/pngfix.js"></script>
</head>
<body>

<div id="content">
<div id="wrapper2">
<form id="form1" name="form1" method="post" action="procesar.php" class="info" onsubmit="return comprobar(this)">

			<select id="seccio" name="seccio">
<option value="info@ermassets.org">General</option>
<option value="escalada@ermassets.org">Escalada</option>
<option value="btt@ermassets.org">Bicicletes</option>
<option value="excursionisme@ermassets.org">Excursionisme</option>
<option value="curses@ermassets.org">Curses de Muntanya</option>
<option value="barranquisme@ermassets.org">Barranquisme</option>
</select></br></br>
			<label>Nom</label></br><input id="nom" name="nom" type="text" value="" size="80"></br></br>
			<label>Correu electrònic</label></br><input id="email" name="email" type="text" value="" size="80"></br></br>
			<label>Títol de la consulta</label></br><input id="titol" name="titol" type="text" value="" size="80"></br></br>
            <label>Motiu de la consulta</label></br><textarea id="observacions"  name="observacions" rows="20" cols="80"></textarea>
 
 <div id="legend5">           
<label>
    <input type="submit" name="Submit" value="Enviar" class="boton"/>
    </label></div>
</form></br></br></br>
</div>
</div>

<div id="patroci">PATROCINADORS</div>
<div id="p_images2"><?PHP include("patro/patro.html"); ?></a></div>
<div id="patro" style="margin-top:275px;">COL·LABORADORS</div>
<div id="p_images2" style="margin-top:560px;"><?PHP include("patro/col.html"); ?></a></div>
<div id="titulo">CONTACTA AMB NOSALTRES</div>

<?PHP
include("menu/menu.html"); 
?>

</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45788145-1', 'ermassets.org');
  ga('send', 'pageview');

</script>
</html>