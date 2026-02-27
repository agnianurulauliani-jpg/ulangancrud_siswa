1. Apa kesulitan yang Anda temui saat menghubungkan Laravel dengan database?
<br>
Kesulitan yang saya temui ada pada bagian konfigurasi file .env, terutama saat menyesuaikan nama database, username, dan password agar sesuai dengan pengaturan di Laragon. Saya juga sempat mengalami error karena tabel belum dibuat atau nama tabel tidak sesuai dengan yang digunakan oleh model Laravel. Dari situ saya jadi lebih paham pentingnya penamaan tabel dan proses migration.
<br>
2. Bagaimana perbedaan proses CRUD di Laravel dibandingkan dengan PHP murni?
<br>
Menurut saya, CRUD di Laravel jauh lebih praktis karena sudah menggunakan konsep MVC dan Eloquent ORM, jadi tidak perlu menulis query SQL secara manual untuk operasi dasar. Sedangkan di PHP murni, kita harus menulis query sendiri dan mengatur semuanya secara manual, sehingga lebih berisiko terjadi kesalahan.
<br>
3. Bagaimana Anda memastikan keamanan saat melakukan operasi CRUD?
<br>
Untuk menjaga keamanan, saya memastikan menggunakan validasi input sebelum menyimpan data, mengatur $fillable pada model agar tidak semua data bisa diinput sembarangan, serta memanfaatkan fitur keamanan bawaan Laravel seperti CSRF protection. Dengan begitu, data yang disimpan lebih aman dan terkontrol.
