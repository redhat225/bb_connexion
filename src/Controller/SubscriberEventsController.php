<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SubscriberEvents Controller
 *
 * @property \App\Model\Table\SubscriberEventsTable $SubscriberEvents
 */
class SubscriberEventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $subscriberEvents = $this->paginate($this->SubscriberEvents);

        $this->set(compact('subscriberEvents'));
        $this->set('_serialize', ['subscriberEvents']);
    }

    /**
     * View method
     *
     * @param string|null $id Subscriber Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subscriberEvent = $this->SubscriberEvents->get($id, [
            'contain' => ['SubscriberLinkingEvents']
        ]);

        $this->set('subscriberEvent', $subscriberEvent);
        $this->set('_serialize', ['subscriberEvent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subscriberEvent = $this->SubscriberEvents->newEntity();
        if ($this->request->is('post')) {
            $subscriberEvent = $this->SubscriberEvents->patchEntity($subscriberEvent, $this->request->data);
            if ($this->SubscriberEvents->save($subscriberEvent)) {
                $this->Flash->success(__('The subscriber event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The subscriber event could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('subscriberEvent'));
        $this->set('_serialize', ['subscriberEvent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subscriber Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subscriberEvent = $this->SubscriberEvents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subscriberEvent = $this->SubscriberEvents->patchEntity($subscriberEvent, $this->request->data);
            if ($this->SubscriberEvents->save($subscriberEvent)) {
                $this->Flash->success(__('The subscriber event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The subscriber event could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('subscriberEvent'));
        $this->set('_serialize', ['subscriberEvent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subscriber Event id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subscriberEvent = $this->SubscriberEvents->get($id);
        if ($this->SubscriberEvents->delete($subscriberEvent)) {
            $this->Flash->success(__('The subscriber event has been deleted.'));
        } else {
            $this->Flash->error(__('The subscriber event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
