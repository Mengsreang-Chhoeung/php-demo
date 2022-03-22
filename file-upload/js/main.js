document.addEventListener("click",function (e){
  if (e.target.classList.contains("gallery-item")) {
   	const src = e.target.getAttribute("src");
   	document.querySelector(".modal-img").src = src;
   	const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
   	myModal.show();
  }

  if (e.target.classList.contains("edit_file_name")) {
    const fileID = e.target.parentElement.parentElement.querySelector(".gallery-item").getAttribute("fileid");
    const fileName = e.target.parentElement.parentElement.querySelector(".gallery-item").getAttribute("title");
    document.querySelector(".file_id").value = fileID;
    document.querySelector(".file_name").value = fileName;
    const myModal = new bootstrap.Modal(document.getElementById('edit-modal'));
    myModal.show();
  }
});