const menuBar = document.querySelector('.menu-bar a');
const dropdownMenu = document.querySelector('.dropdown-menu');
const btnClose = document.querySelector('.btn-close');
const cards = document.querySelectorAll('.card-precios');
const cardTestimonial = document.querySelectorAll('.card-testimonial');
const numero = document.querySelectorAll('.numero');
const calendar = document.querySelectorAll('.calendario');
const windowHeight = window.innerHeight / 5 * 4;

console.log("Calendar:", calendar);
console.log("Cards:", cards);
console.log("Testimonial:", cardTestimonial);
console.log("Numero:", numero);

window.addEventListener('scroll', animationScroll);

menuBar.addEventListener('click', () => {
    dropdownMenu.classList.toggle('open');
});

btnClose.addEventListener('click', () => {
    if (dropdownMenu.classList.contains('open')) {
        dropdownMenu.classList.remove('open');
    }
});

function showIfVisible(elements) {
    elements.forEach((element) => {
        const distanceFromTo = element.getBoundingClientRect().top;

        if (distanceFromTo < windowHeight + 50) {

            if(!element.classList.contains('show')){
                element.classList.toggle('show');
            }
        }else{
            element.classList.remove('show')
        }
    });
}

function animationScroll() {
    showIfVisible(cards);
    showIfVisible(numero);
    showIfVisible(cardTestimonial);
    showIfVisible(calendar);
} 