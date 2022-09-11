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

	<div id="galleria" style="background:none;"><a href="../gal_sec/img/curses/2013-02-09 08.42.23.jpg"><img src="../gal_sec/img/curses/2013-02-09 08.42.23.jpg"></a>
	<div id="galleria" style="background:none;"><a href="../gal_sec/img/curses/185453_2247213107898_492265_n.jpg"><img src="../gal_sec/img/curses/185453_2247213107898_492265_n.jpg"></a>
	<div id="galleria" style="background:none;"><a href="../gal_sec/img/curses/249507_541729542520691_1436062260_n.jpg"><img src="../gal_sec/img/curses/249507_541729542520691_1436062260_n.jpg"></a>
	<div id="galleria" style="background:none;"><a href="../gal_sec/img/curses/251706_2027965734276_834457_n.jpg"><img src="../gal_sec/img/curses/251706_2027965734276_834457_n.jpg"></a>
	<div id="galleria" style="background:none;"><a href="../gal_sec/img/curses/k42 2.jpg"><img src="../gal_sec/img/curses/k42 2.jpg"></a>
	<div id="galleria" style="background:none;"><a href="../gal_sec/img/curses/PC31009020101231_88.jpg"><img src="../gal_sec/img/curses/PC31009020101231_88.jpg"></a>
	<div id="galleria" style="background:none;"><a href="../gal_sec/img/curses/PC31012320101231_121.jpg"><img src="../gal_sec/img/curses/PC31012320101231_121.jpg"></a>
	</div></div></div></div></div></div></div></div>

    <script>

    // Load the classic theme
	Galleria.loadTheme('../gal_sec/galleria.classic.min.js');

	// Initialize Galleria
	$('#galleria').galleria();

    </script>
    </body>
</html>