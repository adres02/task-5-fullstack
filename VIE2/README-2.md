Insall Laravel:
composer create-project --prefer-dist laravel/laravel nama-proyek-anda "8.\*"

Langkah-langkah pengerjaan:

1.  Fitur Authentication menggunakan Laravel UI
    Untuk membuat fitur Authentication menggunakan Laravel UI, langkah-langkahnya adalah sebagai berikut:

        1. Jalankan perintah composer require laravel/ui pada terminal
        2. Jalankan perintah php artisan ui bootstrap --auth untuk menginstall UI dengan Bootstrap dan fitur Authentication
        3. Jalankan perintah npm install && npm run dev untuk menginstall dependencies dan build assets

2.  Fungsional CRUD Article serta Category
    Untuk membuat fungsional CRUD Article dan Category, langkah-langkahnya adalah sebagai berikut:
    1. Buat model Article dengan perintah php artisan make:model Article -m
    2. Buat model Category dengan perintah php artisan make:model Category -m
    3. Tambahkan field yang dibutuhkan pada migration masing-masing model
    4. Jalankan perintah php artisan migrate untuk membuat tabel di database
    5. Buat controller Article dengan perintah php artisan make:controller ArticleController --resource
    6. Buat controller Category dengan perintah php artisan make:controller CategoryController --resource
    7. Buat folder baru dengan nama "categories" dan "articles" pada direktori "resources/views"
    8. Buat file "index.blade.php", "create.blade.php", "edit.blade.php", dan "show.blade.php" pada masing-masing folder "categories" dan "articles"
    9. Tambahkan fungsi-fungsi yang dibutuhkan pada masing-masing controller (index, create, store, edit, update, destroy)
    10. Buat route untuk masing-masing fungsi di web.php

Langkah-langkah menjalankan program:

1. php artisan migrate:fresh --seed atau
   jika ingin menjalankan migrate dan seeder terpisah
    - php artisan migrate
    - php artisan db:seed --class=UserSeeder
2. php artisan storage:link
3. php artisan serve

Langkah-langkah membuat factory:

1. membuat file factory
    - php artisan make:factory CategoryFactory --model=Category
    - php artisan make:factory ArticleFactory --model=Article
2. composer dump-autoload

Langkah-langkah unit test:

1. Membuat test case
    - php artisan make:test UserTest
    - php artisan make:test CategoryTest
    - php artisan make:test ArticleTest
2. Menulis test case
3. Menjalankan test case dengan perintah php artisan test atau
   untuk lebih detail dengan perintah php artisan test --filter=CategoryTest --testsuite=Feature
