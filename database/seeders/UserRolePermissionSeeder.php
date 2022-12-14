<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        DB::beginTransaction();
        try {
            $admin = User::create(array_merge([
                'email' => 'admin@sman1montong.sch.id',
                'name' => 'Administrator'
            ], $default_user_value));

            $kepsek = User::create(array_merge([
                'email' => 'kepsek@sman1montong.sch.id',
                'name' => 'Kepala Sekolah'
            ], $default_user_value));

            $keptu = User::create(array_merge([
                'email' => 'keptu@sman1montong.sch.id',
                'name' => 'Kepala Tata Usaha'
            ], $default_user_value));

            $staf = User::create(array_merge([
                'email' => 'staf@sman1montong.sch.id',
                'name' => 'Staf Tata Usaha'
            ], $default_user_value));

            $guru = User::create(array_merge([
                'email' => 'guru@sman1montong.sch.id',
                'name' => 'Guru Kepala Sekolah'
            ], $default_user_value));

            $siswa = User::create(array_merge([
                'email' => 'siswa@sman1montong.sch.id',
                'name' => 'Siswa'
            ], $default_user_value));

            $role_admin = Role::create(['name' => 'admin']);
            $role_kepsek = Role::create(['name' => 'kepsek']);
            $role_keptu = Role::create(['name' => 'keptu']);
            $role_staf = Role::create(['name' => 'staf']);
            $role_guru = Role::create(['name' => 'guru']);
            $role_siswa = Role::create(['name' => 'siswa']);

            $permission = Permission::create(['name' => 'read role']);
            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'delete role']);
            $permission = Permission::create(['name' => 'read konfigurasi']);

            $role_admin->givePermissionTo('read role');
            $role_admin->givePermissionTo('create role');
            $role_admin->givePermissionTo('update role');
            $role_admin->givePermissionTo('delete role','read konfigurasi');

            $admin->assignRole('admin');
            $kepsek->assignRole('kepsek');
            $keptu->assignRole('keptu');
            $staf->assignRole('staf');
            $guru->assignRole('guru');
            $siswa->assignRole('siswa');

            DB::commit();
        } catch(\Throwable $th) {
            DB::rollBack();
        }
    }
}