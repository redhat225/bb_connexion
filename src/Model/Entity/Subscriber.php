<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subscriber Entity
 *
 * @property int $id
 * @property string $subscriber_name
 * @property string $subscriber_email
 * @property string $subscriber_tel
 * @property string $subscriber_prefix
 * @property string $subscriber_job
 * @property string $susbcriber_kind
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\SubscriberLinkingEvent[] $subscriber_linking_events
 */
class Subscriber extends Entity
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
