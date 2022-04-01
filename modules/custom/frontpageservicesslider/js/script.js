const buttonsWrapper = document.querySelector(".slider-map");
const slides = document.querySelector(".slider-inner");
buttonsWrapper.addEventListener("click", e => {
  if (e.target.nodeName === "BUTTON") {
    Array.from(buttonsWrapper.children).forEach(item => item.classList.remove("slider-active"));
    var slidercounter = parseInt(e.target.classList); //alert(slidercounter);

    if (slidercounter == 1) {
      slides.style.transform = "translateX(-0%)";
      e.target.classList.add("slider-active");
    } else if (slidercounter != 1) {
      var st = "translateX(" + (slidercounter - 1) * -33.33333333333333 + "%)";
      st = st.toString(); //alert(st);

      slides.style.transform = st;
      e.target.classList.add("slider-active");
    }
  }
});