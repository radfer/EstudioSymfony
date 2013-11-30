<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php //include_http_metas() ?>
    <?php //include_metas() ?>
    <?php //include_title() ?>
    <!--<link rel="shortcut icon" href="/favicon.ico" />-->
    <!--<link rel ="stylesheet" type = "text/css" media = "screen" href = "/css/bootstrap.min.css"/>-->
    <?php include_stylesheets('/bootstrap.min.css') ?>
    <?php include_javascripts('/bootstrap.min.js') ?>
    <?php include_javascripts('/jquery.min.js') ?>
  </head>
  <body>
	  <br>
	  <div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<h1 CLASS='text-center'>
						ESTUDIO JURIDICO FRANCO Y ASOCIADOS
					</h1>
				</div>
			</div>
    <?php echo $sf_content ?>
  </body>
</html>
