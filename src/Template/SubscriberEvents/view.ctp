<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subscriber Event'), ['action' => 'edit', $subscriberEvent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subscriber Event'), ['action' => 'delete', $subscriberEvent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriberEvent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subscriber Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subscriber Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subscriber Linking Events'), ['controller' => 'SubscriberLinkingEvents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subscriber Linking Event'), ['controller' => 'SubscriberLinkingEvents', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subscriberEvents view large-9 medium-8 columns content">
    <h3><?= h($subscriberEvent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subscriberEvent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event Begin') ?></th>
            <td><?= h($subscriberEvent->event_begin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event End') ?></th>
            <td><?= h($subscriberEvent->event_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event Deleted') ?></th>
            <td><?= h($subscriberEvent->event_deleted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($subscriberEvent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($subscriberEvent->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Event Full Description') ?></h4>
        <?= $this->Text->autoParagraph(h($subscriberEvent->event_full_description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Subscriber Linking Events') ?></h4>
        <?php if (!empty($subscriberEvent->subscriber_linking_events)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Subscriber Id') ?></th>
                <th scope="col"><?= __('Subscriber Event Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subscriberEvent->subscriber_linking_events as $subscriberLinkingEvents): ?>
            <tr>
                <td><?= h($subscriberLinkingEvents->id) ?></td>
                <td><?= h($subscriberLinkingEvents->subscriber_id) ?></td>
                <td><?= h($subscriberLinkingEvents->subscriber_event_id) ?></td>
                <td><?= h($subscriberLinkingEvents->created) ?></td>
                <td><?= h($subscriberLinkingEvents->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SubscriberLinkingEvents', 'action' => 'view', $subscriberLinkingEvents->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SubscriberLinkingEvents', 'action' => 'edit', $subscriberLinkingEvents->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SubscriberLinkingEvents', 'action' => 'delete', $subscriberLinkingEvents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriberLinkingEvents->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
