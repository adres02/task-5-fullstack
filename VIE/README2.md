1. Install Laravel Passport
    - Buka terminal atau command prompt, lalu arahkan ke direktori project Anda.
    - Jalankan perintah "composer require laravel/passport".
2. Migrasi database
    - Lakukan migrasi database dengan menjalankan perintah "php artisan migrate".
3. Set up Passport
    - Jalankan perintah "php artisan passport:install" untuk menginstall dan men-setup Passport di Laravel Anda.
4. Implementasi Migration Categories
    - Buat migration dengan menjalankan perintah "php artisan make:migration create_categories_table --create=categories"
5. Implementasi Migration Articles
    - Buat migration dengan menjalankan perintah "php artisan make:migration create_articles_table --create=articles"
6. Migrate semua tabel
    - Migration semua tabel dengan menjalankan perintah "php artisan migrate"
7. Implementasi CRUD pada Categories
    - Buat controller CategoriesController dengan menjalankan perintah "php artisan make:controller Api/CategoriesController --api --model=Categories".
    - Buka file app/Http/Controllers/Api/CategoriesController.php dan tambahkan method index(), store(), show(), update(), dan destroy() sesuai dengan kebutuhan.
8. Implementasi CRUD pada Post
    - Buat controller PostController dengan menjalankan perintah "php artisan make:controller Api/PostController --api --model=Post".
    - Buka file app/Http/Controllers/Api/PostController.php dan tambahkan method index(), store(), show(), update(), dan destroy() sesuai dengan kebutuhan.
9. Membuat Seeder
    - php artisan make:seeder UserSeeder
    - php artisan make:seeder CategoriesSeeder
    - php artisan make:seeder PostSeeder
    - php artisan db:seed --class=UserSeeder
    - php artisan db:seed --class=CategoriesSeeder
    - php artisan db:seed --class=PostSeeder
10. Membuat Unit Test API
    - "php artisan make:test CategoriesTest"
    - "php artisan make:test PostTest"
