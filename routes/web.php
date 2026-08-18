<?php
/*
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ReserveController;
    use App\Http\Controllers\RoomsController;
    
    //Create
    Route::post('/index', [ReserveController::class, 'store']);

    //get rooms
    Route::get('/', [RoomsController::class, 'get_rooms']);
    */
?> 


<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ReserveController;
    use App\Http\Controllers\RoomsController;

    // Página principal
    Route::get('/', [RoomsController::class, 'index'])->name('index');

    // Página de reservas
    Route::get('/reserve', [RoomsController::class, 'get_rooms'])->name('reserve');

    // Crear reserva
    Route::post('/reserve', [ReserveController::class, 'store'])->name('reserve.store');

?>