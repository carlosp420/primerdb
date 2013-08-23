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
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brand" href="index.php">Primerdb</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                        </ul>
                    </div>
            </div>
        </div>
    </div>


	<div class="container">

    <div class="hero-unit">
        <h1>Primerdb</h1>
        <p>on primers and amplicons...</p>

        <p>
            <a class="btn btn-primary btn-large" href="primers">primers</a>
            <a class="btn btn-primary btn-large" href="amplicons">amplicons</a>
        </p>
    </div>


		<div id="content" class="container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

        <hr>

		<footer>
            <p>&copy; 2013 NSG with help from CakePHP and CakeStrap (Twitter Bootstrap)
            </p>
		</footer>
	</div>
</body>
</html>
