<?php

namespace App\Http\Controllers;

use App\Models\Sign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TextToVideo_controller extends Controller
{
    public function textToVideo($videoNames)
    {
        // Periksa apakah kata kunci adalah "selamat malam"
        if ($videoNames === "selamat malam") {
            // Bangun path ke video
            $path = public_path('assets/sibi/selamat malam.mp4');

            // Periksa apakah video ada
            if (file_exists($path)) {
                // Mendapatkan konten video
                $content = file_get_contents($path);

                // Mendapatkan tipe MIME dari video
                $mime = mime_content_type($path);

                // Mengirim respons dengan tipe MIME yang tepat
                return response($content)->header('Content-Type', $mime);
            } else {
                // Jika video tidak ditemukan, kirim respons JSON
                return response()->json([
                    'message' => 'Maaf, video untuk "selamat malam" tidak ditemukan'
                ], 404);
            }
        } else if ($videoNames === "selamat siang") {
            // Bangun path ke video
            $path = public_path('assets/sibi/selamat siang.mp4');

            // Periksa apakah video ada
            if (file_exists($path)) {
                // Mendapatkan konten video
                $content = file_get_contents($path);

                // Mendapatkan tipe MIME dari video
                $mime = mime_content_type($path);

                // Mengirim respons dengan tipe MIME yang tepat
                return response($content)->header('Content-Type', $mime);
            } else {
                // Jika video tidak ditemukan, kirim respons JSON
                return response()->json([
                    'message' => 'Maaf, video untuk "selamat malam" tidak ditemukan'
                ], 404);
            }
        } else if ($videoNames === "selamat sore") {
            // Bangun path ke video
            $path = public_path('assets/sibi/selamat sore.mp4');

            // Periksa apakah video ada
            if (file_exists($path)) {
                // Mendapatkan konten video
                $content = file_get_contents($path);

                // Mendapatkan tipe MIME dari video
                $mime = mime_content_type($path);

                // Mengirim respons dengan tipe MIME yang tepat
                return response($content)->header('Content-Type', $mime);
            } else {
                // Jika video tidak ditemukan, kirim respons JSON
                return response()->json([
                    'message' => 'Maaf, video untuk "selamat sore" tidak ditemukan'
                ], 404);
            }
        } else if ($videoNames === "kepala sekolah") {
            // Bangun path ke video
            $path = public_path('assets/sibi/kepala sekolah.mp4');

            // Periksa apakah video ada
            if (file_exists($path)) {
                // Mendapatkan konten video
                $content = file_get_contents($path);

                // Mendapatkan tipe MIME dari video
                $mime = mime_content_type($path);

                // Mengirim respons dengan tipe MIME yang tepat
                return response($content)->header('Content-Type', $mime);
            } else {
                // Jika video tidak ditemukan, kirim respons JSON
                return response()->json([
                    'message' => 'Maaf, video untuk "selamat malam" tidak ditemukan'
                ], 404);
            }
        } else if ($videoNames === "hari ini") {
            // Bangun path ke video
            $path = public_path('assets/sibi/hari ini.mp4');

            // Periksa apakah video ada
            if (file_exists($path)) {
                // Mendapatkan konten video
                $content = file_get_contents($path);

                // Mendapatkan tipe MIME dari video
                $mime = mime_content_type($path);

                // Mengirim respons dengan tipe MIME yang tepat
                return response($content)->header('Content-Type', $mime);
            } else {
                // Jika video tidak ditemukan, kirim respons JSON
                return response()->json([
                    'message' => 'Maaf, video untuk "selamat malam" tidak ditemukan'
                ], 404);
            }
        }

        // Pisahkan kata kunci menjadi array
        $keywords = explode(' ', $videoNames);

        // Inisialisasi array untuk menyimpan path video yang sesuai dengan setiap kata kunci
        $videoPaths = [];

        // Lakukan iterasi melalui setiap kata kunci
        foreach ($keywords as $keyword) {
            // Bangun path ke video
            $path = public_path('assets/sibi/' . $keyword . '.mp4');

            // Periksa apakah video ada
            if (file_exists($path)) {
                // Tambahkan path video ke dalam array
                $videoPaths[] = $path;
            }
        }

        // Periksa apakah ada video yang sesuai dengan kata kunci
        if (empty($videoPaths)) {
            // Jika tidak ada video yang ditemukan, kirim respons JSON
            return response()->json([
                'message' => 'Maaf kata yang anda masukkan belum tersedia, kami akan terus melakukan update secara berkala'
            ], 404);
        }

        // Inisialisasi array untuk menyimpan konten video
        $videoContents = [];

        // Baca konten video untuk setiap path yang sesuai
        foreach ($videoPaths as $path) {
            // Mendapatkan konten video
            $content = file_get_contents($path);

            // Tambahkan konten video ke dalam array
            $videoContents[] = $content;
        }

        // Menggabungkan konten video
        $mergedContent = implode('', $videoContents);

        // Mendapatkan tipe MIME dari video pertama
        $firstVideoPath = $videoPaths[0];
        $firstVideoMime = mime_content_type($firstVideoPath);

        // Mengirim respons dengan tipe MIME yang tepat
        return response($mergedContent)->header('Content-Type', $firstVideoMime);
    }



    public function textToVideo2($videoNames)
    {
        // Periksa apakah kata kunci adalah "selamat malam"
        if ($videoNames === "selamat malam") {
            // Bangun path ke video
            $path = public_path('assets/sibi/selamat malam.mp4');

            // Periksa apakah video ada
            if (file_exists($path)) {
                // Mendapatkan konten video
                $content = file_get_contents($path);

                // Mendapatkan tipe MIME dari video
                $mime = mime_content_type($path);

                // Mengirim respons dengan tipe MIME yang tepat
                return response($content)->header('Content-Type', $mime);
            } else {
                // Jika video tidak ditemukan, kirim respons JSON
                return response()->json([
                    'message' => 'Maaf, video untuk "selamat malam" tidak ditemukan'
                ], 404);
            }
        } else if ($videoNames === "selamat siang") {
            // Bangun path ke video
            $path = public_path('assets/sibi/selamat siang.mp4');

            // Periksa apakah video ada
            if (file_exists($path)) {
                // Mendapatkan konten video
                $content = file_get_contents($path);

                // Mendapatkan tipe MIME dari video
                $mime = mime_content_type($path);

                // Mengirim respons dengan tipe MIME yang tepat
                return response($content)->header('Content-Type', $mime);
            } else {
                // Jika video tidak ditemukan, kirim respons JSON
                return response()->json([
                    'message' => 'Maaf, video untuk "selamat malam" tidak ditemukan'
                ], 404);
            }
        } else if ($videoNames === "selamat sore") {
            // Bangun path ke video
            $path = public_path('assets/sibi/selamat sore.mp4');

            // Periksa apakah video ada
            if (file_exists($path)) {
                // Mendapatkan konten video
                $content = file_get_contents($path);

                // Mendapatkan tipe MIME dari video
                $mime = mime_content_type($path);

                // Mengirim respons dengan tipe MIME yang tepat
                return response($content)->header('Content-Type', $mime);
            } else {
                // Jika video tidak ditemukan, kirim respons JSON
                return response()->json([
                    'message' => 'Maaf, video untuk "selamat sore" tidak ditemukan'
                ], 404);
            }
        } else if ($videoNames === "kepala sekolah") {
            // Bangun path ke video
            $path = public_path('assets/sibi/kepala sekolah.mp4');

            // Periksa apakah video ada
            if (file_exists($path)) {
                // Mendapatkan konten video
                $content = file_get_contents($path);

                // Mendapatkan tipe MIME dari video
                $mime = mime_content_type($path);

                // Mengirim respons dengan tipe MIME yang tepat
                return response($content)->header('Content-Type', $mime);
            } else {
                // Jika video tidak ditemukan, kirim respons JSON
                return response()->json([
                    'message' => 'Maaf, video untuk "selamat malam" tidak ditemukan'
                ], 404);
            }
        } else if ($videoNames === "hari ini") {
            // Bangun path ke video
            $path = public_path('assets/sibi/hari ini.mp4');

            // Periksa apakah video ada
            if (file_exists($path)) {
                // Mendapatkan konten video
                $content = file_get_contents($path);

                // Mendapatkan tipe MIME dari video
                $mime = mime_content_type($path);

                // Mengirim respons dengan tipe MIME yang tepat
                return response($content)->header('Content-Type', $mime);
            } else {
                // Jika video tidak ditemukan, kirim respons JSON
                return response()->json([
                    'message' => 'Maaf, video untuk "selamat malam" tidak ditemukan'
                ], 404);
            }
        }

        // Pisahkan kata kunci menjadi array
        $keywords = explode(' ', $videoNames);

        // Inisialisasi array untuk menyimpan path video yang sesuai dengan setiap kata kunci
        $videoPaths = [];

        // Lakukan iterasi melalui setiap kata kunci
        foreach ($keywords as $keyword) {
            // Bangun path ke video
            $path = public_path('assets/sibi/' . $keyword . '.mp4');

            // Periksa apakah video ada
            if (file_exists($path)) {
                // Tambahkan path video ke dalam array
                $videoPaths[] = $path;
            }
        }

        // Periksa apakah ada video yang sesuai dengan kata kunci
        if (empty($videoPaths)) {
            // Jika tidak ada video yang ditemukan, kirim respons JSON
            return response()->json([
                'message' => 'Maaf kata yang anda masukkan belum tersedia, kami akan terus melakukan update secara berkala'
            ], 404);
        }

        // Inisialisasi array untuk menyimpan konten video
        $videoContents = [];

        // Baca konten video untuk setiap path yang sesuai
        foreach ($videoPaths as $path) {
            // Mendapatkan konten video
            $content = file_get_contents($path);

            // Tambahkan konten video ke dalam array
            $videoContents[] = $content;
        }

        // Menggabungkan konten video
        $mergedContent = implode('', $videoContents);

        // Mendapatkan tipe MIME dari video pertama
        $firstVideoPath = $videoPaths[0];
        $firstVideoMime = mime_content_type($firstVideoPath);

        // Mengirim respons dengan tipe MIME yang tepat
        return response($mergedContent)->header('Content-Type', $firstVideoMime);
    }


}
