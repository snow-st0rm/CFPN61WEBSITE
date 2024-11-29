// NavBar Button Script
document.addEventListener("DOMContentLoaded", function () {
    var buttons = document.querySelectorAll(".bttnz");

    buttons.forEach(function (button) {
        button.addEventListener("mousedown", function () {
            console.log("Button clicked");
            button.classList.add("active");
        });

        button.addEventListener("mouseup", function () {
            console.log("Button released");
            button.classList.remove("active");
        });
    });
});

function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}
document.addEventListener('DOMContentLoaded', function () {
    var buttons = document.querySelectorAll('.bttnz');
    buttons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            var sectionId = this.dataset.section;
            scrollToSection(sectionId);
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var buttons = document.querySelectorAll(".bttnz");
    var collapseElement = document.getElementById("menuitem");

    buttons.forEach(function (button) {
        button.addEventListener("click", function (event) {
            var sectionId = this.dataset.section;
            scrollToSection(sectionId);

            var bootstrapCollapse = new bootstrap.Collapse(collapseElement, {
                toggle: true
            });
            bootstrapCollapse.hide();
        });
    });
});

function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}

// NavBar Special Buttons Script
document.addEventListener("DOMContentLoaded", function () {
    var buttons = document.querySelectorAll(".spcbttnz");

    buttons.forEach(function (button) {
        button.addEventListener("mousedown", function () {
            console.log("Button clicked");
            button.classList.add("active");
        });

        button.addEventListener("mouseup", function () {
            console.log("Button released");
            button.classList.remove("active");
        });
    });
});

function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}
document.addEventListener('DOMContentLoaded', function () {
    var buttons = document.querySelectorAll('.spcbttnz');
    buttons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            var sectionId = this.dataset.section;
            scrollToSection(sectionId);
        });
    });
});

//Trayectos Script
window.onload = function () {
    let paragraphs = document.querySelectorAll('.container p, .container h1');
    paragraphs.forEach(function (paragraph) {
        let text = paragraph.innerHTML;
        text = text.replace(/([a-zA-Z0-9]{20,})/g, function (match) {
            return match.replace(/([a-zA-Z0-9]{5})/g, "$1&#8203;");
        });
        paragraph.innerHTML = text;
    });
};

//Gallery Script
const dropdown = document.getElementById('image_id');
const urlField = document.getElementById('new_url');
const captionField = document.getElementById('new_caption');
const previewContainer = document.getElementById('image-preview');

console.log('Script loaded.');
console.log('Dropdown element:', dropdown);

dropdown.addEventListener('change', function () {
    console.log('Dropdown changed:', this.value);
    const selectedId = this.value;
    const selectedImage = imagesData.find(image => image.id == selectedId);

    if (selectedImage) {
        console.log('Selected image:', selectedImage);
        urlField.value = selectedImage.imgurl;
        captionField.value = selectedImage.cption || '';

        previewContainer.innerHTML = `
            <p>Vista previa para la imagen ${selectedImage.id}:</p>
            <img src="${selectedImage.imgurl}" alt="Preview for ID ${selectedImage.id}">
        `;
    } else {
        console.log('No matching image found.');
        urlField.value = '';
        captionField.value = '';
        previewContainer.innerHTML = '<p>No ha seleccionado una imagen.</p>';
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const imagesDataElement = document.getElementById('images-json');
    const imagesData = JSON.parse(imagesDataElement.dataset.images);

    const imageSelect = document.getElementById('image_id');
    const previewSection = document.getElementById('preview-section');
    const previewImage = document.getElementById('image-preview').querySelector('img');
    const previewCaption = document.getElementById('image-caption');
    const cancelBtn = document.getElementById('cancel-btn');

    imageSelect.addEventListener('change', () => {
        const selectedId = imageSelect.value;
        const selectedImage = imagesData.find(image => image.id == selectedId);

        if (selectedImage) {
            previewImage.src = selectedImage.imgurl;
            previewCaption.textContent = selectedImage.cption ? selectedImage.cption : 'Sin descripción.';
            previewSection.classList.remove('d-none');
        }
    });

    cancelBtn.addEventListener('click', () => {
        previewSection.classList.add('d-none');
        imageSelect.value = "";
    });
});


//Footer Button Script
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("back-to-top").style.display = "block";
    } else {
        document.getElementById("back-to-top").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}