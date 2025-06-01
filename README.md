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
            <li>Melihat dan mengelola semua kursus yang dibuat oleh instructor.</li>
            <li>Melihat transaksi pembayaran dan melakukan refund jika diperlukan.</li>
            <li>Menangani dispute antara student dan instructor (menentukan hasil akhir).</li>
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
            <li>Melihat daftar student yang mengikuti kursusnya dan memantau progres mereka.</li>
            <li>Menerima pembayaran setelah pembelian kursus selesai dan disetujui oleh student.</li>
            <li>Mengajukan dispute jika terjadi masalah dengan student atau pembayaran.</li>
        </ul>
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
            <li>Mengajukan dispute jika ada masalah dengan kursus atau pembayaran.</li>
        </ul>
    </li>
</ul>

<h2>Struktur Tabel Database</h2>

<h3>Tabel: <code>users</code></h3>
| Field                 | Tipe                      | Keterangan                                        |
|------------------     |------------------------   |---------------------------------------------------|
| id                    | bigint                    | ID unik pengguna                                  |
| name                  | string                    | Nama lengkap pengguna                             |
| email                 | string                    | Email unik pengguna                               |
| ~~email_verified_at~~ | ~~timestamp (nullable)~~  | ~~Tanggal verifikasi email~~                      |
| password              | string                    | Password terenkripsi pengguna                     |
| role                  | enum                      | Peran pengguna: admin, student, atau instructor   |
| ~~remember_token~~    | ~~string (nullable)~~     | ~~Token untuk sesi login "remember me"~~          |
| created_at            | timestamp                 | Waktu pembuatan akun                              |
| updated_at            | timestamp                 | Waktu pembaruan akun terakhir                     |


<h3>Tabel: <code>courses</code></h3>
| Field         | Tipe             | Keterangan             |
|---------------|------------------|------------------------|
| id            | bigint           | ID unik kursus         |
| instructor_id | foreignId        | Referensi ke users.id  |
| title         | string           | Judul kursus           |
| description   | text             | Deskripsi lengkap      |
| price         | decimal(10,2)    | Harga kursus           |
| created_at    | timestamp        | Tanggal buat kursus    |
| updated_at    | timestamp        | Terakhir diubah        |

<h3>Tabel: <code>lessons</code></h3>
| Field       | Tipe              | Keterangan              |
|-------------|-------------------|-------------------------|
| id          | bigint            | ID unik materi          |
| course_id   | foreignId         | Referensi ke courses.id |
| title       | string            | Judul materi            |
| content     | text (nullable)   | Konten teks atau HTML   |
| file_url    | string (nullable) | URL file materi         |
| created_at  | timestamp         | Tanggal buat            |
| updated_at  | timestamp         | Terakhir diubah         |

<h3>Tabel: <code>orders</code></h3>
| Field      | Tipe             | Keterangan                                     |
|------------|------------------|------------------------------------------------|
| id         | bigint           | ID unik order                                  |
| user_id    | foreignId        | Referensi ke student (users.id)                |
| course_id  | foreignId        | Kursus yang dibeli                             |
| amount     | decimal(10,2)    | Jumlah dibayar                                 |
| status     | enum             | pending, paid, completed, disputed, refunded   |
| created_at | timestamp        | Tanggal order                                  |
| updated_at | timestamp        | Terakhir diubah                                |

<h3>Tabel: <code>transactions</code></h3>
| Field         | Tipe                | Keterangan                          |
|---------------|---------------------|-------------------------------------|
| id            | bigint              | ID transaksi                        |
| order_id      | foreignId           | Referensi ke orders.id              |
| instructor_id | foreignId           | Instruktur penerima                 |
| amount        | decimal(10,2)       | Jumlah dibayarkan                   |
| status        | enum                | pending, released, held, refunded   |
| released_at   | timestamp (nullable)| Tanggal pencairan                   |
| created_at    | timestamp           | Dibuat                              |
| updated_at    | timestamp           | Diubah                              |

<h3>Tabel: <code>disputes</code></h3>
| Field      | Tipe      | Keterangan                           |
|------------|-----------|--------------------------------------|
| id         | bigint    | ID komplain                          |
| order_id   | foreignId | Order terkait                        |
| user_id    | foreignId | Pengaju komplain (student)           |
| reason     | text      | Alasan komplain                      |
| status     | enum      | open, reviewing, resolved, rejected  |
| created_at | timestamp | Dibuat                               |
| updated_at | timestamp | Diubah                               |

<h3>Tabel: <code>dispute_files</code></h3>
| Field      | Tipe      | Keterangan               |
|------------|-----------|--------------------------|
| id         | bigint    | ID file bukti            |
| dispute_id | foreignId | Referensi ke disputes.id |
| file_path  | string    | URL/path file bukti      |
| created_at | timestamp | Diunggah                 |
| updated_at | timestamp | Diperbarui               |


<h2>Jenis Relasi dan Tabel yang Berelasi</h2>

<h3>1. Relasi antara users dan courses (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: users (instruktur) ↔ courses</li>
    <li>Penjelasan: Seorang instruktur (user dengan status is_instructor = true) bisa membuat banyak kursus. Oleh karena
        itu, relasi antara users dan courses adalah satu ke banyak.
        <ul>
            <li>Kunci: instructor_id di tabel courses mengacu pada id di tabel users.</li>
        </ul>
    </li>
</ul>

<h3>2. Relasi antara courses dan lessons (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: courses ↔ lessons</li>
    <li>Penjelasan: Sebuah kursus bisa memiliki banyak materi (lesson). Setiap materi tersebut terkait dengan satu
        kursus tertentu.
        <ul>
            <li>Kunci: course_id di tabel lessons mengacu pada id di tabel courses.</li>
        </ul>
    </li>
</ul>

<h3>3. Relasi antara users dan discussions (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: users ↔ discussions</li>
    <li>Penjelasan: Setiap pengguna (baik student maupun instruktur) dapat memulai beberapa diskusi di setiap kursus.
        Relasi ini menghubungkan setiap pengguna dengan diskusi yang mereka buat.
        <ul>
            <li>Kunci: user_id di tabel discussions mengacu pada id di tabel users.</li>
        </ul>
    </li>
</ul>

<h3>4. Relasi antara courses dan discussions (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: courses ↔ discussions</li>
    <li>Penjelasan: Setiap kursus dapat memiliki banyak diskusi. Ini memungkinkan setiap kursus memiliki diskusi yang
        relevan bagi para peserta kursus.
        <ul>
            <li>Kunci: course_id di tabel discussions mengacu pada id di tabel courses.</li>
        </ul>
    </li>
</ul>

<h3>5. Relasi antara users dan quizzes (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: users ↔ quizzes</li>
    <li>Penjelasan: Setiap instruktur dapat membuat beberapa kuis untuk kursus yang dia buat.
        <ul>
            <li>Kunci: user_id (instruktur) di tabel quizzes mengacu pada id di tabel users.</li>
        </ul>
    </li>
</ul>

<h3>6. Relasi antara quizzes dan questions (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: quizzes ↔ questions</li>
    <li>Penjelasan: Setiap kuis dapat memiliki banyak pertanyaan yang diberikan kepada siswa.
        <ul>
            <li>Kunci: quiz_id di tabel questions mengacu pada id di tabel quizzes.</li>
        </ul>
    </li>
</ul>

<h3>7. Relasi antara users dan student_progress (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: users ↔ student_progress</li>
    <li>Penjelasan: Seorang student dapat memiliki banyak entri progress untuk kursus yang berbeda. Ini memungkinkan
        pelacakan perkembangan masing-masing student di kursus yang berbeda.
        <ul>
            <li>Kunci: user_id di tabel student_progress mengacu pada id di tabel users.</li>
        </ul>
    </li>
</ul>

<h3>8. Relasi antara courses dan student_progress (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: courses ↔ student_progress</li>
    <li>Penjelasan: Setiap kursus dapat memiliki banyak entri progress dari siswa yang mengikuti kursus tersebut.
        <ul>
            <li>Kunci: course_id di tabel student_progress mengacu pada id di tabel courses.</li>
        </ul>
    </li>
</ul>

<h3>9. Relasi antara users dan certificates (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: users ↔ certificates</li>
    <li>Penjelasan: Setiap student yang menyelesaikan kursus dapat menerima satu sertifikat untuk kursus tersebut.
        <ul>
            <li>Kunci: user_id di tabel certificates mengacu pada id di tabel users.</li>
        </ul>
    </li>
</ul>

<h3>10. Relasi antara courses dan certificates (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: courses ↔ certificates</li>
    <li>Penjelasan: Setiap kursus dapat menghasilkan sertifikat untuk banyak siswa yang telah menyelesaikannya.
        <ul>
            <li>Kunci: course_id di tabel certificates mengacu pada id di tabel courses.</li>
        </ul>
    </li>
</ul>

<h3>11. Relasi antara users dan orders (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: users ↔ orders</li>
    <li>Penjelasan: Seorang student dapat melakukan banyak pembelian (order) untuk berbagai kursus yang berbeda.
        <ul>
            <li>Kunci: user_id di tabel orders mengacu pada id di tabel users.</li>
        </ul>
    </li>
</ul>

<h3>12. Relasi antara courses dan orders (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: courses ↔ orders</li>
    <li>Penjelasan: Setiap kursus bisa memiliki banyak pembelian (order) dari student yang berbeda.
        <ul>
            <li>Kunci: course_id di tabel orders mengacu pada id di tabel courses.</li>
        </ul>
    </li>
</ul>

<h3>13. Relasi antara orders dan transactions (1-to-1)</h3>
<ul>
    <li>Jenis Relasi: One-to-one (1-to-1)</li>
    <li>Tabel yang Berelasi: orders ↔ transactions</li>
    <li>Penjelasan: Setiap order hanya terkait dengan satu transaksi (di mana uang akan dikirimkan ke instruktur setelah
        order selesai).
        <ul>
            <li>Kunci: order_id di tabel transactions mengacu pada id di tabel orders.</li>
        </ul>
    </li>
</ul>

<h3>14. Relasi antara users dan transactions (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: users ↔ transactions</li>
    <li>Penjelasan: Seorang instruktur bisa memiliki banyak transaksi (pembayaran) dari kursus yang dia ajarkan.
        <ul>
            <li>Kunci: instructor_id di tabel transactions mengacu pada id di tabel users.</li>
        </ul>
    </li>
</ul>

<h3>15. Relasi antara orders dan disputes (1-to-1)</h3>
<ul>
    <li>Jenis Relasi: One-to-one (1-to-1)</li>
    <li>Tabel yang Berelasi: orders ↔ disputes</li>
    <li>Penjelasan: Setiap order hanya bisa memiliki satu dispute (komplain).
        <ul>
            <li>Kunci: order_id di tabel disputes mengacu pada id di tabel orders.</li>
        </ul>
    </li>
</ul>

<h3>16. Relasi antara disputes dan dispute_files (1-to-many)</h3>
<ul>
    <li>Jenis Relasi: One-to-many (1-to-many)</li>
    <li>Tabel yang Berelasi: disputes ↔ dispute_files</li>
    <li>Penjelasan: Setiap dispute dapat memiliki banyak file bukti yang dilampirkan oleh student atau instruktur.
        <ul>
            <li>Kunci: dispute_id di tabel dispute_files mengacu pada id di tabel disputes.</li>
        </ul>
    </li>
</ul>

<br />

<p>Catatan: Deskripsi tabel di atas sewaktu-waktu dapat berubah</p>
