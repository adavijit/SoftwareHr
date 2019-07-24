<?php
namespace App\Controller;

   use App\Controller\AppController;
   use Cake\ORM\TableRegistry;
   use Cake\Datasource\ConnectionManager;
   use Cake\Auth\DefaultPasswordHasher;

/**
 * EmpGeneralInfo Controller
 *
 * @property \App\Model\Table\EmpGeneralInfoTable $EmpGeneralInfo
 *
 * @method \App\Model\Entity\EmpGeneralInfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmpGeneralInfoController extends AppController
{
    
    public function initialize()
    {
        parent:: initialize();
        //$this->Auth->allow('index','add');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $empGeneralInfo = $this->paginate($this->EmpGeneralInfo);

        $this->set(compact('empGeneralInfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Emp General Info id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empGeneralInfo = $this->EmpGeneralInfo->get($id, [
            'contain' => []
        ]);

        $this->set('empGeneralInfo', $empGeneralInfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
        $empGeneralInfo = $this->EmpGeneralInfo->newEntity();
        if ($this->request->is('post')) {
            ///////
            $empGeneralInfo = $this->EmpGeneralInfo->patchEntity($empGeneralInfo, $this->request->getData());
            $myName = $this->request->getData()['file']['name'];
            $myName2 = $this->request->getData()['file2']['name'];

            $mytmp = $this->request -> getData()['file']['tmp_name'];
            $mytmp2 = $this->request -> getData()['file2']['tmp_name'];

            $myext = substr(strrchr($myName,"."),1);
            $myext2 = substr(strrchr($myName2,"."),1);

            $mypath = "upload/".$myName.".".$myext;
            $mypath2 = "upload/".$myName2.".".$myext2;

            if(move_uploaded_file($mytmp,WWW_ROOT.$mypath)){
                $empGeneralInfo->photoPath = $mypath;
            }
            if(move_uploaded_file($mytmp2,WWW_ROOT.$mypath2)){
                $empGeneralInfo->documentPath = $mypath2;
            }


            ////////
           
            if ($this->EmpGeneralInfo->save($empGeneralInfo)) {
                $this->Flash->success(__('The emp general info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emp general info could not be saved. Please, try again.'));
        }
        $this->set(compact('empGeneralInfo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Emp General Info id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empGeneralInfo = $this->EmpGeneralInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empGeneralInfo = $this->EmpGeneralInfo->patchEntity($empGeneralInfo, $this->request->getData());
            $myName = $this->request->getData()['file']['name'];
            $myName2 = $this->request->getData()['file2']['name'];

            $mytmp = $this->request -> getData()['file']['tmp_name'];
            $mytmp2 = $this->request -> getData()['file2']['tmp_name'];

            $myext = substr(strrchr($myName,"."),1);
            $myext2 = substr(strrchr($myName2,"."),1);

            $mypath = "upload/".$myName.".".$myext;
            $mypath2 = "upload/".$myName2.".".$myext2;

            if(move_uploaded_file($mytmp,WWW_ROOT.$mypath)){
                $empGeneralInfo->photoPath = $mypath;
            }
            if(move_uploaded_file($mytmp2,WWW_ROOT.$mypath2)){
                $empGeneralInfo->documentPath = $mypath2;
            }

            if ($this->EmpGeneralInfo->save($empGeneralInfo)) {
                $this->Flash->success(__('The emp general info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emp general info could not be saved. Please, try again.'));
        }
        $this->set(compact('empGeneralInfo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Emp General Info id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empGeneralInfo = $this->EmpGeneralInfo->get($id);
        if ($this->EmpGeneralInfo->delete($empGeneralInfo)) {
            $this->Flash->success(__('The emp general info has been deleted.'));
        } else {
            $this->Flash->error(__('The emp general info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
