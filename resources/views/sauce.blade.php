@extends('welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/sauce.css') }}">
    <div class="container">
        <img src="{{ $sauce->imgURL }}" alt="{{ $sauce->name }}">
        <div>
            <h2>{{ $sauce->name }}</h1>
            <p><span class='titreDesc'>Manufacturer</span> : {{ $sauce->manufacturer }}</p>
            <p><span class='titreDesc'>Description</span> : {{ $sauce->description }}</p>
            <p><span class='titreDesc'>Main Pepper</span> : {{ $sauce->mainPepper }}</p>
            <p><span class='titreDesc'>Heat</span> : {{ $sauce->heat }}/10</p>
            <div>
                <a class="buttonSauce" id="like" href='{{route('likeSauce', ['id' => $sauce->id])}}'>👍 {{ $sauce->likes }}</a>
                <a class="buttonSauce" id="dislike" href='{{route('dislikeSauce', ['id' => $sauce->id])}}'>👎 {{ $sauce->dislikes }}</a>
            </div>
            <div>
                @if(session('utilisateur')->id == $sauce->userID)
                <p><span class='titreDesc'>🛠 Manage your sauce : </span></p>
                <a class="buttonSauce" id="edit" >✏ Edit</a>
                <a class="buttonSauce" id="delete">🗑 Delete</a>
                <!--<script src="{{asset('js/boutonSuppression.js')}}"></script>-->
                <script>
                    //BOUTON SUPPRESSION
                    //Récupération du bouton supprimer
                    btnDelete = document.querySelector('#delete');

                    btnDelete.addEventListener('click', (e) =>{
                    //On créer une fenêtre modale en plein milieu de la page

                    let modal = document.createElement('div');
                    modal.classList.add('modal');
                    modal.innerHTML = `
                        <div class="modal-content">
                            <p>Êtes-vous sûr de vouloir supprimer ce produit ?</p>
                            <div class="modal-buttons">
                                <button id="cancel">Annuler</button>
                                <button id="confirm">Confirmer</button>
                            </div>
                        </div>
                    `;
                    document.body.appendChild(modal);
                    //Bouton confirmer
                    btnConfirm = document.querySelector('#confirm');
                    btnConfirm.addEventListener('click', (e) =>{
                        window.location.href = '{{route('deleteSauce', ['id' => $sauce->id])}}';
                    });

                    //Bouton cancel
                    btnCancel = document.querySelector('#cancel');
                    btnCancel.addEventListener('click', (e) =>{
                    modal = document.querySelector('.modal');
                    document.body.removeChild(modal);
                    });
                });
                </script>
                @endif
            </div>
    </div>
@endsection
