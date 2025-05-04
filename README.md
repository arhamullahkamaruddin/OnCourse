<h3  align="center">OnCourse - Sistem Manajemen Kursus Online</h3>
<br/><br/><br/><br/><br/>
<p align="center">
<img src="Logo Unsulbar 1.png"  width="250px" >
</p>
<br/><br/><br/><br/><br/><br/>
<p  align="center"><strong>Arhamullah Kamaruddin</strong><br/>
D0223002<br/><br/><br/><br/><br/>
Framework Web Based<br/>2025</p>

<hr/>

<h2>📌 Role dan Fitur</h2>

<h3>1. Admin</h3>
<ul>
  <li>Hak Akses: Pengelola penuh</li>
  <li>Fitur:
    <ul>
      <li>Mengelola user</li>
      <li>Mengelola semua kursus</li>
      <li>Melihat transaksi dan statistik</li>
      <li>Menerbitkan/mengarsipkan kursus</li>
      <li>Mereset password</li>
      <li>Menonaktifkan akun</li>
    </ul>
  </li>
</ul>

<h3>2. Student</h3>
<ul>
  <li>Hak Akses: Akses kursus</li>
  <li>Fitur:
    <ul>
      <li>Mendaftar dan login</li>
      <li>Melihat dan membeli kursus</li>
      <li>Memberi rating & ulasan</li>
      <li>Dapat menjadi instructor</li>
    </ul>
  </li>
</ul>

<h3>3. Instructor</h3>
<ul>
  <li>Hak Akses: Pengajar kursus</li>
  <li>Fitur:
    <ul>
      <li>Membuat, edit, hapus kursus</li>
      <li>Kelola materi</li>
      <li>Statistik & feedback</li>
    </ul>
  </li>
</ul>

<hr/>

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
