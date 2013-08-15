<?php
/**
 * Create mobile layout with JQuery Mobile
 */
	$cakeDescription = __d('cake_dev', 'Bachelorarbeit Christian Meter');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription; ?>
			<?php echo $title_for_layout; ?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="apple-mobile-web-app-capable" content="yes"> <!-- if added to iOS homescreen, it has fullscreen -->
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<!-- iPhone Retina -->
		<link rel="apple-touch-startup-image" href="img/icons/apple-touch-startup-image-640x920.png" media="(device-width: 640px) and (device-height: 1136px) and (-webkit-device-pixel-ratio: 2)">
		<!-- iPhone Classic -->
		<link rel="apple-touch-startup-image" href="img/icons/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 1096px) and (-webkit-device-pixel-ratio: 2)">
		<link rel="apple-touch-icon" href="img/icon.png">

		<?php
			echo "
				<script type=\"text/javascript\"><!--
					var name = \"".$username."\";
					var subscriptions = $subscriptions;
					var mobile = true;
				</script>
			";

			echo $this->Html->meta('icon');

			$jsimport = array(
				'config.js',
				'http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js',
				'http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js',
				'noty/jquery.noty.js',
				'noty/layouts/bottom.js',
				'noty/themes/default.js',
				'connectWebSocket.js'
			);
			echo $this->Html->script($jsimport);

			$cssimport = array(
				'http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css',
				'main',
				'mobile'
			);
			echo $this->Html->css($cssimport);
			
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
	</head>
	<body>
		<!-- Page -->
		<div data-role="page">
			<?php echo $this->fetch('content'); ?>
			<?php echo $this->Session->flash(); ?>

    		<?php include('mobilenav.ctp'); ?>

		</div><!-- /Page -->

        <script type="text/javascript">
            window.scrollTo(0,1); // Older versions: Scroll 1 pixel down to let the status bar fade out
        </script>
	</body>
</html>