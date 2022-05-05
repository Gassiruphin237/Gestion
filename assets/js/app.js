// function history(){
//     window.history.back();
//     // return true;
// }

function loading(){
    let body = document.getElementById("body");
    let loader = document.getElementById("loader");
    let div = document.getElementById("corps");
    loader.style.display="none";
    div.style.display="block";
}
setTimeout("loading()", 3000);