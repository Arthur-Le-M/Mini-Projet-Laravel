<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utilisateur;

class inscriptionController extends Controller
{
    //register
    public function register(){
        return view('register');
    }

    public function newUser(Request $request){
        //Insérer en base de données
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);

        //Vérifier que l'email n'est pas déjà utilisé
        $user = utilisateur::where('email', $request->email)->first();
        if($user){
            return back()->with('error', 'Cet email est déjà utilisé');
        }
        else{
            //Insérer dans la base de données
            $user = new utilisateur;
            $user->email = $request->email;
            //Hasher le mot de passe
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->route('register')->with('success', 'Votre compte a bien été créé');
        }

    }
}
