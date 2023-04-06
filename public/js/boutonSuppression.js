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
    //TODO

    //Bouton cancel
    btnCancel = document.querySelector('#cancel');
    btnCancel.addEventListener('click', (e) =>{
    modal = document.querySelector('.modal');
    document.body.removeChild(modal);
    });
});

