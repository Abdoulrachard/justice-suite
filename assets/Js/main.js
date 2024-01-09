document.addEventListener('DOMContentLoaded', function () {
    const toolbarInfo = document.querySelector('.toolbar-info');
    const menuArea = document.querySelector('.menu-area');
    const menu = document.querySelector('.rs-about');
    const scrollUp = document.querySelector('#scrollUp');
    var activeAll = document.querySelectorAll('.action');
    var activeArray = Array.from(activeAll);
    console.log(activeAll);
    const humberger = document.querySelector('.humberger');
    const rsmenu = document.querySelector('.rs-menu-close');
    const spiner = document.querySelector('.spinner-border-sm');

    humberger.addEventListener('click', function (e) {

        // rsmenu.classList.toggle('d-none');
    });
    document.addEventListener('click', function (event) {
        if (!rsmenu.contains(event.target) && !humberger.contains(event.target)) {
            rsmenu.classList.add('d-none');
        }
    });
    if (toolbarInfo && menuArea && menu) {
        const toolbarInfoHeight = toolbarInfo.clientHeight;
        const imageHeight = menu.clientHeight
        function handleScroll() {
            const scrollPosition = window.scrollY;

            if (scrollPosition > toolbarInfoHeight) { 
                menuArea.classList.add('steaky');
            } else {
                menuArea.classList.remove('steaky');
            }
            if (scrollPosition > imageHeight) {
                scrollUp.classList.add('d-play');
            } else {
                scrollUp.classList.remove('d-play');
            }
        }
        window.addEventListener('scroll', handleScroll);
    } else {
        console.error('Les éléments .toolbar-info et .menu-area n\'ont pas été trouvés.');
    }
    activeArray.forEach(el => {
        el.addEventListener('click', function() {
            activeArray.forEach(otherEl => {
                otherEl.classList.remove('active');
            });
            el.classList.add('active');
        });
    });
    
});
