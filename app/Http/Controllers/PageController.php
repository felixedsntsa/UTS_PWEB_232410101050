<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function LandingPage() {
        return view('landing');
    }

    public function LoginPage() {
        return view('login');
    }

    public function Masuk(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        return redirect()->route('dashboard', ['username' => $username, 'password' => $password]);
    }

    public function Dashboard(Request $request) {
        $username = $request->query('username');
        $tanaman =
        [
            [
                'image' => 'asset/monstera_deliciosa.jpg',
                'nama' => 'Monstera Deliciosa',
                'jenis' => 'Daun Hias',
                'deskripsi' => 'Tanaman hias populer dengan daun besar berlubang yang unik. Memberikan kesan tropis pada ruangan.',
                'harga' => 'Rp 150.000',
            ],
            [
                'image' => 'asset/aglaonoma.jpg',
                'nama' => 'Aglaonema Red Anemone',
                'jenis' => 'Daun Hias',
                'deskripsi' => 'Aglaonema dengan corak merah menyala yang cantik. Cocok untuk mempercantik sudut ruangan.',
                'harga' => 'Rp 85.000',
            ],
            [
                'image' => 'asset/lavandula.jpg',
                'nama' => 'Lavandula Angustifolia',
                'jenis' => 'Bunga',
                'deskripsi' => 'Lavender dengan aroma harum yang menenangkan dan bunga ungu yang cantik. Dapat digunakan untuk aromaterapi.',
                'harga' => 'Rp 60.000',
            ],
            [
                'image' => 'asset/tomatcherry.jpg',
                'nama' => 'Tomat Cherry',
                'jenis' => 'Buah',
                'deskripsi' => 'Bibit tanaman tomat cherry yang menghasilkan buah kecil manis dan segar. Cocok ditanam di pot atau kebun kecil.',
                'harga' => 'Rp 25.000',
            ],
            [
                'image' => 'asset/lidahmertua.jpg',
                'nama' => 'Lidah Mertua',
                'jenis' => 'Daun Hias',
                'deskripsi' => 'Tanaman yang sangat mudah perawatannya dan dikenal mampu menyerap polutan udara di dalam ruangan.',
                'harga' => 'Rp 70.000',
            ],
            [
                'image' => 'asset/aloevera.jpg',
                'nama' => 'Aloe Vera',
                'jenis' => 'Sukulen',
                'deskripsi' => 'Tanaman sukulen dengan daun berdaging yang mengandung gel bermanfaat untuk kesehatan kulit dan rambut.',
                'harga' => 'Rp 40.000',
            ],

        ];

        return view('dashboard', ['tanaman' => $tanaman, 'username' => $username]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        $password = $request->query('password');

        return view('profile', ['username' => $username, 'password' => $password,]);
    }

    public function pengelolaan() {
        $list =
        [[
            'image' => 'asset/monstera_deliciosa.jpg',
            'nama' => 'Monstera Deliciosa',
            'jenis' => 'Daun Hias',
            'deskripsi' => 'Tanaman hias populer dengan daun besar berlubang yang unik. Memberikan kesan tropis pada ruangan.',
            'perawatan' => 'Siram saat tanah kering, Cahaya tidak langsung, Tanah gembur dan drainase baik.',
            'harga' => 'Rp 150.000',
        ],
        [
            'image' => 'asset/aglaonoma.jpg',
            'nama' => 'Aglaonema Red Anemone',
            'jenis' => 'Daun Hias',
            'deskripsi' => 'Aglaonema dengan corak merah menyala yang cantik. Cocok untuk mempercantik sudut ruangan.',
            'perawatan' => 'Siram seminggu sekali, Cahaya teduh hingga sedang, Tanah porous.',
            'harga' => 'Rp 85.000',
        ],
        [
            'image' => 'asset/lavandula.jpg',
            'nama' => 'Lavandula Angustifolia',
            'jenis' => 'Bunga',
            'deskripsi' => 'Lavender dengan aroma harum yang menenangkan dan bunga ungu yang cantik. Dapat digunakan untuk aromaterapi.',
            'perawatan' => 'Siram saat kering, Cahaya matahari penuh, Tanah berpasir dan kering.',
            'harga' => 'Rp 60.000',
        ],
        [
            'image' => 'asset/tomatcherry.jpg',
            'nama' => 'Tomat Cherry',
            'jenis' => 'Buah',
            'deskripsi' => 'Bibit tanaman tomat cherry yang menghasilkan buah kecil manis dan segar. Cocok ditanam di pot atau kebun kecil.',
            'perawatan' => 'Siram teratur, Cahaya matahari penuh, Tanah gembur dan kaya nutrisi.',
            'harga' => 'Rp 25.000',
        ],
        [
            'image' => 'asset/lidahmertua.jpg',
            'nama' => 'Lidah Mertua',
            'jenis' => 'Daun Hias',
            'deskripsi' => 'Tanaman yang sangat mudah perawatannya dan dikenal mampu menyerap polutan udara di dalam ruangan.',
            'perawatan' => 'Siram jarang (biarkan tanah benar-benar kering), Cahaya rendah hingga terang, Tanah berpasir.',
            'harga' => 'Rp 70.000',
        ],
        [
            'image' => 'asset/aloevera.jpg',
            'nama' => 'Aloe Vera',
            'jenis' => 'Sukulen',
            'deskripsi' => 'Tanaman sukulen dengan daun berdaging yang mengandung gel bermanfaat untuk kesehatan kulit dan rambut.',
            'perawatan' => 'Siram jarang (saat tanah kering), Cahaya matahari penuh atau sebagian, Tanah berpasir dan drainase baik.',
            'harga' => 'Rp 40.000',
        ],
        ];

        return view('pengelolaan', ['list' => $list]);
    }

    public function Logout() {
        return view('landing');
    }
}
