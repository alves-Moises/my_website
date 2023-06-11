<?php

use App\Http\Controllers\{AppController,
    Admin\AuthAdminController,
    Admin\CourierController,
    Admin\ProductCategoryController,
    Admin\ProductController,
    Admin\ProfileController,
    QuestionController
};
use App\Http\Controllers\Auth\{
    ConfirmablePasswordController,
    EmailVerificationNotificationController,
    EmailVerificationPromptController,
    PasswordController,
    RegisteredUserController,
    VerifyEmailController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Mail, Route};

Route::fallback(function () {
    return redirect()->route('404');
});

/**
 * Public Routes
 */
Route::get('/', [AppController::class, 'index'])
    ->name('app.index');

Route::get('/404', [AppController::class, 'notFound'])
    ->name('404');

/**
 * Admin Routes
 */
Route::get('admin/auth/login', [AuthAdminController::class, 'renderLoginPage'])
    ->name('admin.login.page');

Route::post('admin/login', [AuthAdminController::class, 'login'])
    ->name('admin.login.submit');

Route::post('admin/logout', [AuthAdminController::class, 'destroy'])
    ->middleware('redirectIfNotAdmin')
    ->name('admin.logout');

Route::get('admin/dashboard', [AuthAdminController::class, 'renderDashboardPage'])
    ->middleware('redirectIfNotAdmin')
    ->name('admin.dashboard');

Route::get('admin/profile', [ProfileController::class, 'edit'])
    ->middleware(['redirectIfNotAdmin'])
    ->name('admin.profile.edit');

Route::patch('admin/profile', [ProfileController::class, 'update'])
    ->middleware(['redirectIfNotAdmin'])
    ->name('admin.profile.update');

Route::delete('admin/profile', [ProfileController::class, 'destroy'])
    ->middleware(['redirectIfNotAdmin'])
    ->name('admin.profile.destroy');

Route::get('admin/product', [ProductController::class, 'index'])
    ->middleware(['redirectIfNotAdmin'])
    ->name('admin.product.index');

Route::post('admin/product', [ProductController::class, 'store'])
    ->middleware('redirectIfNotAdmin')
    ->name('admin.product.store');

Route::get('admin/category', [ProductCategoryController::class, 'index'])
    ->middleware(['redirectIfNotAdmin'])
    ->name('admin.category.index');

Route::post('admin/category', [ProductCategoryController::class, 'store'])
    ->middleware('AdminAuthentication')
    ->name('admin.category.store');

Route::get('admin/courier', [CourierController::class, 'index'])
    ->middleware(['redirectIfNotAdmin'])
    ->name('admin.courier.index');

Route::post('admin/courier', [CourierController::class, 'store'])
    ->middleware('redirectIfNotAdmin')
    ->name('admin.courier.store');

/**
 * App Routes
 */
Route::get('app/auth/login', [AuthAdminController::class, 'renderLoginPage'])
    ->name('app.login.page');

Route::post('app/login', [AuthAdminController::class, 'login'])
    ->name('app.login.submit');

Route::post('app/logout', [AuthAdminController::class, 'destroy'])
    ->name('app.logout');

Route::get('app/register', [RegisteredUserController::class, 'create'])
    ->middleware('redirectIfAuthenticated')
    ->name('app.register.page');

Route::get('app/category/{category_id}', [RegisteredUserController::class, 'create'])
    ->middleware('redirectIfAuthenticated')
    ->name('app.category.page');

Route::post('register', [RegisteredUserController::class, 'store'])
    ->name('register.submit');

Route::get('app/profile', [ProfileController::class, 'edit'])
    ->middleware(['redirectIfNotAdmin'])
    ->name('app.profile.edit');

Route::get('app/new-question', [QuestionController::class, 'index'])
    ->middleware("redirectIfNotAuthenticated")
    ->name('app.question.index');

/**
 * Email Routes
 */
Route::get('verify-email', EmailVerificationPromptController::class)
    ->name('verification.notice');

Route::get('verify-email/{id}/{hash};', VerifyEmailController::class)
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware('auth', 'throttle:6,1')
    ->name('verification.send');


Route::post('/send-contact', function (Request $request) {
    $to = 'vinicius@rech.digital';
    $subject = 'Novo contato';
    $message = $request['email'];

    Mail::raw($message, function ($email) use ($to, $subject) {
        $email->to($to)->subject($subject);
    });

    return redirect()->route('app.index', ['status' => true])->withFragment('contact-send');
})->middleware('protectAgainstSpam')->name('send.email');

/**
 * Password Routes
 */
Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->middleware('auth')
    ->name('password.confirm');

Route::post('confirm-password', [ConfirmablePasswordController::class, 'store'])
    ->middleware('auth')
    ->name('password.confirm.store');

Route::put('password', [PasswordController::class, 'update'])
    ->middleware('auth')
    ->name('password.update');
