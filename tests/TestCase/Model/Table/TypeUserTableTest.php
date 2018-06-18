<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeUserTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeUserTable Test Case
 */
class TypeUserTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeUserTable
     */
    public $TypeUser;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.type_user'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TypeUser') ? [] : ['className' => TypeUserTable::class];
        $this->TypeUser = TableRegistry::getTableLocator()->get('TypeUser', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypeUser);

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
