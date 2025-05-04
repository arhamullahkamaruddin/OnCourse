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

<!-- Lanjutkan pola ini untuk tabel lainnya: lessons, quizzes, questions, student_progress, certificates, orders, transactions, disputes, dispute_files -->

<hr/>

<h2>Relasi Antar Tabel</h2>

<h2>Relasi Antar Tabel</h2>

<table>
  <tr><th>No</th><th>Relasi</th><th>Jenis Relasi</th><th>Tabel yang Berelasi</th><th>Penjelasan</th><th>Kunci</th></tr>
  <tr>
    <td>1</td>
    <td>users ↔ courses</td>
    <td>One-to-many</td>
    <td>users (instruktur) → courses</td>
    <td>Instruktur bisa membuat banyak kursus.</td>
    <td>instructor_id → users.id</td>
  </tr>
  <tr>
    <td>2</td>
    <td>courses ↔ lessons</td>
    <td>One-to-many</td>
    <td>courses → lessons</td>
    <td>Kursus memiliki banyak materi.</td>
    <td>course_id → courses.id</td>
  </tr>
  <tr>
    <td>3</td>
    <td>users ↔ discussions</td>
    <td>One-to-many</td>
    <td>users → discussions</td>
    <td>Pengguna bisa membuat banyak diskusi.</td>
    <td>user_id → users.id</td>
  </tr>
  <tr>
    <td>4</td>
    <td>courses ↔ discussions</td>
    <td>One-to-many</td>
    <td>courses → discussions</td>
    <td>Kursus memiliki banyak diskusi.</td>
    <td>course_id → courses.id</td>
  </tr>
  <tr>
    <td>5</td>
    <td>users ↔ quizzes</td>
    <td>One-to-many</td>
    <td>users (instruktur) → quizzes</td>
    <td>Instruktur bisa membuat banyak kuis.</td>
    <td>user_id → users.id</td>
  </tr>
  <tr>
    <td>6</td>
    <td>quizzes ↔ questions</td>
    <td>One-to-many</td>
    <td>quizzes → questions</td>
    <td>Kuis memiliki banyak pertanyaan.</td>
    <td>quiz_id → quizzes.id</td>
  </tr>
  <tr>
    <td>7</td>
    <td>users ↔ student_progress</td>
    <td>One-to-many</td>
    <td>users (student) → student_progress</td>
    <td>Student memiliki banyak progress.</td>
    <td>user_id → users.id</td>
  </tr>
  <tr>
    <td>8</td>
    <td>courses ↔ student_progress</td>
    <td>One-to-many</td>
    <td>courses → student_progress</td>
    <td>Kursus memiliki banyak progress siswa.</td>
    <td>course_id → courses.id</td>
  </tr>
  <tr>
    <td>9</td>
    <td>users ↔ certificates</td>
    <td>One-to-many</td>
    <td>users (student) → certificates</td>
    <td>Student menerima sertifikat kursus.</td>
    <td>user_id → users.id</td>
  </tr>
  <tr>
    <td>10</td>
    <td>courses ↔ certificates</td>
    <td>One-to-many</td>
    <td>courses → certificates</td>
    <td>Kursus menghasilkan banyak sertifikat.</td>
    <td>course_id → courses.id</td>
  </tr>
  <tr>
    <td>11</td>
    <td>users ↔ orders</td>
    <td>One-to-many</td>
    <td>users → orders</td>
    <td>Student melakukan banyak order.</td>
    <td>user_id → users.id</td>
  </tr>
  <tr>
    <td>12</td>
    <td>courses ↔ orders</td>
    <td>One-to-many</td>
    <td>courses → orders</td>
    <td>Kursus dibeli oleh banyak student.</td>
    <td>course_id → courses.id</td>
  </tr>
  <tr>
    <td>13</td>
    <td>orders ↔ transactions</td>
    <td>One-to-one</td>
    <td>orders → transactions</td>
    <td>Setiap order punya satu transaksi.</td>
    <td>order_id → orders.id</td>
  </tr>
  <tr>
    <td>14</td>
    <td>users ↔ transactions</td>
    <td>One-to-many</td>
    <td>users (instruktur) → transactions</td>
    <td>Instruktur menerima banyak pembayaran.</td>
    <td>instructor_id → users.id</td>
  </tr>
  <tr>
    <td>15</td>
    <td>orders ↔ disputes</td>
    <td>One-to-one</td>
    <td>orders → disputes</td>
    <td>Satu order bisa memiliki satu dispute.</td>
    <td>order_id → orders.id</td>
  </tr>
  <tr>
    <td>16</td>
    <td>disputes ↔ dispute_files</td>
    <td>One-to-many</td>
    <td>disputes → dispute_files</td>
    <td>Dispute memiliki banyak file bukti.</td>
    <td>dispute_id → disputes.id</td>
  </tr>
</table>

</body>
</html>

