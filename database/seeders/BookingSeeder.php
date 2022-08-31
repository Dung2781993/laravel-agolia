<?php

namespace Database\Seeders;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booking1 = array(
            'customer_id' => 80,
            'nanny_id' => 66,
            'start_time' => Carbon::parse('2022-09-01 09:00'),
            'end_time' => Carbon::parse('2022-09-01 09:00')->addHour(5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );

        $booking2 = array(
            'customer_id' => 80,
            'nanny_id' => 65,
            'start_time' => Carbon::parse('2022-08-31 09:00'),
            'end_time' => Carbon::parse('2022-08-31 09:00')->addHour(5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );

        $booking3 = array(
            'customer_id' => 80,
            'nanny_id' => 64,
            'start_time' => Carbon::parse('2022-08-30 09:00'),
            'end_time' => Carbon::parse('2022-08-30 09:00')->addHour(5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );

        $booking4 = array(
            'customer_id' => 80,
            'nanny_id' => 63,
            'start_time' => Carbon::parse('2022-08-29 09:00'),
            'end_time' => Carbon::parse('2022-08-29 09:00')->addHour(5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );

        $booking5 = array(
            'customer_id' => 80,
            'nanny_id' => 62,
            'start_time' => Carbon::parse('2022-08-28 09:00'),
            'end_time' => Carbon::parse('2022-08-28 09:00')->addHour(5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );

        $booking6 = array(
            'customer_id' => 80,
            'nanny_id' => 61,
            'start_time' => Carbon::parse('2022-08-27 09:00'),
            'end_time' => Carbon::parse('2022-08-27 09:00')->addHour(5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );

        $itemData = [$booking1, $booking2, $booking3, $booking4, $booking5, $booking6];

        Booking::insert($itemData);
    }
}
