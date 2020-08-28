// const btnRight = document.querySelector(".btn-service-right");
const sliderOne = document.querySelector(".slider-services");

class Slider {
  constructor(slider) {
    // console.log(slider);
    this.slider = slider;
    this.dots = document.querySelectorAll(".slider-services .slider-btn li");
    console.log(this.dots);
    this.slide = this.slider.querySelector(".slide");
    this.image = this.slide.querySelectorAll(".image");
    this.btnRight = document.querySelector(".btn-service-right svg");
    this.btnLeft = document.querySelector(".btn-service-left svg");

    let sliderMove = 0;
    const sliderSize = slider.offsetWidth;
    let slideTarget = 0;

    this.btnLeft.style.display = "none";

    this.btnRight.addEventListener("click", () => {
      if (slideTarget < this.image.length - 1) {
        sliderMove += sliderSize;
        this.slide.style.left = -sliderMove + "px";
        slideTarget += 1;
        this.btnLeft.style.display = "block";
      } else {
        this.btnRight.style.display = "none";
      }
      targetDot(this.dots, slideTarget);
      console.log(slideTarget);
    });

    this.btnLeft.addEventListener("click", () => {
      sliderMove = sliderMove - sliderSize;
      this.slide.style.left = -sliderMove + "px";
      if (slideTarget <= this.image.length - 1) {
        this.btnRight.style.display = "block";
      }
      if (slideTarget <= 1) {
        this.btnLeft.style.display = "none";
      }
      slideTarget = slideTarget - 1;
      targetDot(this.dots, slideTarget);
      console.log(slideTarget);
    });

    setInterval(() => {
      // console.log(slideTarget);
      if (slideTarget < this.image.length - 1) {
        this.btnLeft.style.display = "block";
        sliderMove += sliderSize;
        this.slide.style.left = -sliderMove + "px";
        slideTarget += 1;
      } else {
        this.btnLeft.style.display = "none";
        this.btnRight.style.display = "block";
        slideTarget = 0;
        sliderMove = -1;
        this.slide.style.left = -sliderMove + "px";
      }
      if (slideTarget === this.image.length - 1) {
        this.btnRight.style.display = "none";
      }
      // console.log(slideTarget);
      console.log(sliderMove);
      targetDot(this.dots, slideTarget);
    }, 3000);

    const targetDot = (dots, slidetarget) => {
      dots.forEach((dot) => {
        if (slidetarget == dot.dataset.pos) {
          dot.classList.add("current-dot");
        } else {
          dot.classList.remove("current-dot");
        }
      });
    };

    for (const dot of this.dots) {
      dot.addEventListener("click", () => {
        slideTarget = parseInt(dot.dataset.pos);
        sliderMove = sliderSize * slideTarget;
        this.slide.style.left = -sliderMove + "px";
        console.log(slideTarget);
        if (slideTarget === this.image.length - 1) {
          this.btnRight.style.display = "none";
          this.btnLeft.style.display = "block";
        } else {
          this.btnRight.style.display = "block";
        }
        if (slideTarget < 1) {
          this.btnLeft.style.display = "none";
          this.btnRight.style.display = "block";
        } else {
          this.btnLeft.style.display = "block";
        }
        targetDot(this.dots, slideTarget);
      });
    }
  }
  // targetDot(dots, slideTarget) {
  // }
}

const slider = new Slider(sliderOne);
