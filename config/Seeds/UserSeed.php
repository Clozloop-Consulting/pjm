<?php
use Migrations\AbstractSeed;

/**
 * User seed.
 */
class UserSeed extends AbstractSeed
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
                'mobile' => '741195463',
                'email' => 'admin@pjm.com',
                'password' => '$2y$10$QJPjIS6vGG6aNym/3eCV/e4WeJN3QWxNQ1CbfTxx6nAjNmdUF3L.G',
                'role_id' => 1,
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2019-03-30 20:14:00',
                'modified_by' => 1,
                'modified_on' => NULL,
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
