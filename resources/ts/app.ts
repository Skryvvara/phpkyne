require('./../js/bootstrap')

document.addEventListener('DOMContentLoaded', (vent) => {
    let mobileMenu = document.getElementById('mobilenav')!

    let btnToggleMobileMenu = document.getElementById('mobile-menu-toggle')!
    btnToggleMobileMenu.addEventListener('click', (event) => {
        toggleClass(mobileMenu, 'mobile-show')
        toggleClass(btnToggleMobileMenu, 'is-active')
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
