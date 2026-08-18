<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\RoomsModel;

    class RoomsController extends Controller
    {
        public function index(){
            return view('index');
        }
        
        public function get_rooms(){
            $rooms = RoomsModel::all();

            return view('reserve', compact('rooms'));
        }
    } 
?>