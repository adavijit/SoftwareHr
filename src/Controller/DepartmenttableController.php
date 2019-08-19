<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Departmenttable Controller
 *
 * @property \App\Model\Table\DepartmenttableTable $Departmenttable
 *
 * @method \App\Model\Entity\Departmenttable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartmenttableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $departmenttable = $this->paginate($this->Departmenttable);

        $this->set(compact('departmenttable'));
    }

    /**
     * View method
     *
     * @param string|null $id Departmenttable id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departmenttable = $this->Departmenttable->get($id, [
            'contain' => []
        ]);

        $this->set('departmenttable', $departmenttable);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departmenttable = $this->Departmenttable->newEntity();
        if ($this->request->is('post')) {
            $departmenttable = $this->Departmenttable->patchEntity($departmenttable, $this->request->getData());
            if ($this->Departmenttable->save($departmenttable)) {
                $this->Flash->success(__('The departmenttable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departmenttable could not be saved. Please, try again.'));
        }
        $this->set(compact('departmenttable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Departmenttable id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departmenttable = $this->Departmenttable->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departmenttable = $this->Departmenttable->patchEntity($departmenttable, $this->request->getData());
            if ($this->Departmenttable->save($departmenttable)) {
                $this->Flash->success(__('The departmenttable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departmenttable could not be saved. Please, try again.'));
        }
        $this->set(compact('departmenttable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Departmenttable id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departmenttable = $this->Departmenttable->get($id);
        if ($this->Departmenttable->delete($departmenttable)) {
            $this->Flash->success(__('The departmenttable has been deleted.'));
        } else {
            $this->Flash->error(__('The departmenttable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
