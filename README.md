# newperpus

# Sistem Informasi Perpustakaan
Sistem infonformasi perpustakaan dibangun mengunakan PHP


## Installation

Clone project github

```bash
  git clone https://github.com/pusjail/newperpus.git
```

Pergi ke directory project

```bash
  cd newperpus
```

Import Database

```bash
  buka phpmyadmin kemudian buat Database dengan nama pustaka setelah itu Import file pustaka yang ada pada directory project ini untuk mendapatkan tabel beserta isi datanya.
```

Configuration Connection DB

```bash
  buka file connection.php yang terletak pada directory controller kemudian sesuaikan user, password, nama database yang telah kalian buat
```

Using It

```bash
  buka browser kemudian di tab url ketik (Sebagai Contoh): http://localhost/newperpus/   maka sistem akan otomatis menampilkan halaman login
  ```
  
## User

user yang terdaftar pada website ini adalah

- username = `admin`
- Password = `admin`

=====================================
- username = `rizqi`
- Password = `rizqi`

   
## Badges

![HTML](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![Css](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Js](https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E)
![bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![php](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![mysql](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![github](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)

## Tree directory
```bash
.
├── asset
│   ├── css
│   │   ├── bootstrap.min.css
│   │   ├── dataTables.bootstrap4.css
│   │   ├── fontawesome-all.min.css
│   │   ├── fontawesome.min.css
│   │   └── style.css
│   ├── images
│   │   ├── 432432.jpg
│   │   ├── A1.png
│   │   ├── A1x.jpg
│   │   ├── admin-no-photo.jpg
│   │   ├── IMG.jpg
│   │   ├── Logo-Unindra.png
│   │   └── ww.jpg
│   └── js
│       ├── app.js
│       ├── bootstrap.min.js
│       ├── jquery.dataTables.js
│       ├── jquery.js
│       └── popper.min.js
├── controller
│   ├── anggotaController.php
│   ├── authController.php
│   ├── bukuController.php
│   ├── connection.php
│   ├── peminjamanController.php
│   └── pengembalianController.php
├── index.php
├── pages
│   ├── anggotaCreate.php
│   ├── anggotaDelete.php
│   ├── anggotaEdit.php
│   ├── anggota.php
│   ├── beranda.php
│   ├── bukuCreate.php
│   ├── bukuDelete.php
│   ├── bukuEdit.php
│   ├── buku.php
│   ├── cetakAnggota.php
│   ├── cetakBuku.php
│   ├── cetakPeminjam.php
│   ├── cetakPengembalian.php
│   ├── cetakSemuaAnggota.php
│   ├── cetakSemuaBuku.php
│   ├── cetakSemuaPeminjam.php
│   ├── cetakSemuaPengembalian.php
│   ├── login.php
│   ├── logout.php
│   ├── peminjamanCreate.php
│   ├── peminjamanDelete.php
│   ├── peminjamanEdit.php
│   ├── peminjaman.php
│   ├── pengembalianApprove.php
│   ├── pengembalianDelete.php
│   ├── pengembalianDisapprove.php
│   └── pengembalian.php
└── perpus2.sql
```

  
## Authors

- [@rizqi](https://github.com/pusjail)
  
