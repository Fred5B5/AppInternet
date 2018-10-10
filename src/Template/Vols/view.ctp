<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vol $vol
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vol'), ['action' => 'edit', $vol->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vol'), ['action' => 'delete', $vol->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vol->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vols'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vol'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vols view large-9 medium-8 columns content">
    <h3><?= h($vol->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vol->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EmplacementDepart') ?></th>
            <td><?= $this->Number->format($vol->EmplacementDepart) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EmplacementFin') ?></th>
            <td><?= $this->Number->format($vol->EmplacementFin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PrixEconomique') ?></th>
            <td><?= $this->Number->format($vol->PrixEconomique) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HeureDepart') ?></th>
            <td><?= h($vol->HeureDepart) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HeureArriver') ?></th>
            <td><?= h($vol->HeureArriver) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($vol->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($vol->modified) ?></td>
        </tr>
    </table>
</div>
