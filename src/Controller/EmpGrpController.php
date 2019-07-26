<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmpGrp Controller
 *
 * @property \App\Model\Table\EmpGrpTable $EmpGrp
 *
 * @method \App\Model\Entity\EmpGrp[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmpGrpController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SetHoliday']
        ];
        $empGrp = $this->paginate($this->EmpGrp);

        $this->set(compact('empGrp'));
    }

    /**
     * View method
     *
     * @param string|null $id Emp Grp id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empGrp = $this->EmpGrp->get($id, [
            'contain' => ['SetHoliday']
        ]);

        $this->set('empGrp', $empGrp);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empGrp = $this->EmpGrp->newEntity();
        if ($this->request->is('post')) {
            $empGrp = $this->EmpGrp->patchEntity($empGrp, $this->request->getData());
            if ($this->EmpGrp->save($empGrp)) {
                $this->Flash->success(__('The emp grp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emp grp could not be saved. Please, try again.'));
        }
        $setHoliday = $this->EmpGrp->SetHoliday->find('list', ['limit' => 200]);
        $this->set(compact('empGrp', 'setHoliday'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Emp Grp id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empGrp = $this->EmpGrp->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empGrp = $this->EmpGrp->patchEntity($empGrp, $this->request->getData());
            if ($this->EmpGrp->save($empGrp)) {
                $this->Flash->success(__('The emp grp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emp grp could not be saved. Please, try again.'));
        }
        $setHoliday = $this->EmpGrp->SetHoliday->find('list', ['limit' => 200]);
        $this->set(compact('empGrp', 'setHoliday'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Emp Grp id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empGrp = $this->EmpGrp->get($id);
        if ($this->EmpGrp->delete($empGrp)) {
            $this->Flash->success(__('The emp grp has been deleted.'));
        } else {
            $this->Flash->error(__('The emp grp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
