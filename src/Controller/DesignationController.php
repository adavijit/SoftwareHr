<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Designation Controller
 *
 * @property \App\Model\Table\DesignationTable $Designation
 *
 * @method \App\Model\Entity\Designation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DesignationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $designation = $this->paginate($this->Designation);

        $this->set(compact('designation'));
    }

    /**
     * View method
     *
     * @param string|null $id Designation id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $designation = $this->Designation->get($id, [
            'contain' => []
        ]);

        $this->set('designation', $designation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $designation = $this->Designation->newEntity();
        if ($this->request->is('post')) {
            $designation = $this->Designation->patchEntity($designation, $this->request->getData());
            if ($this->Designation->save($designation)) {
                $this->Flash->success(__('The designation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The designation could not be saved. Please, try again.'));
        }
        $this->set(compact('designation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Designation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $designation = $this->Designation->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $designation = $this->Designation->patchEntity($designation, $this->request->getData());
            if ($this->Designation->save($designation)) {
                $this->Flash->success(__('The designation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The designation could not be saved. Please, try again.'));
        }
        $this->set(compact('designation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Designation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $designation = $this->Designation->get($id);
        if ($this->Designation->delete($designation)) {
            $this->Flash->success(__('The designation has been deleted.'));
        } else {
            $this->Flash->error(__('The designation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
