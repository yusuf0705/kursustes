<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show($name)
    {
        $courses = [
            'English' => [
                'name' => 'English',
                'image' => 'https://tse2.mm.bing.net/th?id=OIP.HaU0bQXXm9v2gipkfm5vVwHaEV&pid=Api&P=0&h=220',
                'description' => 'Belajar bahasa Inggris dari dasar hingga mahir.',
            ],
            'Jepang' => [
                'name' => 'Jepang',
                'image' => 'https://www.situsbelanjaonline.com/china/images/arti%20kata%20dan%20bendera%20jepang.jpg',
                'description' => 'Kuasai bahasa Jepang untuk anime, pekerjaan, dan studi.',
            ],
            'Mandarin' => [
                'name' => 'Mandarin',
                'image' => 'https://img.okezone.com/content/2016/11/28/337/1553402/pengibaran-bendera-china-ancam-kedaulatan-nkri-BviKp6TwD4.jpg',
                'description' => 'Pelajari Mandarin secara praktis dan menyenangkan.',
            ],
            'Korea' => [
                'name' => 'Korea',
                'image' => 'https://wallpaperaccess.com/full/22460.jpg',
                'description' => 'Belajar bahasa Korea untuk drama, budaya, dan komunikasi.',
            ],
            'Spanyol' => [
                'name' => 'Spanyol',
                'image' => 'https://tse2.mm.bing.net/th?id=OIP.eY9kN9s58DMc-SW3H5S3KwHaEK&pid=Api&P=0&h=220',
                'description' => 'Jelajahi dunia dengan bahasa Spanyol yang kaya dan menarik.',
            ],
            'Jerman' => [
                'name' => 'Jerman',
                'image' => 'https://cdn.pixabay.com/photo/2015/11/24/16/23/flag-germany-1060305_1280.jpg',
                'description' => 'Bahasa Jerman untuk studi dan kerja di Eropa.',
            ],
        ];

        $course = $courses[$name] ?? abort(404);
        return view('pengguna.course-detail', compact('course'));
    }
}
