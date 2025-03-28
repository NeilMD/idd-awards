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
const submitBtn = document.getElementById("submit-memory");
const categoryInput = document.getElementById("category");
const linkContainer = document.getElementById("link-container");
const linkInput = document.getElementById("link");

let memories = [];

function init() {
    setupEventListeners();
}

function linkDisplay() {
    if (categoryInput.value === "ux" || categoryInput.value === "web") {
        linkContainer.style.display = "block"; // Show the link input
    } else {
        linkContainer.style.display = "none"; // Hide the link input
    }
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
            if (e.target.files[0].size > 2097152) {
                // Use el.target to access the element
                alert("File should be less than 2mb.");
                e.target.value = ""; // Reset the file input
                return;
            } else {
                previewImg.src = event.target.result;
                imagePreview.style.display = "block";
            }
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
    submitBtn.classList.add("button-disabled");

    console.log("handleSubmission");
    e.preventDefault();

    const name = document.getElementById("submitter-name").value;
    const title = document.getElementById("memory-title").value;
    const description = document.getElementById("memory-description").value;
    const imageFile = document.getElementById("memory-image").files[0];

    const email = document.getElementById("email").value;
    const category = document.getElementById("category").value;
    const link = document.getElementById("link").value;
    let errorMessages = [];
    if (!imageFile) {
        alert("Please select an image to upload");
        return;
    }

    // Show or hide link input based on category selection
    if (category === "ux" || category === "web") {
        linkContainer.style.display = "block"; // Show link input
        linkInput.required = true; // Make the link input required
    } else {
        linkContainer.style.display = "none"; // Hide link input
        linkInput.required = false; // Remove the required attribute
    }

    // Validate the link input if category is 'ux' or 'web'
    if ((category === "ux" || category === "web") && !linkInput.value) {
        errorMessages.push(
            "Please provide a valid link (URL) for UX or Web category."
        );
    }

    // Check validity using HTML5 checkValidity method
    if (!submissionForm.checkValidity()) {
        // If any field is invalid, gather error messages
        const invalidFields = submissionForm.querySelectorAll(":invalid");
        invalidFields.forEach((field) => {
            errorMessages.push(`${field.name} is invalid.`);
        });

        // Also show an alert with the errors
        alert("Error: \n" + errorMessages.join("\n"));

        submitBtn.classList.remove("button-disabled");
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

        formData.append("email", email);
        formData.append("link", link);
        formData.append("design_category", category);
        // Send form data using fetch
        fetch(submitUrl, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": csrfToken, // Add the CSRF token to the request headers
            },
            body: formData,
        })
            .then((response) => {
                if (!response.ok) {
                    return response.json().then((data) => {
                        let errorString = "";
                        for (const [field, messages] of Object.entries(
                            data.errors
                        )) {
                            messages.forEach((message) => {
                                // Concatenate each error message followed by a line break
                                errorString += message + "\n";
                            });
                        }
                        console.error("Error details:", data); // Log the error response from Laravel
                        throw new Error(errorString);
                    });
                }
                return response.json();
            })
            .then((data) => {
                if (data.success) {
                    submissionForm.reset();
                    removeImage();

                    const newGalleryItem = createGalleryItem(newMemory);
                    galleryGrid.insertAdjacentElement(
                        "afterbegin",
                        newGalleryItem
                    );

                    alert("Your design has been added to the time capsule!");
                }

                submitBtn.classList.remove("button-disabled");
            })
            .catch((error) => {
                submitBtn.classList.remove("button-disabled");
                alert("Error: occurred Submitting Design.\n" + error);
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

// JavaScript to handle the conditional display of the link input
document.getElementById("category").addEventListener("change", linkDisplay);

document.addEventListener("DOMContentLoaded", function () {
    linkDisplay();
    submissionForm.reset();
});
