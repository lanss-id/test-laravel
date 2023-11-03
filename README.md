# Test Interview Jagat

## Persyaratan
- PHP >= 7.3
- Composer
- Node.js dan NPM
- Database MySQL (atau database yang didukung oleh Laravel)

## Langkah-langkah Menjalankan Aplikasi

1. Clone repositori ini dengan menjalankan perintah berikut di terminal Anda:

```bash
git clone https://github.com/lanss-id/test-laravel.git
```

2. Masuk ke direktori aplikasi dengan menjalankan perintah berikut di terminal Anda:

```bash
cd nama-direktori-aplikasi
```

Ganti nama-direktori-aplikasi dengan nama direktori aplikasi Anda.

3. Install dependensi PHP dengan Composer dengan menjalankan perintah berikut di terminal Anda:
```bash
composer install
```

4. Install dependensi JavaScript dengan NPM dengan menjalankan perintah berikut di terminal Anda:
```bash
npm install
```

5. Salin file .env.example menjadi .env dengan menjalankan perintah berikut di terminal Anda:
```bash
cp .env.example .env
```

6. Buat kunci aplikasi dengan perintah artisan dengan menjalankan perintah berikut di terminal Anda:
```bash
php artisan key:generate
```

7. Buat database dan atur koneksi database di file .env Anda.

8. Jalankan migrasi dan seeder database dengan menjalankan perintah berikut di terminal Anda:
```bash
php artisan migrate --seed
```

9. Jalankan server pengembangan Laravel dengan menjalankan perintah berikut di terminal Anda:
```bash
php artisan serve
```

10. Jalankan NPM untuk mengkompilasi aset dan menjalankan server hot-reload dengan menjalankan perintah berikut di terminal Anda:
```bash
npm run dev
```

Setelah itu, Anda bisa membuka aplikasi di browser Anda dengan mengunjungi http://localhost:8000.

Selamat mencoba!