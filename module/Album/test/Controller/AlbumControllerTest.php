<?php
namespace AlbumTest\Controller;

use Album\Controller\AlbumController;
use Zend\Stdlib\ArrayUtils;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class AlbumControllerTest extends AbstractHttpControllerTestCase
{
    // protected $traceError = false;
    protected $traceError = true;

    public function setUp()
    {
        $this->setApplicationConfig(
            include '/home/sites/zf.example.com/config/application.config.php'
        );
        parent::setUp();
    }

    public function testIndexAction()
    {
        $this->dispatch('/album');
        $this->assertResponseStatusCode(200);
        $this->assertModuleName('album');
        $this->assertControllerName(AlbumController::class); // as specified in router's controller name alias
        $this->assertControllerClass('AlbumController');
        $this->assertMatchedRouteName('album');
    }

    public function testAddAction()
    {
        $this->dispatch('/album/add');
        $this->assertControllerClass('AlbumController');
        $this->assertMatchedRouteName('album');
    }

    public function testEditAction()
    {
        $this->dispatch('/album/edit');
        $this->assertControllerClass('AlbumController');
        $this->assertMatchedRouteName('album');
    }

    public function testDeleteAction()
    {
        $this->dispatch('/album/delete');
        $this->assertControllerClass('AlbumController');
        $this->assertMatchedRouteName('album');
    }
}
