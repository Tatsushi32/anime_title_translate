<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription='アニメのタイトル翻訳'
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>｜
        <?= $cakeDescription ?>
    </title>
    <style>
        .body{background: url('../img/the-background-352165_1280.png');
            background-size: cover;
	        text-align: center;
	        margin: auto;
	        display: block;
            width: 40%;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;}
    </style>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([
		'jquery-ui.theme.min', 'jquery-ui.min', 'bootstrap.min', 'styles', 'base.css'
	]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Html->script([
		'jquery-3.4.1.min', 'jquery-ui.min', 'search'
	]) ?>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <footer>
    </footer>
</body>
</html>
