<?php $this->BcBaser->docType('html5') ?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="<?php echo ($charset = strtolower(Configure::read('App.encoding'))) ? $charset : 'utf-8' ?>">
		<meta name="keywords" content="<?php echo $this->BcBaser->getKeywords() ?>">
		<meta name="description" content="<?php echo $this->BcBaser->getDescription() ?>">
		<?php 
			$this->BcBaser->title();
			$this->BcBaser->css(array(
				'pure/pure-min',
				'style',
				'//fonts.googleapis.com/css?family=Raleway:200',
			));
		?>
		<!--[if lte IE 8]><?php 
			$this->BcBaser->css(array(
				'pure/side-menu-old-ie',
				'pure/grids-responsive-old-ie-min',
			));
		?>
		<![endif]-->
		<!--[if gt IE 8]><!--><?php 
			$this->BcBaser->css(array(
				'pure/side-menu',
				'pure/grids-responsive-min',
			));
		?>
		<!--<![endif]-->
		<!--[if lt IE 9]><?php 
			$this->BcBaser->js(array(
				'html5shiv.min',
			));
		?>
		<![endif]-->
		<?php 
			$this->BcBaser->js(array(
				'jquery-1.11.3.min',
			));
		?>
		<?php 
			$this->BcBaser->scripts();
			$this->BcBaser->googleAnalytics();
		?>
	</head>
	<body>
		<div id="layout">
<?php $this->BcBaser->globalMenu() ?>
			<div id="main">
<?php $this->BcBaser->header() ?>
<?php $this->BcBaser->flash() ?>
<?php $this->BcBaser->content() ?>
<!--
				<div class="grids-example">
					<div class="pure-g">
						<div class="pure-u-1-3 l-box"><p>グリッド1</p></div>
						<div class="pure-u-1-3 l-box"><p>グリッド2</p></div>
						<div class="pure-u-1-3 l-box"><p>グリッド3</p></div>
					</div>
					<div class="pure-g">
						<div class="pure-u-1 pure-u-md-1-3 l-box">Thirds</div>
						<div class="pure-u-1 pure-u-md-1-3 l-box">Thirds</div>
						<div class="pure-u-1 pure-u-md-1-3 l-box">Thirds</div>
					</div>
					<div class="pure-g">
						<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-4 l-box">グリッド1</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-4 l-box">グリッド2</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-4 l-box">グリッド3</div>
						<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-4 l-box">グリッド4</div>
					</div>
				</div>
-->
<?php $this->BcBaser->footer() ?>
			</div>
		</div>
		<?php 
			$this->BcBaser->js(array(
				'pure/ui',
			));
		?>
<?php $this->BcBaser->func() ?>
	</body>
</html>