<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);

        $user = User::create([
            'name'          => 'Admin',
            'email'         => 'admin@gmail.com',
            'password'      => bcrypt('admin123'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user->assignRole('Admin');

        $user2 = User::create([
            'name'          => 'Guru',
            'email'         => 'guru@gmail.com',
            'password'      => bcrypt('guru123'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user2->assignRole('Teacher');

        $user3 = User::create([
            'name'          => 'orangtua',
            'email'         => 'orangtua@gmail.com',
            'password'      => bcrypt('orangtua123'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user3->assignRole('Parent');

        $user4 = User::create([
            'name'          => 'siswa',
            'email'         => 'siswa@gmail.com',
            'password'      => bcrypt('siswa123'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user4->assignRole('Student');

        $user5 = User::create([
            'name'          => 'kepalasekolah',
            'email'         => 'kepsek@gmail.com',
            'password'      => bcrypt('kepsek123'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        $user4->assignRole('Headmaster');


        DB::table('teachers')->insert([
            [
                'user_id'           => $user2->id,
                'gender'            => 'male',
                'phone'             => '085151234567',
                'dateofbirth'       => '1993-04-11',
                'current_address'   => 'Telkom',
                'permanent_address' => 'Kota Bandung',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('parents')->insert([
            [
                'user_id'           => $user3->id,
                'gender'            => 'male',
                'phone'             => '085151234568',
                'current_address'   => 'Telkom',
                'permanent_address' => 'Kota Bandung',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('grades')->insert([
            'teacher_id'        => 1,
            'class_numeric'     => 1,
            'class_name'        => 'One',
            'class_description' => 'class one'
        ]);

        DB::table('students')->insert([
            [
                'user_id'           => $user4->id,
                'parent_id'         => 1,
                'class_id'          => 1,
                'roll_number'       => 1,
                'gender'            => 'female',
                'phone'             => '085151234569',
                'dateofbirth'       => '2000-04-11',
                'current_address'   => 'Bojongsoang',
                'permanent_address' => 'Dayeuhkolot',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

    }
}
