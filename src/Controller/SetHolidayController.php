<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SetHoliday Controller
 *
 * @property \App\Model\Table\SetHolidayTable $SetHoliday
 *
 * @method \App\Model\Entity\SetHoliday[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SetHolidayController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $setHoliday = $this->paginate($this->SetHoliday);

        $this->set(compact('setHoliday'));
    }

    /**
     * View method
     *
     * @param string|null $id Set Holiday id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $setHoliday = $this->SetHoliday->get($id, [
            'contain' => []
        ]);

        $this->set('setHoliday', $setHoliday);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $setHoliday = $this->SetHoliday->newEntity();
        if ($this->request->is('post')) {
            $setHoliday = $this->SetHoliday->patchEntity($setHoliday, $this->request->getData());
            $myDt1 = $this->request->getData('starting_date');
            $myDt2 = $this->request->getData('ending_date');
            $strtDate = date("Y-m-d", strtotime($myDt1));
            $setHoliday->starting_date = $strtDate;
            $endDate = date("Y-m-d", strtotime($myDt2));
            $setHoliday->ending_date = $endDate;
            if ($this->SetHoliday->save($setHoliday)) {
                $this->Flash->success(__('The set holiday has been saved.'));

                return $this->redirect(['controller'=>'LeaveSetting','action' => 'add']);
            }
            $this->Flash->error(__('The set holiday could not be saved. Please, try again.'));
        }
        $this->set(compact('setHoliday'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Set Holiday id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $setHoliday = $this->SetHoliday->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $setHoliday = $this->SetHoliday->patchEntity($setHoliday, $this->request->getData());
            if ($this->SetHoliday->save($setHoliday)) {
                $this->Flash->success(__('The set holiday has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The set holiday could not be saved. Please, try again.'));
        }
        $this->set(compact('setHoliday'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Set Holiday id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $setHoliday = $this->SetHoliday->get($id);
        if ($this->SetHoliday->delete($setHoliday)) {
            $this->Flash->success(__('The set holiday has been deleted.'));
        } else {
            $this->Flash->error(__('The set holiday could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
