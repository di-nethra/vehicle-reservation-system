
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(6.927079,79.861244),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

document.getElementById("googleMap").innerhtml;

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlPYInAn_5DlsV7cz31oRneltRZezAPpc&callback=myMap"></script>

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};