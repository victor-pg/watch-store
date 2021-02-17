<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class Watches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watches', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('title',50);
            $table->string('description',250);
            $table->text('text');
            $table->integer('price')->length(10)->unsigned();
            $table->string('img',250);
            $table->timestamps();
        });
        DB::table('watches')->insert(
            array(
                'title' => 'Ladies Radley Smart',
                'description' => 'Series 1 Bluetooth Smartwatch RYS01-2011',
                'text'=>'See how active you are throughout the day with step counting, calories burned and intensity minutes Assistance feature sends your real-time location to emergency contacts The Live Track feature lets friends and family track your outdoor activities in real time for peace of mind while you’re out Battery life of up to 5 days',
                'price'=>29,
                'img'=>'1.jpg'
            )
        );
        DB::table('watches')->insert(
            array(
                'title' => 'Garmin',
                'description' => 'Bluetooth Smartwatch 010-02384-B3',
                'text'=>'Garmin Lily™ is the small and stylish smartwatch you’ve been waiting for. With a flick of your wrist, the unique patterned lens lights up to reveal a bright touchscreen display. Swipe through your texts, steps, energy levels and more, and when you’re done, the display disappears.Complements your look with a unique decorative lens Classic design in white and gold with Italian leather strap Monitor your respiration, Pulse Ox energy levels, menstrual cycle, pregnancy, hydration, all-day stress, sleep and heart rate',
                'price'=>229,
                'img'=>'2.jpg'
            )
        );
        DB::table('watches')->insert(
            array(
                'title' => 'Fossil Smartwatches',
                'description' => 'Fossil Smartwatches Bluetooth Smartwatch FTW4047',
                'text'=>'Stay connected with the new Fossil Gen 5e Smartwatch. A compact version of the Fossil Smartwatch with all the features of the original models, the 5e features a built in-speaker, multi-day battery modes, heart rate tracking and activity tracking to keep you on beat. Phenomenal, smart features along with super-stylish design make the 5e the perfect accompaniment to everyday modern life.',
                'price'=>199,
                'img'=>'3.jpg'
            )
        );
        DB::table('watches')->insert(
            array(
                'title' => 'Garmin Lily',
                'description' => 'Smartwatch 010-02384-B0',
                'text'=>'
                Garmin Lily™ is the small and stylish smartwatch you’ve been waiting for. With a flick of your wrist, the unique patterned lens lights up to reveal a bright touchscreen display. Swipe through your texts, steps, energy levels and more, and when you’re done, the display disappears.',
                'price'=>200,
                'img'=>'4.jpg'
            )
        );
        DB::table('watches')->insert(
            array(
                'title' => 'Garmin',
                'description' => 'Bluetooth Smartwatch 010-02384-B1',
                'text'=>'Garmin Lily™ is the small and stylish smartwatch you’ve been waiting for. With a flick of your wrist, the unique patterned lens lights up to reveal a bright touchscreen display. Swipe through your texts, steps, energy levels and more, and when you’re done, the display disappears.',
                'price'=>259,
                'img'=>'5.jpg'
            )
        );
        DB::table('watches')->insert(
            array(
                'title' => 'Fossil Smartwatches',
                'description' => 'Bluetooth Smartwatch FTW4055',
                'text'=>'Stay connected with the new Fossil Gen 5e Smartwatch. A compact version of the Fossil Smartwatch with all the features of the original models, the 5e features a built in-speaker, multi-day battery modes, heart rate tracking and activity tracking to keep you on beat. Phenomenal, smart features along with super-stylish design make the 5e the perfect accompaniment to everyday modern life.',
                'price'=>199,
                'img'=>'6.jpg'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
