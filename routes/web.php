    <?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\datasiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\nilaiController;
use App\Http\Controllers\pengumpulanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tugasController;
use App\Models\Kelas;
use App\Models\Tugas;
use App\Models\User;
use App\Models\Chat;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

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
    return view('login');
});
Route::get('/n', function () {
    return view('subject.kelas');
});



// Route::get('/login', function () {
//     return view('login');
// });






Route::middleware(['guest'])->group(function(){
    Route::resource('/register', AuthController::class);
    Route::post('/register', [AuthController::class, 'store']);
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'Auth']);
});

Route::middleware(['auth'])->group(function(){
    Route::resource('/murid', KelasController::class);
    Route::get('/forum', function () {
        $data['user'] = Auth::user();
        $data['result'] = Chat::all();
        $data['comments'] = Message::all()->groupBy('id_forum');
        return view('forum.forumPage', $data);
    });
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('/kelas', KelasController::class);
    Route::resource('/tugas', tugasController::class);
    Route::resource('/pengumpulan', pengumpulanController::class);
    Route::resource('/nilai', nilaiController::class);
    Route::resource('/profile', datasiswaController::class);
    Route::get('/rapot/{id}', [AuthController::class, 'rapot']);
});
// Route::get('/chat', [ChatController::class, 'index'])->name('chat');
Route::post('/chat/create', [ChatController::class, 'create'])->name('createChat'); // buat post forum
// Route::post('/chat', [ChatController::class, 'forum'])->name('action'); 
Route::get('/chat/detail/{detail}', [ChatController::class, 'detail'])->name('detailChat');
// Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
// Route::post('/profile', [ProfileController::class, 'action'])->name('');
Route::post('/chat', [ChatController::class, 'message'])->name('message'); // buat post message
