<?php

use Illuminate\Database\Seeder;

class UrlTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('url')->delete();
        
        \DB::table('url')->insert(array (
            0 => 
            array (
                'id' => 1000000,
                'name_site' => 'https://www.google.com/',
                'code' => 'ugi0',
                'create_at' => '2019-05-02 21:53:46',
                'view' => 1,
            ),
            1 => 
            array (
                'id' => 1000003,
                'name_site' => 'https://www.google.com/',
                'code' => 'ugi3',
                'create_at' => '2019-05-03 22:03:21',
                'view' => 0,
            ),
            2 => 
            array (
                'id' => 1000004,
                'name_site' => 'https://www.google.com/',
                'code' => 'ugi4',
                'create_at' => '2019-05-03 22:04:36',
                'view' => 0,
            ),
            3 => 
            array (
                'id' => 1000005,
                'name_site' => 'https://www.google.com/',
                'code' => 'ugi5',
                'create_at' => '2019-05-03 22:49:29',
                'view' => 0,
            ),
            4 => 
            array (
                'id' => 1000006,
                'name_site' => 'https://www.google.com/',
                'code' => 'ugi6',
                'create_at' => '2019-05-03 22:50:06',
                'view' => 0,
            ),
            5 => 
            array (
                'id' => 1000007,
                'name_site' => 'https://www.google.com/',
                'code' => 'ugi7',
                'create_at' => '2019-05-03 22:51:58',
                'view' => 0,
            ),
            6 => 
            array (
                'id' => 1000008,
                'name_site' => 'www.acb.com',
                'code' => 'ugi8',
                'create_at' => '2019-05-03 22:55:47',
                'view' => 0,
            ),
            7 => 
            array (
                'id' => 1000009,
                'name_site' => 'www.pantip.com',
                'code' => 'ugi9',
                'create_at' => '2019-05-03 22:57:31',
                'view' => 0,
            ),
            8 => 
            array (
                'id' => 1000010,
                'name_site' => 'www.zzz.com',
                'code' => 'ugia',
                'create_at' => '2019-05-03 23:01:00',
                'view' => 0,
            ),
            9 => 
            array (
                'id' => 1000011,
                'name_site' => 'www.facebook.com',
                'code' => 'ugib',
                'create_at' => '2019-05-03 23:27:48',
                'view' => 0,
            ),
            10 => 
            array (
                'id' => 1000012,
                'name_site' => 'www.youtube.com',
                'code' => 'ugic',
                'create_at' => '2019-05-03 23:30:45',
                'view' => 0,
            ),
        ));
        
        
    }
}