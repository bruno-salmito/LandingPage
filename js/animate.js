const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';

function animeScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    target.forEach(function (el) {
        if ((windowTop) > el.offsetTop) {
            //adiciona animação
            el.classList.add('animate');

        } else {

        }
    })


}

window.addEventListener('scroll', function () {
    animeScroll();
})