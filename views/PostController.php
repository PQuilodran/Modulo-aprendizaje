public function index() {
    $cars=Car::all();
    return view('listar',compact('cars'));
 }