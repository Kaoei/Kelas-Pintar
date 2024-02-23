    <?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\nilaiController;
use App\Http\Controllers\pengumpulanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tugasController;

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
Route::get('/', function () {
    return view('home');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/murid', function () {
    return view('murid.homepage');
});

Route::middleware(['guest'])->group(function(){
    Route::resource('/register', AuthController::class);
    Route::post('/register', [AuthController::class, 'store']);
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'Auth']);
});

Route::middleware(['auth'])->group(function(){
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('/kelas', KelasController::class);
    Route::resource('/tugas', tugasController::class);
    Route::resource('/pengumpulan', pengumpulanController::class);
    Route::resource('/nilai', nilaiController::class);
});
Route::get('/chat', [ChatController::class, 'index'])->name('chat');
Route::get('/chat/create', [ChatController::class, 'create'])->name('createChat');
Route::post('/chat', [ChatController::class, 'action'])->name('actionChat');
Route::get('/chat/detail/{detail}', [ChatController::class, 'detail'])->name('detailChat');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile', [ProfileController::class, 'action'])->name('actionProfile');
Route::post('/chat', [ChatController::class, 'message'])->name('message');
