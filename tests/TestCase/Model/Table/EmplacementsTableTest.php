<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmplacementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmplacementsTable Test Case
 */
class EmplacementsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmplacementsTable
     */
    public $Emplacements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emplacements'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Emplacements') ? [] : ['className' => EmplacementsTable::class];
        $this->Emplacements = TableRegistry::getTableLocator()->get('Emplacements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Emplacements);

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
