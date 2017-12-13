<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::insert("insert into items (name,price,img) value (?,?,?)",[
            "Monstar1",200,"/image/1.png"
        ]);

        DB::insert("insert into items (name,price,img) value (?,?,?)",[
            "Monstar2",200,"/image/2.jpg"
        ]);

        DB::insert("insert into items (name,price,img) value (?,?,?)",[
            "Monstar3",200,"/image/3.jpg"
        ]);

        DB::insert("insert into items (name,price,img) value (?,?,?)",[
            "Monstar4",200,"/image/4.jpg"
        ]);

        DB::insert("insert into items (name,price,img) value (?,?,?)",[
            "Monstar5",200,"/image/5.jpg"
        ]);

        DB::insert("insert into items (name,price,img) value (?,?,?)",[
            "Monstar6",200,"/image/6.jpg"
        ]);

        DB::insert("insert into items (name,price,img) value (?,?,?)",[
            "Red Bull",2000,"/image/7.jpg"
        ]);

    }
}
