<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */
$cakeDescription = __d('cake_dev', 'Óptica Capilla');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');

		echo $this->Html->css(array('main', 'bootstrap.min', 'bootstrap-theme.min', 'dashboard'));
		//echo $this->Html->css('cake.generic');
		echo $this->Html->script(array('jquery.min', 'docs.min', 'bootstrap.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<?php if(isset($current_user)): ?>
		<?php echo $this->element('menu') ?>
	<?php endif; ?>
	<br>
	<br>
	<br>
	<br>	
    <div class="container theme-showcase" role="main">
      	<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); //Charge the home page ?>

		<div id="footer">
			<?php /*echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);*/
			?>
		</div>
	</div>
</body>
</html>
