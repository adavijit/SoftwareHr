<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ReqLeave Controller
 *
 * @property \App\Model\Table\ReqLeaveTable $ReqLeave
 *
 * @method \App\Model\Entity\ReqLeave[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReqLeaveController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $reqLeave = $this->paginate($this->ReqLeave);

        $this->set(compact('reqLeave'));
    }

    /**
     * View method
     *
     * @param string|null $id Req Leave id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reqLeave = $this->ReqLeave->get($id, [
            'contain' => []
        ]);

        $this->set('reqLeave', $reqLeave);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reqLeave = $this->ReqLeave->newEntity();
        if ($this->request->is('post')) {
            $reqLeave = $this->ReqLeave->patchEntity($reqLeave, $this->request->getData());
            $myName = $this->request->getData()['file']['name'];
            $mytmp = $this->request -> getData()['file']['tmp_name'];

            $myext = substr(strrchr($myName,"."),1);

            $mypath = "upload/".$myName;

            if(move_uploaded_file($mytmp,WWW_ROOT.$mypath)){
                $reqLeave->documentPath = $mypath;
                $reqLeave->documentName = $myName;
            }
            $myDt1 = $this->request->getData('starting_date');
            $myDt2 = $this->request->getData('ending_date');
            $strtDate = date("Y-m-d", strtotime($myDt1));
            $reqLeave->starting_date = $strtDate;
            $endDate = date("Y-m-d", strtotime($myDt2));
            $reqLeave->ending_date = $endDate;
            // var_dump($reqLeave);
            if ($this->ReqLeave->save($reqLeave)) {
               // $this->Flash->success(__('The req leave has been saved.'));

                return $this->redirect(['action' => '/index']);
            }
          //  $this->Flash->error(__('The req leave could not be saved. Please, try again.'));
        }
        $this->set(compact('reqLeave'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Req Leave id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reqLeave = $this->ReqLeave->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reqLeave = $this->ReqLeave->patchEntity($reqLeave, $this->request->getData());
            $myName = $this->request->getData()['file']['name'];

            $mytmp = $this->request -> getData()['file']['tmp_name'];

            $myext = substr(strrchr($myName,"."),1);

            $mypath = "upload/".$myName;

            if(move_uploaded_file($mytmp,WWW_ROOT.$mypath)){
                $reqLeave->documentPath = $mypath;
                $reqLeave->documentName = $myName;
            }
            $st = $this->request->getData('approval_states');
            $myDt1 = $this->request->getData('starting_date');
            $myDt2 = $this->request->getData('ending_date');
            $strtDate = date("Y-m-d", strtotime($myDt1));
            $reqLeave->starting_date = $strtDate;
            $endDate = date("Y-m-d", strtotime($myDt2));
            $reqLeave->ending_date = $endDate;
            $reqLeave->approval_states = $st;
            //var_dump($reqLeave);
            if ($this->ReqLeave->save($reqLeave)) {
                $this->Flash->success(__('The req leave has been saved.'));

                return $this->redirect(['action' => '/index']);
            }
            $this->Flash->error(__('The req leave could not be saved. Please, try again.'));
        }
        $this->set(compact('reqLeave'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Req Leave id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        // $this->request->allowMethod(['post', 'delete']);
        $reqLeave = $this->ReqLeave->get($id);
        if ($this->ReqLeave->delete($reqLeave)) {
            $this->Flash->success(__('The req leave has been deleted.'));
        } else {
            $this->Flash->error(__('The req leave could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => '/index']);
    }
}
