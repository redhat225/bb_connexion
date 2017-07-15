<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Subscriber Events'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subscriber Linking Events'), ['controller' => 'SubscriberLinkingEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subscriber Linking Event'), ['controller' => 'SubscriberLinkingEvents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subscriberEvents form large-9 medium-8 columns content">
    <?= $this->Form->create($subscriberEvent) ?>
    <fieldset>
        <legend><?= __('Add Subscriber Event') ?></legend>
        <?php
            echo $this->Form->input('event_full_description');
            echo $this->Form->input('event_begin');
            echo $this->Form->input('event_end');
            echo $this->Form->input('event_deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
