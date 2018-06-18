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
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Nombre' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Apellido' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Correo' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Telefono' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'password' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_type_user' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK1_type_user' => ['type' => 'index', 'columns' => ['id_type_user'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK1_type_user' => ['type' => 'foreign', 'columns' => ['id_type_user'], 'references' => ['type_user', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
                'Nombre' => 'Lorem ipsum dolor sit amet',
                'Apellido' => 'Lorem ipsum dolor sit amet',
                'Correo' => 'Lorem ipsum dolor sit amet',
                'Telefono' => 1,
                'password' => 'Lorem ipsum dolor sit amet',
                'id_type_user' => 1
            ],
        ];
        parent::init();
    }
}
