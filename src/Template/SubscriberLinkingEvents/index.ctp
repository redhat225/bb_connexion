<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subscriber Linking Event'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subscribers'), ['controller' => 'Subscribers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subscriber'), ['controller' => 'Subscribers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subscriber Events'), ['controller' => 'SubscriberEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subscriber Event'), ['controller' => 'SubscriberEvents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subscriberLinkingEvents index large-9 medium-8 columns content">
    <h3><?= __('Subscriber Linking Events') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subscriber_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subscriber_event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subscriberLinkingEvents as $subscriberLinkingEvent): ?>
            <tr>
                <td><?= $this->Number->format($subscriberLinkingEvent->id) ?></td>
                <td><?= $subscriberLinkingEvent->has('subscriber') ? $this->Html->link($subscriberLinkingEvent->subscriber->id, ['controller' => 'Subscribers', 'action' => 'view', $subscriberLinkingEvent->subscriber->id]) : '' ?></td>
                <td><?= $subscriberLinkingEvent->has('subscriber_event') ? $this->Html->link($subscriberLinkingEvent->subscriber_event->id, ['controller' => 'SubscriberEvents', 'action' => 'view', $subscriberLinkingEvent->subscriber_event->id]) : '' ?></td>
                <td><?= h($subscriberLinkingEvent->created) ?></td>
                <td><?= h($subscriberLinkingEvent->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subscriberLinkingEvent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subscriberLinkingEvent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subscriberLinkingEvent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriberLinkingEvent->id)]) ?>
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
