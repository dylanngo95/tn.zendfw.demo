<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Started\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function editAction()
    {
      $checkMethod = $this->getRequest();
      if ($checkMethod->isGet()) {
        echo 'func is Get == ';
      }

      echo 'started edit view';
      return false;
    }

    public function deleteAction()
    {
        echo 'started delete view';
        return false;
    }

    public function delete02Action()
    {
        echo 'started delete02 view';
        return false;
    }

}
