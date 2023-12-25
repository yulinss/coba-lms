<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['title' => 'Laravel Framework', 'slug' => 'Belajar Laravel', 'description' => 'merupakan framework PHP yang open-source dan berisi banyak modul dasar untuk mengoptimalkan kinerja PHP dalam pengembangan aplikasi web, apalagi PHP adalah bahasa pemrograman yang dinamis', 'price' => '15', 'course_image' => 'laravel1.jpg', 'start_date' => '2023-12-23', 'published' => '1'],
            ['title' => 'Algoritma dan Pemrograman', 'slug' => 'Algoritma Dasar', 'description' => 'paradigma pemrograman yang sebagian besar didasari dalam logika formal', 'price' => '12', 'course_image' => 'algor.jpg', 'start_date' => '2023-12-20', 'published' => '1'],
            ['title' => 'Bootstrap dan Sass', 'slug' => 'Bootstrap Dasar', 'description' => 'framework web development berbasis HTML, CSS, dan JavaScript yang dirancang untuk mempercepat proses pengembangan web', 'price' => '12', 'course_image' => 'bootstrap sass.jpg', 'start_date' => '2023-12-20', 'published' => '1'],

        ];

        foreach($items as $item){
            Course::create($item);
        }
    }
}
