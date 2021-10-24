/*Modal*/

var modal = document.getElementById('myModal-photo');
var span = document.getElementsByClassName("close")[0];

span.onclick = function() { 
  modal.style.display = "none";
}

var images = document.getElementsByClassName("photo");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var i;
for (i =  0; i < images.length; i++) {
    images[i].onclick = function Modal(){
        modal.style.display = "block";
        modalImg.src = this.src;
        modalImg.alt = this.alt;
        captionText.innerHTML = this.alt;
    }}
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
}

var mybutton = document.getElementById("myBtn");

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}