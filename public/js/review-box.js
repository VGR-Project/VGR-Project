const reviewBox = document.querySelectorAll(".review-box");
const reviewForm = document.querySelectorAll(".review-box-form");
const reviewEdit = document.querySelectorAll(".edit");
const reviewBack = document.querySelectorAll(".back");
const editId = [];

for(const edits of reviewEdit) {
  editId.push(edits.id);
}

for(const edit of reviewEdit) {
  edit.addEventListener("click", function() {
    reviewBox[editId.indexOf((edit.id).toString())].classList.add("d-none");
    reviewForm[editId.indexOf((edit.id).toString())].classList.remove("d-none");
  })
}

for(const back of reviewBack) {
  back.addEventListener("click", function() {
    reviewBox[editId.indexOf((back.id).toString())].classList.remove("d-none");
    reviewForm[editId.indexOf((back.id).toString())].classList.add("d-none");
  })
}