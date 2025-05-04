<h3  align="center">OnCourse - Sistem Manajemen Kursus Online</h3>
<br/><br/><br/><br/><br/>
<p align="center">
<img src="Logo Unsulbar 1.png"  width="250px" >
</p>
<br/><br/><br/><br/><br/><br/>
<p  align="center"><strong>Arhamullah Kamaruddin</strong><br/>
D0223002<br/><br/><br/><br/><br/>
Framework Web Based<br/>2025</p>
<br/><br/><br/><br/><br/>

<h2>Role dan Fitur</h2>
<h3>1. Admin</h3>
<ul>
  <li>Hak Akses: Pengelola penuh, memiliki kontrol atas seluruh sistem.</li>
  <li>Fitur:
    <ul>
      <li>Mengelola user (menambah, mengubah, menghapus student/instructor).</li>
      <li>Melihat dan mengelola semua kursus yang dibuat oleh instructor.</li>
      <li>Melihat transaksi pembayaran dan statistik kursus serta pengguna.</li>
      <li>Menerbitkan atau mengarsipkan kursus.</li>
      <li>Mereset password user.</li>
      <li>Menonaktifkan akun.</li>
    </ul>
  </li>
</ul>

<h3>2. Student</h3>
<ul>
  <li>Hak Akses:  Pengguna yang hanya dapat mengakses kursus.</li>
  <li>Fitur:
    <ul>
      <li>Mendaftar dan login.</li>
      <li>Melihat daftar kursus yang tersedia.</li>
      <li>Melihat detail kursus.</li>
      <li>Membeli kursus dan mengakses materi yang sudah dibeli.</li>
      <li>Memberikan rating dan ulasan pada kursus.</li>
      <li>Dapat menjadi instructor otomatis jika membuat kursus (menjadi instructor tambahan).</li>
    </ul>
  </li>
</ul>

<h3>3. Instructor</h3>
<ul>
  <li>Hak Akses: Pengguna yang mengajar atau membuat kursus.</li>
  <li>Fitur:
    <ul>
      <li>Membuat kursus, mengedit, dan menghapus kursus.</li>
      <li>Menambah materi (lesson) pada kursus yang dikelola.</li>
      <li>Melihat daftar siswa yang mengikuti kursusnya.</li>
      <li>Melihat statistik dan feedback untuk kursusnya.</li>
      <li>Seorang instructor juga memiliki hak sebagai student (akses untuk membeli dan mengikuti kursus lain) jika ia membuat kursus.</li>
    </ul>
  </li>
</ul>


<h3>Konsep Role di Tabel Users:</h3>
<ul>
  <li>User: Pada tabel users, hanya ada dua tipe role utama: admin dan user.</li>
  <li>Instructor: Status "instructor" diubah dari status user biasa (dengan flag is_instructor=true), sehingga tidak ada pemisahan akun antara user dan instructor.</li>
</ul>

<h2>📋 Struktur Tabel Database</h2>

<h3>Tabel: <code>courses</code></h3>
<table>
  <thead>
    <tr><th>Field</th><th>Tipe</th><th>Keterangan</th></tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>bigint</td><td>ID unik kursus</td></tr>
    <tr><td>instructor_id</td><td>foreignId</td><td>Referensi ke users</td></tr>
    <tr><td>title</td><td>string</td><td>Judul kursus</td></tr>
    <tr><td>description</td><td>text</td><td>Deskripsi</td></tr>
    <tr><td>category</td><td>enum</td><td>Kategori</td></tr>
    <tr><td>price</td><td>decimal</td><td>Harga</td></tr>
    <tr><td>type</td><td>enum</td><td>Jenis kursus</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Tanggal buat</td></tr>
  </tbody>
</table>

<!-- Lanjutkan pola ini untuk tabel lainnya: lessons, quizzes, questions, student_progress, certificates, orders, transactions, disputes, dispute_files -->

<hr/>

<h2>🔗 Relasi Antar Tabel</h2>
<ol>
  <li><strong>users</strong> ↔ <strong>courses</strong>: 1-to-many</li>
  <li><strong>courses</strong> ↔ <strong>lessons</strong>: 1-to-many</li>
  <li><strong>users</strong> ↔ <strong>discussions</strong>: 1-to-many</li>
  <li><strong>courses</strong> ↔ <strong>discussions</strong>: 1-to-many</li>
  <li><strong>quizzes</strong> ↔ <strong>questions</strong>: 1-to-many</li>
  <li><strong>orders</strong> ↔ <strong>transactions</strong>: 1-to-1</li>
  <li><strong>disputes</strong> ↔ <strong>dispute_files</strong>: 1-to-many</li>
</ol>

<p>...dan lain-lain sesuai dokumentasi lengkap.</p>

<hr/>
