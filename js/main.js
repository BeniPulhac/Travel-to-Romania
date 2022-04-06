        //Declaretions
const menu = document.querySelector('.menu')
const close = document.querySelector('.close')
const nav = document.querySelector('nav')

        //Events
menu.addEventListener('click', () => {
    nav.classList.add('open-nav')
})

close.addEventListener('click', () => {
    nav.classList.remove('open-nav')
})