<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'ピカチュウ',
            'age' => '1',
            'brother' => '0',
            'status' => '0',
            'allergie' => '電気',
            'address' => 'パルデア',
            'parentname' => 'フェクトライチュス',
            'parentphone' => '111',
        ]);

        Student::create([
            'name' => 'ウパー',
            'age' => '0',
            'brother' => '0',
            'status' => '0',
            'allergie' => '水',
            'address' => 'キタカミ',
            'parentname' => 'ヌオー',
            'parentphone' => '222',
        ]);

        Student::create([
            'name' => 'チラチーノ',
            'age' => '5',
            'brother' => '0',
            'status' => '0',
            'allergie' => '格闘',
            'address' => 'ブルーベリー',
            'parentname' => 'チラチーヌ',
            'parentphone' => '333',
        ]);
    }
}
