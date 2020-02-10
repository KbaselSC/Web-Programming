/* 
 * Author: Kevin Basel
 * Javascript for the index.html that generates and invite for raid
 * with the persons name, color they want the text, and the amount of
 * "corruption" they have
 */

//variables
var cardCanvas = document.getElementById("cardCanvas");
var subInv = document.getElementById("subInv");
var formCont = document.getElementById("formCont");
var ctx = cardCanvas.getContext("2d");
var name = document.getElementById("name").value;
var color = document.getElementById("color").value;
var corr = document.getElementById("corruption").value;


subInv.addEventListener("click", submitInv);

//function that is used when the generate invite button is hit
function submitInv(){
    formCont.style.display="none";
    cardCanvas.style.transition="3.5s";
    cardCanvas.style.opacity="1";
    invText();
}
//function that makes the details of the canvas appear
function invText(){
    ctx.fillStyle=color;
    ctx.font="20px Arial";
    invBg = new Image();
    invBg.src = "Images/raid envelope.png";
    invBg.onload =() =>{
        ctx.drawImage(invBg, 0, 0, 200, 200);
    };
    ctx.fillText(name + " has " + corr + " Corruption", 10, 420);
    ctx.fillText("And has been invited to raid!",10, 450);
}
