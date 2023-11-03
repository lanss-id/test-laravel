# Test Interview Jagat

## Persyaratan
- PHP >= 7.3
- Composer
- Node.js dan NPM
- Database MySQL (atau database yang didukung oleh Laravel)

## Langkah-langkah Menjalankan Aplikasi

1. Clone repositori ini dengan menjalankan perintah berikut di terminal Anda:

```bash
git clone https://github.com/username/repo.git

Ganti https://github.com/username/repo.git dengan URL repositori Anda.

Masuk ke direktori aplikasi dengan menjalankan perintah berikut di terminal Anda:
cd nama-direktori-aplikasi

Ganti nama-direktori-aplikasi dengan nama direktori aplikasi Anda.

Install dependensi PHP dengan Composer dengan menjalankan perintah berikut di terminal Anda:
composer install

Install dependensi JavaScript dengan NPM dengan menjalankan perintah berikut di terminal Anda:
npm install

Salin file .env.example menjadi .env dengan menjalankan perintah berikut di terminal Anda:
cp .env.example .env

Buat kunci aplikasi dengan perintah artisan dengan menjalankan perintah berikut di terminal Anda:
php artisan key:generate

Buat database dan atur koneksi database di file .env Anda.

Jalankan migrasi dan seeder database dengan menjalankan perintah berikut di terminal Anda:

php artisan migrate --seed

Jalankan server pengembangan Laravel dengan menjalankan perintah berikut di terminal Anda:
php artisan serve

Jalankan NPM untuk mengkompilasi aset dan menjalankan server hot-reload dengan menjalankan perintah berikut di terminal Anda:
npm run dev

Setelah itu, Anda bisa membuka aplikasi di browser Anda dengan mengunjungi http://localhost:8000.

Selamat mencoba!