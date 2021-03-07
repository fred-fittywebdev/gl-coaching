let slideshow = document.getElementById('slideshow');
let slides = slideshow.getElementsByTagName('img');
let index = 0;

const btn = document.querySelector('.button')
const popup = document.querySelector('.poup-wrapper')
const close = document.querySelector('.poup-close')

const cookieContainer = document.querySelector('.cookie-container');
const cookieButton = document.querySelector('.cookie-btn');


cookieButton.addEventListener('click', () => {
    cookieContainer.classList.remove('active');
    localStorage.setItem('cookieBannerDisplayed', 'true');
});

setTimeout(() => {
    if (!localStorage.getItem('cookieBannerDisplayed')) {
        cookieContainer.classList.add('active');
    };

}, 3000)

btn.addEventListener('click', () => {
    popup.style.display = 'block'
})

close.addEventListener('click', () => {
    popup.style.display = 'none'
})

popup.addEventListener('click', () => {
    popup.style.display = 'none'
})

// slider
function nextSlide() {
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prevSlide() {
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}

let slideshowText = document.getElementById('slideshowText');
let slidesText = slideshowText.getElementsByTagName('div');
let i = 0;

// slider
function nextSlideText() {
    slidesText[i].classList.remove('active');
    i = (i + 1) % slidesText.length;
    slidesText[i].classList.add('active');
}

function prevSlideText() {
    slidesText[i].classList.remove('active');
    i = (i - 1 + slidesText.length) % slidesText.length;
    slidesText[i].classList.add('active');
}

function menuToggle() {
    let nav = document.getElementById('navBar');
    nav.classList.toggle('active');
}