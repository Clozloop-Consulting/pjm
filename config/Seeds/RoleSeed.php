<?php
use Migrations\AbstractSeed;

/**
 * Role seed.
 */
class RoleSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Admin',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2018-09-25 12:38:45',
            ],
            [
                'id' => 2,
                'name' => 'Customer',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2019-04-10 11:42:03',
            ],
            [
                'id' => 3,
                'name' => 'Applicant',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2018-09-25 12:38:45',
            ],
            [
                'id' => 4,
                'name' => 'Business Partner / Agent',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2019-04-10 11:42:03',
            ],
            [
                'id' => 5,
                'name' => 'Sales Executive',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2018-09-25 12:38:45',
            ],
            [
                'id' => 6,
                'name' => 'Sales Team Lead',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2018-09-25 12:38:45',
            ],
            [
                'id' => 7,
                'name' => 'Operation Team',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2019-04-10 11:42:03',
            ],
            [
                'id' => 8,
                'name' => 'Operation Manager',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2018-09-25 12:38:45',
            ],
            [
                'id' => 9,
                'name' => 'Credit Manager',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2019-04-10 11:42:03',
            ],
            [
                'id' => 11,
                'name' => 'Legal Manager',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2019-04-10 11:42:03',
            ],
            [
                'id' => 12,
                'name' => 'Legal Outsource',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2019-04-10 11:42:03',
            ],
            [
                'id' => 13,
                'name' => 'Valution / Technical Manager',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2019-04-10 11:42:03',
            ],
            [
                'id' => 14,
                'name' => 'Valution / Technical Outsource',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2019-04-10 11:42:03',
            ],
            [
                'id' => 15,
                'name' => 'Board Amin',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2019-04-10 11:42:03',
            ],
            [
                'id' => 16,
                'name' => 'Inspection Agent',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:45',
                'modified_by' => 1,
                'modified_on' => '2019-04-10 11:42:03',
            ],
            [
                'id' => 17,
                'name' => 'Financial Manager',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-06-21 00:00:00',
                'modified_by' => 1,
                'modified_on' => '2019-06-21 00:00:00',
            ],
            [
                'id' => 18,
                'name' => 'Financial Outsource',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-06-21 00:00:00',
                'modified_by' => 1,
                'modified_on' => '2019-06-21 00:00:00',
            ],
            [
                'id' => 10,
                'name' => 'Credit Officer',
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-05-14 12:38:00',
                'modified_by' => 1,
                'modified_on' => '2019-04-10 11:42:00',
            ],
        ];

        $table = $this->table('roles');
        $table->insert($data)->save();
    }
}
