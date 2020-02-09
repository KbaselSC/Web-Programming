/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var name = document.getElementById("name").value;
var color = document.getElementById("color").value;
var cardCanvas = document.getElementById("cardCanvas");
var subInv = document.getElementById("subInv");
var formCont = document.getElementByClass("formCont");

subInv.addEventListener("click", submitInv);

function submitInv(){
    formCont.style.display="none";
    //function
    cardCanvas.style.display="block";
}
