<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            [
            'names' => 'Alex Oscar',
            'last_names' => 'Gamarra Ortiz',
            'age' => 31,
            'gender' => 'Masculino',
            'cedula' => 19123654,
            'blood_type' => 'A+',
            'phone' => 4123404787,
            'email' => 'alex@gmail.com',
            'address' => '23 de Enero Casa 12',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ],
            [
            'names' => 'Maria Jose',
            'last_names' => 'Gamboa Torres',
            'age' => 26,
            'gender' => 'Femenino',
            'cedula' => 24123654,
            'blood_type' => 'A-',
            'phone' => 4121234787,
            'email' => 'maria@gmail.com',
            'address' => 'La candelaria Casa 14',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ],
            [
            'names' => 'Juan Marcos ',
            'last_names' => 'Ramirez Mora',
            'age' => 28,
            'gender' => 'Masculino',
            'cedula' => 22123654,
            'blood_type' => 'A+',
            'phone' => 4161234787,
            'email' => 'juan@gmail.com',
            'address' => 'El paraiso Casa 12',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ],
            [
            'names' => 'Genesis Sofia',
            'last_names' => 'Lazaro Guzman',
            'age' => 28,
            'gender' => 'Femenino',
            'cedula' => 23123654,
            'blood_type' => 'A-',
            'phone' => 4141234787,
            'email' => 'genesis@gmail.com',
            'address' => 'Centro norte Casa 7',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'names' => 'Carlos Eduardo',
                'last_names' => 'Acosta Guzman',
                'age' => 25,
                'gender' => 'Masculino',
                'cedula' => 24123654,
                'blood_type' => 'A-',
                'phone' => 4161234787,
                'email' => 'carlos@gmail.com',
                'address' => 'Tejeria Centro Casa 1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'names' => 'Valeria Maria',
                'last_names' => 'Guitierrez Campo',
                'age' => 26,
                'gender' => 'Femenino',
                'cedula' => 25123654,
                'blood_type' => 'A-',
                'phone' => 4141234787,
                'email' => 'valeria@gmail.com',
                'address' => 'Centro Carlos Blanck Casa 1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
        ]);
    }
}
