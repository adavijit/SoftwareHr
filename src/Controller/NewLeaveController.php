<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NewLeave Controller
 *
 * @property \App\Model\Table\NewLeaveTable $NewLeave
 *
 * @method \App\Model\Entity\NewLeave[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewLeaveController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $newLeave = $this->paginate($this->NewLeave);

        $this->set(compact('newLeave'));
    }

    /**
     * View method
     *
     * @param string|null $id New Leave id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newLeave = $this->NewLeave->get($id, [
            'contain' => []
        ]);

        $this->set('newLeave', $newLeave);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newLeave = $this->NewLeave->newEntity();
        if ($this->request->is('post')) {
            $newLeave = $this->NewLeave->patchEntity($newLeave, $this->request->getData());
            if ($this->NewLeave->save($newLeave)) {
                $this->Flash->success(__('The new leave has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The new leave could not be saved. Please, try again.'));
        }
        $this->set(compact('newLeave'));
    }

    /**
     * Edit method
     *
     * @param string|null $id New Leave id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newLeave = $this->NewLeave->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newLeave = $this->NewLeave->patchEntity($newLeave, $this->request->getData());
            if ($this->NewLeave->save($newLeave)) {
                $this->Flash->success(__('The new leave has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The new leave could not be saved. Please, try again.'));
        }
        $this->set(compact('newLeave'));
    }

    /**
     * Delete method
     *
     * @param string|null $id New Leave id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newLeave = $this->NewLeave->get($id);
        if ($this->NewLeave->delete($newLeave)) {
            $this->Flash->success(__('The new leave has been deleted.'));
        } else {
            $this->Flash->error(__('The new leave could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
