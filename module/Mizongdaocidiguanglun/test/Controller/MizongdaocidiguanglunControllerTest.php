<?php

/**
 * MizongdaocidiguanglunControllerTest
 */

declare(strict_types=1);

namespace MizongdaocidiguanglunTest\Controller;

use Mizongdaocidiguanglun\Controller\MizongdaocidiguanglunController;
use Laminas\Stdlib\ArrayUtils;
use Laminas\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class MizongdaocidiguanglunControllerTest extends AbstractHttpControllerTestCase
{
    public function setUp() : void
    {
        // The module configuration should still be applicable for tests.
        // You can override configuration here with test case specific values,
        // such as sample view templates, path stacks, module_listener_options,
        // etc.
        $configOverrides = [];

        $this->setApplicationConfig(ArrayUtils::merge(
            include __DIR__ . '/../../../../config/application.config.php',
            $configOverrides
        ));

        parent::setUp();
    }

    public function testIndexActionCanBeAccessed()
    {
        $this->dispatch('/', 'GET');
        $this->assertResponseStatusCode(200);
        $this->assertModuleName('mizongdaocidiguanglun');
        $this->assertControllerName(MizongdaocidiguanglunController::class); // as specified in router's controller name alias
        $this->assertControllerClass('MizongdaocidiguanglunController');
        $this->assertMatchedRouteName('home');
    }

    public function testIndexActionViewModelTemplateRenderedWithinLayout()
    {
        $this->dispatch('/', 'GET');
        $this->assertQuery('.container .jumbotron');
    }

    public function testInvalidRouteDoesNotCrash()
    {
        $this->dispatch('/invalid/route', 'GET');
        $this->assertResponseStatusCode(404);
    }
}
