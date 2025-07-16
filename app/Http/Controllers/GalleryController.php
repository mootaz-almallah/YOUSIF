<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function showPage($page)
    {
        // تأكد أن رقم الصفحة بين 1 و 12
        $page = (int) $page;
        if ($page < 1 || $page > 12) {
            abort(404);
        }

        // مسار الصورة
        $image = "/storage/{$page}.jpeg";

        // الخلفية: كل صفحة لها خلفية خاصة حسب الترتيب المطلوب
        $backgrounds = [
            1 => "/storage/8.jpeg",
            2 => "/storage/2.jpeg",
            3 => "/storage/3.jpeg",
            4 => "/storage/4.jpeg",
            5 => "/storage/5.jpeg",
            6 => "/storage/6.jpeg",
            7 => "/storage/6.jpeg",
            8 => "/storage/6.jpeg",
            9 => "/storage/6.jpeg",
            10 => "/storage/6.jpeg",
            11 => "/storage/6.jpeg",
            12 => "/storage/6.jpeg",
            // أكمل الباقي حسب الحاجة
        ];
        $background = $backgrounds[$page] ?? "/storage/1.jpeg";

    

        return view('gallery.page', compact('page', 'image', 'background', ));
    }
} 