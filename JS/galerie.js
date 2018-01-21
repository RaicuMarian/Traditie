function pop () {
  var raspuns = document.getElementById("confirmare");
  raspuns.style.display = "block";
  raspuns.style.transition = "2";
}

setTimeout(function dispare (){
  var raspuns = document.getElementById("confirmare");
  raspuns.style.display = "none";

}, 4000);

