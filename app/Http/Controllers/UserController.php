<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Address;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserController extends Controller
{
  public function borrarDireccion($id)
  {
    $user = Auth::user();
    $user->addresses()->detach($id);
    return redirect('/perfil');
  }
  public function passChange(Request $request)
  {
    $user = Auth::user();

    $this->validate( $request, [
        'password' => 'required', 'string', 'min:6', 'max:14', 'confirmed',
    ]);

    $user->password = Hash::make($request->input('password'));
    $user->save();
    return redirect('/perfil');
  }
  public function edit(Request $request)
  {
    $user = User::find(Auth::user()->id);

    $this->validate( $request, [
        'name' => 'string',
        'last_name' => 'string',
        'age' => 'date',
        'avatar' => 'mimes:jpeg,png,jpg,gif,JPEG,PNG,JPG,GIF',
        'address' =>  'string',
    ]);
    if ($request->file('avatar')) {
      $folder = 'public/avatars';
      $path = $request->file('avatar')->storePublicly( $folder );
      $user->avatar = $path;
    }
      $user->name = $request->input('name');
      $user->last_name = $request->input('last_name');
      $user->age = $request->input('age');
      $user->save();

      $address = Address::create([
         'name' => $request->input('address'),
      ]);
      $user->addresses()->attach($address);


    return redirect('/perfil');

  }

}
