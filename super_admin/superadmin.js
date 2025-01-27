let menuicn = document.querySelector(".menuicn");
let nav = document.querySelector(".navcontainer");

menuicn.addEventListener("click", () => {
  nav.classList.toggle("navclose");
});
// modal
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
  modal.style.display = "block";
};

span.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
var editModal = document.getElementById("editModal");
var editBtn = document.getElementById("editBtn");
var closeEdit = document.getElementsByClassName("close-edit")[0];

var addModal = document.getElementById("myModal");
var addBtn = document.getElementById("myBtn");
var closeAdd = document.getElementsByClassName("close")[0];

editBtn.onclick = function (event) {
  event.preventDefault();
  editModal.style.display = "block";
};

closeEdit.onclick = function () {
  editModal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == editModal) {
    editModal.style.display = "none";
  }
};

addBtn.onclick = function () {
  addModal.style.display = "block";
};

closeAdd.onclick = function () {
  addModal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == addModal) {
    addModal.style.display = "none";
  }
};
