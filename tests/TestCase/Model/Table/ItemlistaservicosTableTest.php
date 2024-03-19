<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemlistaservicosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemlistaservicosTable Test Case
 */
class ItemlistaservicosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemlistaservicosTable
     */
    protected $Itemlistaservicos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Itemlistaservicos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Itemlistaservicos') ? [] : ['className' => ItemlistaservicosTable::class];
        $this->Itemlistaservicos = $this->getTableLocator()->get('Itemlistaservicos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Itemlistaservicos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ItemlistaservicosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
