

//Make the DIV element draggagle:

dragElement(document.getElementById("mydiv"));


function what(){

document.getElementById("x").innerHTML =this;

}

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
    document.getElementById("mydivmain").innerHTML = "LEFT: " + elmnt.style.left;
    document.getElementById("mydivmain2").innerHTML = "TOP:  " + elmnt.style.top;
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;elmnt.style.zIndex=elmnt.style.zIndex +1;
  }
}

function add_time() {
var d = new Date();
//var d = new time();
//d.setHours(15, 35, 1);
//d.getTime();
//d.setFullYear(2020, 11, 3);
// d.setHours( d.getHours() + 2 );
// d.setminutes(  d.getMinutes() + 30 );
 d.setMinutes(d.getMinutes() + start_time.value);
document.getElementById("demo").innerHTML = d;

//alert(d);
demo.value = d;
}

function disp() {
document.getElementById("demo").innerHTML ="test";
}
