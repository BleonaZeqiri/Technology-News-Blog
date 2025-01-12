const signupForm = document.getElementById("signupForm");

signupForm?.addEventListener("submit", function (e) {
  e.preventDefault();

  document.getElementById("usernameError").textContent = "";
  document.getElementById("emailError").textContent = "";
  document.getElementById("passwordError").textContent = "";

  let isValid = true;

  const username = document.getElementById("username").value.trim();
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value.trim();

  if (username === "") {
    document.getElementById("usernameError").textContent =
      "Username is required.";
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

  if (password === "") {
    document.getElementById("passwordError").textContent =
      "Password is required.";
    isValid = false;
  } else if (password.length < 6) {
    document.getElementById("passwordError").textContent =
      "Password must be at least 6 characters long.";
    isValid = false;
  }

  if (isValid) {
    alert("Signup successful!");
    signupForm.reset();
  }
});
//login
document.getElementById("loginForm")?.addEventListener("submit", function (e) {
  e.preventDefault();

  document.getElementById("usernameError").textContent = "";
  document.getElementById("passwordError").textContent = "";

  let isValid = true;

  const username = document.getElementById("user").value.trim();
  const password = document.getElementById("pass").value.trim();

  if (username === "") {
    document.getElementById("usernameError").textContent =
      "Username is required.";
    isValid = false;
  }

  if (password === "") {
    document.getElementById("passwordError").textContent =
      "Password is required.";
    isValid = false;
  } else if (password.length < 6) {
    document.getElementById("passwordError").textContent =
      "Password must be at least 6 characters.";
    isValid = false;
  }

  if (isValid) {
    alert("Login successful!");
    document.getElementById("loginForm").reset();
  }
});
