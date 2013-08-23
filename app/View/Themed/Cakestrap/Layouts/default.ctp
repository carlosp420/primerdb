<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(). "\n\t"; ?>
	<title>Primers Database: <?php echo $title_for_layout; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
	<?php
		echo $this->Html->css('bootstrap.min'). "\n\t";
        echo "<style type='text/css'>
                    body {
                        padding-top: 60px;
                        padding-bottom: 40px;
                        }
        </style>\n\t";

		echo $this->Html->css('bootstrap-responsive.min'). "\n\n\t";

		echo $this->Html->meta('icon') . "\n\t";

		echo $this->fetch('meta');

		echo $this->Html->css('core'). "\n\t";

		echo $this->fetch('css'). "\n\t";

		echo $this->Html->script('libs/jquery'). "\n\t";
		echo $this->Html->script('libs/bootstrap.min'). "\n\t";

		echo $this->fetch('script'). "\n\t";
	?>
</head>

<body>

<?php echo $this->element('menu/top_menu'); ?>

    <div class="container">
		
			
		<div id="content" class="container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div><!-- #header .container -->
			
         <hr>

		 <footer>
               <p><small>&copy; 2013 NSG with help from CakePHP and CakeStrap (Twitter Bootstrap)
                    </small>
               </p>
		 </footer>
	</div><!-- #main-container -->
</body>
</html>
