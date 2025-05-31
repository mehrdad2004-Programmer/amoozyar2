use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']); // لیست کاربران
Route::post('/users', [UserController::class, 'store']); // ثبت کاربر جدید
Route::get('/users/{id}', [UserController::class, 'show']); // خواندن کاربر خاص
Route::put('/users/{id}', [UserController::class, 'update']); // ویرایش کاربر
