const errorForm = document.querySelector(".message-error");
// const btnForm = document.querySelector(".contact-form");

// btnForm.addEventListener("click", (event) => {
//   if (errorForm != null) {
//     // btnForm.preventDefault();
//     console.log("cc");
//   }
// });

window.addEventListener("load", (event) => {
  if (errorForm != null) {
    errorForm.scrollIntoView({
      behavior: "smooth",
      block: "start",
      inline: "nearest",
    });
  }
});
