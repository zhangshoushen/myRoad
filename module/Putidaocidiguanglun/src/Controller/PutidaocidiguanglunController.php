<?php

/**
 * PutidaocidiguanglunController
 */

declare(strict_types=1);

namespace Putidaocidiguanglun\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class PutidaocidiguanglunController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
