require('./bootstrap');

document.addEventListener("DOMContentLoaded", function() {
    let mobile_menu_button = document.getElementById('mobile-menu-button');
    mobile_menu_button.addEventListener("click", function() {
        toggle_mobile_menu();
        console.log("1");
    })
})

function toggle_mobile_menu() {
    let mobile_menu = document.getElementById('mobilenav');
    if (mobile_menu.classList.contains('mobile-show')) {
        mobile_menu.classList.remove('mobile-show');
    } else {
        mobile_menu.classList.add('mobile-show');
    }
}