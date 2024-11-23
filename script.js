// NavBar Button Script
document.addEventListener("DOMContentLoaded", function() {
    var buttons = document.querySelectorAll(".bttnz, .crdbttnz, .logbttnz");

    buttons.forEach(function(button) {
        button.addEventListener("mousedown", function() {
            console.log("Button clicked");
            button.classList.add("active");
        });

        button.addEventListener("mouseup", function() {
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
        button.addEventListener('click', function (event) {0
            var sectionId = this.dataset.section; 
            scrollToSection(sectionId); 
        });
    });
});

document.addEventListener("DOMContentLoaded", function(){
    var buttons = document.querySelectorAll(".bttnz");
    var collapseElement = document.getElementById("menuitem");

    buttons.forEach(function(button) {
        button.addEventListener("click", function(event) {
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
document.addEventListener("DOMContentLoaded", function() {
    var buttons = document.querySelectorAll(".spcbttnz");

    buttons.forEach(function(button) {
        button.addEventListener("mousedown", function() {
            console.log("Button clicked");
            button.classList.add("active");
        });

        button.addEventListener("mouseup", function() {
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

// Card Scrolling
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

container.addEventListener('scroll', updateButtonVisibility);
updateButtonVisibility();

// Socials Button Script
document.addEventListener("DOMContentLoaded", function() {
    var buttons = document.querySelectorAll(".cntcbttnz");

    buttons.forEach(function(button) {
        button.addEventListener("mousedown", function() {
            console.log("Button clicked");
            button.classList.add("active");
        });

        button.addEventListener("mouseup", function() {
            console.log("Button released");
            button.classList.remove("active");
        });
    });
});
