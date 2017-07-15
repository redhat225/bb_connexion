<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Subscriber Linking Events'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subscribers'), ['controller' => 'Subscribers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subscriber'), ['controller' => 'Subscribers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subscriber Events'), ['controller' => 'SubscriberEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subscriber Event'), ['controller' => 'SubscriberEvents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subscriberLinkingEvents form large-9 medium-8 columns content">
    <?= $this->Form->create($subscriberLinkingEvent) ?>
    <fieldset>
        <legend><?= __('Add Subscriber Linking Event') ?></legend>
        <?php
            echo $this->Form->input('subscriber_id', ['options' => $subscribers]);
            echo $this->Form->input('subscriber_event_id', ['options' => $subscriberEvents]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
