<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Title[]|\Cake\Collection\CollectionInterface $titles
 */
?>
<?php
$this->assign('title', 'Result');
?>

<div class="columns content body">
	<div id="resultbox">
		<?php foreach ($titles as $title): ?>
			<h1 class="title">
				<?php $Anime_Title = $this->request->query('Anime_Title'); ?>
				<?php if(strlen($Anime_Title)==mb_strlen($Anime_Title,'utf8')): ?>
					<div><?= nl2br(h($title->FormalTitle_jp)) ?></div>
					<div class="imagebox">
						<img id="image" src="<?= h($title->imageurl) ?>" alt="">
						<p id="quote">出典:<?= $this->Html->link($title->quote, $title->quoteurl, ['target' => '_blank', 'rel' => 'noopener']) ?></p>
					</div>
				<?php else: ?>
					<div><?= nl2br(h($title->FormalTitle_eg)) ?></div>
					<div class="imagebox">
						<img id="image" src="<?= h($title->imageurl) ?>" alt="">
						<p id="quote">出典:<?= $this->Html->link($title->quote, $title->quoteurl, ['target' => '_blank', 'rel' => 'noopener']) ?></p>
					</div>
				<?php endif; ?>
			</h1>
		<?php endforeach; ?>
		<h1 id="noresult"></h1>
	</div>


	<div id="nextform">
		<div id="nexttitle">
			<?= $this->Form->create("", ["type"=>"get", "url"=>["action"=>"result"]]); ?>
				<?= $this->Form->control("Anime_Title", ["default"=>$this->request->query("Anime_Title"), "placeholder"=>"Anime Title", "required" =>true, "label"=>false]); ?>
				<button class="btn button" id="nextbutton">検索</button>
			<?= $this->Form->end() ?>
		</div>

		<div id='request'>
			<button class="btn button" id="request-button">Request Title</button>
			<div id="info" title="Request title">
				<div class="titles form large-9 medium-8 columns content">
					<?= $this->Form->create($requesttitle, array('url' => array('controller' => 'requesttitles', 'action' => 'requesttitle'))) ?>
					<?= $this->Form->control("RequestTitle", ["placeholder"=>"One Piece", "required" =>true, "label"=>false]) ?>
					<?= $this->Form->button(__('Submit'), ["class" => "btn submit-button"]) ?>
					<?= $this->Form->end() ?>
				</div>
			</div>
		</div>
	</div>
	
</div>
<?= $this->Html->script(['search']) ?>