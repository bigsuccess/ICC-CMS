<?php

class UsersTableSeeder extends Seeder {

    public function run() {

        DB::table('users')->truncate();

        $users = array([
                'username' => 'PhucPM',
                'password' => Hash::make('123456'),
                'email' => 'PhucPM.IT@Gmail.Com',
                'first_name' => 'Phạm Minh',
                'last_name' => 'Phúc',
                'gender' => 1,
                'birthday' => '1992-5-9',
                'phone' => '0985315508',
                'address' => 'Vũ Thư - Thái Bình',
                'token' => '',
                'group_id' => 1,
                'joined_date' => Carbon::now(),
                'status' => 1,
            ],
            [
                'username' => 'DaoLVCNTT',
                'password' => Hash::make('123456'),
                'email' => 'DaoLVCNTT@Gmail.Com',
                'first_name' => 'Lại Văn',
                'last_name' => 'Đạo',
                'gender' => 1,
                'birthday' => '1992-1-25',
                'phone' => '0975930251',
                'address' => 'Vũ Thư - Thái Bình',
                'token' => '',
                'group_id' => 1,
                'joined_date' => Carbon::now(),
                'status' => 1,
            ]
        );

        DB::table('users')->insert($users);
    }

}
