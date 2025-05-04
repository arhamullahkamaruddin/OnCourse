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

<br/><br/><br/><br/><br/><br/>

<h2>Struktur Tabel Database</h2>

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

<h3>Tabel: <code>lessons</code></h3>
<table>
  <thead>
    <tr><th>Field</th><th>Tipe</th><th>Keterangan</th></tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>bigint</td><td>ID unik materi</td></tr>
    <tr><td>course_id</td><td>foreignId</td><td>ID kursus yang memiliki materi ini (referensi ke courses)</td></tr>
    <tr><td>title</td><td>string</td><td>Judul materi</td></tr>
    <tr><td>type</td><td>enum</td><td>Jenis materi: video, link (Zoom/Google Meet), teks, atau file</td></tr>
    <tr><td>content</td><td>text</td><td>Konten materi dalam format teks (HTML)</td></tr>
    <tr><td>file_url</td><td>string</td><td>URL file materi (video, dokumen, dsb)</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Waktu pembuatan materi</td></tr>
    <tr><td>updated_at</td><td>timestamp</td><td>Waktu pembaruan terakhir materi</td></tr>
  </tbody>
</table>

<h3>Tabel: <code>discussions</code></h3>
<table>
  <thead>
    <tr><th>Field</th><th>Tipe</th><th>Keterangan</th></tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>bigint</td><td>ID unik diskusi</td></tr>
    <tr><td>course_id</td><td>foreignId</td><td>ID kursus yang memiliki diskusi ini (referensi ke courses)</td></tr>
    <tr><td>user_id</td><td>foreignId</td><td>ID pengguna yang memulai diskusi (student atau instruktur, referensi ke users)</td></tr>
    <tr><td>content</td><td>text</td><td>Isi diskusi</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Waktu pembuatan diskusi</td></tr>
    <tr><td>updated_at</td><td>timestamp</td><td>Waktu pembaruan terakhir diskusi</td></tr>
  </tbody>
</table>

<h3>Tabel: <code>quizzes</code></h3>
<table>
  <thead>
    <tr><th>Field</th><th>Tipe</th><th>Keterangan</th></tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>bigint</td><td>ID unik kuis</td></tr>
    <tr><td>course_id</td><td>foreignId</td><td>ID kursus yang memiliki kuis ini (referensi ke courses)</td></tr>
    <tr><td>title</td><td>string</td><td>Judul kuis</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Waktu pembuatan kuis</td></tr>
    <tr><td>updated_at</td><td>timestamp</td><td>Waktu pembaruan terakhir kuis</td></tr>
  </tbody>
</table>

<h3>Tabel: <code>questions</code></h3>
<table>
  <thead>
    <tr><th>Field</th><th>Tipe</th><th>Keterangan</th></tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>bigint</td><td>ID unik pertanyaan</td></tr>
    <tr><td>quiz_id</td><td>foreignId</td><td>ID kuis yang memiliki pertanyaan ini (referensi ke quizzes)</td></tr>
    <tr><td>question</td><td>string</td><td>Isi pertanyaan</td></tr>
    <tr><td>choices</td><td>json</td><td>Pilihan jawaban dalam format JSON (misal: {"A": "Option 1", "B": "Option 2"})</td></tr>
    <tr><td>correct_answer</td><td>string</td><td>Jawaban yang benar (misal: 'A')</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Waktu pembuatan pertanyaan</td></tr>
    <tr><td>updated_at</td><td>timestamp</td><td>Waktu pembaruan terakhir pertanyaan</td></tr>
  </tbody>
</table>

<h3>Tabel: <code>student_progress</code></h3>
<table>
  <thead>
    <tr><th>Field</th><th>Tipe</th><th>Keterangan</th></tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>bigint</td><td>ID unik progress student</td></tr>
    <tr><td>user_id</td><td>foreignId</td><td>ID student yang mengikuti kursus (referensi ke users)</td></tr>
    <tr><td>course_id</td><td>foreignId</td><td>ID kursus yang diikuti oleh student (referensi ke courses)</td></tr>
    <tr><td>completed_lessons</td><td>integer</td><td>Jumlah materi yang sudah diselesaikan oleh student</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Waktu pembuatan progress</td></tr>
    <tr><td>updated_at</td><td>timestamp</td><td>Waktu pembaruan terakhir progress</td></tr>
  </tbody>
</table>

<h3>Tabel: <code>certificates</code></h3>
<table>
  <thead>
    <tr><th>Field</th><th>Tipe</th><th>Keterangan</th></tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>bigint</td><td>ID sertifikat</td></tr>
    <tr><td>user_id</td><td>foreignId</td><td>ID student yang menerima sertifikat (referensi ke users)</td></tr>
    <tr><td>course_id</td><td>foreignId</td><td>ID kursus yang diselesaikan oleh student (referensi ke courses)</td></tr>
    <tr><td>certificate_url</td><td>string</td><td>URL sertifikat yang dihasilkan</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Waktu pembuatan sertifikat</td></tr>
    <tr><td>updated_at</td><td>timestamp</td><td>Waktu pembaruan terakhir sertifikat</td></tr>
  </tbody>
</table>

<h3>Tabel: <code>orders</code></h3>
<table>
  <thead>
    <tr><th>Field</th><th>Tipe</th><th>Keterangan</th></tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>bigint</td><td>ID unik order</td></tr>
    <tr><td>user_id</td><td>foreignId</td><td>ID student yang membeli kursus (referensi ke users)</td></tr>
    <tr><td>course_id</td><td>foreignId</td><td>ID kursus yang dibeli (referensi ke courses)</td></tr>
    <tr><td>amount</td><td>decimal(10,2)</td><td>Jumlah pembayaran yang dilakukan</td></tr>
    <tr><td>status</td><td>enum</td><td>Status order (misal: pending, paid, completed, disputed, refunded)</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Waktu pembuatan order</td></tr>
    <tr><td>updated_at</td><td>timestamp</td><td>Waktu pembaruan terakhir order</td></tr>
  </tbody>
</table>

<h3>Tabel: <code>transactions</code></h3>
<table>
  <thead>
    <tr><th>Field</th><th>Tipe</th><th>Keterangan</th></tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>bigint</td><td>ID transaksi</td></tr>
    <tr><td>order_id</td><td>foreignId</td><td>ID order yang terkait dengan transaksi ini (referensi ke orders)</td></tr>
    <tr><td>instructor_id</td><td>foreignId</td><td>ID instruktur yang menerima pembayaran (referensi ke users)</td></tr>
    <tr><td>amount</td><td>decimal(10,2)</td><td>Jumlah uang yang dibayar kepada instruktur</td></tr>
    <tr><td>status</td><td>enum</td><td>Status transaksi (misal: pending, released, held, refunded)</td></tr>
    <tr><td>released_at</td><td>timestamp</td><td>Waktu dana dibebaskan ke instruktur</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Waktu pembuatan transaksi</td></tr>
    <tr><td>updated_at</td><td>timestamp</td><td>Waktu pembaruan terakhir transaksi</td></tr>
  </tbody>
</table>

<h3>Tabel: <code>disputes</code></h3>
<table>
  <thead>
    <tr><th>Field</th><th>Tipe</th><th>Keterangan</th></tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>bigint</td><td>ID unik dispute</td></tr>
    <tr><td>order_id</td><td>foreignId</td><td>ID order yang terkait dengan dispute (referensi ke orders)</td></tr>
    <tr><td>user_id</td><td>foreignId</td><td>ID pengguna yang mengajukan komplain (referensi ke users)</td></tr>
    <tr><td>reason</td><td>text</td><td>Alasan pengajuan komplain</td></tr>
    <tr><td>status</td><td>enum</td><td>Status dispute (misal: open, reviewing, resolved, rejected)</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Waktu pembuatan dispute</td></tr>
    <tr><td>updated_at</td><td>timestamp</td><td>Waktu pembaruan terakhir dispute</td></tr>
  </tbody>
</table>

<h3>Tabel: <code>dispute_files</code></h3>
<table>
  <thead>
    <tr><th>Field</th><th>Tipe</th><th>Keterangan</th></tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>bigint</td><td>ID unik file bukti</td></tr>
    <tr><td>dispute_id</td><td>foreignId</td><td>ID dispute yang terkait dengan file bukti (referensi ke disputes)</td></tr>
    <tr><td>file_path</td><td>string</td><td>Lokasi atau URL file bukti pendukung</td></tr>
    <tr><td>created_at</td><td>timestamp</td><td>Waktu upload file bukti</td></tr>
    <tr><td>updated_at</td><td>timestamp</td><td>Waktu pembaruan terakhir file bukti</td></tr>
  </tbody>
</table>

<br/><br/><br/><br/><br/>

<h2>Jenis Relasi dan Tabel yang Berelasi</h2>
<h3>Relasi antara users dan courses (1-to-many)</h3>
<ul>
  <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: users (instruktur) ↔ courses</li>
  <li>Penjelasan: Seorang instruktur (user dengan status is_instructor = true) bisa membuat banyak kursus. Oleh karena itu, relasi antara users dan courses adalah satu ke banyak.
    <ul>
      <li>Kunci: instructor_id di tabel courses mengacu pada id di tabel users.</li>
    </ul>
  </li>
</ul>

