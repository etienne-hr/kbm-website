const nav = document.querySelector(".container-nav");

class Menu {
  constructor(nav) {
    this.menu = nav;
    this.document = document;
    this.link = this.menu.querySelectorAll("li a");
    this.line = this.menu.querySelectorAll("li");
    let isClick = false;
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
          //   this.menu.style.flexDirection = "row";
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
