<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create Main Admin Account
        User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Insert Event Categories (Minimal 3 Kategori)
        $seminarCategory = Category::create([
            'name' => 'Seminar & Workshop',
            'slug' => 'seminar-workshop',
        ]);

        $entertainmentCategory = Category::create([
            'name' => 'Entertainment & Arts',
            'slug' => 'entertainment-arts',
        ]);

        $competitionCategory = Category::create([
            'name' => 'Competition & E-Sport',
            'slug' => 'competition-esport',
        ]);

        // 3. Insert Sample Events (Minimal 6 Events)
        
        // Event 1: Seminar/Workshop
        Event::create([
            'category_id' => $seminarCategory->id,
            'title' => 'UI/UX Masterclass 2026',
            'description' => 'Pelajari prinsip-prinsip UI/UX dari praktisi industri. Kuasai Figma, user research, dan prototyping.',
            'date' => '2026-06-15 09:00:00',
            'location' => 'Lab Desain Amikom',
            'price' => 75000,
            'stock' => 50,
            'poster_path' => 'posters/uiux-masterclass.png',
        ]);

        // Event 2: Entertainment
        Event::create([
            'category_id' => $entertainmentCategory->id,
            'title' => 'Jazz Night 2025',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/jazz-night.png',
        ]);

        // Event 3: Competition/E-Sport
        Event::create([
            'category_id' => $competitionCategory->id,
            'title' => 'E-Sport U-Champ: Mobile Legends Tournament',
            'description' => 'Turnamen Mobile Legends antar mahasiswa se-Indonesia. Total hadiah puluhan juta rupiah!',
            'date' => '2026-07-20 10:00:00',
            'location' => 'GOR Amikom',
            'price' => 100000,
            'stock' => 32,
            'poster_path' => 'posters/esport-uchamp.png',
        ]);

        // Event 4: Seminar/Workshop
        Event::create([
            'category_id' => $seminarCategory->id,
            'title' => 'Hackathon - Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif untuk tantangan masa depan!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/hackathon.png',
        ]);

        // Event 5: Technology Summit
        Event::create([
            'category_id' => $seminarCategory->id,
            'title' => 'AI & Future Tech Summit 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan teknologi masa depan bersama para ahli di bidangnya.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/ai-summit.png',
        ]);

        // Event 6: Competition
        Event::create([
            'category_id' => $competitionCategory->id,
            'title' => 'Startup Pitch Competition 2026',
            'description' => 'Presentasikan ide bisnis startup-mu di depan investor dan juri profesional. Dapatkan pendanaan hingga 50 juta!',
            'date' => '2026-08-10 08:00:00',
            'location' => 'Auditorium Amikom',
            'price' => 25000,
            'stock' => 40,
            'poster_path' => 'posters/startup-pitch.png',
        ]);

        // Event 7: Entertainment (Bonus)
        Event::create([
            'category_id' => $entertainmentCategory->id,
            'title' => 'Cosplay & Comic Festival 2026',
            'description' => 'Festival cosplay terbesar tahun ini! Datang dengan kostum terbaikmu dan menangkan hadiah menarik.',
            'date' => '2026-09-25 09:00:00',
            'location' => 'Hall Utama Amikom',
            'price' => 60000,
            'stock' => 200,
            'poster_path' => 'posters/cosplay-fest.png',
        ]);

        // Event 8: Workshop (Bonus)
        Event::create([
            'category_id' => $seminarCategory->id,
            'title' => 'Digital Marketing Bootcamp',
            'description' => 'Pelajari strategi digital marketing terkini: SEO, social media ads, dan content marketing.',
            'date' => '2026-10-12 09:00:00',
            'location' => 'Ruang Seminar Lt.3',
            'price' => 150000,
            'stock' => 60,
            'poster_path' => 'posters/digital-marketing.png',
        ]);
    }
}