<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SubscriberEvent Entity
 *
 * @property int $id
 * @property string $event_full_description
 * @property \Cake\I18n\Time $event_begin
 * @property \Cake\I18n\Time $event_end
 * @property \Cake\I18n\Time $event_deleted
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\SubscriberLinkingEvent[] $subscriber_linking_events
 */
class SubscriberEvent extends Entity
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
