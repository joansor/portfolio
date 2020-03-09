document.querySelector("form").addEventListener("submit", function verif(event){
   //Ecoute de l'évenement du formulaire au bouton envoyé


    event.preventDefault();

    let name = document.getElementById("nom").value;
    let email = document.getElementById("email").value;
    let codePostal = document.getElementById("codepostal").value;

    verifName(name);
    verifMail(email);  
    verifCodePostal(codePostal);


  //verification du formulaire
  function verifName(name) {

    if (name.length < 2) {

      document.getElementById("erreur").innerText = "champ non rempli ! ";
      

      document.getElementById("erreur").innerText =
        " Veuillez remplir le champs nom, ";

    } else {

      document.getElementById("ok").innerText =" ";
      document.getElementById("ok").innerText =
      " nom ok!; ";

    }
  }
  

  function verifMail(email) {

    let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (!email.match(regex)) {

      document.getElementById("erreur").innerText =" Adresse mail non valide, ";
      
      document.getElementById("erreur").innerText =
        " veuillez inclure un @ et . pour validé le mail !; ";

    } else {

      document.getElementById("ok").innerText =" ";
      document.getElementById("ok").innerText =
      " mail ok! ";

    }
  }


  function verifCodePostal(codePostal){

    let regexCodePostal = /^((0[1-9])|([1-8][0-9])|(9[0-8])|(2A)|(2B))[0-9]{3}$/;

    if(!codePostal.match(regexCodePostal)){

      document.getElementById("erreur").innerText =" Code Postal non valide; ";
        
      } else {
      document.getElementById("ok").innerText =" ";
      document.getElementById("ok").innerText =" Code Postal ok, ";
    }
  }
});//fin de addEventListener

//le scroll animée
$(document).ready(function() {
  $('.js-scrollTo').on('click', function() { // Au clic sur un élément
    let page = $(this).attr('href'); // Page cible
    let speed = 750; // Durée de l'animation (en ms)
    $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
    return false;
  });
});// fin du scroll animée


/////////////// Creation d'une div dynamique sur over de l'image de projet

let elements = document.getElementsByClassName("image_projet");

let myFunction = function() {

    let div = document.createElement('div')
    let attribute = this.getAttribute("class");
    console.log(attribute);
};

for (let i = 0; i < elements.length; i++) {
    elements[i].addEventListener('mouseover', myFunction, false);
}