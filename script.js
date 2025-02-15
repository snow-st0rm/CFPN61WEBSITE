// NavBar Button Script
document.addEventListener("DOMContentLoaded", function () {
    var buttons = document.querySelectorAll(".bttnz, .crdbttnz, .logbttnz");

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
            0
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

// Card Script
const container = document.querySelector('.card-container');
const leftBtn = document.querySelector('.left-btn');
const rightBtn = document.querySelector('.right-btn');

const cardWidth = document.querySelector('.card').getBoundingClientRect().width;

const cardStyles = getComputedStyle(container);
const gap = parseFloat(cardStyles.gap) || 0;

const scrollDistance = cardWidth + gap;

function updateButtonVisibility() {
    leftBtn.classList.toggle('hidden', container.scrollLeft <= 10);
    rightBtn.classList.toggle(
        'hidden',
        container.scrollLeft + container.clientWidth >= container.scrollWidth - 10
    );
}

function scrollToLeft() {
    const newScrollPosition = Math.max(0, container.scrollLeft - scrollDistance);
    container.scrollTo({ left: newScrollPosition, behavior: 'smooth' });
}

function scrollToRight() {
    const newScrollPosition = Math.min(
        container.scrollWidth,
        container.scrollLeft + scrollDistance
    );
    container.scrollTo({ left: newScrollPosition, behavior: 'smooth' });
}

window.onload = function () {
    let cardTexts = document.querySelectorAll('.card .card-text');

    cardTexts.forEach(function (cardText) {
        let text = cardText.innerHTML;

        text = text.replace(/([a-zA-Z0-9]{20,})/g, function (match) {
            return match.replace(/([a-zA-Z0-9]{5})/g, "$1&#8203;");
        });

        cardText.innerHTML = text;
    });
};

// Socials Button Script
document.addEventListener("DOMContentLoaded", function () {
    var buttons = document.querySelectorAll(".cntcbttnz");

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

const buttons = document.querySelectorAll('.cntcbttnz');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        const email = button.getAttribute('data-email');
        const emailDisplay = document.getElementById('email-display');

        emailDisplay.innerHTML = `Email: <a href="mailto:${email}">${email}</a>`;
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