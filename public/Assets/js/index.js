function removeNavClass(x) {
  if (x.matches) {
    document.getElementsByClassName("cybr-btn");
    element.classList.remove("nav-link");
  } 
}

var x = window.matchMedia("(max-width: 1030px)")
removeNavClass(x) // Call listener function at run time
x.addListener(removeNavClass)