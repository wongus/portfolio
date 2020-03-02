const navSlide = ()=> {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click', ()=> {
        nav.classList.toggle('nav-active');

        navLinks.forEach((link, index) => {
            if(link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0}s`;
            }
        });
        burger.classList.toggle('toggle');
    });

        navLinks.forEach((link, index) => {
            link.addEventListener('click', ()=> {
                location.reload();
            });
        })

}

navSlide();

const sections = document.querySelectorAll('section');
const selected = document.querySelector('.selected');
const options = {
    threshold: 0.7
};

const observer = new IntersectionObserver(navCheck, options);

function navCheck(entries) {
    entries.forEach(entry => {
        const className = entry.target.className;
        const activeAnchor = document.querySelector(`[data-page=${className}]`);
        const coords = activeAnchor.getBoundingClientRect();
        const directions = {
            height: coords.height,
            width: coords.width,
            top: coords.top,
            left: coords.left,
        };
        if(entry.isIntersecting) {
            selected.style.setProperty('left', `${directions.left + 5}px`);
            selected.style.setProperty('top', '83%');
            selected.style.setProperty('width', `${directions.width}px`);
            selected.style.setProperty('height', `${directions.height}px`);
        }
    });
};

sections.forEach(section => {
    observer.observe(section);
});

window.onresize = function(){location.reload(); };
