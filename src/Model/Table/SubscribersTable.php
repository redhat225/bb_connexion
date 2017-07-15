<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Text;
use Cake\ORM\TableRegistry;
use Cake\Mailer\MailerAwareTrait;
use ArrayObject;
/**
 * Subscribers Model
 *
 * @property \Cake\ORM\Association\HasMany $SubscriberLinkingEvents
 *
 * @method \App\Model\Entity\Subscriber get($primaryKey, $options = [])
 * @method \App\Model\Entity\Subscriber newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Subscriber[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subscriber|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subscriber patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Subscriber[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subscriber findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SubscribersTable extends Table
{
    use MailerAwareTrait;
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('subscribers');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('SubscriberLinkingEvents', [
            'foreignKey' => 'subscriber_id'
        ]);

        $this->belongsToMany('SubscriberEvents',[
                    'foreignKey'=>'subscriber_id',
                    'targetForeignKey' => 'subscriber_event_id',
                    'joinTable' => 'subscriber_linking_events'
            ]);
    }

    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options)
    {
        switch($data['state'])
        {
            case 'web_save': 
                $data['subscriber_name'] = strtoupper($data['subscriber_name']);
                $data['subscriber_events']=[
                        ['id'=>$data['subscriber_event_id']]
                ];      
            break;
        }
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('subscriber_name', 'create')
            ->notEmpty('subscriber_name');

        $validator
            ->requirePresence('subscriber_email', 'create')
            ->notEmpty('subscriber_email')
            ->add('subscriber_email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('subscriber_tel', 'create')
            ->notEmpty('subscriber_tel')
            ->add('subscriber_tel', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('subscriber_prefix', 'create')
            ->notEmpty('subscriber_prefix');

        $validator
            ->requirePresence('subscriber_job', 'create')
            ->notEmpty('subscriber_job');

        $validator
            ->allowEmpty('subscriber_kind');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['subscriber_email']));
        $rules->add($rules->isUnique(['subscriber_tel']));

        return $rules;
    }

    public function afterSave($event,$entity,$options)
    {
        if($entity->isNew())
        {
          $this->getMailer('Subscriber')->send('registrationSubscriber',[$entity]);
        }
    }
}
