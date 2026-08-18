<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\ReserveModel;
    use App\Models\RoomsModel;

    class ReserveController extends Controller
    {
        public function store(Request $request){
            //Validando los datos
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'entry_date' => 'required|date',
                'departure_date' => 'required|date|after:entry_date',
                'room_id' => 'required|integer',
                'people' => 'required|integer|min:1'
            ]);

            //Registrar los datos en la DB
            ReserveModel::create([
                'name' => $request->name,
                'email' => $request->email,
                'entry_date' => $request->entry_date,
                'departure_date' => $request->departure_date,
                'room_id' => $request->room_id,
                'people' => $request->people
            ]);
 
            //Informar al usuario
            return response()->json([
                'message' => 'Reservation successfully created'
            ]);

        }

    }
?>