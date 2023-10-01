<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\PageContoller;
use App\Http\Controllers\PageController;
use App\Models\Candidate;
use App\Models\Comment;
use Illuminate\Http\Request;
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


Route::get('/paginate', function () {
    $users = Comment::where('comment_id',null)->where('candidate_id',2017)->paginate(2);
    // $users = Candidate::paginate(10);
    return view('candid', compact('users'));
})->name('about');

Route::get('/',[PageContoller::class,'home'])->name('home');

Route::get('/candidat/{candidate}/detail', [CandidateController::class,'detail'])->name('profil');

Route::get('/candidates', [CandidateController::class,'list'])->name('candidates');


Route::get('/stat-ceni', function () {
    return view('statistique.ceni-stat');
})->name('stat.ceni');
Route::get('/stat-our', function () {
    return view('statistique.our-stat');
})->name('stat.our');

Route::get('/about', [PageController::class,'about'])->name('about');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/image', function (Request $request) {

    $path= str_replace("\\","/",public_path('/storage/2023/04/20/e8e72efeedacc3dbb3a06dc92501301b90e0a3f7.png'));
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $imageBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

    // dd($imageBase64);

    $pp= str_replace("\\","/",public_path('/assets/img/team/profile-picture-4.jpg'));
    // dd($pp);
    return "<img src='{$imageBase64}' alt='sample' class='mw-100 d-block img-fluid rounded-1 w-100'>";

    // return asset('/storage/2023/04/20/e8e72efeedacc3dbb3a06dc92501301b90e0a3f7.png')
    dd(asset('/storage/2023/04/20/e8e72efeedacc3dbb3a06dc92501301b90e0a3f7.png'));
    dd($request);
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageData = base64_encode(file_get_contents($file));

        // $image = new Image;
        // $image->data = $imageData;
        // $image->save();
    }

    $file = $request->file('image');
    dd($file);
    $imageData = base64_encode(file_get_contents($file));
    dd($imageData,$request);

})->name('image');
