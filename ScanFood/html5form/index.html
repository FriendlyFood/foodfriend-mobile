<?php session_start(); ?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Calidad nutricional</title>
	<meta name="description" content="">
	<meta name="author" content="Chubasco">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<link rel="stylesheet" href="css/style.css?v=2">

	<script src="js/libs/modernizr-1.7.min.js"></script>
</head>
<body>
	<div id="container">
        <div id="contact-form" class="clearfix">
            <h1>Come Sano</h1>
            <h2>Ingrese el codigo de barra del producto para saber que tan sano es :)</h2>
            <?php
			//init variables
			$cf = array();
			$sr = false;
			
			if(isset($_SESSION['cf_returndata'])){
				$cf = $_SESSION['cf_returndata'];
			 	$sr = true;
			}
            ?>
            <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                <li id="info">Ojo! Hay errores con la informacion enviada</li>
                <?php 
				if(isset($cf['errors']) && count($cf['errors']) > 0) :
					foreach($cf['errors'] as $error) :
				?>
                <li><?php echo $error ?></li>
                <?php
					endforeach;
				endif;
				?>
            </ul>
            <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">
			Buscando informacion nutricional del producto
			</p>
            <form method="post" action="process.php">
                <label for="name">Codigo del producto: <span class="required">*</span></label>
                <input type="text" id="code" name="code" value="
				<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['code'] : '' ?>
				" required autofocus />
                
                <label for="name">Nombre del producto: <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="
				<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>
				"  required />
                                
                <label for="grasa">Grasa: </label>
                <input type="text" id="grasa" name="grasa" value="
				<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['grasa'] : '' ?>
				" />				
				                  
                <label for="saturada">Grasas Saturadas: </label>
                <input type="text" id="saturada" name="saturada" value="
				<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['saturada'] : '' ?>
				" />
               
                
                <span id="loading"></span>
                <input type="submit" value="Informacion" id="submit-button" />
                <p id="req-field-desc"><span class="required">*</span> Campo obligatorio</p>
            </form>
            <?php unset($_SESSION['cf_returndata']); ?>
        </div>
    </div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>
	<!--[if lt IE 7 ]>
	<script src="js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->
</body>
</html>