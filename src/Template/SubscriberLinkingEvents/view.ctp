<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subscriber Linking Event'), ['action' => 'edit', $subscriberLinkingEvent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subscriber Linking Event'), ['action' => 'delete', $subscriberLinkingEvent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriberLinkingEvent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subscriber Linking Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subscriber Linking Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subscribers'), ['controller' => 'Subscribers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subscriber'), ['controller' => 'Subscribers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subscriber Events'), ['controller' => 'SubscriberEvents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subscriber Event'), ['controller' => 'SubscriberEvents', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subscriberLinkingEvents view large-9 medium-8 columns content">
    <h3><?= h($subscriberLinkingEvent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subscriber') ?></th>
            <td><?= $subscriberLinkingEvent->has('subscriber') ? $this->Html->link($subscriberLinkingEvent->subscriber->id, ['controller' => 'Subscribers', 'action' => 'view', $subscriberLinkingEvent->subscriber->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subscriber Event') ?></th>
            <td><?= $subscriberLinkingEvent->has('subscriber_event') ? $this->Html->link($subscriberLinkingEvent->subscriber_event->id, ['controller' => 'SubscriberEvents', 'action' => 'view', $subscriberLinkingEvent->subscriber_event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subscriberLinkingEvent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($subscriberLinkingEvent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($subscriberLinkingEvent->modified) ?></td>
        </tr>
    </table>
</div>
