<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name" => "Rofi Taufiqurrohman",
        "email" => "rofitaufiqurrohman@gmail.com",
        "image" => "1.jpg"
    ]
);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rofi Taufiqurrohman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui at nam deserunt. Quis, doloremque consectetur omnis laudantium, vitae sit, eos temporibus culpa voluptatum sint eaque ad accusantium esse! Obcaecati deserunt porro odio numquam debitis eius provident reprehenderit ratione ullam aspernatur ducimus sit enim nobis recusandae eos omnis saepe inventore architecto, harum ad officiis aut neque vel! Mollitia sint ea facere exercitationem adipisci neque dicta error asperiores nemo, ad odio quo porro vitae rem quod reiciendis consequuntur ex deserunt iste veritatis?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rofi Taufiq",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus numquam excepturi deleniti ex dolore facilis laudantium illum aliquam ipsa ab esse tenetur officiis a veritatis odit blanditiis, incidunt minima nihil eos similique asperiores, quis at animi! A mollitia sint neque eligendi, quibusdam dolore ad vero ipsum maiores fugit architecto voluptatum ea accusantium! Sapiente voluptate id dicta inventore, earum nesciunt suscipit? Atque, odit nisi vero corporis tempore magni magnam harum sapiente labore rerum nulla nobis iusto omnis repellendus dolore. Labore assumenda obcaecati doloremque vitae error ratione aperiam sint cum, soluta exercitationem fugit non aliquam aliquid minus qui temporibus quisquam. Ex, explicabo?"
        ],
        ];
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rofi Taufiqurrohman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui at nam deserunt. Quis, doloremque consectetur omnis laudantium, vitae sit, eos temporibus culpa voluptatum sint eaque ad accusantium esse! Obcaecati deserunt porro odio numquam debitis eius provident reprehenderit ratione ullam aspernatur ducimus sit enim nobis recusandae eos omnis saepe inventore architecto, harum ad officiis aut neque vel! Mollitia sint ea facere exercitationem adipisci neque dicta error asperiores nemo, ad odio quo porro vitae rem quod reiciendis consequuntur ex deserunt iste veritatis?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rofi Taufiq",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus numquam excepturi deleniti ex dolore facilis laudantium illum aliquam ipsa ab esse tenetur officiis a veritatis odit blanditiis, incidunt minima nihil eos similique asperiores, quis at animi! A mollitia sint neque eligendi, quibusdam dolore ad vero ipsum maiores fugit architecto voluptatum ea accusantium! Sapiente voluptate id dicta inventore, earum nesciunt suscipit? Atque, odit nisi vero corporis tempore magni magnam harum sapiente labore rerum nulla nobis iusto omnis repellendus dolore. Labore assumenda obcaecati doloremque vitae error ratione aperiam sint cum, soluta exercitationem fugit non aliquam aliquid minus qui temporibus quisquam. Ex, explicabo?"
        ]
        ];

        $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post =$post;
        }
    }
    

    return view('post',[
        "title" => "Single Post",//title halaman
        "post" => $new_post
    ]);
});



