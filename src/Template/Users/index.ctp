<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typeusers'), ['controller' => 'Typeusers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeuser'), ['controller' => 'Typeusers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Imageusers'), ['controller' => 'Imageusers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imageuser'), ['controller' => 'Imageusers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Prenom_Usager') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nom_Usager') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typeuser_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imageuser_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->Prenom_Usager) ?></td>
                <td><?= h($user->Nom_Usager) ?></td>
                <td><?= $user->has('typeuser') ? $this->Html->link($user->typeuser->id, ['controller' => 'Typeusers', 'action' => 'view', $user->typeuser->id]) : '' ?></td>
                <?php $imageid = $this->Number->format($user->imageuser_id);
				$images = $Imageusers->toArray();
				$key = array_search($imageid, $images)?>
				<td><img src="/AppInternet/webroot/img/<?= $images[$key]['emplacementImage']?>" alt="CakePHP" /></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
