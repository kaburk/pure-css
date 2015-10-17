<?php
/**
 * グローバルメニュー
 * 呼出箇所：全ページ
 *
 * BcBaserHelper::globalMenu() で呼び出す
 * （例）<?php $this->BcBaser->globalMenu() ?>
 */
if (Configure::read('BcRequest.isMaintenance')) {
	return;
}
$prefix = '';
if (Configure::read('BcRequest.agent')) {
	$prefix = '/' . Configure::read('BcRequest.agentAlias');
}
?>
		<!-- <a class="pure-menu-heading" href="#">Company</a> -->
	<?php if (empty($menuType)) $menuType = '' ?>
	<?php $globalMenus = $this->BcBaser->getMenus() ?>
	<?php if (!empty($globalMenus)): ?>
<a href="#menu" id="menuLink" class="menu-link">
	<!-- Hamburger icon -->
	<span></span>
</a>

<div id="menu">
	<div class="pure-menu">
		<ul class="pure-menu-list">

		<?php foreach ($globalMenus as $key => $globalMenu): ?>
			<?php if ($globalMenu['Menu']['status']): ?>
				<?php
				$no = sprintf('%02d', $key + 1);
				$classies = array('menu' . $no);
				if ($this->BcArray->first($globalMenus, $key)) {
					$classies[] = 'first';
				} elseif ($this->BcArray->last($globalMenus, $key)) {
					$classies[] = 'last';
				}
				if ($this->BcBaser->isCurrentUrl($globalMenu['Menu']['link'])) {
					$classies[] = 'current';
				}
				$class = implode(' ', $classies);
				//menu-item-divided
				//pure-menu-selected
				?>

			<li class="pure-menu-item <?php echo $class ?>">
				<?php echo str_replace('/index.php', '', $this->BcBaser->link($globalMenu['Menu']['name'], $globalMenu['Menu']['link'], array('class' => 'pure-menu-link'))) ?>
			</li>
			<?php endif ?>
		<?php endforeach ?>
	<?php endif ?>
		</ul>
	</div>
</div>
