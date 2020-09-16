const nav = document.querySelector(".container-nav");

class Menu {
  constructor(nav) {
    this.menu = nav;
    this.document = document;
    this.link = this.menu.querySelectorAll("li a");
    this.line = this.menu.querySelectorAll("li");
    this.menu.querySelectorAll("li .menu-sub");

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

    document.addEventListener("scroll", (event) => {
      if (scrollY > 0 && isClick === false) {
        this.menu.classList.add("is-scroll");
        this.link.forEach((element) => {
          element.style.display = "none";
        });
        this.line.forEach((element) => {
          element.style.marginTop = 15 + "px";
        });
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
}

const scrollMenu = new Menu(nav);
