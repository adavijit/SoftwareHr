<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public $components = array("Email");
    // public function index()
    // {
    //     echo "<h1>CakePHP Shell Application</h1>";
    //     exit;
    // }
    public function index()
    {
        $to = 'ritwika.banerjee98@gmail.com';
        $subject = 'Hi buddy, i got a message for you.';
        $message = 'Nothing much. Just test out my Email Component using PHPMailer.';
        
        try {
            $mail = $this->Email->send_mail($to, $subject, $message);
            print_r($mail);
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
        return $this->redirect(['controller' => 'ReqLeave','action' => '/index']);
        exit;
    }
    /**
     * Run shell command
     */
    public function run($username = null)
    {
        $shell = new ShellDispatcher();
        $output = $shell->run(['cake', 'users', 'avijit']); // [pass arguments]
        // $output = $shell->run(['cake', 'users', $username]); // [pass arguments]
        // debug($output);
        if ($output === 0) {
            echo "Shell Command execute";
        } else {
            echo "Failure form shell command";
        }
        exit;
    }

}
