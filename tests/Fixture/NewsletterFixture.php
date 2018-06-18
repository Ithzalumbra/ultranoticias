<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NewsletterFixture
 *
 */
class NewsletterFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'newsletter';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'title' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'short_description' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'main_content' => ['type' => 'string', 'length' => 2000, 'null' => true, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'autor' => ['type' => 'integer', 'length' => 50, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'imagen' => ['type' => 'string', 'length' => 300, 'null' => true, 'default' => '0', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'published_on' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK1_ID_TYPE_USER' => ['type' => 'index', 'columns' => ['autor'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK1_ID_TYPE_USER' => ['type' => 'foreign', 'columns' => ['autor'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
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
                'title' => 'Lorem ipsum dolor sit amet',
                'short_description' => 'Lorem ipsum dolor sit amet',
                'main_content' => 'Lorem ipsum dolor sit amet',
                'autor' => 1,
                'imagen' => 'Lorem ipsum dolor sit amet',
                'published_on' => '2018-06-18 17:09:54'
            ],
        ];
        parent::init();
    }
}
