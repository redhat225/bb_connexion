<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SubscriberLinkingEvent Entity
 *
 * @property int $id
 * @property int $subscriber_id
 * @property int $subscriber_event_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Subscriber $subscriber
 * @property \App\Model\Entity\SubscriberEvent $subscriber_event
 */
class SubscriberLinkingEvent extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
