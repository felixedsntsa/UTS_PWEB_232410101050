## Lahan Tani

jadi Lahan Tani ini merupakan sistem berbasis web untuk mengelola beberapa jenis tanaman, bisa mulai dari daun hias, bunga, maupun buah

- Login: jadi setelah dari landing page user harus melakukan login terlebih dahulu menggunakan username dan password untuk bisa ke dashboard
- Dashboard: di dalam dashboard nanti ada ucapan "selamat datang {{ $username }}" berdasarkan username yang kita isi di login tadi (query parameter) dan ada card di bagian bawah berdasarkan jumlah array di function Dashboard() pada PageController (looping untuk array nya)
- Profil: menampilkan username dan password, membawa username dan password dari query parameter
- pengelolaan: menampilkan info lebih lengkap terkait produk tanaman, menggunakan looping array (foreach) dari setiap array di function pengelolaan agar array ditampilkan semua
