<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [ 'name' => 'admin', 'display_name' => 'Admin', 'description' => 'Tất cả quyền' ],
            [ 'name' => 'User', 'display_name' => 'Người đọc', 'description' => 'Người đọc' ],
            [ 'name' => 'tacGia', 'display_name' => 'Tác Giả', 'description' => 'Sáng tác' ],
            [ 'name' => 'vipAccount', 'display_name' => 'Vip Account', 'description' => 'Tài Khoản Vip' ],
        ]);
    }
}

// class RoleDatabaseSeeder extends Seeder {
//     public function run() 
//     {
//         DB::table('roles')->insert([
//             [ 'name' => 'admin', 'display_name' => 'Admin', 'description' => 'Tất cả quyền' ],
//             [ 'name' => 'User', 'display_name' => 'Người đọc', 'description' => 'Người đọc' ],
//             [ 'name' => 'tacGia', 'display_name' => 'Tác Giả', 'description' => 'Sáng tác' ],
//             [ 'name' => 'vipAccount', 'display_name' => 'Vip Account', 'description' => 'Tài Khoản Vip' ],
//         ]);
//     }
// }
// php artisan db:seed --class=RoleSeeder
