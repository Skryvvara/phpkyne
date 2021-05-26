require('./../js/bootstrap');

document.addEventListener("DOMContentLoaded", function() {
    let mobileMenu = document.getElementById('mobilenav')!

    let btnShowMobileMenu = document.getElementById('mobile-menu-show')!
    btnShowMobileMenu.addEventListener("click", function() {
        toggleClass(mobileMenu, 'mobile-show')
    })

    let btnHideMobileMenu = document.getElementById('mobile-menu-hide')!
    btnHideMobileMenu.addEventListener("click", function() {
        toggleClass(mobileMenu, 'mobile-show')
    })

    let userbtn = document.getElementsByName('user-btn')
    userbtn.forEach(x => {
        x.addEventListener('click', function() {
            let parent = x.parentElement!
            toggleClass(parent, 'show')
        })
    })
})

function toggleClass(element: HTMLElement, className: string) {
    if (null !== element) {
        element.classList.toggle(className)
    }
}