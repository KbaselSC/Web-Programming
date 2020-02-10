/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var cardCanvas = document.getElementById("cardCanvas");
var subInv = document.getElementById("subInv");
var formCont = document.getElementById("formCont");
var ctx = cardCanvas.getContext("2d");
var name = document.getElementById("name").value;
var color = document.getElementById("color").value;
var corr = document.getElementById("corruption").value;


subInv.addEventListener("click", submitInv);

function submitInv(){
    formCont.style.display="none";
    cardCanvas.style.transition="3.5s";
    cardCanvas.style.opacity="1";
    invText();
}
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
