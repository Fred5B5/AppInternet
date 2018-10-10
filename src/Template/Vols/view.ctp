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
        <li><?= $this->Html->link(__('List Emplacements'), ['controller' => 'Emplacements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emplacement'), ['controller' => 'Emplacements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?> </li>
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
            <th scope="row"><?= __('Emplacementdepart Id') ?></th>
            <td><?= $this->Number->format($vol->emplacementdepart_id) ? $this->Html->link($vol->emplacementdepart_id, ['controller' => 'Emplacements', 'action' => 'view', $vol->emplacementdepart_id]) : '' ?></td>></td>
        </tr>
		<tr>
            <th scope="row"><?= __('Emplacementfin Id') ?></th>
            <td><?= $vol->has('emplacement') ? $this->Html->link($vol->emplacement->id, ['controller' => 'Emplacements', 'action' => 'view', $vol->emplacement->id]) : '' ?></td>
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
    <div class="related">
        <h4><?= __('Related Reservations') ?></h4>
        <?php if (!empty($vol->reservations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Vol Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vol->reservations as $reservations): ?>
            <tr>
                <td><?= h($reservations->id) ?></td>
                <td><?= h($reservations->user_id) ?></td>
                <td><?= h($reservations->vol_id) ?></td>
                <td><?= h($reservations->created) ?></td>
                <td><?= h($reservations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservations', 'action' => 'delete', $reservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
