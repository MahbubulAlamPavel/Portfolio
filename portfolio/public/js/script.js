var typed = new Typed(".typing", {
    strings: ["lio"],
    typeSpeed: 200,
    backSpeed: 60,
    loop: true
});

var typed = new Typed(".typing1", {
    strings: ["Software-Developer", "&", "Learner"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});

var typed = new Typed(".typing2", {
    strings: ["Software-Developer"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});

window.addEventListener("scroll", function() {
    var header = document.querySelector(".navbar");
    header.classList.toggle("sticky", window.scrollY > 0);
})