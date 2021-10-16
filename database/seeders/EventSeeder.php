<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Events');
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('event_models')->truncate();
        \Illuminate\Support\Facades\DB::table('event_models')->insert([
            [
                'id' => 1,
                'eventName' => 'Hay chon gia dung',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 2,
                'eventName' => 'chiec non ky dieu',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 3,
                'eventName' => 'sieu tri tue',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 4,
                'eventName' => 'hanh trinh van hoa',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 21,
                'eventName' => 'rap viet',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 5,
                'eventName' => 'king of rap',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 6,
                'eventName' => 'vuon co tich',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 7,
                'eventName' => 'ban tin 24 gio',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 8,
                'eventName' => 'gap nhau cuoi tuan',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 9,
                'eventName' => 'duong len dinh olympia',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 10,
                'eventName' => 'chung toi la chien si',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 11,
                'eventName' => 'sao nhap ngu',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 12,
                'eventName' => 'tro choi am nhac',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 13,
                'eventName' => 'giong hat viet',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 14,
                'eventName' => 'viet nam idol',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 15,
                'eventName' => 'sie tri tue',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 16,
                'eventName' => 'buoc nhay hoan vu',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 17,
                'eventName' => 'nhu chua he co cuoc chia ly',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 18,
                'eventName' => 'nhan tin dong doi',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 19,
                'eventName' => 'rung chuong vang',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ],
            [
                'id' => 20,
                'eventName' => 'thoi su',
                'bandNames' => $faker->name,
                'startDate' => Carbon::now()->addDay(-2),
                'endDate' => Carbon::now()->addDay(-1),
                'portfolio'=> $faker->company,
                'ticketPrice'=> $faker->numberBetween(1,10)*1000,
                'status'=> $faker->numberBetween(1,3)
            ]
        ]);

        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
