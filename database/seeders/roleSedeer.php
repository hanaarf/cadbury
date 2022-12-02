<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class roleSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'admin'],
            ['name'=>'user'],
            //contoh klau dtany banyak : ['name'=>'xi pplg 1','alamat'=>'dpk'],
        ];

        foreach ($data as $item ) {
            role::insert([
                 // cathegory=nama model
                'name' => $item['name'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);                                      
        }
    }
}
