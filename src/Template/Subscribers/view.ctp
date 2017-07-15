<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subscriber'), ['action' => 'edit', $subscriber->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subscriber'), ['action' => 'delete', $subscriber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriber->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subscribers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subscriber'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subscriber Linking Events'), ['controller' => 'SubscriberLinkingEvents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subscriber Linking Event'), ['controller' => 'SubscriberLinkingEvents', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subscribers view large-9 medium-8 columns content">
    <h3><?= h($subscriber->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subscriber Name') ?></th>
            <td><?= h($subscriber->subscriber_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subscriber Email') ?></th>
            <td><?= h($subscriber->subscriber_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subscriber Tel') ?></th>
            <td><?= h($subscriber->subscriber_tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subscriber Prefix') ?></th>
            <td><?= h($subscriber->subscriber_prefix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subscriber Job') ?></th>
            <td><?= h($subscriber->subscriber_job) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Susbcriber Kind') ?></th>
            <td><?= h($subscriber->susbcriber_kind) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subscriber->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($subscriber->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($subscriber->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Subscriber Linking Events') ?></h4>
        <?php if (!empty($subscriber->subscriber_linking_events)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Subscriber Id') ?></th>
                <th scope="col"><?= __('Subscriber Event Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subscriber->subscriber_linking_events as $subscriberLinkingEvents): ?>
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
