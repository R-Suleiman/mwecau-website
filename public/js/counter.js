const establishedCount = document.getElementById('establishedCount')
const facultyCount = document.getElementById('facultyCount')
const studentsCount = document.getElementById('studentsCount')
const gRareCount = document.getElementById('gRareCount')
let statistics = null;

const getStatistics = async () => {
    const response = await fetch('/api/academics')
     statistics = await response.json()
}

getStatistics()

let establishedCounter = 0
let facultyCounter = 0
let studentsCounter = 0
let gRareCounter = 0

const established = setInterval(() => {
    if(statistics !== null) {
statistics.forEach((statistic) => {
    if(statistic.statistic_name === 'Established') {
        if (establishedCounter <= statistic.value) {
          establishedCount.textContent = `${establishedCounter}`
          establishedCounter = establishedCounter + 50
        } else {
          const lastCount = establishedCounter - 50
          if(lastCount != statistic.value) {
            for (let i = lastCount; i <= statistic.value; i++) {
                establishedCount.textContent = i
            }
          }
          clearInterval(established)
        }
    }
  })
}
},60)

  const faculty = setInterval(() => {
    if(statistics !== null) {
    statistics.forEach((statistic) => {
        if(statistic.statistic_name === 'Faculty') {
    if (facultyCounter <= 3) {
      facultyCount.textContent = `${facultyCounter}`
      facultyCounter = facultyCounter + 1
    } else {
      clearInterval(faculty)
    }
}
})
    }
  }, 100)

    const students = setInterval(() => {
        if(statistics !== null) {
        statistics.forEach((statistic) => {
            if(statistic.statistic_name === 'Students') {
      if (studentsCounter <= statistic.value) {
        studentsCount.textContent = `${studentsCounter}+`
        studentsCounter = studentsCounter + 150
      } else {
        const lastCount = studentsCounter - 150
        if(lastCount != statistic.value) {
          for (let i = lastCount; i <= statistic.value; i++) {
            studentsCount.textContent = i
          }
        }
        clearInterval(students)
      }
    }
})
        }
    }, 60)

  const gRate = setInterval(() => {
    if(statistics !== null) {
    statistics.forEach((statistic) => {
        if(statistic.statistic_name === 'Graduation rate') {
    if (gRareCounter <= statistic.value) {
      gRareCount.textContent = `${gRareCounter}+`
      gRareCounter = gRareCounter + 5
    } else {
        const lastCount = gRareCounter - 5
        if(lastCount != statistic.value) {
          for (let i = lastCount; i <= statistic.value; i++) {
            gRareCount.textContent = i
          }
        }
      clearInterval(gRate)
    }
}
})
    }
  }, 100)


