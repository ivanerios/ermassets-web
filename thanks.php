<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<link rel="icon" 
      type="image/png" 
      href="images/fav.png" />
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<title>ERMASSETS - Club de Muntanya d'Esporles</title>
<script type="text/javascript">
function redireccion(){
  window.location="index.php";
}
setTimeout ("redireccion()", 5000); //cuenta regresiva
</script>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/pngfix.js"></script>
</head>
<body>

<div id="content">
<div id="wrapper2">
</br>
<p align="center"><img src="images/thanks.png"></p>
<p align="center" style="font-family: 'newsgoth_cn_btregular'; font-size:24px; margin-top:10px; color:#666;">GRÀCIES PER LA SEVA CONSULTA,</br>CONTESTAREM EL MÉS RÀPID POSSIBLE.</p>
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