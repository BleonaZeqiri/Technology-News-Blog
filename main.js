function toggleMenu() {
  document.getElementById("mobileMenu").classList.toggle("active");
}
//contact us
document.addEventListener("DOMContentLoaded", () => {
  const mobileInput = document.getElementById("mobile");
  const form = document.getElementById("contactForm");

  mobileInput.addEventListener("input", () => {
    mobileInput.value = mobileInput.value.replace(/[^0-9]/g, "");
  });

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    let isValid = true;

    document.querySelectorAll(".error").forEach((el) => (el.textContent = ""));

    const firstName = document.getElementById("firstName").value.trim();
    const lastName = document.getElementById("lastName").value.trim();
    const email = document.getElementById("email").value.trim();
    const mobile = document.getElementById("mobile").value.trim();
    const message = document.getElementById("message").value.trim();

    if (firstName === "") {
      document.getElementById("firstNameError").textContent =
        "First Name is required.";
      isValid = false;
    }

    if (lastName === "") {
      document.getElementById("lastNameError").textContent =
        "Last Name is required.";
      isValid = false;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
      document.getElementById("emailError").textContent = "Email is required.";
      isValid = false;
    } else if (!emailRegex.test(email)) {
      document.getElementById("emailError").textContent =
        "Please enter a valid email address.";
      isValid = false;
    }

    const mobileRegex = /^[0-9]{9,15}$/;
    if (mobile === "") {
      document.getElementById("mobileError").textContent =
        "Mobile Number is required.";
      isValid = false;
    } else if (!mobileRegex.test(mobile)) {
      document.getElementById("mobileError").textContent =
        "Please enter a valid mobile number.";
      isValid = false;
    }

    if (message === "") {
      document.getElementById("messageError").textContent =
        "Message is required.";
      isValid = false;
    }

    if (isValid) {
      alert("Form submitted successfully!");
      form.reset();
    }
  });
});
//date
const dateElement = document.getElementById("currentDate");
const options = {
  weekday: "long",
  day: "numeric",
  month: "long",
  year: "numeric",
};
const currentDate = new Date().toLocaleDateString("en-US", options);

dateElement.innerHTML = `<img src="images/home/header_icon2.png" alt="" /> ${currentDate}`;
//news
$(document).ready(function () {
  let currentIndex = 0;
  const items = $(".slider .item");
  const totalItems = items.length;
  const itemWidth = $(".item").outerWidth(true);
  const slider = $(".slider");

  function updateSlider() {
    let newTransformValue = -currentIndex * itemWidth;
    slider.css("transform", `translateX(${newTransformValue}px)`);
  }

  $(".next").click(function () {
    if (currentIndex < totalItems - 1) {
      currentIndex++;
    } else {
      currentIndex = 0; // Loop back to first item
    }
    updateSlider();
  });

  $(".prev").click(function () {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = totalItems - 1; // Loop to last item
    }
    updateSlider();
  });

  $(".slider .item").click(function () {
    $(".slider .item").removeClass("active");
    $(this).addClass("active");
  });

  // Auto Scroll (Optional)
  setInterval(function () {
    $(".next").click();
  }, 4000);
});
