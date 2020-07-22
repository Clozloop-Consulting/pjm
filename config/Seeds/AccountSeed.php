<?php
use Migrations\AbstractSeed;

/**
 * Account seed.
 */
class AccountSeed extends AbstractSeed
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
                'id' => 3,
                'name' => 'PARTNERSHIP FIRM',
                'is_active' => 1,
                'created_at' => NULL,
                'created_by' => 1,
                'modified_at' => NULL,
                'modified_by' => 1,
            ],
            [
                'id' => 1,
                'name' => 'COMPANY',
                'is_active' => 1,
                'created_at' => NULL,
                'created_by' => 1,
                'modified_at' => NULL,
                'modified_by' => 1,
            ],
            [
                'id' => 4,
                'name' => 'PROPRAITERSHIP',
                'is_active' => 1,
                'created_at' => NULL,
                'created_by' => NULL,
                'modified_at' => NULL,
                'modified_by' => NULL,
            ],
            [
                'id' => 2,
                'name' => 'INDIVIDUALS',
                'is_active' => 1,
                'created_at' => NULL,
                'created_by' => 1,
                'modified_at' => NULL,
                'modified_by' => 1,
            ],
        ];

        $table = $this->table('accounts');
        $table->insert($data)->save();
    }
}
