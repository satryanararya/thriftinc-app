//copy menu for mobile

function copyMenu() {
    const mainNav = document.querySelector('.header-nav nav');
    const navPlace = document.querySelector('.off-canvas nav');
    navPlace.innerHTML = mainNav.innerHTML;

    const topNav = document.querySelector('.header-top .wrapper');
    const topPlace = document.querySelector('.off-canvas .top-nav');
    topPlace.innerHTML = topNav.innerHTML;
}
copyMenu();

//show mobile menu
const menuButton = document.querySelector('.trigger');
const closeButton = document.querySelector('.t-close');
const addclass = document.querySelector('.site');

menuButton.addEventListener('click', function(){
    addclass.classList.toggle('showmenu')
})
closeButton.addEventListener('click', function(){
    addclass.classList.remove('showmenu')
})


//show submenu mobile 
const submenu = document.querySelectorAll('.has-child .icon-small');
submenu.forEach((menu) => menu.addEventListener('click', toggle));

function toggle (e){
    e.preventDefault();
    submenu.forEach((item) => item != this ? item.closest('.has-child').classList.remove('expand') : null);
    if(this.closest('.has-child').classList != 'expand');
    this.closest('.has-child').classList.toggle('expand')
}

// Slider 
const swiper = new Swiper('.swiper', {
    loop: true,
    spaceBetween:10,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    });

//Product image slider 
var productThumb = new Swiper ('.small-image', {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress:true,
    breakpoints: {
        481: {
            spaceBetween: 32,
        }
    }
});

var productBig = new Swiper ('.big-image', {
    loop: true,
    autoHeight: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: productThumb,
    }
});

document.getElementById("form").addEventListener("submit", auth);

function auth(event) {
    event.preventDefault();

    var username = document.getElementById("user");
    // var pass = document.getElementById("password");

    if (username.value === "admin@gmail.com") {
        window.location.replace("page-single.html");
    } else {
        window.location.replace("checkout.html")
    }
}