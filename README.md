<br /><br /><br /><br /><br />
<h3 align="center">OnCourse - Sistem Manajemen Kursus Online</h3>
<br /><br /><br /><br /><br />
<p align="center">
    <img src="resources/images/unsulbar-logo.png" width="250px">
</p>
<br /><br /><br /><br /><br /><br />
<p align="center"><strong>Arhamullah Kamaruddin</strong><br />
    D0223002<br /><br /><br /><br /><br />
    Framework Web Based<br />2025</p>
<br /><br /><br /><br /><br />

<h2>Role dan Fitur</h2>

<h3>1. Admin</h3>
<ul>
    <li><strong>Hak Akses:</strong> Pengelola penuh, memiliki kontrol atas seluruh sistem.</li>
    <li><strong>Fitur:</strong>
        <ul>
            <li>Mengelola akun (menambah, mengubah, menghapus student/instructor).</li>
            <li><del>Melihat dan mengelola semua kursus yang dibuat oleh instructor.</del></li>
            <li>Melihat transaksi pembayaran<del> dan melakukan refund jika diperlukan.</del></li>
            <li><del>Menangani dispute antara student dan instructor (menentukan hasil akhir).</del></li>
        </ul>
    </li>
</ul>

<h3>2. Instructor</h3>
<ul>
    <li><strong>Hak Akses:</strong> Kreator konten, memiliki akses untuk membuat dan mengelola kursus.</li>
    <li><strong>Fitur:</strong>
        <ul>
            <li>Mendaftar dan login ke dalam sistem.</li>
            <li>Membuat kursus baru dan mengelola kursus yang sudah dibuat.</li>
            <li>Menambahkan materi ke dalam kursus.</li>
            <li>Melihat daftar student yang mengikuti kursusnya<del> dan memantau progres mereka.</del></li>
            <li><del>Menerima pembayaran setelah pembelian kursus selesai dan disetujui oleh student.</del></li>
            <li><del>Mengajukan dispute jika terjadi masalah dengan student atau pembayaran.</li>
        </ul></del>
    </li>
</ul>

<h3>3. Student</h3>
<ul>
    <li><strong>Hak Akses:</strong> Pengguna pembelajar, memiliki akses terbatas pada kursus dan transaksi pribadi.</li>
    <li><strong>Fitur:</strong>
        <ul>
            <li>Mendaftar dan login ke dalam sistem.</li>
            <li>Mencari dan melihat detail kursus yang tersedia.</li>
            <li>Membeli kursus dan melakukan pembayaran.</li>
            <li>Mengakses materi kursus yang telah dibeli.</li>
            <li>Memberikan rating dan ulasan setelah membeli kursus.</li>
            <li><del>Mengajukan dispute jika ada masalah dengan kursus atau pembayaran.</del></li>
        </ul>
    </li>
</ul>

<h2>Struktur Tabel Database</h2>

<h3>Tabel: <code>users</code></h3>
<table>
    <thead>
        <tr>
            <th>Field</th>
            <th>Tipe</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>bigint</td>
            <td>ID unik pengguna</td>
        </tr>
        <tr>
            <td>name</td>
            <td>string</td>
            <td>Nama lengkap pengguna</td>
        </tr>
        <tr>
            <td>email</td>
            <td>string</td>
            <td>Email unik pengguna</td>
        </tr>
        <tr>
            <td><del>email_verified_at</del></td>
            <td><del>timestamp (nullable)</del></td>
            <td><del>Tanggal verifikasi email</del></td>
        </tr>
        <tr>
            <td>password</td>
            <td>string</td>
            <td>Password terenkripsi pengguna</td>
        </tr>
        <tr>
            <td>role</td>
            <td>enum</td>
            <td>Peran pengguna: admin, student, atau instructor</td>
        </tr>
        <tr>
            <td><del>remember_token</del></td>
            <td><del>string (nullable)</del></td>
            <td><del>Token untuk sesi login "remember me"</del></td>
        </tr>
        <tr>
            <td>created_at</td>
            <td>timestamp</td>
            <td>Waktu pembuatan akun</td>
        </tr>
        <tr>
            <td>updated_at</td>
            <td>timestamp</td>
            <td>Waktu pembaruan akun terakhir</td>
        </tr>
    </tbody>
</table>

<h3>Tabel: <code>courses</code></h3>
<table>
    <thead>
        <tr>
            <th>Field</th>
            <th>Tipe</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>bigint</td>
            <td>ID unik kursus</td>
        </tr>
        <tr>
            <td>instructor_id</td>
            <td>foreignId</td>
            <td>Referensi ke users.id</td>
        </tr>
        <tr>
            <td>title</td>
            <td>string</td>
            <td>Judul kursus</td>
        </tr>
        <tr>
            <td>description</td>
            <td>text</td>
            <td>Deskripsi lengkap</td>
        </tr>
        <tr>
            <td>price</td>
            <td>decimal(10,2)</td>
            <td>Harga kursus</td>
        </tr>
        <tr>
            <td>created_at</td>
            <td>timestamp</td>
            <td>Tanggal buat kursus</td>
        </tr>
        <tr>
            <td>updated_at</td>
            <td>timestamp</td>
            <td>Terakhir diubah</td>
        </tr>
    </tbody>
</table>

<h3>Tabel: <code>lessons</code></h3>
<table>
    <thead>
        <tr>
            <th>Field</th>
            <th>Tipe</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>bigint</td>
            <td>ID unik materi</td>
        </tr>
        <tr>
            <td>course_id</td>
            <td>foreignId</td>
            <td>Referensi ke courses.id</td>
        </tr>
        <tr>
            <td>title</td>
            <td>string</td>
            <td>Judul materi</td>
        </tr>
        <tr>
            <td><del>content</del></td>
            <td><del>text (nullable)</del></td>
            <td><del>Konten teks atau HTML</del></td>
        </tr>
        <tr>
            <td><del>file_url</del></td>
            <td><del>string (nullable)</del></td>
            <td><del>URL file materi</del></td>
        </tr>
        <tr>
            <td>file</td>
            <td>string</td>
            <td>Nama file materi</td>
        </tr>
        <tr>
            <td>created_at</td>
            <td>timestamp</td>
            <td>Tanggal buat</td>
        </tr>
        <tr>
            <td>updated_at</td>
            <td>timestamp</td>
            <td>Terakhir diubah</td>
        </tr>
    </tbody>
</table>

<h3>Tabel: <code>orders</code></h3>
<table>
    <thead>
        <tr>
            <th>Field</th>
            <th>Tipe</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>bigint</td>
            <td>ID unik order</td>
        </tr>
        <tr>
            <td>student_id</td>
            <td>foreignId</td>
            <td>Referensi ke student (users.id)</td>
        </tr>
        <tr>
            <td>course_id</td>
            <td>foreignId</td>
            <td>Kursus yang dibeli</td>
        </tr>
        <tr>
            <td><del>amount</del></td>
            <td><del>decimal(10,2)</del></td>
            <td><del>Jumlah dibayar</del></td>
        </tr>
        <tr>
            <td><del>status</del></td>
            <td><del>enum</del></td>
            <td><del>pending, paid, completed, disputed, refunded</del></td>
        </tr>
        <tr>
            <td>created_at</td>
            <td>timestamp</td>
            <td>Tanggal order</td>
        </tr>
        <tr>
            <td>updated_at</td>
            <td>timestamp</td>
            <td>Terakhir diubah</td>
        </tr>
    </tbody>
</table>

<h3>Tabel: <code>transactions</code></h3>
<table>
    <thead>
        <tr>
            <th>Field</th>
            <th>Tipe</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>bigint</td>
            <td>ID transaksi</td>
        </tr>
        <tr>
            <td>order_id</td>
            <td>foreignId</td>
            <td>Referensi ke orders.id</td>
        </tr>
        <tr>
            <td>student_name</td>
            <td>string</td>
            <td>Nama siswa yang membayar</td>
        </tr>
        <tr>
            <td>payment_proof</td>
            <td>string</td>
            <td>Nama file bukti pembayaran</td>
        </tr>
        <tr>
            <td>status</td>
            <td>enum</td>
            <td>Status transaksi: menunggu, berhasil, atau ditolak</td>
        </tr>
        <tr>
            <td><del>instructor_id</del></td>
            <td><del>foreignId</del></td>
            <td><del>Instruktur penerima</del></td>
        </tr>
        <tr>
            <td><del>amount</del></td>
            <td><del>decimal(10,2)</del></td>
            <td><del>Jumlah dibayarkan</del></td>
        </tr>
        <tr>
            <td><del>released_at</del></td>
            <td><del>timestamp (nullable)</del></td>
            <td><del>Tanggal pencairan</del></td>
        </tr>
        <tr>
            <td>created_at</td>
            <td>timestamp</td>
            <td>Dibuat</td>
        </tr>
        <tr>
            <td>updated_at</td>
            <td>timestamp</td>
            <td>Diubah</td>
        </tr>
    </tbody>
</table>

<h3>Tabel: <code>reviews</code></h3>
<table>
    <thead>
        <tr>
            <th>Field</th>
            <th>Tipe</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>bigint</td>
            <td>ID unik ulasan</td>
        </tr>
        <tr>
            <td>course_id</td>
            <td>foreignId</td>
            <td>Referensi ke courses.id</td>
        </tr>
        <tr>
            <td>student_id</td>
            <td>foreignId</td>
            <td>Referensi ke users.id (student)</td>
        </tr>
        <tr>
            <td>rating</td>
            <td>tinyInteger</td>
            <td>Penilaian (1-5)</td>
        </tr>
        <tr>
            <td>comment</td>
            <td>text</td>
            <td>Isi komentar ulasan</td>
        </tr>
        <tr>
            <td>created_at</td>
            <td>timestamp</td>
            <td>Tanggal ulasan dibuat</td>
        </tr>
        <tr>
            <td>updated_at</td>
            <td>timestamp</td>
            <td>Terakhir diubah</td>
        </tr>
    </tbody>
</table>

<h3>Tabel: <code>disputes</code></h3>
<table>
    <thead>
        <tr>
            <th>Field</th>
            <th>Tipe</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>bigint</td>
            <td>ID komplain</td>
        </tr>
        <tr>
            <td><del>order_id</del></td>
            <td><del>foreignId</del></td>
            <td><del>Order terkait</del></td>
        </tr>
        <tr>
            <td><del>user_id</del></td>
            <td><del>foreignId</del></td>
            <td><del>Pengaju komplain (student)</del></td>
        </tr>
        <tr>
            <td><del>reason</del></td>
            <td><del>text</del></td>
            <td><del>Alasan komplain</del></td>
        </tr>
        <tr>
            <td><del>status</del></td>
            <td><del>enum</del></td>
            <td><del>open, reviewing, resolved, rejected</del></td>
        </tr>
        <tr>
            <td>created_at</td>
            <td>timestamp</td>
            <td>Dibuat</td>
        </tr>
        <tr>
            <td>updated_at</td>
            <td>timestamp</td>
            <td>Diubah</td>
        </tr>
    </tbody>
</table>

<h3>Tabel: <code>dispute_files</code></h3>
<table>
    <thead>
        <tr>
            <th>Field</th>
            <th>Tipe</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>bigint</td>
            <td>ID file bukti</td>
        </tr>
        <tr>
            <td><del>dispute_id</del></td>
            <td><del>foreignId</del></td>
            <td><del>Referensi ke disputes.id</del></td>
        </tr>
        <tr>
            <td><del>file_path</del></td>
            <td><del>string</del></td>
            <td><del>URL/path file bukti</del></td>
        </tr>
        <tr>
            <td>created_at</td>
            <td>timestamp</td>
            <td>Diunggah</td>
        </tr>
        <tr>
            <td>updated_at</td>
            <td>timestamp</td>
            <td>Diperbarui</td>
        </tr>
    </tbody>
</table>

<h2>Jenis Relasi dan Tabel yang Berelasi</h2>

<h3>1. Relasi antara users dan courses (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: users (instruktur) ↔ courses</li>
    <li>Penjelasan: Seorang instruktur bisa membuat banyak kursus. <ul>
            <li>Kunci: <code>instructor_id</code> di tabel <code>courses</code> mengacu pada <code>id</code> di
                tabel <code>users</code>.</li>
        </ul>
    </li>
</ul>
<h3>2. Relasi antara courses dan lessons (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: courses ↔ lessons</li>
    <li>Penjelasan: Setiap kursus dapat memiliki banyak materi (lesson). <ul>
            <li>Kunci: <code>course_id</code> di tabel <code>lessons</code> mengacu pada <code>id</code> di tabel
                <code>courses</code>.</li>
        </ul>
    </li>
</ul>
<h3>3. Relasi antara users dan orders (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: users ↔ orders</li>
    <li>Penjelasan: Seorang student dapat melakukan banyak pembelian kursus. <ul>
            <li>Kunci: <code>student_id</code> di tabel <code>orders</code> mengacu pada <code>id</code> di tabel
                <code>users</code>.</li>
        </ul>
    </li>
</ul>
<h3>4. Relasi antara courses dan orders (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: courses ↔ orders</li>
    <li>Penjelasan: Kursus dapat dibeli oleh banyak student. <ul>
            <li>Kunci: <code>course_id</code> di tabel <code>orders</code> mengacu pada <code>id</code> di tabel
                <code>courses</code>.</li>
        </ul>
    </li>
</ul>
<h3>5. Relasi antara orders dan transactions (1-to-1)</h3>
<ul>
    <li>Jenis Relasi: One-to-one (1-to-1)</li>
    <li>Tabel yang Berelasi: orders ↔ transactions</li>
    <li>Penjelasan: Satu order hanya memiliki satu transaksi pembayaran. <ul>
            <li>Kunci: <code>order_id</code> di tabel <code>transactions</code> mengacu pada <code>id</code> di
                tabel <code>orders</code>.</li>
        </ul>
    </li>
</ul>
<h3>6. Relasi antara courses dan reviews (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: courses ↔ reviews</li>
    <li>Penjelasan: Setiap kursus bisa memiliki banyak review. <ul>
            <li>Kunci: <code>course_id</code> di tabel <code>reviews</code> mengacu pada <code>id</code> di tabel
                <code>courses</code>.</li>
        </ul>
    </li>
</ul>
<h3>7. Relasi antara users dan reviews (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: users ↔ reviews</li>
    <li>Penjelasan: Student dapat memberikan banyak review untuk kursus yang diikuti. <ul>
            <li>Kunci: <code>student_id</code> di tabel <code>reviews</code> mengacu pada <code>id</code> di tabel
                <code>users</code>.</li>
        </ul>
    </li>
</ul>
<h3>8. Relasi antara transactions dan course (1-to-1 melalui orders)</h3>
<ul>
    <li>Jenis Relasi: One-to-one (1-to-1 via hasOneThrough)</li>
    <li>Tabel yang Berelasi: transactions ↔ orders ↔ courses</li>
    <li>Penjelasan: Transaksi memiliki akses ke kursus melalui order. <ul>
            <li>Kunci: <code>transactions.order_id → orders.id</code>, <code>orders.course_id → courses.id</code>
            </li>
        </ul>
    </li>
</ul>
<h3>9. Relasi antara transactions dan student (1-to-1 melalui orders)</h3>
<ul>
    <li>Jenis Relasi: One-to-one (1-to-1 via hasOneThrough)</li>
    <li>Tabel yang Berelasi: transactions ↔ orders ↔ users (student)</li>
    <li>Penjelasan: Transaksi bisa mengakses student yang melakukan transaksi tersebut melalui order. <ul>
            <li>Kunci: <code>transactions.order_id → orders.id</code>, <code>orders.student_id → users.id</code>
            </li>
        </ul>
    </li>
</ul>
<h3>10. Relasi antara users dan purchasedCourses (many-to-many)</h3>
<ul>
    <li>Jenis Relasi: Many-to-many (pivot)</li>
    <li>Tabel yang Berelasi: users (students) ↔ courses</li>
    <li>Penjelasan: Student dapat membeli banyak kursus, dan kursus dapat dibeli oleh banyak student. Hanya yang
        transaksinya <code>berhasil</code> yang dianggap valid. <ul>
            <li>Pivot: Tabel <code>orders</code> digunakan sebagai tabel pivot</li>
            <li>Kunci: <code>orders.student_id → users.id</code>, <code>orders.course_id → courses.id</code></li>
        </ul>
    </li>
</ul>
<h3>11. Relasi antara courses dan students (many-to-many dengan syarat)</h3>
<ul>
    <li>Jenis Relasi: Many-to-many (dengan kondisi transaksi berhasil)</li>
    <li>Tabel yang Berelasi: courses ↔ users (students)</li>
    <li>Penjelasan: Kursus memiliki banyak siswa yang telah membeli dan menyelesaikan pembayaran dengan status
        <code>berhasil</code>.</li>
    <li> Kunci: Melalui tabel <code>orders</code>, dan join dengan <code>transactions</code> menggunakan kondisi
        <code>transactions.status = 'berhasil'</code> </li>
</ul>
<del>
    <h3>Relasi antara users dan discussions (1-to-many)</h3>
    <h3>Relasi antara courses dan discussions (1-to-many)</h3>
    <h3>Relasi antara users dan quizzes (1-to-many)</h3>
    <h3>Relasi antara quizzes dan questions (1-to-many)</h3>
    <h3>Relasi antara users dan student_progress (1-to-many)</h3>
    <h3>Relasi antara courses dan student_progress (1-to-many)</h3>
    <h3>Relasi antara users dan certificates (1-to-many)</h3>
    <h3>Relasi antara courses dan certificates (1-to-many)</h3>
    <h3>Relasi antara users dan transactions (1-to-many)</h3>
    <h3>Relasi antara orders dan disputes (1-to-1)</h3>
    <h3>Relasi antara disputes dan dispute_files (1-to-many)</h3>
</del>

<br />

<p>Catatan: Deskripsi tabel di atas sewaktu-waktu dapat berubah</p>
