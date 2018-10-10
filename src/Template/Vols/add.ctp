<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vol $vol
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vols'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="vols form large-9 medium-8 columns content">
    <?= $this->Form->create($vol) ?>
    <fieldset>
        <legend><?= __('Add Vol') ?></legend>
        <?php
            echo $this->Form->control('EmplacementDepart');
            echo $this->Form->control('EmplacementFin');
            echo $this->Form->control('HeureDepart');
            echo $this->Form->control('HeureArriver');
            echo $this->Form->control('PrixEconomique');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
