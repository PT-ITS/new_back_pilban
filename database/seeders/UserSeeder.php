<?php

namespace Database\Seeders;

use App\Models\bantuan_relawan;
use App\Models\data_pemilih;
use App\Models\data_rt;
use App\Models\data_rw;
use App\Models\pemuka_agama;
use App\Models\relawan;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // pengurus
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('UqwLevgkIrfOaWK'),
            'created_at' => Carbon::create(2024, 10, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 10, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        User::create([
            'name' => 'kabpandeglang',
            'email' => 'kabpandeglang@gmail.com',
            'password' => Hash::make('mlfu8gqrNDj7ovr'),
            'created_at' => Carbon::create(2024, 10, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 10, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        User::create([
            'name' => 'kablebak',
            'email' => 'kablebak@gmail.com',
            'password' => Hash::make('jnuZrM8J2akzgCw'),
            'created_at' => Carbon::create(2024, 10, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 10, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        User::create([
            'name' => 'kabtangerang',
            'email' => 'kabtangerang@gmail.com',
            'password' => Hash::make('Q9zxYOhUILobbIF'),
            'created_at' => Carbon::create(2024, 10, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 10, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        User::create([
            'name' => 'kabserang',
            'email' => 'kabserang@gmail.com',
            'password' => Hash::make('D23Y8ut8wxLGhDB'),
            'created_at' => Carbon::create(2024, 10, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 10, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        User::create([
            'name' => 'kotatangerang',
            'email' => 'kotatangerang@gmail.com',
            'password' => Hash::make('6bSQPd7DvbIq0YJ'),
            'created_at' => Carbon::create(2024, 10, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 10, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        User::create([
            'name' => 'kotacilegon',
            'email' => 'kotacilegon@gmail.com',
            'password' => Hash::make('ubczHf9aAvtCkD1'),
            'created_at' => Carbon::create(2024, 10, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 10, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        User::create([
            'name' => 'kotaserang',
            'email' => 'kotaserang@gmail.com',
            'password' => Hash::make('qoAu6u8DQzaGBSc'),
            'created_at' => Carbon::create(2024, 10, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 10, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        User::create([
            'name' => 'kotatangsel',
            'email' => 'kotatangsel@gmail.com',
            'password' => Hash::make('CnDy7CDDocLjhrA'),
            'created_at' => Carbon::create(2024, 10, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 10, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
    }
}
