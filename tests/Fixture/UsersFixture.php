<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 *
 */
class UsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 16, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'username' => ['type' => 'string', 'length' => 48, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Prenom_Usager' => ['type' => 'string', 'length' => 48, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Nom_Usager' => ['type' => 'string', 'length' => 48, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'typeuser_id' => ['type' => 'integer', 'length' => 16, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'imageuser_id' => ['type' => 'integer', 'length' => 16, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'typeuser_id' => ['type' => 'index', 'columns' => ['typeuser_id'], 'length' => []],
            'imageuser_id' => ['type' => 'index', 'columns' => ['imageuser_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'imageuser_id' => ['type' => 'foreign', 'columns' => ['imageuser_id'], 'references' => ['imageusers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'typeuser_id' => ['type' => 'foreign', 'columns' => ['typeuser_id'], 'references' => ['typeusers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'username' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'Prenom_Usager' => 'Lorem ipsum dolor sit amet',
                'Nom_Usager' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'typeuser_id' => 1,
                'imageuser_id' => 1,
                'created' => '2018-10-10 13:55:07',
                'modified' => '2018-10-10 13:55:07'
            ],
        ];
        parent::init();
    }
}
