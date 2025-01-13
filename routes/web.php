<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

use App\Models\Profile;



// Route::get('/profile', function () {
//         $profiles =Profile::get('name')->last();
//     return view('profile.index',compact('profiles'));
// });

// Route::get('/profile/store', function () {
    // return view('profile.store');

// });

// Route::post('/profile/post',[ProfileController ::class, 'store']) 
// ->name('profile.post');



Route::get('/create_account', function () {
return view('create_account');
});

Route::get('/index', function () {
    return view('index');
})->name('button.index');

Route::get('/addinformation', function () {
    return view('addinformation');
})->name('button.addinformation');

Route::get('/admin_add_event', function () {
    return view('admin_add_event');
})->name('button.admin_add_event');

Route::get('/admin_index', function () {
    return view('admin_index');
})->name('button.adminevent');

Route::get('/event', function () {
    return view('event');
})->name('button.event');

Route::get('/loginsskrurun', function () {
    return view('loginsskrurun');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/forgot_password', function () {
    return view('forgot_password');
});

Route::get('/admin_edit', function () {
    return view('admin_edit');
});

Route::get('/admin_rank', function () {
    return view('admin_rank');
});

Route::get('/profile', function () {
    return view('profile');
})->name('button.profile');

Route::get('/rank', function () {
    return view('rank');
})->name('button.rank');

Route::get('/test', function () {
    return view('test');
})->name('button.rank');

Route::get('/admin_profile', function () {
    return view('admin_profile');
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
