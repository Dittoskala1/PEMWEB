<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(customer::count()==0){
            Customer::create([
                'nama'=> 'Ditto',
                'email' => 'ditto@example.com',
                'nomor_hp' => '081234567890',
                'alamat' => 'Jl. Melodi No. 12, Jakarta',
                'minat_alat_musik' => 'Piano',

            ]);
        }
    }
}
