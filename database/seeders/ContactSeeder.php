<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'first_name' => 'GIAN KELLY',
                'middle_name' => 'S.',
                'last_name' => 'ALIBANGBANG',
                'full_name' => 'ALIBANGBANG, GIAN KELLY S.',
                'email' => 'giankelly.alibangbang@cvsu.edu.ph',
                'facebook_name' => 'Kelly Ali',
                'facebook_url' => 'gnklly',
                'avatar_path' => 'ALIBANGBANG.png',
                'display_order' => 1,
                'is_active' => true,
            ],
            [
                'first_name' => 'MAECHELLE REI',
                'middle_name' => 'M.',
                'last_name' => 'ASUNCION',
                'full_name' => 'ASUNCION, MAECHELLE REI M.',
                'email' => 'maechellerei.asuncion@cvsu.edu.ph',
                'facebook_name' => 'Maechelle Rei',
                'facebook_url' => '219.mache',
                'avatar_path' => 'ASUNCION.png',
                'display_order' => 2,
                'is_active' => true,
            ],
            [
                'first_name' => 'BEATRIZE',
                'middle_name' => 'E.',
                'last_name' => 'BUNADO',
                'full_name' => 'BUNADO, BEATRIZE E.',
                'email' => 'beatrize.bunado@cvsu.edu.ph',
                'facebook_name' => 'Beatrize Elevad',
                'facebook_url' => 'bunadobeatrize08',
                'avatar_path' => 'BUNADO.JPG',
                'display_order' => 3,
                'is_active' => true,
            ],
            [
                'first_name' => 'ELLA LUISA',
                'middle_name' => 'M.',
                'last_name' => 'CAPAROS',
                'full_name' => 'CAPAROS, ELLA LUISA M.',
                'email' => 'ellaluisa.caparos@cvsu.edu.ph',
                'facebook_name' => 'Ella Caparos',
                'facebook_url' => 'caparosella',
                'avatar_path' => 'CAPAROS.jpg',
                'display_order' => 4,
                'is_active' => true,
            ],
            [
                'first_name' => 'PAUL DARYLE',
                'middle_name' => 'T.',
                'last_name' => 'ASTILLA',
                'full_name' => 'ASTILLA, PAUL DARYLE T.',
                'email' => 'pauldaryle.astilla@cvsu.edu.ph',
                'facebook_name' => 'Paul Daryle Astilla',
                'facebook_url' => 'pauldaryle.astilla',
                'avatar_path' => 'ASTILLA.JPG',
                'display_order' => 5,
                'is_active' => true,
            ],
            [
                'first_name' => 'MA. TRISHA RHUMAE',
                'middle_name' => 'M.',
                'last_name' => 'BAES',
                'full_name' => 'BAES, MA. TRISHA RHUMAE M.',
                'email' => 'trisharhumae.baes@cvsu.edu.ph',
                'facebook_name' => 'Trisha Rhumae Baes',
                'facebook_url' => 'trisha.rhumae.baes.2024',
                'avatar_path' => 'BAES.jpg',
                'display_order' => 6,
                'is_active' => true,
            ],
            [
                'first_name' => 'LADY THEA',
                'middle_name' => 'G.',
                'last_name' => 'CAMPOZO',
                'full_name' => 'CAMPOZO, LADY THEA G.',
                'email' => 'ladythea.campozo@cvsu.edu.ph',
                'facebook_name' => 'Lady Thea Campozo',
                'facebook_url' => 'lady.thea.campozo.2024',
                'avatar_path' => 'CAMPOSO.jpg',
                'display_order' => 7,
                'is_active' => true,
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
