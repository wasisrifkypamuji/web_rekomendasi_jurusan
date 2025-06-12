<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;

class MajorSeeder extends Seeder
{
    public function run(): void
    {
        $majors = [
            [
                'name' => 'Teknik Informatika',
                'description' => 'Jurusan yang mempelajari pengembangan perangkat lunak, jaringan komputer, dan kecerdasan buatan.',
                'career_prospects' => 'Programmer, Data Scientist, Network Engineer, AI Specialist.',
            ],
            [
                'name' => 'Kedokteran',
                'description' => 'Jurusan yang mempelajari ilmu kesehatan, diagnosa, dan pengobatan penyakit.',
                'career_prospects' => 'Dokter Umum, Spesialis, Peneliti Medis.',
            ],
            [
                'name' => 'Ekonomi',
                'description' => 'Jurusan yang mempelajari manajemen keuangan, pasar, dan kebijakan ekonomi.',
                'career_prospects' => 'Ekonom, Analis Keuangan, Konsultan Bisnis.',
            ],
            [
                'name' => 'Hukum',
                'description' => 'Jurusan yang mempelajari sistem hukum, perundang-undangan, dan keadilan.',
                'career_prospects' => 'Pengacara, Hakim, Notaris, Konsultan Hukum.',
            ],
            [
                'name' => 'Seni Rupa',
                'description' => 'Jurusan yang mempelajari desain, lukisan, dan ekspresi seni visual.',
                'career_prospects' => 'Desainer Grafis, Seniman, Kurator Galeri.',
            ],
        ];

        foreach ($majors as $major) {
            Major::create($major);
        }
    }
}