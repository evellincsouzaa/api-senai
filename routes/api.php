<?php
use App\Http\Controllers\CompetitorController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TrainerController;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::Get('/minhas-informacoes', function(){
    return response()->json([
        'Nome' => 'Evellin',
        'RM' => '2658'
    ]);
});

Route:: apiResource ('/sports', SportController::class);
?>
<?php
Route::apiResource('/trainers', TrainerController::class);
Route::apiResource('/competitor', CompetitorController::class);
Route::apiResource('/location', LocationController::class);
?>
