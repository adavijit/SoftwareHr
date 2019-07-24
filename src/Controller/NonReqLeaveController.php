<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NonReqLeave Controller
 *
 * @property \App\Model\Table\NonReqLeaveTable $NonReqLeave
 *
 * @method \App\Model\Entity\NonReqLeave[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NonReqLeaveController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $nonReqLeave = $this->paginate($this->NonReqLeave);

        $this->set(compact('nonReqLeave'));
    }

    /**
     * View method
     *
     * @param string|null $id Non Req Leave id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nonReqLeave = $this->NonReqLeave->get($id, [
            'contain' => []
        ]);

        $this->set('nonReqLeave', $nonReqLeave);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nonReqLeave = $this->NonReqLeave->newEntity();
        if ($this->request->is('post')) {
            $nonReqLeave = $this->NonReqLeave->patchEntity($nonReqLeave, $this->request->getData());
            $myName = $this->request->getData()['file']['name'];
            $mytmp = $this->request -> getData()['file']['tmp_name'];

            $myext = substr(strrchr($myName,"."),1);

            $mypath = "upload/".$myName;

            if(move_uploaded_file($mytmp,WWW_ROOT.$mypath)){
                $nonReqLeave->documentPath = $mypath;
                $nonReqLeave->documentName = $myName;
            }
            $myDt1 = $this->request->getData('starting_date');
            $myDt2 = $this->request->getData('ending_date');
            $strtDate = date("Y-m-d", strtotime($myDt1));
            $nonReqLeave->starting_date = $strtDate;
            $endDate = date("Y-m-d", strtotime($myDt2));
            $nonReqLeave->ending_date = $endDate;
            if ($this->NonReqLeave->save($nonReqLeave)) {
                $this->Flash->success(__('The non req leave has been saved.'));

                return $this->redirect(['action' => '/index']);
            }
            $this->Flash->error(__('The non req leave could not be saved. Please, try again.'));
        }
        $this->set(compact('nonReqLeave'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Non Req Leave id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nonReqLeave = $this->NonReqLeave->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nonReqLeave = $this->NonReqLeave->patchEntity($nonReqLeave, $this->request->getData());
            $myName = $this->request->getData()['file']['name'];

            $mytmp = $this->request -> getData()['file']['tmp_name'];

            $myext = substr(strrchr($myName,"."),1);

            $mypath = "upload/".$myName;

            if(move_uploaded_file($mytmp,WWW_ROOT.$mypath)){
                $nonReqLeave->documentPath = $mypath;
                $nonReqLeave->documentName = $myName;
            }
            
            $myDt1 = $this->request->getData('starting_date');
            $myDt2 = $this->request->getData('ending_date');
            $strtDate = date("Y-m-d", strtotime($myDt1));
            $nonReqLeave->starting_date = $strtDate;
            $endDate = date("Y-m-d", strtotime($myDt2));
            $nonReqLeave->ending_date = $endDate;
            if ($this->NonReqLeave->save($nonReqLeave)) {
                $this->Flash->success(__('The non req leave has been saved.'));

                return $this->redirect(['action' => '/index']);
            }
            $this->Flash->error(__('The non req leave could not be saved. Please, try again.'));
        }
        $this->set(compact('nonReqLeave'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Non Req Leave id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nonReqLeave = $this->NonReqLeave->get($id);
        if ($this->NonReqLeave->delete($nonReqLeave)) {
            $this->Flash->success(__('The non req leave has been deleted.'));
        } else {
            $this->Flash->error(__('The non req leave could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
