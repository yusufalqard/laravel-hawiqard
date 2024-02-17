<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Hawialqard',
        //     'email' => 'yusuf.alqard@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web-Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Responsive-Web-Design',
            'slug' => 'responsive-web-design'
        ]);
        Category::create([
            'name' => 'Rest API',
            'slug' => 'rest-api'
        ]);
        
        Post::factory(15)->create();
        // Post::create([
        //     'title' => 'Tips menjadi Front-End Developer',
        //     'slug' => 'tips-front-end-dev',
        //     'excerpt' => 'Untuk menjadi Front-End Dev, yang perlu dipersiapkan adalah ...',
        //     'body' => 'Untuk menjadi Front-End Dev, yang perlu dipersiapkan adalah HTML, CSS, Javascript sebagai acuan ilmu dasar. Lalu diikuti dengan framework seperti Bootstrap/ReactJS/Vue.js mempermudah pekerjaan saat membangun website',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Tips membuat website responsive',
        //     'slug' => 'tips-responsive-web',
        //     'excerpt' => 'Untuk membuat responsive website, yang perlu dipersiapkan adalah ...',
        //     'body' => 'Untuk membuat responsive website, yang perlu dipersiapkan adalah framework favorit seperti Bootstrap, Svalte, Vue.js, ReactJS, dsb',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Tip membuat aplikasi web API',
        //     'slug' => 'tips-aplikasi-web-api',
        //     'excerpt' => 'Setelah anda membangun website, langkah selanjutnya adalah ...',
        //     'body' => 'Setelah anda membangun website, langkah selanjutnya adalah setelah membangun keamanan back-end software maka kita harus melakukan pembuatan API dengan tujuan memastikan aplikasi dapat berjalan optimal dari segi pihak client terhadap main server',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Tip payment gateway dengan API',
        //     'slug' => 'tips-gateway-payment-web-api',
        //     'excerpt' => 'Jika website sudah mencakupi dari ...',
        //     'body' => 'Jika website sudah mencakupi dari Design Template Website, Proteksi Autentikasi Keamanan Server Web Hosting, dan Interaksi API yang digunakan oleh Client. Maka yang kita lakukan membangun sebuah Gateway Payment API untuk pembayaran donasi dari client sebagai tanda terima kasih terhadap kepedulian kritik dan saran membuat website lebih baik ke-depannya',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
    }
}
