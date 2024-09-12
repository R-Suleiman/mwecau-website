const academicBtn = document.querySelector('.btn-ac-qual')
const proBtn = document.querySelector('.btn-pro-qual')
const proTable = document.querySelector('.prof-qual-table')
const academicTable = document.querySelector('.ac-qual-table')
const backgColor = 'rgb(248, 162, 248)'

academicBtn.addEventListener('click', () => {
  academicBtn.style.backgroundColor = backgColor
  proBtn.style.backgroundColor = 'whitesmoke'
  academicTable.style.display = 'block'
 proTable.style.display = 'none'
})

proBtn.addEventListener('click', () => {
  proBtn.style.backgroundColor = backgColor
  academicBtn.style.backgroundColor = 'whitesmoke'
  academicTable.style.display = 'none'
  proTable.style.display = 'block'
})


