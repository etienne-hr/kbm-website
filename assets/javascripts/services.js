// const btnRight = document.querySelector(".btn-service-right");
const sliderOne = document.querySelector(".slider-services");

class Slider {
  constructor(slider) {
    // console.log(slider);
    this.slider = slider;

    this.slide = this.slider.querySelector(".slide");
    this.image = this.slide.querySelectorAll(".image");
    console.log(this.image);
    this.btnRight = document.querySelector(".btn-service-right svg");
    this.btnLeft = document.querySelector(".btn-service-left svg");

    let sliderMove = 0;
    const sliderSize = slider.offsetWidth;
    let slideTarget = 0;
    this.btnLeft.style.display = "none";

    this.btnRight.addEventListener("click", (event) => {
      sliderMove += sliderSize;
      this.slide.style.left = -sliderMove + "px";

      if (slideTarget === this.image.length - 2) {
        this.btnRight.style.display = "none";
      }

      this.btnLeft.style.display = "block";

      slideTarget += 1;
    });

    this.btnLeft.addEventListener("click", (event) => {
      sliderMove = sliderMove - sliderSize;
      this.slide.style.left = -sliderMove + "px";
      if (slideTarget <= this.image.length - 1) {
        this.btnRight.style.display = "block";
      }
      if (slideTarget === 1) {
        this.btnLeft.style.display = "none";
      }
      slideTarget = slideTarget - 1;
    });
  }
}

const slider = new Slider(sliderOne);

// for (const slide of this.slide) {
//   if (slide.classList.contains("is-target")) {
//     console.log("yyyyyeeee");
//     this.btnRight.addEventListener("click", (event) => {
//       console.log(slide);
//       slide.classList.remove("is-target");
//       slide.classList.add("left");
//     });
//   }
// }
