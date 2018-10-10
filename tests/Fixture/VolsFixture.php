<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VolsFixture
 *
 */
class VolsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 16, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'emplacementdepart_id' => ['type' => 'integer', 'length' => 16, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'emplacementfin_id' => ['type' => 'integer', 'length' => 16, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'HeureDepart' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'HeureArriver' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'PrixEconomique' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'emplacementdepart_id' => ['type' => 'index', 'columns' => ['emplacementdepart_id'], 'length' => []],
            'emplacementfin_ids' => ['type' => 'index', 'columns' => ['emplacementfin_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'emplacementdepart_id' => ['type' => 'foreign', 'columns' => ['emplacementdepart_id'], 'references' => ['emplacements', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'emplacementfin_ids' => ['type' => 'foreign', 'columns' => ['emplacementfin_id'], 'references' => ['emplacements', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'emplacementdepart_id' => 1,
                'emplacementfin_id' => 1,
                'HeureDepart' => '2018-10-10 08:11:50',
                'HeureArriver' => '2018-10-10 08:11:50',
                'PrixEconomique' => 1,
                'created' => '2018-10-10 08:11:50',
                'modified' => '2018-10-10 08:11:50'
            ],
        ];
        parent::init();
    }
}
