# Dokumentasi API Task Management

## Deskripsi
API ini digunakan untuk mengelola tugas dalam aplikasi Task Management. Anda dapat membuat, membaca, memperbarui, dan menghapus tugas melalui endpoint yang disediakan.

## Prerequisites
Sebelum memulai, pastikan Anda telah menginstal:
- PHP >= 8.0
- Composer
- Laravel >= 10

## Instalasi

git clone https://github.com/username/repo.git
cd repo

composer install

rename file env.example

php artisan jwt:secret

php artisan migrate

php artisan serve

### Daftar Endpoint API

| Endpoint             | Metode HTTP | Deskripsi                                  | Contoh Input/Output                                                                                                                                          |
|----------------------|-------------|--------------------------------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `/api/tasks`        | POST        | Membuat tugas baru.                       | **Input:**<br> `{ "title": "Contoh Tugas", "description": "Deskripsi", "status": "pending" }`<br> **Output:** `{ "id": 1, "title": "Contoh Tugas", ... }`   |
| `/api/tasks`        | GET         | Mengambil daftar semua tugas.             | **Output:** `[ { "id": 1, "title": "Contoh Tugas", ... }, ... ]`                                                                                         |
| `/api/tasks/{id}`   | GET         | Mengambil detail tugas berdasarkan ID.     | **Output:** `{ "id": 1, "title": "Contoh Tugas", ... }`                                                                                                     |
| `/api/tasks/{id}`   | PUT/PATCH   | Memperbarui tugas berdasarkan ID.          | **Input:**<br> `{ "title": "Tugas Diperbarui", "description": "Deskripsi yang diperbarui", "status": "completed" }`<br> **Output:** `{ "id": 1, "title": "Tugas Diperbarui", ... }` |
| `/api/tasks/{id}`   | DELETE      | Menghapus tugas berdasarkan ID.            | **Output:** `{ "message": "Tugas berhasil dihapus." }`                                                                                                      |


Catatan
Autentikasi: Jika Anda menggunakan JWT untuk autentikasi, Anda perlu menambahkan header Authorization dengan format Bearer <token_jwt> pada permintaan yang memerlukan autentikasi.
Status Kode: Pastikan untuk memeriksa status kode HTTP pada respons:
- 200 OK untuk sukses
- 201 Created untuk berhasil membuat
- 404 Not Found jika tugas tidak ditemukan
- 401 Unauthorized jika autentikasi gagal
