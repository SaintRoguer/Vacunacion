<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Http\Request;
use App\Actions\Fortify\PasswordValidationRules;

class userRegistrationController extends Controller
{
    use PasswordValidationRules;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        $users = User::where('id','<>', function($query){
            $query->select('model_id')
            ->from('model_has_roles')
            ->where('role_id','2');
        })->get();
       
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $province = [
            'Buenos Aires' => 'Buenos Aires',
            'La Pampa' => 'La Pampa',
            'Misiones' => 'Misiones',
            'Formosa' => 'Formosa',
            'Entre Rios' => 'Entre Rios',
            'Chaco' => 'Chaco',
            'Salta' => 'Salta',
            'Tucuman' => 'Tucuman',
            'Santiago del Estero' => 'Santiago del Estero',
            'Mendoza' => 'Mendoza',
            'San Luiz' => 'San Luiz',
            'San Juan' => 'San Juan',
            'Tierra del Fuego' => 'Tierra del Fuego',
            'Santa Cruz' => 'Santa Cruz',
            'Chubut' => 'Chubut',
            'Cordoba' => 'Cordoba',
            'Santa Fe' => 'Santa Fe',
            'Rio Negro' => 'Rio Negro',
            'Neuquen' => 'Neuquen',
            'Corrientes' => 'Corrientes',
            'La Rioja' => 'La Rioja',
            'Catamarca' => 'Catamarca',
        ];

        $role = [
            '1' => 'Ministro de Salud',
            '3' => 'Responsable de Region Sanitaria',
            '4' => 'Operario'
        ];
        return view('users.create',compact('province','role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        print "asdasd";
        Validator::make($request->all(), [
            'username' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
            'password_confirmation' => ['required','same:password'],
            'province' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'dni' => ['required', 'integer','numeric'],
            'role' => ['required', 'integer'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $newUser =  User::create([
            'username' => $request['username'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'province' => $request['province'],
            'city' => $request['city'],
            'dni' => $request['dni'],
        ]);

        $newUser->roles()->sync($request->role);

        return redirect()->route('users.index')->with('info', 'The user has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccine $vaccine)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccine $vaccine)
    {
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('info', 'The user has been deleted successfully');
    }
}

