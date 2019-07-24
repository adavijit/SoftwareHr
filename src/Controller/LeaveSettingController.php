<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * LeaveSetting Controller
 *
 * @property \App\Model\Table\LeaveSettingTable $LeaveSetting
 *
 * @method \App\Model\Entity\LeaveSetting[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LeaveSettingController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $leaveSetting = $this->paginate($this->LeaveSetting);

        $this->set(compact('leaveSetting'));
        
    }

    /**
     * View method
     *
     * @param string|null $id Leave Setting id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $leaveSetting = $this->LeaveSetting->get($id, [
            'contain' => []
        ]);

        $this->set('leaveSetting', $leaveSetting);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $leaveSetting = $this->LeaveSetting->newEntity();
        if ($this->request->is('post')) {
            $leaveSetting = $this->LeaveSetting->patchEntity($leaveSetting, $this->request->getData());
            
            // $xx = $this->request->getData('id');
            // echo $xx;
            // var_dump($leaveSetting);
            $myDt1 = $this->request->getData('starting_date');
            $myDt2 = $this->request->getData('ending_date');
            $strtDate = date("Y-m-d", strtotime($myDt1));
            $leaveSetting->starting_date = $strtDate;
            $endDate = date("Y-m-d", strtotime($myDt2));
            $leaveSetting->ending_date = $endDate;
            if ($this->LeaveSetting->save($leaveSetting)) {
                echo "test";
                $this->Flash->success(__('The leave setting has been saved.'));

                return $this->redirect(['action' => '/index']);
            }
            $this->Flash->error(__('The leave setting could not be saved. Please, try again.'));
        }
        $this->set(compact('leaveSetting'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Leave Setting id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $leaveSetting = $this->LeaveSetting->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leaveSetting = $this->LeaveSetting->patchEntity($leaveSetting, $this->request->getData());
            $myDt1 = $this->request->getData('starting_date');
            $myDt2 = $this->request->getData('ending_date');
            $strtDate = date("Y-m-d", strtotime($myDt1));
            $leaveSetting->starting_date = $strtDate;
            $endDate = date("Y-m-d", strtotime($myDt2));
            $leaveSetting->ending_date = $endDate;
            if ($this->LeaveSetting->save($leaveSetting)) {
                $this->Flash->success(__('The leave setting has been saved.'));

                return $this->redirect(['action' => '/index']);
            }
            $this->Flash->error(__('The leave setting could not be saved. Please, try again.'));
        }
        $this->set(compact('leaveSetting'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Leave Setting id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        //$this->request->allowMethod(['post', 'delete']);
        $leaveSetting = $this->LeaveSetting->get($id);
        if ($this->LeaveSetting->delete($leaveSetting)) {
            $this->Flash->success(__('The leave setting has been deleted.'));
        } else {
            $this->Flash->error(__('The leave setting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => '/index']);
    }

    public function holiday()
    {
        // $this-> autoRender=false;
        echo "abs";
        $con = mysqli_connect("localhost","root","","hr_software");
        if (!$con){
        die('Could not connect: ' . mysql_error());
        }

        if ($this->request->is('post')) {
            $l_year=$this->request->getData('leave_year');
            
            // $g_name=mysqli_real_escape_string($con,$_POST['group_name']);
            // $holiday_name=mysqli_real_escape_string($con,$_POST['h_name']);
            // $s_date=mysqli_real_escape_string($con,$_POST['starting_date']);
            // $e_date=mysqli_real_escape_string($con,$_POST['ending_date']);
        
            echo $l_year;
            echo "sad";
        }

    //     $sql="INSERT INTO set_holiday (leave_year, group_name, h_name,starting_date,ending_date)
    //     VALUES ('$l_year','$g_name','$holiday_name','$s_date','$e_date')";
    //     if ($con->query($con,$sql) === TRUE) {
    //         echo "New record created successfully";
    //     } else {
    //         echo "Error: " . $sql . "<br>" . $con->error;
    //     }
    // }
    //     $con->close();
    //     return $this->redirect(['action' => '/add']);


    }
    public function add1()
        {
    
        }
}

