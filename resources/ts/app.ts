require('./../js/bootstrap');

document.addEventListener("DOMContentLoaded", function() {
    let btnShowMobileMenu = document.getElementById('mobile-menu-show');
    if (btnShowMobileMenu !== null) {
        btnShowMobileMenu.addEventListener("click", function() {
            showMobileMenu();
        })
    }

    let btnHideMobileMenu = document.getElementById('mobile-menu-hide');
    if (btnHideMobileMenu !== null) {
        btnHideMobileMenu.addEventListener("click", function() {
            hideMobileMenu();
        })
    }
})

function hideMobileMenu() {
    let mobileMenu = document.getElementById('mobilenav');
    if (mobileMenu !== null) {
        if (mobileMenu.classList.contains('mobile-show')) {
            mobileMenu.classList.remove('mobile-show');
        }
    }
}

function showMobileMenu() {
    let mobileMenu = document.getElementById('mobilenav');
    if (mobileMenu !== null) {
        if (!mobileMenu.classList.contains('mobile-show')) {
            mobileMenu.classList.add('mobile-show');
        }
    }
}