// Animation navigation
let btApropo = document.querySelector("#btApropo");let aPropo = document.querySelector(".Apropo");
let btProjet = document.querySelector("#btProjet");let Projet = document.querySelector(".Projet");
let btCompetence = document.querySelector("#btCompetence");let Competence = document.querySelector(".Competence");
let btContact = document.querySelector("#btContact");let Contact = document.querySelector(".Contact");

let styleBorderB= "border-bottom:#A8101F 2px solid; background:rgba(161, 89, 89, 0.582);"

btApropo.addEventListener("click", function(){
    aPropo.style=styleBorderB;
    projetBorderB(); comptenceBorderB(); contactBorderB();
});
btProjet.addEventListener("click", function(){
    Projet.style=styleBorderB;
    comptenceBorderB(); contactBorderB(); aPropoBorderB();
});
btCompetence.addEventListener("click", function(){
    Competence.style=styleBorderB;
    projetBorderB(); contactBorderB(); aPropoBorderB();
});
btContact.addEventListener("click", function(){
    Contact.style=styleBorderB;
    projetBorderB(); comptenceBorderB(); aPropoBorderB();
});
function projetBorderB(){Projet.style="border-bottom:none";}
function comptenceBorderB(){Competence.style="border-bottom:none";}
function contactBorderB(){Contact.style="border-bottom:none";}
function aPropoBorderB(){aPropo.style="border-bottom:none";}

// Window image des mokups et dessin
    // input des images
let recupImgMokup1=document.getElementById("imgMokup_1");
    recupImgMokup1.addEventListener("click", function(){inputVerif(recupImgMokup1.value)});
// let recupImgMokup2=document.getElementById("imgMokup_2");
//     recupImgMokup2.addEventListener("click", function(){inputVerif(recupImgMokup2.value)});
// let recupImgMokup3=document.getElementById("imgMokup_3");
//     recupImgMokup3.addEventListener("click", function(){inputVerif(recupImgMokup3.value)});

let recupImgDraw1=document.getElementById("imgDraw_1");
    recupImgDraw1.addEventListener("click", function(){inputVerif(recupImgDraw1.value)});
let recupImgDraw2=document.getElementById("imgDraw_2");
    recupImgDraw2.addEventListener("click", function(){inputVerif(recupImgDraw2.value)});


let recupImgDraw3=document.getElementById("imgDraw_3");
    recupImgDraw3.addEventListener("click", function(){inputVerif(recupImgDraw3.value)});
let recupImgDraw4=document.getElementById("imgDraw_4");
    recupImgDraw4.addEventListener("click", function(){inputVerif(recupImgDraw4.value)});
let recupImgDraw5=document.getElementById("imgDraw_5");
    recupImgDraw5.addEventListener("click", function(){inputVerif(recupImgDraw5.value)});
let recupImgDraw6=document.getElementById("imgDraw_6");
    recupImgDraw6.addEventListener("click", function(){inputVerif(recupImgDraw6.value)});

    // structure de trie des inputs
function inputVerif(InputValue){

    let WindowImgEnlargement = document.createElement("div");
    WindowImgEnlargement.className="d-flex justify-content-center align-items-center col-12";
    WindowImgEnlargement.style="position:fixed; z-index:5; background:rgba(199, 199, 199, 0.385); left:0; top:0; width:100%; height:100%;;"

    let boxImgEnlargement = document.createElement("div");
    boxImgEnlargement.className="windowImgClass d-flex justify-content-center";
    boxImgEnlargement.style="background: #BAD1BB; border-radius: 30px;";

    let crossButton =document.createElement("button");
    crossButton.className="cross_button";
    crossButton.style="margin-top:3px"

    boxImgEnlargement.appendChild(crossButton);
    WindowImgEnlargement.appendChild(boxImgEnlargement);
    document.body.appendChild(WindowImgEnlargement);

    // structure de trie image
    let verifValue = Number (InputValue);
    switch(verifValue){
        case 1:
            console.log("mokup 1");
            let imgMokup1 = document.createElement("img");
            imgMokup1.className="img_mokup_1";
            imgMokup1.src="mokup/Mokup_projet_bootstarp_redimensionnée.png";
            imgMokup1.style="padding:9% 7% 7% 7%; width:100vh;";
            boxImgEnlargement.appendChild(imgMokup1);
        break;
        case 2:
        break;
        case 3:
        break;
        case 4:
            let imgDraw1=document.createElement("img");
            imgDraw1.className="img_draw_1";
            imgDraw1.src="drawing/relicWorldChalice.png";
            imgDraw1.style="padding:9% 7% 7% 7%; height:90vh;";
            boxImgEnlargement.appendChild(imgDraw1);
        break;
        case 5:
            let imgDraw2=document.createElement("img");
            imgDraw2.className="img_draw_2";
            imgDraw2.src="drawing/foxOfLightBlack.png";
            imgDraw2.style="padding:9% 7% 7% 7%; width:120vh;";
            boxImgEnlargement.appendChild(imgDraw2);
        break;
        case 6:
            let imgDraw3=document.createElement("img");
            imgDraw3.className="img_draw_3";
            imgDraw3.src="drawing/cityInverted.png";
            imgDraw3.style="padding:9% 7% 7% 7%; width:120vh;";
            boxImgEnlargement.appendChild(imgDraw3);
        break;
        case 7:
            let imgDraw4=document.createElement("img");
            imgDraw4.className="img_draw_4";
            imgDraw4.src="drawing/haloween.png";
            imgDraw4.style="padding:9% 7% 7% 7%; height:90vh;";
            boxImgEnlargement.appendChild(imgDraw4);
        break;
        case 8:
            let imgDraw5=document.createElement("img");
            imgDraw5.className="img_draw_5";
            imgDraw5.src="drawing/oeil3D.png";
            imgDraw5.style="padding:9% 7% 7% 7%; height:90vh;";
            boxImgEnlargement.appendChild(imgDraw5);
        break;
        case 9:
            let imgDraw6=document.createElement("img");
            imgDraw6.className="img_draw_6";
            imgDraw6.src="drawing/number66.png";
            imgDraw6.style="padding:9% 7% 7% 7%; height:90vh;";
            boxImgEnlargement.appendChild(imgDraw6);
        break;
    }

// bouton cross close windo
    document.querySelector(".cross_button").addEventListener("click", function(){
        document.body.removeChild(WindowImgEnlargement);
    });
}