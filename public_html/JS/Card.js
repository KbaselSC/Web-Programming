/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var cardCanvas = document.getElementById("cardCanvas");
var subInv = document.getElementById("subInv");
var formCont = document.getElementById("formCont");

subInv.addEventListener("click", submitInv);

function submitInv(){
    formCont.style.display="none";
    cardCanvas.style.display="block";
    invText();
}
function invText(){
    var ctx = cardCanvas.getContext("2d");
    var name = document.getElementById("name").value;
    var color = document.getElementById("color").value;
    ctx.fillStyle=color;
    ctx.font="20px Arial";
    ctx.fillText(name + " Has been invited to raid!", 20, 460);
}
