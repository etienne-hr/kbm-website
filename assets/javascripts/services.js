const sliderOne = document.querySelector(".slider1");
const sliderTwo = document.querySelector(".slider2");
const sliderThree = document.querySelector(".slider3");
const sliderFour = document.querySelector(".slider4");

class Slider {
  constructor(slider) {
    this.slider = slider;
    this.dots = this.slider.querySelectorAll(".slider-services .slider-btn li");
    this.slide = this.slider.querySelector(".slide");
    this.image = this.slide.querySelectorAll(".image");
    this.btnRight = this.slider.querySelector(".btn-service-right svg");
    this.btnLeft = this.slider.querySelector(".btn-service-left svg");

    let sliderMove = 0;
    let sliderSize = slider.offsetWidth;
    let slideTarget = 0;

    //responsive
    this.window = window;
    this.window.addEventListener("resize", (event) => {
      this.slider = slider;
      sliderMove = 0;
      sliderSize = slider.offsetWidth;
    });

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
      if (slideTarget === this.image.length - 1) {
        this.btnRight.style.display = "none";
      }
      targetDot(this.dots, slideTarget);
    });

    this.btnLeft.addEventListener("click", () => {
      sliderMove = sliderMove - sliderSize - 1;
      this.slide.style.left = -sliderMove + "px";
      if (slideTarget <= this.image.length - 1) {
        this.btnRight.style.display = "block";
      }
      if (slideTarget <= 1) {
        this.btnLeft.style.display = "none";
      }
      slideTarget = slideTarget - 1;
      targetDot(this.dots, slideTarget);
    });

    setInterval(() => {
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
      targetDot(this.dots, slideTarget);
    }, 4000);

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
}

const sliderMetal = new Slider(sliderOne);
const sliderAuto = new Slider(sliderTwo);
const sliderSecu = new Slider(sliderThree);
const sliderNego = new Slider(sliderFour);
