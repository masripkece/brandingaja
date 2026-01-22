const slider = document.getElementById("loopSlider");
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".pro-dot");

let index = 1;
const total = dots.length;
const slideWidth = 33.333;
let interval;

function updateActive() {
  slides.forEach(s => s.classList.remove("active"));
  slides[index].classList.add("active");

  dots.forEach((dot, i) => {
    dot.classList.toggle("active", i === (index - 1) % total);
  });
}

function startSlider() {
  interval = setInterval(() => {
    index++;
    slider.style.transition = "transform 1s ease-in-out";
    slider.style.transform = `translateX(-${slideWidth * index}%)`;
    updateActive();

    if (index === total + 1) {
      setTimeout(() => {
        slider.style.transition = "none";
        index = 1;
        slider.style.transform = `translateX(-${slideWidth * index}%)`;
        updateActive();
      }, 1000);
    }
  }, 4500);
}

function stopSlider() {
  clearInterval(interval);
}

slider.style.transform = `translateX(-${slideWidth * index}%)`;
updateActive();
startSlider();

// Pause on hover
slider.addEventListener("mouseenter", stopSlider);
slider.addEventListener("mouseleave", startSlider);
