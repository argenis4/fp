<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'id'=>'1',
            'categoria' => 'Perfumeria',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        
        DB::table('categorias')->insert([
            'id'=>'2',
            'categoria' => 'Cuidado personal',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('categorias')->insert([
            'id'=>'3',
            'categoria' => 'Aimentos Fitnes',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        
        DB::table('categorias')->insert([
            'id'=>'4',
            'categoria' => 'Medicamentos',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        
        DB::table('categorias')->insert([
            'id'=>'5',
            'categoria' => 'Rostro',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        
        DB::table('categorias')->insert([
            'id'=>'6',
            'categoria' => 'Bebes',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        
        DB::table('categorias')->insert([
            'id'=>'7',
            'categoria' => 'Acrilicos',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        
    }
}
