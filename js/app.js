function verif(event) {
  //event.preventDefault();
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let message = document.getElementById("contact-textarea").value;
  let codePostal = document.getElementById("codepostal").value;
  
  verifName(name);
  verifMail(email);
  verifMessage(message);
  verifMessage(codePostal);

}

//le scroll animée
$(document).ready(function() {
  $('.js-scrollTo').on('click', function() { // Au clic sur un élément
    let page = $(this).attr('href'); // Page cible
    let speed = 750; // Durée de l'animation (en ms)
    $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
    return false;
  });
});

//verification du formulaire
function verifName(name) {
  if (name.length < 2) {
    console.log("champ non rempli !");
    event.preventDefault();

    document.getElementById("erreurpseudo").innerText =
      "Veuillez remplir le champs pseudo";
  } else if (!name.includes(" ")) {
    console.log("entrer un espace svp!");
    event.preventDefault();
    document.getElementById("erreurpseudo").innerText =
      "Mettez un espace au pseudo";
  } else {
    document.getElementById("erreurpseudo").innerText = "";
    console.log(" champ ok!");
  }
}

function verifMail(mail) {
  let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (!mail.match(regex)) {
    console.log("Adresse mail non valide");
    event.preventDefault();
    document.getElementById("erreur").innerText =
      "veuillez inclure un @ et . pour validé!";
  } else {
    document.getElementById("erreur").innerText = "";
    console.log("mail ok! ");
  }
}

function verifMessage(message) {

if(!message){

    document.getElementById("erreur").innerText =
      "veuillez inclure un @ et . pour validé!";

}

}

function verifCodePostal(codePostal){

if(!codePostal){

    let regexCodePostal = /^((0[1-9])|([1-8][0-9])|(9[0-8])|(2A)|(2B))[0-9]{3}$/;
}

}

let img = document.getElementById('image_projet');

img.addEventListener("mouseover", function( event ) {   
  // on met l'accent sur la cible de mouseover

alert();

});