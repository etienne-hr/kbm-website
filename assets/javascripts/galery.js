const slider = document.querySelector(".gallery");

class Gallery {
  constructor(slider) {
    this.slider = slider;
    this.gallery = this.slider.querySelector(".gallery-images");
    this.btnUp = this.slider.querySelector(".controller-up");
    this.btnDown = this.slider.querySelector(".controller-down");
    this.window = window;

    let distance = 0;
    let motion = false;
    let timer = null;
    let hasMove = false;
    let windowX = this.window.innerWidth;

    const btnUpStart = () => {
      motion = true;
      if (motion == true) {
        timer = setInterval(() => {
          console.log("ok");
          let pos = this.gallery.getBoundingClientRect();
          if (pos.x < -100) {
            distance = distance + 50;
            this.gallery.style.right = -distance + "px";
            hasMove = true;
          }
        }, 100);
      }
    };

    const btnUpStop = () => {
      motion = false;
      if (motion == false) {
        clearInterval(timer);
      }
    };

    const btnDownStart = () => {
      if (hasMove === true) {
        timer = setInterval(() => {
          let pos = this.gallery.getBoundingClientRect();
          if (pos.right > windowX) {
            distance = distance - 50;
            this.gallery.style.right = -distance + "px";
          } else {
            hasMove = false;
            this.gallery.style.right = 0 + "px";
          }
        }, 100);
      }
    };

    const btnDownStop = () => {
      clearInterval(timer);
    };

    //Desktop

    this.btnUp.addEventListener("mousedown", (event) => {
      btnUpStart();
    });
    this.btnUp.addEventListener("mouseup", (event) => {
      btnUpStop();
    });

    this.btnDown.addEventListener("mousedown", (event) => {
      btnDownStart();
    });
    this.btnDown.addEventListener("mouseup", (event) => {
      btnDownStop();
    });

    //Phones and tablets

    this.btnUp.addEventListener("touchstart", (event) => {
      btnUpStart();
    });
    this.btnUp.addEventListener("touchend", (event) => {
      btnUpStop();
    });

    this.btnDown.addEventListener("touchstart", (event) => {
      btnDownStart();
    });
    this.btnDown.addEventListener("touchend", (event) => {
      btnDownStop();
    });

    this.window.addEventListener("resize", () => {
      this.gallery.style.right = 0 + "px";
      distance = 0;
      motion = false;
      windowX = this.window.innerWidth;
    });
  }
}

const gallerySlider = new Gallery(slider);
