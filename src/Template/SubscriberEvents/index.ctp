<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subscriber Event'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subscriber Linking Events'), ['controller' => 'SubscriberLinkingEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subscriber Linking Event'), ['controller' => 'SubscriberLinkingEvents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subscriberEvents index large-9 medium-8 columns content">
    <h3><?= __('Subscriber Events') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_begin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subscriberEvents as $subscriberEvent): ?>
            <tr>
                <td><?= $this->Number->format($subscriberEvent->id) ?></td>
                <td><?= h($subscriberEvent->event_begin) ?></td>
                <td><?= h($subscriberEvent->event_end) ?></td>
                <td><?= h($subscriberEvent->event_deleted) ?></td>
                <td><?= h($subscriberEvent->created) ?></td>
                <td><?= h($subscriberEvent->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subscriberEvent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subscriberEvent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subscriberEvent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriberEvent->id)]) ?>
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
