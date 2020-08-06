<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_crm_contatos')->insert([
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cidade' => Str::random(10),
            'estado' => Str::random(10),
            'status' => true,
            'invalid' => false,
            'data' => Carbon::now()->format('Y-m-d H:i:s'),
            'ultima_atualizacao' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tbl_crm_contatos')->insert([
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cidade' => Str::random(10),
            'estado' => Str::random(10),
            'status' => true,
            'invalid' => false,
            'data' => Carbon::now()->format('Y-m-d H:i:s'),
            'ultima_atualizacao' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tbl_crm_contatos')->insert([
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cidade' => Str::random(10),
            'estado' => Str::random(10),
            'status' => true,
            'invalid' => false,
            'data' => Carbon::now()->format('Y-m-d H:i:s'),
            'ultima_atualizacao' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tbl_crm_contatos')->insert([
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cidade' => Str::random(10),
            'estado' => Str::random(10),
            'status' => true,
            'invalid' => false,
            'data' => Carbon::now()->format('Y-m-d H:i:s'),
            'ultima_atualizacao' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('tbl_crm_contatos')->insert([
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cidade' => Str::random(10),
            'estado' => Str::random(10),
            'status' => true,
            'invalid' => false,
            'data' => Carbon::now()->format('Y-m-d H:i:s'),
            'ultima_atualizacao' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('tbl_erp_contatos')->insert([
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cidade' => Str::random(10),
            'estado' => Str::random(10),
            'status' => true,
            'invalid' => false,
            'data' => Carbon::now()->format('Y-m-d H:i:s'),
            'ultima_atualizacao' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tbl_erp_contatos')->insert([
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cidade' => Str::random(10),
            'estado' => Str::random(10),
            'status' => true,
            'invalid' => false,
            'data' => Carbon::now()->format('Y-m-d H:i:s'),
            'ultima_atualizacao' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tbl_erp_contatos')->insert([
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cidade' => Str::random(10),
            'estado' => Str::random(10),
            'status' => true,
            'invalid' => false,
            'data' => Carbon::now()->format('Y-m-d H:i:s'),
            'ultima_atualizacao' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tbl_erp_contatos')->insert([
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cidade' => Str::random(10),
            'estado' => Str::random(10),
            'status' => true,
            'invalid' => false,
            'data' => Carbon::now()->format('Y-m-d H:i:s'),
            'ultima_atualizacao' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tbl_erp_contatos')->insert([
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cidade' => Str::random(10),
            'estado' => Str::random(10),
            'status' => true,
            'invalid' => false,
            'data' => Carbon::now()->format('Y-m-d H:i:s'),
            'ultima_atualizacao' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
