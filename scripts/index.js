setTimeout(function () {
  const warningDiv = document.querySelector(".warning");
  if (warningDiv) {
    warningDiv.style.opacity = "0";
    setTimeout(function () {
      warningDiv.style.display = "none";
    }, 1000); // Delay for 1 second after fading out
  }
}, 5000); // 5000 milliseconds (5 seconds)
