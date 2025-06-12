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
                'description' => 'Mempelajari pengembangan perangkat lunak, jaringan komputer, dan kecerdasan buatan.',
                'career_prospects' => 'Programmer, Data Scientist, Network Engineer, AI Specialist.',
            ],
            [
                'name' => 'Kedokteran',
                'description' => 'Mempelajari ilmu kesehatan, diagnosa, dan pengobatan penyakit.',
                'career_prospects' => 'Dokter Umum, Spesialis, Peneliti Medis.',
            ],
            [
                'name' => 'Ekonomi',
                'description' => 'Mempelajari manajemen keuangan, pasar, dan kebijakan ekonomi.',
                'career_prospects' => 'Ekonom, Analis Keuangan, Konsultan Bisnis.',
            ],
            [
                'name' => 'Hukum',
                'description' => 'Mempelajari sistem hukum, perundang-undangan, dan keadilan.',
                'career_prospects' => 'Pengacara, Hakim, Notaris, Konsultan Hukum.',
            ],
            [
                'name' => 'Seni Rupa',
                'description' => 'Mempelajari desain, lukisan, dan ekspresi seni visual.',
                'career_prospects' => 'Desainer Grafis, Seniman, Kurator Galeri.',
            ],
            [
                'name' => 'Teknik Sipil',
                'description' => 'Mempelajari desain dan konstruksi infrastruktur seperti jembatan dan gedung.',
                'career_prospects' => 'Insinyur Sipil, Manajer Proyek, Konsultan Konstruksi.',
            ],
            [
                'name' => 'Psikologi',
                'description' => 'Mempelajari perilaku manusia, emosi, dan proses mental.',
                'career_prospects' => 'Psikolog, Konselor, HRD, Peneliti.',
            ],
            [
                'name' => 'Manajemen',
                'description' => 'Mempelajari pengelolaan organisasi, strategi bisnis, dan kepemimpinan.',
                'career_prospects' => 'Manajer, Konsultan Bisnis, Wirausaha.',
            ],
            [
                'name' => 'Arsitektur',
                'description' => 'Mempelajari desain bangunan yang estetis dan fungsional.',
                'career_prospects' => 'Arsitek, Desainer Interior, Perencana Kota.',
            ],
            [
                'name' => 'Ilmu Komunikasi',
                'description' => 'Mempelajari media, jurnalisme, dan hubungan masyarakat.',
                'career_prospects' => 'Jurnalis, PR Officer, Content Creator.',
            ],
            [
                'name' => 'Teknik Elektro',
                'description' => 'Mempelajari sistem kelistrikan, elektronik, dan telekomunikasi.',
                'career_prospects' => 'Insinyur Elektro, Teknisi Telekomunikasi, Peneliti.',
            ],
            [
                'name' => 'Farmasi',
                'description' => 'Mempelajari pengembangan, produksi, dan distribusi obat.',
                'career_prospects' => 'Apoteker, Peneliti Farmasi, Quality Control.',
            ],
            [
                'name' => 'Akuntansi',
                'description' => 'Mempelajari pencatatan keuangan, audit, dan pajak.',
                'career_prospects' => 'Akuntan, Auditor, Konsultan Pajak.',
            ],
            [
                'name' => 'Pendidikan Matematika',
                'description' => 'Mempelajari pengajaran matematika dan teori pendidikan.',
                'career_prospects' => 'Guru Matematika, Dosen, Penulis Modul.',
            ],
            [
                'name' => 'Desain Komunikasi Visual',
                'description' => 'Mempelajari desain grafis, animasi, dan komunikasi visual.',
                'career_prospects' => 'Desainer Grafis, Animator, Art Director.',
            ],
            [
                'name' => 'Teknik Mesin',
                'description' => 'Mempelajari desain dan pembuatan mesin serta sistem mekanik.',
                'career_prospects' => 'Insinyur Mesin, Manajer Produksi, Peneliti.',
            ],
            [
                'name' => 'Kebidanan',
                'description' => 'Mempelajari perawatan kehamilan, persalinan, dan nifas.',
                'career_prospects' => 'Bidan, Konsultan Kesehatan, Pendidik.',
            ],
            [
                'name' => 'Sosiologi',
                'description' => 'Mempelajari struktur sosial, dinamika masyarakat, dan budaya.',
                'career_prospects' => 'Sosiolog, Peneliti Sosial, Aktivis.',
            ],
            [
                'name' => 'Ilmu Politik',
                'description' => 'Mempelajari sistem pemerintahan, kebijakan publik, dan politik global.',
                'career_prospects' => 'Analis Politik, Diplomat, Konsultan.',
            ],
            [
                'name' => 'Kedokteran Gigi',
                'description' => 'Mempelajari kesehatan gigi, mulut, dan perawatan ortodontik.',
                'career_prospects' => 'Dokter Gigi, Spesialis Ortodonti, Peneliti.',
            ],
            [
                'name' => 'Teknik Kimia',
                'description' => 'Mempelajari proses kimia untuk produksi bahan dan energi.',
                'career_prospects' => 'Insinyur Kimia, Peneliti, Manajer Produksi.',
            ],
            [
                'name' => 'Pendidikan Bahasa Inggris',
                'description' => 'Mempelajari pengajaran bahasa Inggris dan linguistik.',
                'career_prospects' => 'Guru Bahasa Inggris, Penerjemah, Dosen.',
            ],
            [
                'name' => 'Agribisnis',
                'description' => 'Mempelajari manajemen bisnis di sektor pertanian.',
                'career_prospects' => 'Pengusaha Agribisnis, Konsultan, Peneliti.',
            ],
            [
                'name' => 'Teknik Lingkungan',
                'description' => 'Mempelajari pengelolaan lingkungan dan teknologi berkelanjutan.',
                'career_prospects' => 'Insinyur Lingkungan, Konsultan, Peneliti.',
            ],
            [
                'name' => 'Antropologi',
                'description' => 'Mempelajari budaya, tradisi, dan perkembangan manusia.',
                'career_prospects' => 'Antropolog, Peneliti, Kurator Museum.',
            ],
            [
                'name' => 'Fisika',
                'description' => 'Mempelajari hukum alam, energi, dan materi.',
                'career_prospects' => 'Fisikawan, Peneliti, Dosen.',
            ],
            [
                'name' => 'Kimia',
                'description' => 'Mempelajari sifat, struktur, dan reaksi zat kimia.',
                'career_prospects' => 'Kimiawan, Peneliti, Quality Control.',
            ],
            [
                'name' => 'Biologi',
                'description' => 'Mempelajari makhluk hidup dan ekosistem.',
                'career_prospects' => 'Biolog, Peneliti, Konsultan Lingkungan.',
            ],
            [
                'name' => 'Statistika',
                'description' => 'Mempelajari analisis data, probabilitas, dan statistik.',
                'career_prospects' => 'Statistisi, Data Analyst, Peneliti.',
            ],
            [
                'name' => 'Matematika',
                'description' => 'Mempelajari teori angka, aljabar, dan analisis matematis.',
                'career_prospects' => 'Matematikawan, Aktuaris, Data Scientist.',
            ],
            [
                'name' => 'Teknik Industri',
                'description' => 'Mempelajari optimalisasi proses dan sistem produksi.',
                'career_prospects' => 'Insinyur Industri, Manajer Operasi, Konsultan.',
            ],
            [
                'name' => 'Gizi',
                'description' => 'Mempelajari nutrisi, diet, dan kesehatan masyarakat.',
                'career_prospects' => 'Ahli Gizi, Konsultan Diet, Peneliti.',
            ],
            [
                'name' => 'Pendidikan Dokter Hewan',
                'description' => 'Mempelajari kesehatan dan perawatan hewan.',
                'career_prospects' => 'Dokter Hewan, Peneliti, Konsultan.',
            ],
            [
                'name' => 'Teknik Penerbangan',
                'description' => 'Mempelajari desain dan pemeliharaan pesawat terbang.',
                'career_prospects' => 'Insinyur Penerbangan, Teknisi, Peneliti.',
            ],
            [
                'name' => 'Sastra Indonesia',
                'description' => 'Mempelajari bahasa, sastra, dan budaya Indonesia.',
                'career_prospects' => 'Penulis, Editor, Dosen, Budayawan.',
            ],
            [
                'name' => 'Sastra Inggris',
                'description' => 'Mempelajari bahasa, sastra, dan budaya berbahasa Inggris.',
                'career_prospects' => 'Penerjemah, Penulis, Dosen.',
            ],
            [
                'name' => 'Pendidikan Jasmani',
                'description' => 'Mempelajari olahraga, kesehatan fisik, dan pengajaran.',
                'career_prospects' => 'Guru Olahraga, Pelatih, Konsultan Kebugaran.',
            ],
            [
                'name' => 'Teknik Geologi',
                'description' => 'Mempelajari struktur bumi, mineral, dan sumber daya alam.',
                'career_prospects' => 'Geolog, Konsultan Tambang, Peneliti.',
            ],
            [
                'name' => 'Teknik Pertambangan',
                'description' => 'Mempelajari ekstraksi mineral dan pengelolaan tambang.',
                'career_prospects' => 'Insinyur Tambang, Manajer Operasi, Konsultan.',
            ],
            [
                'name' => 'Ilmu Perpustakaan',
                'description' => 'Mempelajari pengelolaan informasi dan koleksi perpustakaan.',
                'career_prospects' => 'Pustakawan, Arsiparis, Manajer Informasi.',
            ],
            [
                'name' => 'Hubungan Internasional',
                'description' => 'Mempelajari diplomasi, politik global, dan hubungan antarnegara.',
                'career_prospects' => 'Diplomat, Analis Politik, Konsultan.',
            ],
            [
                'name' => 'Pendidikan Seni Musik',
                'description' => 'Mempelajari pengajaran musik dan teori musikal.',
                'career_prospects' => 'Guru Musik, Komposer, Musisi.',
            ],
            [
                'name' => 'Teknik Nuklir',
                'description' => 'Mempelajari energi nuklir dan aplikasinya.',
                'career_prospects' => 'Insinyur Nuklir, Peneliti, Konsultan.',
            ],
            [
                'name' => 'Kriminologi',
                'description' => 'Mempelajari kejahatan, penegakan hukum, dan pencegahan.',
                'career_prospects' => 'Kriminolog, Analis Kejahatan, Konsultan.',
            ],
            [
                'name' => 'Teknologi Pangan',
                'description' => 'Mempelajari pengolahan dan keamanan pangan.',
                'career_prospects' => 'Teknolog Pangan, Peneliti, Quality Control.',
            ],
            [
                'name' => 'Fisioterapi',
                'description' => 'Mempelajari terapi fisik untuk pemulihan cedera.',
                'career_prospects' => 'Fisioterapis, Konsultan Rehabilitasi, Peneliti.',
            ],
            [
                'name' => 'Geografi',
                'description' => 'Mempelajari fenomena alam, manusia, dan interaksi lingkungan.',
                'career_prospects' => 'Geograf, Perencana Wilayah, Peneliti.',
            ],
            [
                'name' => 'Sejarah',
                'description' => 'Mempelajari peristiwa masa lalu dan analisis historis.',
                'career_prospects' => 'Sejarawan, Kurator Museum, Dosen.',
            ],
            [
                'name' => 'Pendidikan Kimia',
                'description' => 'Mempelajari pengajaran kimia dan pendidikan sains.',
                'career_prospects' => 'Guru Kimia, Dosen, Penulis Modul.',
            ],
            [
                'name' => 'Astronomi',
                'description' => 'Mempelajari benda langit dan fenomena antargalaksi.',
                'career_prospects' => 'Astronom, Peneliti, Pendidik.',
            ],
        ];

        foreach ($majors as $major) {
            Major::create($major);
        }
    }
}