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
            'name'          => 'guru',
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


        DB::table('teachers')->insert([
            [
                'user_id'           => $user2->id,
                'gender'            => 'male',
                'phone'             => '0851577723',
                'dateofbirth'       => '1993-12-12',
                'current_address'   => 'Kota. Bandung',
                'permanent_address' => 'Bojong soang',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('parents')->insert([
            [
                'user_id'           => $user3->id,
                'gender'            => 'male',
                'phone'             => '0851723131',
                'current_address'   => 'Dayeuh Kolot',
                'permanent_address' => 'Kab. Bandung',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('grades')->insert([
            'teacher_id'        => 1,
            'class_numeric'     => 1,
            'class_name'        => '1A',
            'class_description' => 'kelas 1A'
        ]);

        DB::table('students')->insert([
            [
                'user_id'           => $user4->id,
                'parent_id'         => 1,
                'class_id'          => 1,
                'roll_number'       => 1,
                'gender'            => 'female',
                'phone'             => '0812345678',
                'dateofbirth'       => '2005-04-11',
                'current_address'   => 'Kota Bandung',
                'permanent_address' => 'Kab. Bandung',
                'created_at'        => date("Y-m-d H:i:s")
            ]
        ]);

    }
}