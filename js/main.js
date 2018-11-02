var current_elem;

function showHide(a) {
  var elem = document.getElementById(a);
  if (elem.className=="hidden"){
    elem.className="shown";
    elem.focus();
    current_elem = elem;
  }
  else {
    if(event.target.id != current_elem.getAttribute('id')){
      elem.className="hidden";
    }
  }
}
