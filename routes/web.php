<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\About\AboutUs;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Livewire\Admin\Message\ViewMessage;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Livewire\Frontend\Portfolio\Portfolio;
use App\Http\Controllers\Manage\DashboardController;
use App\Http\Livewire\Admin\Contact\ContactLivewire;
use App\Http\Controllers\manage\PermissionController;
use App\Http\Livewire\Admin\Project\ProjectsLivewire;
use App\Http\Livewire\Admin\Service\ServicesLivewire;
use App\Http\Livewire\Admin\Settings\SettingLivewire;
 use App\Http\Livewire\Admin\Skills\SkillsLivewire;
use App\Http\Livewire\Admin\Education\EducationLivewire;
use App\Http\Livewire\Admin\Dashboard\UserDashboardLivewire;
use App\Http\Livewire\Admin\Experiences\ExperiencesLivewire;
use App\Http\Livewire\Admin\Dashboard\AdminDashboardLivewire;

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/logout-user', [LoginController::class, 'logoutUser']);

Route::prefix('google')->name('google.')->group(function () {
    Route::get('login', [GoogleAuthController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleAuthController::class, 'callbackFromGoogle'])->name('callback');
});

//permission
Route::group(['middleware' => ['role:developer|admin', 'auth'], 'prefix' => 'admin'], function () {
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permission.index');
    Route::get('/permissions/{userId}', [PermissionController::class, 'permissionView'])->name('permission.view');
    Route::post('/role-permission/{role}', [PermissionController::class, 'setPermissionToRole'])->name('role.set');
    Route::post('/roles', [PermissionController::class, 'createRole'])->name('role.create');
    Route::get('/view-users/{role}', [PermissionController::class, 'viewUsers'])->name('view.users');
    Route::post('/assign-role/{user}', [PermissionController::class, 'setRolesToUser'])->name('assign.role');
    Route::get('/users', [PermissionController::class, 'userList'])->name('user.list');
    Route::get('/remove-role/{user}/{role}', [PermissionController::class, 'removeRoleFromUser'])->name('remove.role');
});

// Route::group(['middleware' => ['auth', 'isAdmin','role:super-admin'], 'prefix' => 'admin'], function () {
Route::group(['middleware' => ['role:developer|admin|user', 'auth'], 'prefix' => 'admin'], function () {

    Route::get('/', [DashboardController::class, 'index']);

    // Portfolio
    Route::get('abouts', AboutUs::class)->name('Portfolio.about');

    //  skills
    Route::get('skills', SkillsLivewire::class)->name('Portfolio.skill');

    //  educations
    Route::get('educations', EducationLivewire::class)->name('Portfolio.education');

    //  experiences
    Route::get('experiences', ExperiencesLivewire::class)->name('Portfolio.experiences');

    //  services
    Route::get('services', ServicesLivewire::class)->name('Portfolio.services');

    //  projects
    Route::get('projects', ProjectsLivewire::class)->name('Portfolio.projects');

    //  view-message
    Route::get('view-message/{message}', ViewMessage::class)->name('Portfolio.message');

    //  view-message
    Route::get('contact', ContactLivewire::class)->name('Portfolio.contact');

    //  dashboard
    Route::get('admin-dashboard', AdminDashboardLivewire::class)->name('admin.dashboard');
    Route::get('user-dashboard', UserDashboardLivewire::class)->name('user.dashboard');

    //  view-Setting
    Route::get('settings', SettingLivewire::class)->name('Portfolio.settings');

});

Route::group(['middleware' => ['web'], 'prefix' => 'Portfolio'], function () {
    Route::get('/home/{userid}/{username}', Portfolio::class)->name('home');
}
);

Route::view('/notaccess', 'notaccess');
// X(Pr&vukw*tqh&NMkZ^p
