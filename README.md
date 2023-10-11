# SharkAPI Djuanda University

Project API Untuk Blog Dosen yang menampung data threads/postingan dosen, serta ScientificWork/Karya Ilmiah Dosen

## Daftar Isi
- [Penggunaan](#penggunaan)
  - [Rute API](#rute-api)
    - [Autentikasi](#autentikasi)
    - [Keluar](#keluar)
    - [Thread](#thread)
    - [Profil Pengguna](#profil-pengguna)
    - [Karya Ilmiah](#karya-ilmiah)
- [Lisensi](#lisensi)


## Penggunaan

### Rute API

Berikut adalah beberapa contoh penggunaan rute API pada proyek ini:

#### Autentikasi

- **Login**
  - `POST /login`: Mengizinkan pengguna untuk login dan mendapatkan token akses.
  
- **Registrasi**
  - `POST /register`: Memungkinkan pengguna untuk mendaftar dan membuat akun baru.
  
- **Lupa Password**
  - `POST /password/forgot`: Mengizinkan pengguna untuk mengajukan permintaan lupa password.
  - `POST /password/reset`: Mengizinkan pengguna untuk mereset password mereka.

#### Keluar

- **Logout**
  - `GET /logout`: Mengizinkan pengguna untuk logout.

#### Thread

- **Daftar Thread (Publik)**
  - `GET /public/threads`: Mendapatkan daftar thread publik.

- **Daftar Thread (Memerlukan Autentikasi)**
  - `GET /threads`: Mendapatkan daftar thread yang memerlukan autentikasi.
  - `POST /threads`: Membuat thread baru.
  - `PATCH /threads/{thread}`: Mengupdate thread.
  - `GET /threads/{thread}`: Mendapatkan detail thread.
  - `DELETE /threads/{thread}`: Menghapus thread.

#### Profil Pengguna

- **Profil Pengguna (Memerlukan Autentikasi)**
  - `GET /profile`: Mendapatkan informasi profil pengguna.
  - `PATCH /profile`: Mengupdate informasi profil pengguna.
  - `PATCH /profile/change-avatar`: Mengupdate avatar pengguna.
  - `PATCH /profile/change-bio`: Mengupdate bio pengguna.
  - `PATCH /profile/change-password`: Mengupdate password pengguna.

#### Karya Ilmiah

- **Daftar Karya Ilmiah (Publik)**
  - `GET /public/scientific-works`: Mendapatkan daftar karya ilmiah publik.

- **Daftar Karya Ilmiah (Memerlukan Autentikasi)**
  - `GET /scientific-works`: Mendapatkan daftar karya ilmiah yang memerlukan autentikasi.
  - `POST /scientific-works`: Membuat karya ilmiah baru.
  - `PATCH /scientific-works/{scientificwork}`: Mengupdate karya ilmiah.
  - `GET /scientific-works/{scientificwork}`: Mendapatkan detail karya ilmiah.
  - `DELETE /scientific-works/{scientificwork}`: Menghapus karya ilmiah.

### Lisensi

Lisensi proyek Anda.
