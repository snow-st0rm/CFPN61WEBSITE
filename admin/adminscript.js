// NavBar Button Script
document.addEventListener("DOMContentLoaded", function() {
    var buttons = document.querySelectorAll(".bttnz");

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
        button.addEventListener('click', function (event) {
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

//Footer Button Script
window.onscroll = function() {scrollFunction()};
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