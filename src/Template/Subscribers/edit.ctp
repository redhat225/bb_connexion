<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subscriber->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subscriber->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subscribers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subscriber Linking Events'), ['controller' => 'SubscriberLinkingEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subscriber Linking Event'), ['controller' => 'SubscriberLinkingEvents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subscribers form large-9 medium-8 columns content">
    <?= $this->Form->create($subscriber) ?>
    <fieldset>
        <legend><?= __('Edit Subscriber') ?></legend>
        <?php
            echo $this->Form->input('subscriber_name');
            echo $this->Form->input('subscriber_email');
            echo $this->Form->input('subscriber_tel');
            echo $this->Form->input('subscriber_prefix');
            echo $this->Form->input('subscriber_job');
            echo $this->Form->input('susbcriber_kind');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
