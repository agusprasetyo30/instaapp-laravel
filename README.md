# InstaApp Coding Test

# How to install

1. clone/download file sistem ini
2. `$ composer install`
3. copy `env.example` dan rubah menjadi `.env`, setelah itu konfigurasi database
4. `$ php artisan key:generate`
5. `$ php artisan migrate` untuk membuat **tabel**
6. `$ php artisan db:seed` untuk mengisi dummy data pada tabel
7. `$ php artisan serve` jalankan program
8. Untuk login ke sistem dapat dimenggunakan data dummy yang dibuat pada seeder yaitu username : `dummy123`, Password : `dummy123` 

# Screenshot
1. Login Area
<img src="./1. Login Area.png" width="100%">

2. Registration
<img src="./2. Registration.png" width="100%">

3. Dashboard (1)
<img src="./3. Dashboard (1).png" width="100%">

5. Dashboard (2)
<img src="./3. Dashboard (2).png" width="100%">

6. Detail Post
<img src="./4. Detail Post.png" width="100%">

7. Profile
<img src="./5. Profile.png" width="100%">

8. Edit Profile
<img src="./6. Edit Profile.jpg" width="100%">

9. Tambah Postingan
<img src="./7. Tambah Postingan.png" width="100%">

# Package Use
- Laravel Framework 7.28.4
- [spatie/laravel-permission](https://github.com/spatie/laravel-permission)
- [intervention/image](http://image.intervention.io/)
- [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper)
- [Laravel/like vvv](https://github.com/overtrue/laravel-like)