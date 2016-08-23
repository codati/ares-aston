function blinker() {
    $('.negatif').fadeOut(500).fadeIn(500);
}
 
setInterval(blinker, 3000);


// request permission on page load
document.addEventListener('DOMContentLoaded', function () {
  if (!Notification) {
    alert('Desktop notifications not available in your browser. Try Chromium.'); 
    return;
  }

  if (Notification.permission !== "granted")
    Notification.requestPermission();
});