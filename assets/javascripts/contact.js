const errorForm = document.querySelector(".message-error");
const btnForm = document.querySelector(".contact-form");
const inputForm = document.querySelectorAll(".contact-form input");
const textareaForm = document.querySelector(".contact-form textarea");

window.addEventListener("load", (event) => {
  if (errorForm != null) {
    autoScroll();
    borderRed();
  }
});

const autoScroll = () => {
  errorForm.scrollIntoView({
    behavior: "instant",
    block: "start",
    inline: "nearest",
  });
};

const borderRed = () => {
  inputForm.forEach((input) => {
    if (input.value === "") {
      input.style.border = "3px solid red";
    }
  });
  if (textareaForm.value === "") {
    textareaForm.style.border = "3px solid red";
  }
};
