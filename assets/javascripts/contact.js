const errorForm = document.querySelector(".message-error");
const validateForm = document.querySelector(".message-success");
const inputForm = document.querySelectorAll(".contact-form input");
const textareaForm = document.querySelector(".contact-form textarea");

window.addEventListener("load", (event) => {
  if (errorForm != null) {
    autoScroll(errorForm);
    borderRed();
    console.log("grosse pute");
  }
  if (validateForm != null) {
    autoScroll(validateForm);
    inputForm.forEach((input) => {
      input.value = "";
      input.style.border = "none";
      console.log("grosse pd");
    });
    textareaForm.value = "";
    textareaForm.style.border = "none";
    console.log("baise bien ta meere");
  }
});

const autoScroll = (form) => {
  form.scrollIntoView({
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
