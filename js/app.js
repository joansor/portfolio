document.querySelector("form").addEventListener("submit", function verif(event) {
    //Ecoute de l'évenement du formulaire au bouton envoyé

    //event.preventDefault();

    let name = document.getElementById("nom").value;
    let email = document.getElementById("email").value;
    let codePostal = document.getElementById("codepostal").value;

    verifName(name);
    verifMail(email);
    verifCodePostal(codePostal);

  
      
      //verification du formulaire
      function verifName(name) {

        if (name.length < 2) {

          messageErreur("nom");
          event.preventDefault();

        } else {

          messageOk(name);
          //event.preventDefault();

        }
      }

      function verifMail(email) {

        let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if (!email.match(regex)) {
        
          messageErreur("email");
          event.preventDefault();
        } else {

          messageOk(email);
          //event.preventDefault();
        }
      }

      function verifCodePostal(codePostal) {

        let regexCodePostal = /^((0[1-9])|([1-8][0-9])|(9[0-8])|(2A)|(2B))[0-9]{3}$/;

        if (!codePostal.match(regexCodePostal)) {

          messageErreur("codePostal");
          event.preventDefault();
        } else {

        messageOk(codePostal);
        //event.preventDefault();

        }
      }
    if (!name || !email || !codePostal) {

      messageErreur(" erreur d'envoie! ");
      event.preventDefault();
    

    }else if(!name && !email && !codePostal){

      messageOk(" Mail Envoyé! ");
      
      }

}); //fin de addEventListener Formulaire




function messageOk(variable){

  let p =  document.createElement("p");
  p.classList.add("ok");
  document.querySelector("form").appendChild(p);
  p.innerText = ""+ variable +" ok ";

  setTimeout(function messageOk(variable){ p.innerText = " "; }, 5000);
}

function messageErreur(variable){

 let p =  document.createElement("p");
  p.classList.add("erreur");
  document.querySelector("form").appendChild(p);
  p.innerText = " erreur ! " + variable;

  setTimeout(function messageErreur(variable){ p.innerText = " "; }, 5000);
}



//le scroll animée
$(document).ready(function() {
  $(".js-scrollTo").on("click", function() {
    // Au clic sur un élément
    let page = $(this).attr("href"); // Page cible
    let speed = 750; // Durée de l'animation (en ms)
    $("html, body").animate({ scrollTop: $(page).offset().top }, speed); // Go
    return false;
  });
}); // fin du scroll animée

/////////////// Creation d'une div dynamique sur over de l'image de projet

// let elements = document.getElementsByClassName("image_projet");
// //elements.onmouseover = elements.onmouseout;

// console.log(elements);

// let mouseEnter = function() {

//       $(".divToggle").animate({
//         height: 'toggle'
//       });


// }

// // let mouseLeave = function() {

// //   $(".divToggle").animate({
// //     display: 'none'
// //   });


// // }


// for (let i = 0; i < elements.length; i++) {
//   elements[i].addEventListener("mouseenter", mouseEnter, false);


// // }
// // for (let i = 0; i < elements.length; i++) {
// //   elements[i].addEventListener("mouseleave", mouseLeave, false);
// //}

/********************************************************* */
/*********************************************************** */


// au click du lien le menu se cache 
$('.navbar-nav>li>a').on('click', function(){
  $('.navbar-collapse').collapse('hide');
});
