<?php

/**
 * FoxuedacidianController
 */

declare(strict_types=1);

namespace Foxuedacidian\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class FoxuedacidianController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
