# Janji
Saya Klara Ollivviera Augustine Gunawan dengan NIM 2306205 mengerjakan soal Tugas Praktikum 8 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

# Desain Program
<img width="372" alt="Screenshot 2025-05-06 at 15 20 36" src="https://github.com/user-attachments/assets/c1a055f0-da3c-4710-b0a6-8c6ebe86eee1" />
Program ini merupakan implementasi dari pola Model-View-Controller (MVC), yang digunakan untuk mengelola data mahasiswa (student) dan universitas (university). Program ini memisahkan logika aplikasi, tampilan pengguna, dan data yang disimpan dalam basis data sehingga mudah dikelola dan dipelihara.

## Fitur Utama:
### 1. Manajemen Mahasiswa:
- Menambahkan, mengedit, dan menghapus data mahasiswa.
- Menampilkan informasi mahasiswa beserta status keaktifannya dan universitas tempat mereka belajar.
### 2. Manajemen Universitas:
- Menambahkan, mengedit, dan menghapus data universitas.
- Menampilkan informasi universitas seperti nama, alamat, email, website, dan jenis universitas (negeri/swasta).

## Arsitektur MVC:
- Model: Mengelola akses data ke database. Model berfungsi untuk mengambil data dari database, memodifikasi data, dan mengembalikannya kepada controller.
- View: Menyajikan data kepada pengguna. View bertanggung jawab untuk menampilkan informasi yang diterima dari controller dalam bentuk antarmuka pengguna (UI).
- Controller: Mengatur alur aplikasi dengan menerima input dari pengguna melalui view, memprosesnya dengan menggunakan model, dan mengembalikan hasilnya ke view.

## Tabel Utama
### 1. Tabel Mahasiswa (Student)
Menyimpan data mahasiswa yang meliputi ID, nama, NIM, nomor telepon, tanggal bergabung, status, dan ID universitas tempat mereka belajar.
### 2. Tabel Universitas (University)
Menyimpan informasi universitas, termasuk ID, nama universitas, alamat, email, website, dan jenis universitas (negeri atau swasta).

## Struktur Program
### Controllers:
1. StudentController: Bertanggung jawab untuk menangani logika terkait mahasiswa, seperti mengambil data mahasiswa, menambah, mengedit, dan menghapus data mahasiswa.
2. UniversityController: Bertanggung jawab untuk menangani logika terkait universitas, seperti mengambil data universitas, menambah, mengedit, dan menghapus data universitas.

### Models:
1. DB: Kelas dasar untuk pengelolaan koneksi ke database.
2. Student: Kelas untuk mengelola data mahasiswa (mengambil, menambah, mengedit, dan menghapus data mahasiswa).
3. University: Kelas untuk mengelola data universitas (mengambil, menambah, mengedit, dan menghapus data universitas).

### Views:
1. StudentView: Kelas untuk menangani tampilan mahasiswa, seperti menampilkan data mahasiswa, form untuk menambah atau mengedit data mahasiswa.
2. UniversityView: Kelas untuk menangani tampilan universitas, seperti menampilkan data universitas, form untuk menambah atau mengedit data universitas.

### Template:
Menggunakan kelas Template untuk menggantikan placeholder dalam file HTML dengan data yang sesuai.

# Alur Program
1. Menambahkan Mahasiswa:
- Gunakan form di create_student.php untuk menambah mahasiswa baru.
- Isi data mahasiswa, pilih universitas yang sesuai, dan tekan submit untuk menambahkan mahasiswa.
2. Mengedit Mahasiswa:
- Pilih mahasiswa yang ingin diedit pada tabel mahasiswa, kemudian klik tombol "Edit".
- Sesuaikan data mahasiswa dan tekan submit untuk memperbarui informasi mahasiswa.
3. Menghapus Mahasiswa:
- Pilih mahasiswa yang ingin dihapus pada tabel mahasiswa, kemudian klik tombol "Hapus".
4. Menambahkan Universitas:
- Gunakan form di create_university.php untuk menambah universitas baru.
- Isi data universitas dan tekan submit untuk menambahkan universitas.
5. Mengedit Universitas:
- Pilih universitas yang ingin diedit pada tabel universitas, kemudian klik tombol "Edit".
- Sesuaikan data universitas dan tekan submit untuk memperbarui informasi universitas.
6. Menghapus Universitas:
- Pilih universitas yang ingin dihapus pada tabel universitas, kemudian klik tombol "Hapus".

# Dokumentasi
https://drive.google.com/file/d/1zmwNetlMvcWSrL90lFZgdrslFT8s6VAf/view?usp=sharing

