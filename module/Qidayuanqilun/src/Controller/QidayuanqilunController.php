<?php

/**
 * QidayuanqilunController
 */

declare(strict_types=1);


namespace  Qidayuanqilun\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class QidayuanqilunController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
