function showHide(a) {
  var elem = document.getElementById(a);
  console.log(elem.className);
  if (elem.className=="hidden"){
    elem.className="shown";
  }
  else {
    elem.className="hidden";
  }
}
