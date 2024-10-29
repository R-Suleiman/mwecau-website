const showNavBtn = document.querySelector('.show-nav')
const hideNavBtn = document.querySelector('.hide-nav')
const sidebar = document.querySelector('.sidebar')

showNavBtn.addEventListener('click', () => {
  sidebar.classList.add('show')
})

hideNavBtn.addEventListener('click', () => {
  sidebar.classList.remove('show')
})
