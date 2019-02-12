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
      echo 'user index action';
      return false;
    }

    public function loginAction()
    {
      $getMethod = $this->getRequest();
      if ($getMethod -> isGet()) {
        echo 'action is GET ==> ';
      } else {
        echo 'action is not GET ==> ';
      }
      
      if ($getMethod -> isPost()) {
        echo 'action is POST ==> ';
      } else {
        echo 'action is not POST ==> ';
      }

      echo 'user user-login action';
      return false;
    }

}
