require('./../js/bootstrap')

document.addEventListener('DOMContentLoaded', (vent) => {
    let mobileMenu = document.getElementById('mobilenav')!

    let btnShowMobileMenu = document.getElementById('mobile-menu-show')!
    btnShowMobileMenu.addEventListener('click', (event) => {
        toggleClass(mobileMenu, 'mobile-show')
    })

    let btnHideMobileMenu = document.getElementById('mobile-menu-hide')!
    btnHideMobileMenu.addEventListener('click', (event) => {
        toggleClass(mobileMenu, 'mobile-show')
    })

    let btnUser = document.getElementsByName('user-btn')
    btnUser.forEach(x => {
        x.addEventListener('click', (event) => {
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
