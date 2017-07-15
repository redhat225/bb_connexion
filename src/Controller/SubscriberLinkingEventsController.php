<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SubscriberLinkingEvents Controller
 *
 * @property \App\Model\Table\SubscriberLinkingEventsTable $SubscriberLinkingEvents
 */
class SubscriberLinkingEventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subscribers', 'SubscriberEvents']
        ];
        $subscriberLinkingEvents = $this->paginate($this->SubscriberLinkingEvents);

        $this->set(compact('subscriberLinkingEvents'));
        $this->set('_serialize', ['subscriberLinkingEvents']);
    }

    /**
     * View method
     *
     * @param string|null $id Subscriber Linking Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subscriberLinkingEvent = $this->SubscriberLinkingEvents->get($id, [
            'contain' => ['Subscribers', 'SubscriberEvents']
        ]);

        $this->set('subscriberLinkingEvent', $subscriberLinkingEvent);
        $this->set('_serialize', ['subscriberLinkingEvent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subscriberLinkingEvent = $this->SubscriberLinkingEvents->newEntity();
        if ($this->request->is('post')) {
            $subscriberLinkingEvent = $this->SubscriberLinkingEvents->patchEntity($subscriberLinkingEvent, $this->request->data);
            if ($this->SubscriberLinkingEvents->save($subscriberLinkingEvent)) {
                $this->Flash->success(__('The subscriber linking event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The subscriber linking event could not be saved. Please, try again.'));
            }
        }
        $subscribers = $this->SubscriberLinkingEvents->Subscribers->find('list', ['limit' => 200]);
        $subscriberEvents = $this->SubscriberLinkingEvents->SubscriberEvents->find('list', ['limit' => 200]);
        $this->set(compact('subscriberLinkingEvent', 'subscribers', 'subscriberEvents'));
        $this->set('_serialize', ['subscriberLinkingEvent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subscriber Linking Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subscriberLinkingEvent = $this->SubscriberLinkingEvents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subscriberLinkingEvent = $this->SubscriberLinkingEvents->patchEntity($subscriberLinkingEvent, $this->request->data);
            if ($this->SubscriberLinkingEvents->save($subscriberLinkingEvent)) {
                $this->Flash->success(__('The subscriber linking event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The subscriber linking event could not be saved. Please, try again.'));
            }
        }
        $subscribers = $this->SubscriberLinkingEvents->Subscribers->find('list', ['limit' => 200]);
        $subscriberEvents = $this->SubscriberLinkingEvents->SubscriberEvents->find('list', ['limit' => 200]);
        $this->set(compact('subscriberLinkingEvent', 'subscribers', 'subscriberEvents'));
        $this->set('_serialize', ['subscriberLinkingEvent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subscriber Linking Event id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subscriberLinkingEvent = $this->SubscriberLinkingEvents->get($id);
        if ($this->SubscriberLinkingEvents->delete($subscriberLinkingEvent)) {
            $this->Flash->success(__('The subscriber linking event has been deleted.'));
        } else {
            $this->Flash->error(__('The subscriber linking event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
