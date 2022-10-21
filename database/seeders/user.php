<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new ModelsUser([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Nobody9512'),
        ]);
        $data->save();
    }
}
