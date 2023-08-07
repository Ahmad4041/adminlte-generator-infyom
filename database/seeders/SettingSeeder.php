<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Settings;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pumpData=[
            [
                'config_model' => 'Pumps',
                'field_name' => 'Pump 1/2',
                'field_type' => 'Grades',
                'status' => true
            ],
            [
                'config_model' => 'Pumps',
                'field_name' => 'Pump 3/4',
                'field_type' => 'Grades',
                'status' => true
            ],
            [
                'config_model' => 'Pumps',
                'field_name' => 'Pump 5/6',
                'field_type' => 'Grades',
                'status' => true
            ],
            [
                'config_model' => 'Pumps',
                'field_name' => 'Pump 7/8',
                'field_type' => 'Grades',
                'status' => true
            ]
        ];
        $gradesData = [
            [
                'config_model' => 'Grades',
                'field_name' => 'ULP',
                'field_type' => 'fuel',
                'status' => true
            ],
            [
                'config_model' => 'Grades',
                'field_name' => 'E10',
                'field_type' => 'fuel',
                'status' => true
            ],
            [
                'config_model' => 'Grades',
                'field_name' => 'E85',
                'field_type' => 'fuel',
                'status' => true
            ],
            [
                'config_model' => 'Grades',
                'field_name' => 'P98',
                'field_type' => 'fuel',
                'status' => true
            ],
            [
                'config_model' => 'Grades',
                'field_name' => 'DIS',
                'field_type' => 'fuel',
                'status' => true
            ],
            [
                'config_model' => 'Grades',
                'field_name' => 'LPG',
                'field_type' => 'fuel',
                'status' => true
            ]
        ];
        $fuelCardsData = [
            [
                'config_model' => 'Fuel Cards',
                'field_name' => 'United Card',
                'field_type' => 'number',
                'status' => true
            ],
            [
                'config_model' => 'Fuel Cards',
                'field_name' => 'MotorPass Card',
                'field_type' => 'number',
                'status' => true
            ],
            [
                'config_model' => 'Fuel Cards',
                'field_name' => 'Fleet Card',
                'field_type' => 'number',
                'status' => true
            ],
        ];
        $salesData = [
            [
                'config_model' => 'Sales',
                'field_name' => 'Shop Sale',
                'field_type' => 'number',
                'status' => true
            ],
            [
                'config_model' => 'Sales',
                'field_name' => 'Fuel Sale',
                'field_type' => 'number',
                'status' => true
            ],
            [
                'config_model' => 'Sales',
                'field_name' => 'BBQ Sale',
                'field_type' => 'number',
                'status' => true
            ],
            [
                'config_model' => 'Sales',
                'field_name' => 'Coffee Sale',
                'field_type' => 'number',
                'status' => true
            ]

        ];
        Settings::insert($pumpData);
        Settings::insert($gradesData);
        Settings::insert($fuelCardsData);
        Settings::insert($salesData);
    }
}
