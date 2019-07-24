<?php
namespace App\Controller;

use App\Controller\AppController;
use XLSXReader;
/*use PhpExcel\Classes\PhpExcel;
use PhpExcel\Classes\PhpExcel\IOFactory;*/
// use PhpOffice\PhpExcel\Classes\PhpExcel;
// use PhpOffice\PhpExcel\Classes\PhpExcel\IOFactory;
// use phpoffice\phpexcel\Classes\PHPExcel;
// use phpoffice\phpexcel\Classes\PHPExcel\IOFactory;


// Error reporting
//require ('Classes/PHPExcel.php');
//require ('Classes/PHPExcel/IOFactory.php');
//require_once(ROOT.DS.'vendor'.DS.'PHPExcel-1.8.2/Classes'.DS.'PHPExcel.php');
//require_once(ROOT.DS.'vendor'.DS.'PHPExcel-1.8.2/Classes/PHPExcel'.DS.'PHPExcel.php');
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
 
// Path to PHPExcel classes

//require_once 'phpoffice/phpexcel';
// require './PHPExcel-1.8.2/Classes/PHPExcel.php';
//require './PHPExcel-1.8.2/Classes/PHPExcel/IOFactory.php';
 


/**
 * Fileuploadrecord Controller
 *
 * @property \App\Model\Table\FileuploadrecordTable $Fileuploadrecord
 *
 * @method \App\Model\Entity\Fileuploadrecord[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */



class FileuploadrecordController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index($id = null)
    {
        $fileuploadrecord = $this->paginate($this->Fileuploadrecord);

        $this->set(compact('fileuploadrecord'));
    }
    public function viewattendancelist()
    {

    }

    /**
     * View method
     *
     * @param string|null $id Fileuploadrecord id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fileuploadrecord = $this->Fileuploadrecord->get($id, [
            'contain' => []
        ]);

        $this->set('fileuploadrecord', $fileuploadrecord);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function time_format($the_value){
        //$the_value = $arr[7];
                        $total = $the_value * 24; //multiply by the 24 hours
                        $hours = floor($total); //Gets the natural number part
                        $minute_fraction = $total - $hours; //Now has only the decimal part
                        $minutes = $minute_fraction * 60; //Get the number of minutes
                        $display = $hours . ":" . $minutes;
                        return $display;
    }

    public function add()
    {
        
        require('XLSXReader.php');
        $fileuploadrecord = $this->Fileuploadrecord->newEntity();
        if ($this->request->is('post')) {

                                        $fileuploadrecord = $this->Fileuploadrecord->patchEntity($fileuploadrecord, $this->request->getData());
                                        $mySheet = $this->request->getData()['file']['name'];
                                        $myTmp = $this->request->getData()['file']['tmp_name'];
                                        $mydt= $this->request->getData('dtOfUpload');
                                        $myExt = substr(strrchr($mySheet,"."),1);
                                        $myPath = "upload/".$mySheet;
                                        if(move_uploaded_file($myTmp,WWW_ROOT.$myPath)){
                                            $fileuploadrecord->att_sheetPath = $myPath;
                                            $fileuploadrecord->att_sheetName = $mySheet;

                                        }

                                        $conn=mysqli_connect('localhost','root','','hr_software');           
                                    //data saved in fileuploadrecord table
                                        $newDate = date("Y-m-d", strtotime($mydt));
                                        $fileuploadrecord->dtOfUpload = $newDate;
                                        
                                        if ($this->Fileuploadrecord->save($fileuploadrecord)) {
                                            $this->Flash->success(__('The fileuploadrecord has been saved.'));
                                            
                                            $this->Flash->success(__('data saved in attendance'));
                                            //return $this->redirect(['controller'=>'Fileuploadrecord','action' => '/index']);
                                        }
                                        $this->Flash->error(__('The fileuploadrecord could not be saved. Please, try again.'));
                                    
                                    $conn=mysqli_connect('localhost','root','','hr_software');                                   
                                    $sql=mysqli_query($conn,"SELECT id FROM fileuploadrecord ORDER BY id DESC LIMIT 1");
                                    $max=0;
                                    foreach($sql as $test)
                                        {
                                            $max=$test['id'];
                                            
                                        }
                            // echo $max;
                                    $xlsx = new XLSXReader($myTmp);
                                    $data = $xlsx->getSheetData('Sheet1');
                                    $a=0;
                                    foreach($data as $temp){
                                                            $arr = array();
                                                                    if($a<=3)
                                                            {
                                                                $a++;
                                                                continue;
                                                            }
                                                            foreach($temp as $test){
                                                                    array_push($arr,$test);
                                                            }
                                                            //print_r($arr);
                                                                    $empId=$arr[0];
                                                                    $empName=$arr[1];
                                                                    $Att_Date=date("Y-m-d",mktime(0,0,0,1,$arr[2]-1,1900));    
                                                                    $InTime=$this->time_format($arr[3]);
                                                                    $OutTime=$this->time_format($arr[4]);
                                                                    $Shift=$arr[5];
                                                                    $S_InTime=$this->time_format($arr[6]);
                                                                    $S_OutTime = $this->time_format($arr[7]); 
                                                                    $WorkDurr=$this->time_format($arr[8]);
                                                                    $OT=$this->time_format($arr[9]);
                                                                    $TotDurr=$this->time_format($arr[10]);
                                                                    $LateBy=$this->time_format($arr[11]);
                                                                    $EarlyGoingBy=$this->time_format($arr[12]);
                                                                    $Att_Status=$arr[13];
                                                                    $Punch_Records=$arr[14];
                                                                    //echo $max;
                                                                    $query = "INSERT INTO attendancerecord(empId,empName,Att_Date,InTime,OutTime,Shift,S_InTime,S_OutTime,WorkDurr,OT,TotDurr,LateBy,EarlyGoingBy,Att_Status,Punch_Records,id_fileuploadrecord) VALUES('$empId','$empName','$Att_Date','$InTime','$OutTime','$Shift','$S_InTime','$S_OutTime','$WorkDurr','$OT','$TotDurr','$LateBy','$EarlyGoingBy','$Att_Status','$Punch_Records','$max')";
                                                                    mysqli_query($conn,$query);
                                                             
                                    }
                                    return $this->redirect(['controller'=>'Fileuploadrecord','action' => '/index']);
                                                                 
                                    $this->set(compact('fileuploadrecord'));

    }
    }

        
    /**
     * Edit method
     *
     * @param string|null $id Fileuploadrecord id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fileuploadrecord = $this->Fileuploadrecord->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fileuploadrecord = $this->Fileuploadrecord->patchEntity($fileuploadrecord, $this->request->getData());
            if ($this->Fileuploadrecord->save($fileuploadrecord)) {
                $this->Flash->success(__('The fileuploadrecord has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fileuploadrecord could not be saved. Please, try again.'));
        }
        $this->set(compact('fileuploadrecord'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fileuploadrecord id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $fileuploadrecord = $this->Fileuploadrecord->get($id);
    //     if ($this->Fileuploadrecord->delete($fileuploadrecord)) {
    //         $this->Flash->success(__('The fileuploadrecord has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The fileuploadrecord could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }

    
}
