<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Attendancerecord Controller
 *
 * @property \App\Model\Table\AttendancerecordTable $Attendancerecord
 *
 * @method \App\Model\Entity\Attendancerecord[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AttendancerecordController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $attendancerecord = $this->paginate($this->Attendancerecord);

        $this->set(compact('attendancerecord'));
    }

    /**
     * View method
     *
     * @param string|null $id Attendancerecord id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attendancerecord = $this->Attendancerecord->get($id, [
            'contain' => []
        ]);

        $this->set('attendancerecord', $attendancerecord);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $attendancerecord = $this->Attendancerecord->newEntity();
        if ($this->request->is('post')) {
            $attendancerecord = $this->Attendancerecord->patchEntity($attendancerecord, $this->request->getData());
            if ($this->Attendancerecord->save($attendancerecord)) {
                $this->Flash->success(__('The attendancerecord has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendancerecord could not be saved. Please, try again.'));
        }
        $this->set(compact('attendancerecord'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Attendancerecord id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attendancerecord = $this->Attendancerecord->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attendancerecord = $this->Attendancerecord->patchEntity($attendancerecord, $this->request->getData());
            if ($this->Attendancerecord->save($attendancerecord)) {
                $this->Flash->success(__('The attendancerecord has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendancerecord could not be saved. Please, try again.'));
        }
        $this->set(compact('attendancerecord'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Attendancerecord id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attendancerecord = $this->Attendancerecord->get($id);
        if ($this->Attendancerecord->delete($attendancerecord)) {
            $this->Flash->success(__('The attendancerecord has been deleted.'));
        } else {
            $this->Flash->error(__('The attendancerecord could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
