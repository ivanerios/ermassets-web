<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Galleria Classic Theme</title>
        <style>

            /* Demo styles */
            .contenti{background:none; color:#777;font:12px/1.4 "helvetica neue",arial,sans-serif;width:640px;margin:20px auto;}
            .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:555px; position:relative; top:-20px;}

        </style>

        <!-- load jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

        <!-- load Galleria -->
        <script src="../gal_sec/galleria-1.2.6.min.js"></script>

    </head>
<body>
    <div class="contenti" style="background:none; height:0px;">

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

	<div id="galleria" style="background:none;"><a href="../gal_sec/img/Bernat_2 (1).jpg"><img src="../gal_sec/img/Bernat_2 (1).jpg"></a>
	<div id="galleria" style="background:none;"><a href="../gal_sec/img/IMG_8950.jpg"><img src="../gal_sec/img/IMG_8950.jpg"></a>
	<div id="galleria" style="background:none;"><a href="../gal_sec/img/Jordi en clasificacion.jpg"><img src="../gal_sec/img/Jordi en clasificacion.jpg"></a>
	<div id="galleria" style="background:none;"><a href="../gal_sec/img/Lluis2_firma.jpg"><img src="../gal_sec/img/Lluis2_firma.jpg"></a>
	<div id="galleria" style="background:none;"><a href="../gal_sec/img/Xavi_reposando.jpg"><img src="../gal_sec/img/Xavi_reposando.jpg"></a>
	<div id="galleria" style="background:none;"><a href="../gal_sec/img/P1040299.jpg"><img src="../gal_sec/img/P1040299.jpg"></a>
	</div></div></div></div></div></div></div>

    <script>

    // Load the classic theme
	Galleria.loadTheme('../gal_sec/galleria.classic.min.js');

	// Initialize Galleria
	$('#galleria').galleria();

    </script>
    </body>
</html>