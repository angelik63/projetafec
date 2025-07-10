document.addEventListener('DOMContentLoaded', function() {
  var modal = document.getElementById("notificationModal");
  var bellIcon = document.getElementById("bell-icon");
  var span = document.querySelector(".modal .close");

  bellIcon.onclick = function() {
    modal.style.display = "block";
  }

  span.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
});
