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
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Lingga Saputra',
            'username' => 'linggasaputra',
            'email' => 'linggabagus441@gmail.com',
            'password' => bcrypt('441666')
        ]);

        // User::create([
        //     'name' => 'Giga Acumalaka',
        //     'email' => 'gigaacumalaka@gmail.com',
        //     'password' => bcrypt('332999')
        // ]);

        User::factory(3)->create();

        Category::create([
             'name' => 'Web Programming',
             'slug' => 'web-programming'
         ]);

         Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

         Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Kehidupan',
        //     'slug' => 'kehidupan',
        //     'excerpt' => 'Apa itu Kehidupan?',
        //     'body' => 'Hidup itu ciri yang membedakan objek fisik yang memiliki proses biologis (yaitu organisme hidup) dengan objek fisik yang tidak memilikinya, baik karena fungsi-fungsi tersebut telah berhenti (karena telah mati) atau karena mereka tidak pernah memiliki fungsi tersebut dan diklasifikasikan sebagai benda mati.[1][2] Ilmu yang berkaitan dengan studi tentang kehidupan adalah biologi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Kematian',
        //     'slug' => 'kematian',
        //     'excerpt' => 'Apa itu Kematian?',
        //     'body' => 'Kematian adalah penghentian permanen dan tidak dapat dikembalikan dari semua fungsi biologis yang menopang makhluk hidup.[1] Kematian otak kadang-kadang digunakan sebagai definisi hukum kematian.[2] Sisa-sisa makhluk hidup yang sebelumnya hidup biasanya mulai membusuk segera setelah kematian. Kematian adalah proses universal yang tak terhindarkan dan pada akhirnya akan terjadi pada semua makhluk hidup. proses serupa yang terjadi pada komponen penyusun makhluk hidup, seperti sel atau jaringan, disebut nekrosis. Sesuatu yang tidak dianggap sebagai organisme hidup, seperti virus, dapat dihancurkan secara fisik tetapi tidak bisa dikatakan mati.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Tuhan',
        //     'slug' => 'tuhan',
        //     'excerpt' => 'Apa itu Tuhan?',
        //     'body' => 'Tuhan dipahami sebagai Roh Mahakuasa dan asas dari suatu kepercayaan.[1] Tidak ada kesepakatan bersama mengenai konsep ketuhanan, sehingga ada berbagai konsep ketuhanan meliputi teisme, deisme, panteisme, dan lain-lain. Dalam pandangan teisme, Tuhan merupakan pencipta sekaligus pengatur segala kejadian di alam semesta. Menurut deisme, Tuhan merupakan pencipta alam semesta, tetapi tidak ikut campur dalam kejadian di alam semesta. Menurut panteisme, Tuhan merupakan alam semesta itu sendiri. Para cendekiawan menganggap berbagai sifat-sifat Tuhan berasal dari konsep ketuhanan yang berbeda-beda. Yang paling umum, di antaranya adalah Mahatahu (mengetahui segalanya), Mahakuasa (memiliki kekuasaan tak terbatas), Mahaada (hadir di mana pun), Mahamulia (mengandung segala sifat-sifat baik yang sempurna), tak ada yang setara dengan-Nya, serta bersifat kekal abadi. Penganut monoteisme percaya bahwa Tuhan hanya ada satu, serta tidak berwujud (tanpa materi), memiliki pribadi, sumber segala kewajiban moral, dan "hal terbesar yang dapat direnungkan".[1] Banyak filsuf abad pertengahan dan modern terkemuka yang mengembangkan argumen untuk mendukung dan membantah keberadaan Tuhan.[2]',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Alam Semesta',
        //     'slug' => 'alam-semesta',
        //     'excerpt' => 'Apa itu Alam Semesta?',
        //     'body' => 'Alam semesta (gabungan dari alam + semesta) atau universum[9] (serapan dari bahasa Belanda: universum) adalah seluruh ruang waktu kontinu tempat kita berada, dengan energi dan materi yang dimilikinya. Usaha untuk memahami pengertian alam semesta dalam lingkup ini pada skala terbesar yang memungkinkan, ada pada kosmologi, ilmu pengetahuan yang berkembang dari fisika dan astronomi.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
