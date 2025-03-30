document.querySelectorAll(".filter-btn").forEach((button) => {
    button.addEventListener("click", function () {
        // Remove the 'active' class from all buttons
        document.querySelectorAll(".filter-btn").forEach((btn) => {
            btn.classList.remove("active");
        });

        // Add the 'active' class to the clicked button
        this.classList.add("active");

        const tab = this.getAttribute("data-filter");

        // Optionally, update sections or content based on the selected tab
        document.querySelectorAll(".section").forEach((section) => {
            section.classList.remove("active-section");
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
const submitModal = document.getElementById("submit-modal");
const memoryModal = document.getElementById("memory-modal");
const modalImage = document.getElementById("modal-image");
const modalTitle = document.getElementById("modal-title");
const modalSubmitter = document.getElementById("modal-submitter");
const modalDescription = document.getElementById("modal-description");
const closeModal = document.querySelectorAll(".close-modal");
const submitBtn = document.getElementById("submit-memory");
const categoryInput = document.getElementById("category");
const linkContainer = document.getElementById("link-container");
const linkInput = document.getElementById("link");
const gallerySection = document.getElementById("gallery-section");
const currentUrl = window.location.origin + window.location.pathname;
const urlRef = currentUrl + "/load-more";

// Modal not working
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

document
    .getElementById("all")
    .addEventListener("click", () => changeTab("all"));

document
    .getElementById("graphic")
    .addEventListener("click", () => changeTab("graphic"));

document.getElementById("ux").addEventListener("click", () => changeTab("ux"));

document
    .getElementById("web")
    .addEventListener("click", () => changeTab("web"));

function setupEventListeners() {
    memoryImageInput.addEventListener("change", handleImagePreview);

    removeImageBtn.addEventListener("click", removeImage);

    submissionForm.addEventListener("submit", handleSubmission);

    closeModal.forEach((el) => {
        el.addEventListener("click", () => {
            memoryModal.style.display = "none";
            submitModal.style.display = "none";
        });
    });

    window.addEventListener("click", (e) => {
        if (e.target === memoryModal) {
            memoryModal.style.display = "none";
            submitModal.style.display = "none";
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

function submitModalReset() {
    document.getElementById("submit-title").textContent = "Notes";
    document.getElementById("modal-notes").innerHTML = `<span>
              If you have submitted before, you're previous submission will be overwritten.
            </span>
            <br/>
            <br/>
            <span>
              Please wait 1-2mins for the verification email to arrived. It may arrived on your junk/spam folder! 
            </span>
            <br/>
            <span>
              <small>(dev notes: we dont have smtp server, sorry 🙇)</small>
            </span>`;
}

function handleSubmission(e) {
    e.preventDefault();
    console.log("Prevent Default");
    submitBtn.classList.add("button-disabled");

    submitModalReset();
    submitModal.style.display = "block";

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
                                errorString +=
                                    "<br/><span>" + message + "</span><br/>";
                            });
                        }
                        console.error("Error details:", data); // Log the error response from Laravel
                        throw errorString;
                    });
                }
                return response.json();
            })
            .then((data) => {
                if (data.success) {
                    submissionForm.reset();
                    removeImage();
                }

                submitBtn.classList.remove("button-disabled");
            })
            .catch((error) => {
                submitBtn.classList.remove("button-disabled");
                document.getElementById("submit-title").textContent =
                    "Submission Failed: Unable to Submit Design";
                document.getElementById("modal-notes").innerHTML = error;
            });
    };

    reader.readAsDataURL(imageFile);
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

    const loadMore = document.getElementById("load-more");

    let observer = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting) {
            // Get the next page URL
            let nextPageUrlInput = document.getElementById("next-page-url");

            let nextPageUrl = nextPageUrlInput.value;

            if (nextPageUrl) {
                fetchMoreData(nextPageUrl);
            }
        }
    });

    observer.observe(loadMore);
});

function fetchMoreData(url) {
    let nextPageCategory = document.getElementById("next-page-category").value;
    let newUrl = url.includes("?page")
        ? url + `&category=${nextPageCategory}` // If URL already has '?page', append with '&category'
        : url + `?category=${nextPageCategory}`; // If no '?page', start the query string with '?category'
    fetch(newUrl)
        .then((response) => response.json())
        .then((data) => {
            // Append the new designs to the design container
            gallerySection.insertAdjacentHTML(
                "beforeend",
                data.submissionsHtml
            );

            // Update the next page URL
            let nextPageUrlInput = document.querySelector("#next-page-url");
            nextPageUrlInput.value = data.nextPageUrl;
        })
        .catch((error) => console.error("Error fetching more data:", error));
}

function changeTab(tab) {
    console.log("tigres");
    let nextPageUrlInput = document.getElementById("next-page-url");
    let nextPageCategory = document.getElementById("next-page-category");
    nextPageCategory.value = tab;
    galleryGrid.innerHTML = "";
    fetchMoreData(urlRef);
}
