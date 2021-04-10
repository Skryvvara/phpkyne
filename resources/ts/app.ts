require('./../js/bootstrap');

document.addEventListener("DOMContentLoaded", function() {
    let mobileMenuButton = document.getElementById('mobile-menu-button');
    if (mobileMenuButton !== null) {
        mobileMenuButton.addEventListener("click", function() {
            toggle_mobile_menu();
        })
    }
})

function toggle_mobile_menu() {
    let mobileMenu = document.getElementById('mobilenav');
    if (mobileMenu !== null) {
        if (mobileMenu.classList.contains('mobile-show')) {
            mobileMenu.classList.remove('mobile-show');
        } else {
            mobileMenu.classList.add('mobile-show');
        }
    }
}