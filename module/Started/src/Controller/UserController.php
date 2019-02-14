<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Started\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
    public function indexAction()
    {
      $checkMethod = $this->getRequest();
      if ($checkMethod->isGet()) {
        $action = $this->params()->fromRoute('action', 'default action');
        $id = $this->params()->fromRoute('id', -1);
      } else {
        $action = 'index';
        $id = -1;
      }
      if ($id < 0) {
        // $this->getResponse()->setStatusCode(500);
        throw new \Exception('id < 0, cant find');
      }
      return new ViewModel([
        'id' => $id,
        'action' => $action
      ]);
    }

    public function loginAction()
    {
      $getMethod = $this->getRequest();
      if ($getMethod -> isGet()){
        echo 'action is GET ==> </br>';
        $action = $this->params()->fromRoute('action', 'default vaule');
        $id = $this->params()->fromRoute('id', 0);
        echo $action;
        echo $id;
        echo '<br>';
      } else {
        $var = $this->params()->fromPost('name', 'name test');
        echo $var;
        echo '</br>action is not GET ==> ';
      }
      
      
      // if ($getMethod -> isPost()) {
      //   echo 'action is POST ==> ';
      // } else {
      //   echo 'action is not POST ==> ';
      // }

      // echo 'user user-login action';
      return false;
    }

}
