<!DOCTYPE html>
<html>
<head>
	<?php
        echo $this->Html->charset();
        $title = (isset($title)?$title:'Sistema libro dinámico');
    ?>
	<title><?=$title?></title>
	<?php
        echo $this->fetch('meta');
		echo $this->Html->css('bootstrap');
        echo $this->Html->css('estilos');
		echo $this->fetch('css');
		echo $this->fetch('script');
        echo $this->Element('Layout/favicons');
	?>
</head>
<body>
    <?=$this->Element('Layout/header');?>
	<div id="container">
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
    <?=$this->Element('Layout/footer');?>
</body>
</html>
