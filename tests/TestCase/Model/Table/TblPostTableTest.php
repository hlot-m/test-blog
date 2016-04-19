<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblPostTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblPostTable Test Case
 */
class TblPostTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblPostTable
     */
    public $TblPost;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tbl_post'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TblPost') ? [] : ['className' => 'App\Model\Table\TblPostTable'];
        $this->TblPost = TableRegistry::get('TblPost', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblPost);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
