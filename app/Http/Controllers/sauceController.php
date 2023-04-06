<?php

namespace App\Http\Controllers;

use App\Models\sauce;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PhpOption\None;

class sauceController extends Controller
{
    //
    public function show($id): View
    {
        $sauce = \App\Models\sauce::findOrfail($id);
        return view('sauce', ['sauce' => $sauce]);
    }

    public function index(): View
    {
        $sauces = \App\Models\sauce::all();
        return view('allSauces', ['sauces' => $sauces]);
    }

    public function create(){
        if(!session('utilisateur'))
            return redirect()->route('login');
        return view('create');
    }

    public function addSauce(Request $request){
        //Vérification de la session
        if(!session('utilisateur'))
            return redirect()->route('login');
        //Insérer en base de données
        $request -> validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'description' => 'required',
            'mainPepper' => 'required',
            'heat' => 'required',
            'image' => 'required'
        ]);

        $sauce = new sauce();
        $sauce->userID = session('utilisateur')->id;
        $sauce->name = $request->name;
        $sauce->manufacturer = $request->manufacturer;
        $sauce->description = $request->description;
        $sauce->mainPepper = $request->mainPepper;
        $sauce->heat = $request->heat;
        $sauce->imgURL = $request->image;
        //Insertion en base de données
        $sauce->save();
        return redirect()->route('sauce')->with('success', 'Votre sauce a bien été créée');
    }

    public function likeSauce($id){
        //Vérification de la session
        if(!session('utilisateur'))
            return redirect()->route('login');
        //Vérification que l'utilisateur n'a pas déjà liké dans le json
        $idUser = session('utilisateur')->id;
        $sauce = sauce::findOrfail($id);
        //dump($sauce->usersWhoLiked); // Debug
        $usersWhoLiked = json_decode($sauce->usersWhoLiked);
        if(in_array($idUser, $usersWhoLiked)){
            return redirect()->back()->with('error', 'Vous avez déjà liké cette sauce');
            
        }
        //On vérifie que l'utilisateur n'a pas déjà disliké
        $usersWhoDisliked = json_decode($sauce->usersWhoDisliked);
        if(in_array($idUser, $usersWhoDisliked)){
            //On supprime l'utilisateur du json
            $usersWhoDisliked = array_diff($usersWhoDisliked, [$idUser]);
            $sauce->usersWhoDisliked = json_encode($usersWhoDisliked);
            //On retire le dislike
            $sauce->dislikes -= 1;
        }
        //Ajout du like
        $sauce->likes += 1;
        //On ajoute l'utilisateur dans le json
        array_push($usersWhoLiked, $idUser);
        $sauce->usersWhoLiked = json_encode($usersWhoLiked);
        $sauce->save();
        return redirect()->back()->with('success', 'Vous avez liké cette sauce');
        

    }

    public function dislikeSauce($id){
        //Vérification de la session
        if(!session('utilisateur'))
            return redirect()->route('login');
        //Vérification que l'utilisateur n'a pas déjà disliké dans le json
        $idUser = session('utilisateur')->id;
        $sauce = sauce::findOrfail($id);
        //dump($sauce->usersWhoLiked); // Debug
        $usersWhoDisliked = json_decode($sauce->usersWhoDisliked);
        if(in_array($idUser, $usersWhoDisliked)){
            return redirect()->back()->with('error', 'Vous avez déjà disliké cette sauce');
        }
        //On vérifie que l'utilisateur n'a pas déjà liké
        $usersWhoLiked = json_decode($sauce->usersWhoLiked);
        if(in_array($idUser, $usersWhoLiked)){
            //On supprime l'utilisateur du json
            $usersWhoLiked = array_diff($usersWhoLiked, [$idUser]);
            $sauce->usersWhoLiked = json_encode($usersWhoLiked);
            //On retire le like
            $sauce->likes -= 1;
        }
        //Ajout du dislike
        $sauce->dislikes += 1;
        //On ajoute l'utilisateur dans le json
        array_push($usersWhoDisliked, $idUser);
        $sauce->usersWhoDisliked = json_encode($usersWhoDisliked);
        $sauce->save();
        return redirect()->back()->with('success', 'Vous avez disliké cette sauce');
    }


}
