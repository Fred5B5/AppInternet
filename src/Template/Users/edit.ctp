<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Typeusers'), ['controller' => 'Typeusers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeuser'), ['controller' => 'Typeusers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Imageusers'), ['controller' => 'Imageusers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imageuser'), ['controller' => 'Imageusers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('email');
            echo $this->Form->control('Prenom_Usager');
            echo $this->Form->control('Nom_Usager');
            echo $this->Form->control('password');
            echo $this->Form->control('typeuser_id', ['options' => $typeusers]);
            echo $this->Form->control('imageuser_id', ['options' => $imageusers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
