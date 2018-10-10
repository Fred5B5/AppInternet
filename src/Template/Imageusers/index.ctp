<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imageuser[]|\Cake\Collection\CollectionInterface $imageusers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imageuser'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imageusers index large-9 medium-8 columns content">
    <h3><?= __('Imageusers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emplacementImage') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imageusers as $imageuser): ?>
            <tr>
                <td><?= $this->Number->format($imageuser->id) ?></td>
                <td><?= h($imageuser->emplacementImage) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imageuser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imageuser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imageuser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageuser->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
