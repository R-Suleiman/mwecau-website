const eventsBtn = document.querySelector('.btn-events')
const staffBtn = document.querySelector('.btn-staff')
const progBtn = document.querySelector('.btn-prog')

const eventsTable = document.querySelector('.events-table')
const staffTable = document.querySelector('.staff-table')
const progTable = document.querySelector('.prog-table')
const backgColor = 'rgb(248, 162, 248)'



eventsBtn.addEventListener('click', () => {
  eventsBtn.style.backgroundColor = backgColor
  staffBtn.style.backgroundColor = 'whitesmoke'
  progBtn.style.backgroundColor = 'whitesmoke'
  eventsTable.style.display = 'block'
 staffTable.style.display = 'none'
 progTable.style.display = 'none'
})

staffBtn.addEventListener('click', () => {
  staffBtn.style.backgroundColor = backgColor
  eventsBtn.style.backgroundColor = 'whitesmoke'
  progBtn.style.backgroundColor = 'whitesmoke'
  eventsTable.style.display = 'none'
  staffTable.style.display = 'block'
  progTable.style.display = 'none'
})

progBtn.addEventListener('click', () => {
  progBtn.style.backgroundColor = backgColor
  eventsBtn.style.backgroundColor = 'whitesmoke'
  staffBtn.style.backgroundColor = 'whitesmoke'
  eventsTable.style.display = 'none'
  staffTable.style.display = 'none'
  progTable.style.display = 'block'
})

