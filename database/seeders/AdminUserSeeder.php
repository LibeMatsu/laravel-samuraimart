<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Auth\Database\Role;
use Encore\Admin\Auth\Database\Permission;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ユーザーがすでに存在するか確認（これにより重複エラーを防ぐ）
        $user = Administrator::firstOrNew(
            [
                'username' => 'admin',
                'password' => Hash::make('password'),
                'name'     => 'Administrator',
            ]
        );

        // ユーザーが存在しない場合のみ新規作成
        if (!$user->exists) {
            $user->save();
        }

        // 管理者ロールが存在しない場合、作成
        $role = Role::firstOrCreate(
            ['name' => 'administrator'],
            ['slug' => 'Administrator']
        );

        // 既存のadminユーザーを取得
        $adminUser = Administrator::where('username', 'admin')->first();

        // 管理者ロールを割り当て
        $adminRole = Role::where('name', 'administrator')->first();
        $adminUser->roles()->save($adminRole);

    }
}
