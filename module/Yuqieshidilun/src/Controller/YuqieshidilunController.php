<?php

/**
 * YuqieshidilunController
 */

declare(strict_types=1);


namespace Yuqieshidilun\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class YuqieshidilunController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
