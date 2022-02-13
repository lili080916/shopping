<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\SaveUserRequest;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name')->paginate(4);

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveUserRequest $request)
    {
        $data = [
            'name'      => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'address'   => $request->input('address'),
            'email'     => $request->input('email'),
            'user'      => $request->input('user'),
            'active'    => $request->has('active') ? 1 : 0,
            'password'  => \Hash::make($request->input('password')),
            'type'      => $request->input('type')
        ];
        
        $user = User::create($data);

        $message = $user ? 'Usuario creado correctamente' : 'No se ha podido crear el usuario';

        return redirect()->route('user.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name'      => 'required|max:100',
            'last_name' => 'required|max:100',
            'email'     => 'required|email',
            'user'      => 'required|min:4|max:20',
            'password'  => $request->input('password') != "" ? 'required|confirmed' : "",
            'type'      => 'required|in:user,admin'
        ]);

        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->user = $request->input('user');
        $user->type = $request->input('type');
        $user->address = $request->input('address');
        $user->active = $request->has('active') ? 1 : 0;
        
        if($request->get('password') != "")
        {
            $user->password = \Hash::make($request->input('password'));
        }

        $updated = $user->save();
        $message = $updated ? 'Se ha actualizado el usuario correctamente' : 'Ha ocurrido un error';
        
        return redirect()->route('user.index')->with('message', $message);


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $delete = $user->delete();

        $message = $delete ? 'Se ha eliminado el usuario' : 'No se ha podido eliminar el usuario';

        return redirect()->route('user.index')->with('message', $message);
    }
}
