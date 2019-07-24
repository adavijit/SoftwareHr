<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Console\ShellDispatcher;
use Cake\ORM\TableRegistry;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */



public function setpassword(){
 

    if($this->request->is('post')){
        // echo "vivbjhvv";
        // ""// exit();
                        //$email = $this->request->query['email'];
                        $email = $_GET['email'];

                        $email=base64_decode($email);
                       //$email=openssl_decrypt($email,"AES-128-ECB","pass");
                        $password = $this->request->getData('password');
                        $test1 = TableRegistry::get('users');
                        $test = $test1->find('all');
                        foreach($test as $temp){
                            if($email==$temp['email']){
                                $id = $temp['id'];
                                //$request->data['password'] = $this->request->getData('password');
                            }
                        }
                        //echo $id;
                        $users_table = TableRegistry::get('users');
                        $users = $users_table->get($id);
                        //$users->email = $email;
                        $users->password = $password;
                            if($users_table->save($users)){
                            $this->Flash->success(__('The user has been saved.'));
                            $this->setAction('login');
                        } 
                        else {
                            $users_table = TableRegistry::get('users')->find();
                            $users = $users_table->where(['id'=>$id])->first();
                            $this->set('username',$users->username);
                            $this->set('password',$users->password);
                            $this->set('id',$id);
                        }
        
          }

    }
    
   




    ////////
    public $components = array("Email");
    public function forget()
    {   
        if($this->request->is('post')){
            
            $email= $this->request->getData('email');
            $encodedEmail=base64_encode($email);
            //$encrypted_string=openssl_encrypt($email,"AES-128-ECB","pass");
            //$encrypted_text = mcrypt_ecb(MCRYPT_DES, "key_value", $email, MCRYPT_ENCRYPT); 
            $test=$this->Users->find('all');
            foreach($test as $temp){
         if($temp['email']==$email)
         {
            $subject = 'Hi buddy, i got a message for you.';
            //$message = 'hafhakf';

                $message = 'http://localhost/HrSoft/users/setpassword';
                $message= $message.'?email='.$encodedEmail;
                echo $message;
                // $mail = $this->Email->send_mail($email, $subject, $message);
                // print_r($mail);
                try {
                    $mail = $this->Email->send_mail($email, $subject, $message);
                    print_r($mail);
                
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
                exit;
             //echo $_SESSION['email'];

         }

     }
   
           
        }

    }
    // public $components = array("Email");
   
    // public function sendEmail($to)
    // {
    //     //$to = 'adavijit.navsoft@gmail.com';
    //    
    // }
    public function login()
    {
        
       
        if($this->request->is('post'))
        {
            
           
            $user= $this->Auth->identify();
            var_dump($user);
            if($user){
                $this->Auth->setUser($user);
                
                                if ($this->request->data['remember_me'] == 1 ) {
                                   
                                    setcookie('p1', $this->request->data['username'], time() + (86400 * 30), "/"); 
                       
                                    setcookie('p5', $this->request->data['password'], time() + (86400 * 30), "/"); 
                                   
                                }
                                else{

                                    setcookie('p1','');
                                    setcookie('p5','');
                                }
                               


                return $this->redirect(['controller'=>'Dashboard','action'=>'index/']);
            }
            $this->Flash->error(_('incorrect'));
            // var_dump($user);
            //exit();
        }
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
