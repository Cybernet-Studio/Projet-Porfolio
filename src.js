let btApropo = document.querySelector("#btApropo");let aPropo = document.querySelector(".Apropo");

let btProjet = document.querySelector("#btProjet");let Projet = document.querySelector(".Projet");

let btCompetence = document.querySelector("#btCompetence");let Competence = document.querySelector(".Competence");

let btContact = document.querySelector("#btContact");let Contact = document.querySelector(".Contact");

let strBorderBottom = "border-bottom:none";

btApropo.addEventListener("click", function(){
    aPropo.style="border-bottom:red 2px solid";
    Projet.style=strBorderBottom;
    Competence.style=strBorderBottom;
    Contact.style=strBorderBottom;
});
btProjet.addEventListener("click", function(){
    Projet.style="border-bottom:red 2px solid";
    aPropo.style=strBorderBottom;
    Competence.style=strBorderBottom;
    Contact.style=strBorderBottom;
});
btCompetence.addEventListener("click", function(){
    Competence.style="border-bottom:red 2px solid";
    Projet.style=strBorderBottom;
    aPropo.style=strBorderBottom;
    Contact.style=strBorderBottom;
});
btContact.addEventListener("click", function(){
    Contact.style="border-bottom:red 2px solid";
    Projet.style=strBorderBottom;
    Competence.style=strBorderBottom;
    aPropo.style=strBorderBottom;
});