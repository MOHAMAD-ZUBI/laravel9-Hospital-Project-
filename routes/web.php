        <?php

        use App\Http\Controllers\AdminPanel\AdminPoliclinicController;
        use App\Http\Controllers\AdminPanel\AdminUserController;
        use App\Http\Controllers\AdminPanel\AppointmentController;
        use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
        use App\Http\Controllers\AdminPanel\CommentController;
        use App\Http\Controllers\AdminPanel\FaqController;
        use App\Http\Controllers\AdminPanel\ImageController;
        use App\Http\Controllers\AdminPanel\MessageController;
        use App\Http\Controllers\Home\MyController;
        use App\Http\Controllers\HomeController;
        use App\Http\Controllers\UserController;
        use Illuminate\Foundation\Application;
        use Illuminate\Support\Facades\Route;
        use Inertia\Inertia;


        /*
        |--------------------------------------------------------------------------
        | Web Routes
        |--------------------------------------------------------------------------
        |
        | Here is where you can register web routes for your application. These
        | routes are loaded by the RouteServiceProvider within a group which
        | contains the "web" middleware group. Now create something great!
        |
        */


        Route::get('/', function () {
            return Inertia::render('Welcome', [
                'canLogin' => Route::has('login'),
                'canRegister' => Route::has('register'),
                'laravelVersion' => Application::VERSION,
                'phpVersion' => PHP_VERSION,
            ]);
        });
        // call controller
        Route::get('/',[HomeController::class,'index'])->name('home');
        Route::get('/about',[HomeController::class,'about'])->name('about');
        Route::get('/treatment',[HomeController::class,'treatment'])->name('treatment');
        Route::get('/references',[HomeController::class,'references'])->name('references');
        Route::get('/contactus',[HomeController::class,'contactus'])->name('contactus');
        Route::get('/faq',[HomeController::class,'faq'])->name('faq');
        Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
        Route::view('/loginuser','home.login')->name('userlogin');
        Route::view('/loginadmin','admin.login')->name('loginadmin');


        Route::view('/registeruser','home.register');
        Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
        Route::post('/storecomment',[HomeController::class,'storecomment'])->name('storecomment');
        Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('loginadmincheck');
        Route::post('/storeappointment',[HomeController::class,'storeappointment'])->name('storeappointment');


        // Route-> MyController->View
        Route::get('/test',[HomeController::class,'test'])->name('test');
        // Route with parameters
        Route::get('/policlinic/{id}',[HomeController::class,'policlinic'])->name('policlinic');
        // Route with post
        Route::post('/save',[HomeController::class,'save'])->name('save');
        Route::middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified',
        ])->group(function () {
            Route::get('/dashboard', function () {
                return Inertia::render('Dashboard');
            })->name('dashboard');
        });

        Route::get('/home',[HomeController::class,'redirect']);





        //**************USER AUTH CONTROL **************
        Route::middleware('auth')->group(function (){
            //**************USER ROUTES**************
        Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function() {
            Route::get('/','index')->name('index');
            Route::get('/review', 'review')->name('review');
            Route::get('/appointment', 'appointment')->name('appointment');
            Route::get('/deleterev/{id}','deleterev')->name('deleterev');
            Route::get('/deleteappointment/{id}','deleteappointment')->name('deleteappointment');


        });
            //**************ADMIN ROUTES**************
        Route::middleware('admin')->prefix('admin')->name('admin.')->group(function() {
            Route::get('/', [MyController::class,'index'])->name('index');
            //**************ADMIN GENERAL ROUTES**************
            Route::get('/setting', [MyController::class,'setting'])->name('setting');
            Route::post('/setting', [MyController::class,'settingUpdate'])->name('setting.update');

            //**************ADMIN CATEGORY ROUTES**************
            Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function() {
                Route::get('/','index')->name('index');
                Route::get('/create','create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::get('/delete/{id}','delete')->name('delete');
                Route::post('/update/{id}','update')->name('update');
                Route::get('/show/{id}', 'show')->name('show');
            });

            //**************ADMIN POLICLINICS ROUTES**************
            Route::prefix('/policlinic')->name('policlinic.')->controller(AdminPoliclinicController::class)->group(function() {
                Route::get('/','index')->name('index');
                Route::get('/create','create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::get('/delete/{id}','delete')->name('delete');
                Route::post('/update/{id}','update')->name('update');
                Route::get('/show/{id}', 'show')->name('show');
            });


            //**************ADMIN image gallery ROUTES**************
            Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function() {
                Route::get('/{pid}','index')->name('index');
                Route::post('/store/{pid}', 'store')->name('store');
                Route::get('/delete/{pid}/{id}','delete')->name('delete');
            });


            //**************ADMIN MSG ROUTES**************
            Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function() {
                Route::get('/','index')->name('index');
                Route::post('/update/{id}','update')->name('update');
                Route::get('/destroy/{id}','delete')->name('destroy');
                Route::get('/show/{id}', 'show')->name('show');

            });

            //**************ADMIN Appointments ROUTES**************
            Route::prefix('/appointment')->name('appointment.')->controller(AppointmentController::class)->group(function() {
                Route::get('/','index')->name('index');
                Route::post('/update/{id}','update')->name('update');
                Route::get('/destroy/{id}','delete')->name('destroy');
                Route::get('/show/{id}', 'show')->name('show');

            });

            //**************ADMIN FAQ ROUTES**************
            Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store','store')->name('store');
                Route::get('/edit/{id}','edit')->name('edit');
                Route::post('/update/{id}','update')->name('update');
                Route::get('/destroy/{id}','destroy')->name('destroy');
                Route::get('/show/{id}', 'show')->name('show');
            });
            //**************ADMIN COMMENT ROUTES**************
            Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/show/{id}', 'show')->name('show');

                Route::post('/update/{id}','update')->name('update');
                Route::get('/destroy/{id}','destroy')->name('destroy');

            });

            //**************ADMIN user ROUTES**************
            Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/show/{id}', 'show')->name('show');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/update/{id}','update')->name('update');
                Route::post('/addrole/{id}','addrole')->name('addrole');
                Route::get('/destroy/{id}','destroy')->name('destroy');
                Route::get('/destroyrole/{uid}/{rid}','destroyrole')->name('destroyrole');

            });

        });
    });

