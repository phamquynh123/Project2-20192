<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => '$2y$10$rLYB/w0WfUSV1f7zNe6FIe3OQRFL7kZxahWxpxrpINTGzlX9PjLly', 'role_id' => 1, 'status' => 1,],
            ['name' => 'user', 'email' => 'user@gmail.com', 'password' => '$2y$10$rLYB/w0WfUSV1f7zNe6FIe3OQRFL7kZxahWxpxrpINTGzlX9PjLly', 'role_id' => 2, 'status' => 1,],
            ['name' => 'author', 'email' => 'author@gmail.com', 'password' => '$2y$10$rLYB/w0WfUSV1f7zNe6FIe3OQRFL7kZxahWxpxrpINTGzlX9PjLly', 'role_id' => 3, 'status' => 1,],
            ['name' => 'vip', 'email' => 'vip@gmail.com', 'password' => '$2y$10$rLYB/w0WfUSV1f7zNe6FIe3OQRFL7kZxahWxpxrpINTGzlX9PjLly', 'role_id' => 4, 'status' => 1,],
        ]);
    }
}
