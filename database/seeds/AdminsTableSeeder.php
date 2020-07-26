<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            ['id'=>1, 'name'=> 'admin', 'type'=>'admin', 'mobile'=>'09638208', 'email'=>'k.franckalain@gmail.com',
            'password'=> '$2y$10$Y24EbYVslGYsXQDHEIFxyOTKjXxQTU7TW/vILi5l3tMNpDYqy5ch6',
            'image'=> '', 'status'=> 1
            ],
            ['id'=>2, 'name'=> 'ange', 'type'=>'subamin', 'mobile'=>'09638208', 'email'=>'ange@gmail.com',
            'password'=> '$2y$10$Y24EbYVslGYsXQDHEIFxyOTKjXxQTU7TW/vILi5l3tMNpDYqy5ch6',
            'image'=> '', 'status'=> 1
            ],
            ['id'=>3, 'name'=> 'alain', 'type'=>'subadmin', 'mobile'=>'09638208', 'email'=>'alain@gmail.com',
            'password'=> '$2y$10$Y24EbYVslGYsXQDHEIFxyOTKjXxQTU7TW/vILi5l3tMNpDYqy5ch6',
            'image'=> '', 'status'=> 1
            ],
            ['id'=>4, 'name'=> 'fanck', 'type'=>'admin', 'mobile'=>'09638208', 'email'=>'franck@gmail.com',
            'password'=> '$2y$10$Y24EbYVslGYsXQDHEIFxyOTKjXxQTU7TW/vILi5l3tMNpDYqy5ch6',
            'image'=> '', 'status'=> 1
            ],
        ];

        DB::table('admins')->insert($adminRecords);

        /* foreach($adminRecords as $key => $record){
            \App\Admin::create($record);
        }*/
    }
}
