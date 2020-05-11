## About Freshbase

Fresh base project Laravel dengan Laravel

## Cara Install

- Download zip repo ini.
- Copy file `.env.example` kemudian paste dengan nama `.env`. Edit pengaturan di file tersebut sesuai dengan kebutuhan.
- Copy file `auth.json.example` kemudian paste dengan nama `auth.json`. Edit username dan password dalam file tersebut.
- Jalankan `composer install`.
- Jalankan `php artisan migrate`.
- Jalankan `php artisan key:generate`.
- Coba akses rute: `/nova` untuk mengetahui berhasilnya instalasi.
- Untuk menambahkan user nova, jalankan `php artisan nova:user`.
