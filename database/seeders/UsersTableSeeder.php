<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // إضافة الأدوار إذا لم تكن موجودة
        if (!Role::where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin']);
        }

        if (!Role::where('name', 'editor')->exists()) {
            Role::create(['name' => 'editor']);
        }

        // إضافة مستخدم افتراضي مع أدوار محددة
        User::create([
            'name' => 'Abdullah',
            'email' => 'abdullah1@gmail.com',
            'password' => Hash::make('12345678'),
        ])->assignRole('admin','editor');

        // تعيين الأدوار للمستخدم
        //$user->assignRole('admin');

        // يمكنك إضافة مزيد من المستخدمين وتعيين الأدوار حسب الحاجة
    }
}
