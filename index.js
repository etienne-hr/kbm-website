//header navigation
const nav = document.querySelector(".container-nav");

class Menu {
  constructor(nav) {
    this.menu = nav;
    this.link = this.menu.querySelectorAll("li a");
    this.line = this.menu.querySelectorAll("li");
    this.menu.querySelectorAll("li .menu-sub");
    this.subTitle = this.menu.querySelectorAll("li .menu-sub");

    let isClick = false;

    this.line.forEach((element) => {
      let hoverA = element.querySelector("li a");
      let subTitle = element.querySelector("li .menu-sub");
      hoverA.addEventListener("mouseover", () => {
        subTitle.style.width = 100 + "%";
      });
      hoverA.addEventListener("mouseout", () => {
        subTitle.style.width = 5 + "rem";
      });
    });

    document.addEventListener("DOMContentLoaded", (event) => {
      if (window.innerWidth > 480) {
        document.addEventListener("scroll", (event) => {
          if (scrollY > 0 && isClick === false) {
            hamburger();
          } else {
            this.menu.classList.remove("is-scroll");
            this.link.forEach((element) => {
              element.style.display = "block";
            });
          }
          if (scrollY === 0) {
            this.link.forEach((element) => {
              element.style.backgroundColor = "transparent";
            });
          }
          isClick = false;
        });
        this.menu.addEventListener("click", (event) => {
          this.menu.classList.remove("is-scroll");
          this.link.forEach((element) => {
            element.style.display = "block";
            element.style.background = "var(--orangeless)";
          });
          isClick = true;
        });
      }
    });

    document.addEventListener("DOMContentLoaded", (event) => {
      if (window.innerWidth < 480) {
        hamburger();
        this.menu.addEventListener("click", (event) => {
          this.menu.classList.add("container-nav-responsive");
          this.link.forEach((element) => {
            element.style.display = "block";
          });
          this.line.forEach((element) => {
            element.style.marginTop = 0;
          });
        });

        this.link.forEach((element) => {
          element.addEventListener("click", (event) => {
            event.stopPropagation();
            this.menu.classList.remove("container-nav-responsive");
            this.link.forEach((element) => {
              element.style.display = "none";
            });
            this.line.forEach((element) => {
              element.style.marginTop = 15 + "px";
            });
            this.subTitle.forEach((element) => {
              element.style.width = 5 + "rem";
            });
          });
        });
      }
    });

    const hamburger = () => {
      this.menu.classList.add("is-scroll");
      this.link.forEach((element) => {
        element.style.display = "none";
      });
      this.line.forEach((element) => {
        element.style.marginTop = 15 + "px";
      });
    };
  }
}

const scrollMenu = new Menu(nav);

//Hover on the image of the first slider
const hoverFirstSlider = document.querySelectorAll(".slider1 .is-linked");
const discover = document.querySelectorAll(".slider1 .discover");

hoverFirstSlider.forEach((element) => {
  element.addEventListener("mouseover", (event) => {
    discover.forEach((p) => {
      p.style.opacity = 1;
    });
  });
  element.addEventListener("mouseout", (event) => {
    discover.forEach((p) => {
      p.style.opacity = 0;
    });
  });
});

//animation

// const displayOrange = document.querySelector(".landing-page .display-orange");
// document.addEventListener("scroll", (event) => {
//   console.log(scrollY);
//   if (scrollY > 0) {
//     displayOrange.style.animationName = "motionDisplayBottom";
//     displayOrange.style.animationDuration = 2 + "s";
//     displayOrange.style.animationIterationCount = 1;
//     displayOrange.style.animationMode = "auto";
//   }
//   if (scrollY < 200) {
//     // displayOrange.style.animationName = "motionDisplayTop";
//   }
// });
