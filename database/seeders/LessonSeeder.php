<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lesson;
class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['title' => 'Laravel Framework', 'slug' => 'Belajar Laravel', 'embed_id' => 'https://youtu.be/rIfdg_Ot-LI?si=FbLffUVw52cXxgen', 'short_text' => 'Laravel adalah framework MVC fullstack yang populer untuk membangun aplikasi web dengan PHP. Pelajari dasar-dasar Laravel dan cari tahu mengapa pengembang web menyukainya.', 'full_text' => 'merupakan framework PHP yang open-source dan berisi banyak modul dasar untuk mengoptimalkan kinerja PHP dalam pengembangan aplikasi web, apalagi PHP adalah bahasa pemrograman yang dinamis', 'position' => '1', 'free_lesson' => '1', 'published' => '1', 'course_id' => '1', ],
            ['title' => 'Logika dan Pemrograman', 'slug' => 'Algoritma Dasar', 'embed_id' => 'https://youtu.be/uqVJc9lLknA?si=XX6y5e4g05T4QhVF', 'short_text' => ' langkah-langkah yang disusun secara tertulis dan berurutan untuk menyelesaikan suatu masalah.','full_text' => 'paradigma pemrograman yang sebagian besar didasari dalam logika formal', 'position' => '1', 'free_lesson' => '1', 'published' => '1', 'course_id' => '2', ],
            ['title' => 'Bootstrap dan Sass', 'slug' => 'Bootstrap Dasar', 'embed_id' => 'https://youtu.be/3dqvtGJgUHM?si=F4wUexHT23eLI-pR', 'short_text' => 'kerangka kerja CSS yang sumber terbuka dan bebas untuk merancang situs web dan aplikasi web.','full_text' => 'framework web development berbasis HTML, CSS, dan JavaScript yang dirancang untuk mempercepat proses pengembangan web', 'position' => '2', 'free_lesson' => '1', 'published' => '1', 'course_id' => '3', ],

        ];

        foreach($items as $item){
            Lesson::create($item);
        }
    }
}
