<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
// App::import('Controller', 'Pages');

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
    public $paginate = [        
        'limit' => 10,
        
    ];
    public function index()
    {
        $reqLeave = $this->paginate($this->ReqLeave);

        $this->set(compact('reqLeave'));
    }

    public function remove()
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
            // echo "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
            $reqLeave = $this->ReqLeave->patchEntity($reqLeave, $this->request->getData());
            if($reqLeave->empId==0||$reqLeave->ending_date==Null
                ||$reqLeave->starting_date==Null||$reqLeave->department==Null
                ||$reqLeave->designationId==0||$reqLeave->no_of_day_requested==0
                ||$reqLeave->leave_type==Null||$reqLeave->leave_year==0
                ||$reqLeave->fullday_half==Null||$reqLeave->reason==NULL
                ||$reqLeave->supervisor_name==Null)
            {
                $this->Flash->error(__('Enter All Field Properly'));
            }
            else{

            
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
                $empId = $this->request->getData('empId');
                $leave_year = $this->request->getData('leave_year');
                
                $reqLeave->leave_year= $leave_year;
                // echo  $reqLeave->leave_year;
                // $name = $this->request->getData('emp_name');
                $test1 = TableRegistry::get('emp_general_info');
                $test = $test1->find('all');
                foreach($test as $temp){
                    if($empId==$temp['empId'] ){
                    
                        $reqLeave->empId = $temp['empId'];
                        $reqLeave->emp_name=  $temp['empName'];
                    
                    }
                }
                $test3 = TableRegistry::get('req_leave');
                $tr = TableRegistry::get('non_req_leave');
                $trFind= $tr->find('all');
                $test4 = $test3->find('all');
                $count=0;
                $days =$this->request->getData('no_of_day_requested');
                foreach($test4 as $temp4){

                    if($empId==$temp4['empId'] && $temp4['balance_leave']<$days){
                        // echo "days xxxxxxxx"."$days"."balance xxxxxxxxxx"."$temp4[balance_leave]";
                        $count=1;
                        break;
                    }
                    else{
                        // echo "days yyyyyyyy"."$days"."balance yyyyyyyy"."$temp4[balance_leave]";
                        $count=0;
                    }
                }
                if($count==0)
                {
                    foreach($trFind as $tempp)
                    {
                        
                        if($empId==$tempp['empId'] && $tempp['balance_leave']<$days){
                            // echo "days zzzzzzzz"."$days"."balance zzzzzzzz"."$tempp[balance_leave]";
                            $count=1;
                            break;
                        }
                        else{
                            // echo "days aaaaaaaaa"."$days"."balance zzzzzzzz"."$tempp[balance_leave]";
                            $count=0;

                        }
                    }
                }
                if($count==1){
                    $this->Flash->error(__('Not enough leave left'));

                        return $this->redirect(['action' => 'index']);
                }
                elseif($count==0){
                    if ($this->ReqLeave->save($reqLeave)) {
                            $this->Flash->success(__('The req leave has been saved.'));
            
                            return $this->redirect(['action' => 'index']);
                        }
                }
            //  $this->Flash->error(__('The req leave could not be saved. Please, try again.'));
            }
            $this->set(compact('reqLeave'));
        }
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
        $Pages = new PagesController;
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
            $empId = $this->request->getData('empId');
            // $name = $this->request->getData('emp_name');
            $test1 = TableRegistry::get('emp_general_info');
            $test = $test1->find('all');
            foreach($test as $temp){
                if($empId==$temp['empId'] ){
                    // echo "xxxxxxxxxx";
                    $reqLeave->empId = $temp['empId'];
                    $reqLeave->emp_name=  $temp['empName'];
                    //$request->data['password'] = $this->request->getData('password');
                }
            }
            if(strtolower($reqLeave->approval_states)=="active" ){
                $reqLeave->approval_states = "Done";            
                if ($this->ReqLeave->save($reqLeave)) {
                    $this->Flash->success(__('The req leave has been saved.'));

                    return $this->redirect( ['controller' => 'Pages','action' => 'index','id'=>$reqLeave->empId]);
                }
            }
            else if(strtolower($reqLeave->approval_states)=="remove" ){
                if ($this->ReqLeave->save($reqLeave)) {
                    $this->Flash->success(__('The req leave has been saved.'));

                    return $this->redirect( ['controller' => 'Pages','action' => 'index1','id'=>$reqLeave->empId]);
                }
            }  
            else{
                if ($this->ReqLeave->save($reqLeave)) {
                    $this->Flash->success(__('The req leave has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
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

        $reqLeave = $this->ReqLeave->get($id);
        if ($this->ReqLeave->delete($reqLeave)) {
            $this->Flash->success(__('The req leave has been deleted.'));
        } else {
            $this->Flash->error(__('The req leave could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function edit1($id = null)
    {
        // $this->request->allowMethod(['post', 'delete']);
        $reqLeave = $this->ReqLeave->get($id);
       
            $this->Flash->error(__("Can't edit. Leave Already approved."));

        return $this->redirect(['action' => 'index']);
    }
    public function download($id = null)
    {
        // $this->request->allowMethod(['post', 'delete']);
        $reqLeave = $this->ReqLeave->get($id);
       
            $this->Flash->error(__("No file available"));

        return $this->redirect(['action' => 'index']);
    }
}
