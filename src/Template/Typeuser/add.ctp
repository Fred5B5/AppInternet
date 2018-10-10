<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typeuser $typeuser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Typeuser'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typeuser form large-9 medium-8 columns content">
    <?= $this->Form->create($typeuser) ?>
    <fieldset>
        <legend><?= __('Add Typeuser') ?></legend>
        <?php
            echo $this->Form->control('TypeUsager');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
