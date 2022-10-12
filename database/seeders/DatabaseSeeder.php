<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Content;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'mhdrizki5462',
            'password' => Hash::make('googleappleawsadidas42313432ldskfj')
        ]);

        // Content::create([
        //     'poster' => 'satu.png',
        //     'title' => 'Apa Yang Baru di Laravel 9',
        //     'slug' => 'apa-yang-baru-di-laravel-9',
        //     'description' => 'Laravel akhirnya merilis versi terbarunya, Laravel 9. Versi anyar framework ini membawa banyak fitur menarik! Baca selengkapnya di sini!',
        //     'date' => '09 Jan 2023',
        //     'author' => 'Muhammad Rizki',
        //     'body' => 'lafakljdfl asdfkladjfljasdfjas dfljasfjlaflkajflajsfdl asfdjklajfla sfljasfdkjlkafasjfdlkjasf',
        //     'twitter' => 'https://twitter.com/intent/tweet?url=https://parsinta.com/s/b6kcio&text=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=https://parsinta.com/s/b6kcio',
        //     'linkedin' => 'https://www.linkedin.com/shareArticle?mini=true&url=https://parsinta.com/s/b6kcio&summary=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'pinterest' => 'https://pinterest.com/pin/create/button/?media=&url=https://parsinta.com/s/b6kcio=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'telegram' => 'https://t.me/share/url?url=https://parsinta.com/s/b6kcio&text=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'whatsapp' => 'https://wa.me/?text=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu+https%3A%2F%2Fparsinta.com/articles/mengatasi-error-saat-install-supervisor-vps-ubuntu-b6kcio',
        //     'youtube_on_off' => 'On',
        //     'youtube' => 'https://youtu.be/GDXdIi_aBwA'
        // ]);

        // Content::create([
        //     'poster' => 'dua.png',
        //     'title' => 'Belajar Laravel Queues',
        //     'slug' => 'belajar-laravel-queues',
        //     'description' => 'Belajar bagaimana cara menggunakan queue di aplikasi laravel 9',
        //     'date' => '28 Okt 2023',
        //     'author' => 'Muhammad Rizki',
        //     'body' => 'lafakljdfl asdfkladjfljasdfjas dfljasfjlaflkajflajsfdl asfdjklajfla sfljasfdkjlkafasjfdlkjasf',
        //     'twitter' => 'https://twitter.com/intent/tweet?url=https://parsinta.com/s/b6kcio&text=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=https://parsinta.com/s/b6kcio',
        //     'linkedin' => 'https://www.linkedin.com/shareArticle?mini=true&url=https://parsinta.com/s/b6kcio&summary=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'pinterest' => 'https://pinterest.com/pin/create/button/?media=&url=https://parsinta.com/s/b6kcio=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'telegram' => 'https://t.me/share/url?url=https://parsinta.com/s/b6kcio&text=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'whatsapp' => 'https://wa.me/?text=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu+https%3A%2F%2Fparsinta.com/articles/mengatasi-error-saat-install-supervisor-vps-ubuntu-b6kcio',
        //     'youtube_on_off' => 'Off',
        //     'youtube' => ''
        // ]);

        // Content::create([
        //     'poster' => 'tiga.png',
        //     'title' => 'Amazon S3 Dengan Laravel',
        //     'slug' => 'amazon-s3-dengan-laravel',
        //     'description' => 'Mengelola data dengan format file umumnya menjadi bagian yang sering kali ditemukan pada sebuah aplikasi, sebut saja avatar atau file gambar untuk setiap users, pdf, video dan lain sebagainya. Berikut adalah panduan cara upload file ke Amazon S3 menggunakan Laravel 7',
        //     'date' => '04 Feb 2023',
        //     'author' => 'Muhammad Rizki',
        //     'body' => 'lafakljdfl asdfkladjfljasdfjas dfljasfjlaflkajflajsfdl asfdjklajfla sfljasfdkjlkafasjfdlkjasf',
        //     'twitter' => 'https://twitter.com/intent/tweet?url=https://parsinta.com/s/b6kcio&text=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=https://parsinta.com/s/b6kcio',
        //     'linkedin' => 'https://www.linkedin.com/shareArticle?mini=true&url=https://parsinta.com/s/b6kcio&summary=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'pinterest' => 'https://pinterest.com/pin/create/button/?media=&url=https://parsinta.com/s/b6kcio=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'telegram' => 'https://t.me/share/url?url=https://parsinta.com/s/b6kcio&text=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'whatsapp' => 'https://wa.me/?text=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu+https%3A%2F%2Fparsinta.com/articles/mengatasi-error-saat-install-supervisor-vps-ubuntu-b6kcio',
        //     'youtube_on_off' => 'On',
        //     'youtube' => 'https://youtu.be/GDXdIi_aBwA'
        // ]);

        // Content::create([
        //     'poster' => 'empat.png',
        //     'title' => 'Tailwind CSS Uncovered',
        //     'slug' => 'tailwind-css-uncovered',
        //     'description' => 'Pada artikel kali ini kita akan membahas tailwind css uncovered secara tuntas',
        //     'date' => '04 Mar 2023',
        //     'author' => 'Muhammad Rizki',
        //     'body' => 'lafakljdfl asdfkladjfljasdfjas dfljasfjlaflkajflajsfdl asfdjklajfla sfljasfdkjlkafasjfdlkjasf',
        //     'twitter' => 'https://twitter.com/intent/tweet?url=https://parsinta.com/s/b6kcio&text=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=https://parsinta.com/s/b6kcio',
        //     'linkedin' => 'https://www.linkedin.com/shareArticle?mini=true&url=https://parsinta.com/s/b6kcio&summary=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'pinterest' => 'https://pinterest.com/pin/create/button/?media=&url=https://parsinta.com/s/b6kcio=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'telegram' => 'https://t.me/share/url?url=https://parsinta.com/s/b6kcio&text=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu',
        //     'whatsapp' => 'https://wa.me/?text=Mengatasi%20Error%20Saat%20Install%20Supervisor%20di%20VPS%20Ubuntu+https%3A%2F%2Fparsinta.com/articles/mengatasi-error-saat-install-supervisor-vps-ubuntu-b6kcio',
        //     'youtube_on_off' => 'Off',
        //     'youtube' => ''
        // ]);

        // Image::factory(100)->create();

        Category::create([
            'name' => 'Laravel',
            'url' => '__laravel'
        ]);

        Category::create([
            'name' => 'Web Design',
            'url' => '__webdesign'
        ]);

        Category::create([
            'name' => 'Php',
            'url' => '__php'
        ]);
        
        Category::create([
            'name' => 'Tailwind Css',
            'url' => '__tailwindcss'
        ]);


    }
}
