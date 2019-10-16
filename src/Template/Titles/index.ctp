<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Title[]|\Cake\Collection\CollectionInterface $titles
 */
?>
<?php
$this->assign("title", "Anime Title Translate")
?>

<div class="columns content body">
    <div class=index-title>
        <h1 class="title">Anime Title Translate</h1>
    </div>
    <div id="searchbox">
        <?= $this->Form->create("", ["type"=>"get", "url"=>["action"=>"result"]]) ?>
            <?= $this->Form->control("Anime_Title", ["default"=>$this->request->query("Anime_Title"), "placeholder"=>"Anime Title", "required" =>true, "label"=>false]); ?>
            <button class="btn button">検索</button>
        <?= $this->Form->end() ?>
    </div>
</div>
<?= $this->Html->script(["search"]) ?>