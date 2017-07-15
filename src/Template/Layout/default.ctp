<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$title_mark = ' Business Connexion';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title_mark ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon','/bb_connexion.ico') ?>

    <?php //$this->Html->css('base.css') ?>
    <?php // $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>

    <?= $this->Html->css('ionicons-2.0.1/css/ionicons.min') ?>
    <?= $this->Html->css('../js/materialize/css/materialize.min') ?>
    <?= $this->Html->css('red/bb_connexion') ?>

    <?= $this->Html->css('../js/wow/css/libs/animate') ?> 
    <?= $this->Html->css('../js/slick-1.6.0/slick-1.6.0/slick/slick') ?>
    <?= $this->Html->css('../js/slick-1.6.0/slick-1.6.0/slick/slick-theme') ?>

    <?= $this->fetch('css') ?>



    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('materialize/js/materialize.min') ?>
    <?= $this->Html->script('wow/dist/wow.min') ?> 
    <?= $this->Html->script('slick-1.6.0/slick-1.6.0/slick/slick') ?>   
</head>
<body>
    <!-- The Original Top Bar goes here -->
    <?= $this->element('navbar_website') ?>
    <!-- Social Network linking -->
    <?= $this->element('social') ?>
    <!-- Flash Plugin for dispaying smooth content -->
    <?= $this->Flash->render() ?>
    <div class="row zero-margin">
        <?= $this->fetch('content') ?>
    </div>

    <!-- The Original footer Goes Here -->
    <?= $this->element('footer_website') ?>
    <?= $this->fetch('script') ?>
   
</body>
</html>
