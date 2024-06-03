function formatDoc(cmd, value = null) {
    if (value) {
        document.execCommand(cmd, false, value);
    } else {
        document.execCommand(cmd);
    }
}

function addLink() {
    const url = prompt("Insert url");
    formatDoc("createLink", url);
}
// dropdown form //
const selectBtn = document.querySelector(".select-btn"),
    items = document.querySelectorAll(".formulir");

selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
});


// drag and drop image //
const dropZone = document.querySelector(".drop-zone");
const fileInput = dropZone.querySelector(".file-input");

dropZone.addEventListener("dragover", function(event) {
  event.stopPropagation();
  event.preventDefault();
  event.dataTransfer.dropEffect = "copy";
  dropZone.classList.add("drag-over");
});

dropZone.addEventListener("dragleave", function() {
  dropZone.classList.remove("drag-over");
});

dropZone.addEventListener("drop", function(event) {
  event.stopPropagation();
  event.preventDefault();
  dropZone.classList.remove("drag-over");
  const files = event.dataTransfer.files;
  if (files.length > 0) {
    fileInput.files = files;
    previewImage(files[0]);
  }
});

fileInput.addEventListener("change", function() {
  previewImage(fileInput.files[0]);
});

function previewImage(file) {
  const reader = new FileReader();
  reader.readAsDataURL(file);
  reader.onload = function() {
    const preview = document.createElement("img");
    preview.src = reader.result;
    preview.style.width = "100%";
    dropZone.innerHTML = "";
    dropZone.appendChild(preview);
  };
}
