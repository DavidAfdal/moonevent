<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PackageTourController;
use App\Http\Controllers\PackageBankController;
use App\Http\Controllers\PackageBookingController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/category/{category:slug}', [FrontController::class, 'category'])->name('front.category');
Route::get('/details/{package_tours:slug}', [FrontController::class, 'details'])->name('front.details');
Route::post('/test', [FrontController::class, 'book_store_test'])->name('front.test');
Route::get('/wedding-list', [FrontController::class, 'wedding_list'])->name('front.wedding_list');  
Route::get('/book-test/{package_tours:slug}', [FrontController::class, 'book_test'])->name('front.book_test');  


Route::get('/dashboard', [PackageBookingController::class, 'get_package_bookings'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware('can:checkout package')->group(function () {
        Route::get('/book/calendarbooking/{package_tours:slug}', [FrontController::class, 'calendarbooking'])
             ->name('front.calendarbooking');

        Route::get('/book/booking_request/{package_tours:slug}', [FrontController::class, 'booking_request'])
             ->name('front.booking_request');

        Route::post('/book/selected_Date/{package_tours:slug}', [FrontController::class, 'calendarbooking_request'])
            ->name('front.selected_Date');

        Route::get('/book/{package_tours:slug}', [FrontController::class, 'book'])
            ->name('front.book');

         Route::post('/book/save/{package_tours:slug}', [FrontController::class, 'book_store'])
             ->name('front.book.store');

        Route::get('/book/choose-bank/{packageBooking}/', [FrontController::class, 'choose_bank'])
            ->name('front.choose_bank');

        Route::patch('/book/choose-bank/{packageBooking}/save', [FrontController::class, 'choose_bank_store'])
            ->name('front.choose_bank_store');

        Route::get('/book/payment/{packageBooking}/', [FrontController::class, 'book_payment'])
            ->name('front.book_payment');

        Route::patch('/book/payment/{packageBooking}/save', [FrontController::class, 'book_payment_store'])
            ->name('front.book_payment_store');
        
        

        Route::get('/book-finish', [FrontController::class, 'book_finish'])
            ->name('front.book_finish');

            Route::get('/reservation/check', [FrontController::class, 'checkReservation'])
            ->name('front.reservation.check');

        });

        Route::prefix('dashboard')->name('dashboard.')->group(function () {
                Route::middleware('can:view order')->group(function () {
                Route::get('my-booking', [DashboardController::class, 'my_booking'])
                    ->name('bookings');
                Route::get('/my-bookings/details/{packageBooking}', [DashboardController::class, 'my_bookings_details'])
                    ->name('bookings.details');
            });
        });

    Route::prefix('admin')->name('admin.')->group(function(){

        Route::middleware('can:manage categories')->group(function () {
        Route::resource('categories', CategoryController::class);
        });


        Route::middleware('can:manage packages')->group(function () {
            Route::resource('package_tours', PackageTourController::class);
            });

        Route::middleware('can:manage package banks')->group(function () {
            Route::resource('package_banks', PackageBankController::class);
            });


        Route::middleware('can:manage transactions')->group(function () {
            Route::resource('package_bookings', PackageBookingController::class);
            });
            Route::put('/declined/{packageBooking}', [PackageBookingController::class, 'declined'])
        ->name('package_bookings.decline');
    });
});




require __DIR__.'/auth.php';
