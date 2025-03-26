document.querySelectorAll(".filter-btn").forEach((button) => {
    console.log(`button ${button}`);
    button.addEventListener("click", function () {
        const tab = this.getAttribute("data-filter");
        document.querySelectorAll(".tab-content").forEach((content) => {
            content.classList.remove("active-section");
        });
        document.getElementById(tab).classList.add("active-section");
    });
});

// DOM Elements
const submissionForm = document.getElementById("submission-form");
const memoryImageInput = document.getElementById("memory-image");
const imagePreview = document.getElementById("image-preview");
const previewImg = document.getElementById("preview-img");
const removeImageBtn = document.getElementById("remove-image");
const galleryGrid = document.querySelector(".gallery-grid");
const filterButtons = document.querySelectorAll(".filter-btn");
const memoryModal = document.getElementById("memory-modal");
const modalImage = document.getElementById("modal-image");
const modalTitle = document.getElementById("modal-title");
const modalSubmitter = document.getElementById("modal-submitter");
const modalDescription = document.getElementById("modal-description");
const closeModal = document.querySelector(".close-modal");

let memories = [];

function init() {
    // This will not work as it will always saved in the User PC
    // const savedMemories = localStorage.getItem('igniteMemories');
    // if (savedMemories) {
    //     memories = JSON.parse(savedMemories);
    // } else {
    //     memories = [...sampleMemories];
    //     localStorage.setItem('igniteMemories', JSON.stringify(memories));
    // }

    //displayMemories("all");

    setupEventListeners();
}

function setupEventListeners() {
    memoryImageInput.addEventListener("change", handleImagePreview);

    removeImageBtn.addEventListener("click", removeImage);

    submissionForm.addEventListener("submit", handleSubmission);

    closeModal.addEventListener("click", () => {
        memoryModal.style.display = "none";
    });

    window.addEventListener("click", (e) => {
        if (e.target === memoryModal) {
            memoryModal.style.display = "none";
        }
    });
}

function handleImagePreview(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();

        reader.onload = function (event) {
            previewImg.src = event.target.result;
            imagePreview.style.display = "block";
        };

        reader.readAsDataURL(file);
    }
}

function removeImage() {
    memoryImageInput.value = "";
    previewImg.src = "#";
    imagePreview.style.display = "none";
}
function handleSubmission(e) {
    console.log("handleSubmission");
    e.preventDefault();

    const name = document.getElementById("submitter-name").value;
    const title = document.getElementById("memory-title").value;
    const description = document.getElementById("memory-description").value;
    const imageFile = document.getElementById("memory-image").files[0];

    if (!imageFile) {
        alert("Please select an image to upload");
        return;
    }
    const submitUrl = this.getAttribute("data-attr-submit");
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    const reader = new FileReader();
    reader.onloadend = function (event) {
        const imageUrl = event.target.result;
        const newMemory = {
            id: Date.now(),
            name,
            title,
            description,
            imageUrl,
            type: "latest",
            timestamp: new Date().getTime(),
        };

        const formData = new FormData();
        formData.append("name", name);
        formData.append("design_title", title);
        formData.append("design_description", description);
        formData.append("image", imageFile);
        // Send form data using fetch
        fetch(submitUrl, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": csrfToken, // Add the CSRF token to the request headers
            },
            body: formData,
        })
            .then((response) => response.json())
            .then((data) => {
                if (!data.success) {
                    // If validation fails, display the errors
                    console.error("Error:", error);
                    alert("Error: occured Submitting Design");
                } else {
                    submissionForm.reset();
                    removeImage();

                    const newGalleryItem = createGalleryItem(newMemory);
                    galleryGrid.appendChild(newGalleryItem);
                    alert("Your design has been added to the time capsule!");
                }
            })
            .catch((error) => {
                console.error("Error:", error);
                alert("Error: occured Submitting Design");
            });
    };

    reader.readAsDataURL(imageFile);
}

function createGalleryItem(memory) {
    const galleryItem = document.createElement("div");
    galleryItem.className = "gallery-item";
    galleryItem.dataset.id = memory.id;

    galleryItem.innerHTML = `
        <div class="gallery-image-container">
            <img src="${memory.imageUrl}" alt="${memory.title}" class="gallery-image">
        </div>
        <div class="gallery-info">
            <h3 class="gallery-title">${memory.title}</h3>
            <p class="gallery-submitter">By ${memory.name}</p>
            <p class="gallery-description">${memory.description}</p>
        </div>
    `;

    galleryItem.addEventListener("click", () => {
        openMemoryModal(memory);
    });

    return galleryItem;
}

function openMemoryModal(memory) {
    modalImage.src = memory.imageUrl;
    modalTitle.textContent = memory.title;
    modalSubmitter.textContent = `Submitted by ${memory.name}`;
    modalDescription.textContent = memory.description;

    memoryModal.style.display = "block";
}

init();

const elGalleryItem = document.querySelectorAll(".gallery-item");

elGalleryItem.forEach((el) => {
    el.addEventListener("click", (e) => {
        let objMemory = {
            imageUrl: el.querySelector(".gallery-image").src,
            title: el.querySelector(".gallery-title").textContent,
            name: el
                .querySelector(".gallery-submitter")
                .textContent.substring(3),
            description: el.querySelector(".gallery-description").textContent,
        };
        openMemoryModal(objMemory);
    });
});
