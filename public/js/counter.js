const counters = document.querySelector('.counters')
let statistics = null;

const getStatistics = async () => {
    const response = await fetch('/api/academics')
     statistics = await response.json()
     console.log(statistics)
     return statistics
}

const displayStatistics = async () => {
    const statistics = await getStatistics()
    if(statistics) {
        const statisticList = statistics.map((statistic) => {
            return `
             <div class="favColor fw-bold col-3 d-flex flex-column align-items-center counter">
                        <span for="" id="establishedCount">${statistic.statistic_name === 'Students' || statistic.statistic_name === 'Graduation rate' ? statistic.value + '+' : statistic.value}</span>
                        <label class="text-center">${statistic.statistic_name}</label>
                    </div>
            `
            }).join('')
            counters.innerHTML = statisticList
    }
}

displayStatistics()


// let establishedCounter = 0

// const established = setInterval(() => {
//     if(statistics !== null) {
// statistics.forEach((statistic) => {
//     if(statistic.statistic_name === 'Established') {
//         if (establishedCounter <= statistic.value) {
//           establishedCount.textContent = `${establishedCounter}`
//           establishedCounter = establishedCounter + 50
//         } else {
//           const lastCount = establishedCounter - 50
//           if(lastCount != statistic.value) {
//             for (let i = lastCount; i <= statistic.value; i++) {
//                 establishedCount.textContent = i
//             }
//           }
//           clearInterval(established)
//         }
//     }
//   })
// }
// },60)

