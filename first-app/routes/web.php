<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// TIll video no 6 @yahoobaba
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/post', function () {
    //     // return "<h1>Port page</h1>";
    //     return view('post');
    // });
    
    // pasing multiple parameter optionally
    // Route::get('/post/{id?}/{comment?}', function ($value=NULL, string $comment=NULL) {
        //     // return "<h1>Port page</h1>";
        //     // return view('post');

        //     if($value){
            //         return "<h1>ID no : ". $value ."</h1><h2> $comment </h2>";
            //     }
            //     else{
                //         return "<h2>No value found</h2>";
//     }
// });
// Route::get('/post/{id}/comment/{commentid}', function ($value,$commentid) {
    
//     if($value){
//         return "<h1>ID no : ". $value ."& comment : ". $commentid . "</h1>";
//     }
//     else{
//         return "<h2>No value found</h2>";
//     }
// })->whereNumber('id', '[0-9]+')->whereAlpha('commentid'); // whereNumber, whereAlpha, whereAlphaNumberic,
//  whereIn('id', ['wasif', 'song']), where('id', ['song', 'movie']);
// where('id', '[0-9]+'),   where('id', '[a-zA-Z]+')



// Route::view('hello', '/port');

// Route::get('/post/firstpost',function(){
    //     return view('firstpost');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/', function(){
    return view('welcome');
})->name('home');

Route::get('page/posts', function(){
    return view('post');
})->name('mypost');

Route::get('page/posts', function(){
    return view('about');
});

Route::prefix('/page')->group(function(){
    Route::get('/about', function(){
        return view('about');
    });
    
    Route::get('/gallery', function(){
        return view('post');
    });
    
    Route::get('/post/firstpost', function(){
        return view('firstpost');
    });
});

// Redircting the page
Route::redirect('/about','/test', 301);

// No valid route then so this
Route::fallback(function(){
    return "<h1>Page not found</h1>";
});

require __DIR__.'/auth.php';