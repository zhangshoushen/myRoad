<?php

/**
 * MizongdaocidiguanglunController
 */

declare(strict_types=1);


namespace Mizongdaocidiguanglun\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class MizongdaocidiguanglunController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
