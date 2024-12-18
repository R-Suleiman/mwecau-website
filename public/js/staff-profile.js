const academicQualificationBtn = document.querySelector('.academic-q-btn')
const profQualificationBtn = document.querySelector('.prof-q-btn')
const publicationsBtn = document.querySelector('.publications-btn')
const researchBtn = document.querySelector('.research-btn')
const honorsBtn = document.querySelector('.honors-btn')
const appointmentsBtn = document.querySelector('.appts-btn')
const journalBtn = document.querySelector('.journal-btn')
const conferenceBtn = document.querySelector('.conference-btn')
const chapterBtn = document.querySelector('.chapter-btn')
const bookBtn = document.querySelector('.book-btn')
const thesisBtn = document.querySelector('.thesis-btn')
const dessertationBtn = document.querySelector('.dessertation-btn')
const otherBtn = document.querySelector('.other-btn')

const academicQualificationTable = document.querySelector('.academic-q-table')
const profQualificationTable = document.querySelector('.prof-qual-table')
const publicationsTable = document.querySelector('.publications-table')
const researchTable = document.querySelector('.research-table')
const honorsTable = document.querySelector('.honors-table')
const appointmentsTable = document.querySelector('.appts-table')
const journalTable = document.querySelector('.journal-table')
const conferenceTable = document.querySelector('.conference-table')
const chapterTable = document.querySelector('.chapter-table')
const bookTable = document.querySelector('.book-table')
const thesisTable = document.querySelector('.thesis-table')
const dessertationTable = document.querySelector('.dessertation-table')
const otherTable = document.querySelector('.other-table')

// Professional qualificatoins
profQualificationBtn.addEventListener('click', () => {
    profQualificationTable.style.display = 'block'
    academicQualificationTable.style.display = 'none'
})

// academic qualifications
academicQualificationBtn.addEventListener('click', () => {
    profQualificationTable.style.display = 'none'
    academicQualificationTable.style.display = 'block'
})

// Publications
publicationsBtn.addEventListener('click', () => {
    publicationsTable.style.display = 'block'
    researchTable.style.display = 'none'
    honorsTable.style.display = 'none'
    appointmentsTable.style.display = 'none'
})

// Research
researchBtn.addEventListener('click', () => {
    publicationsTable.style.display = 'none'
    researchTable.style.display = 'block'
    honorsTable.style.display = 'none'
    appointmentsTable.style.display = 'none'
})

// Honors
honorsBtn.addEventListener('click', () => {
    publicationsTable.style.display = 'none'
    researchTable.style.display = 'none'
    honorsTable.style.display = 'block'
    appointmentsTable.style.display = 'none'
})

// Appointments
appointmentsBtn.addEventListener('click', () => {
    publicationsTable.style.display = 'none'
    researchTable.style.display = 'none'
    honorsTable.style.display = 'none'
    appointmentsTable.style.display = 'block'
})

// sub-publications
journalBtn.addEventListener('click', () => {
    conferenceTable.style.display = 'none'
    chapterTable.style.display = 'none'
    bookTable.style.display = 'none'
    thesisTable.style.display = 'none'
    dessertationTable.style.display = 'none'
    otherTable.style.display = 'none'
    journalTable.style.display = 'block'
})

conferenceBtn.addEventListener('click', () => {
    conferenceTable.style.display = 'block'
    chapterTable.style.display = 'none'
    bookTable.style.display = 'none'
    thesisTable.style.display = 'none'
    dessertationTable.style.display = 'none'
    otherTable.style.display = 'none'
    journalTable.style.display = 'none'
})

chapterBtn.addEventListener('click', () => {
    conferenceTable.style.display = 'none'
    chapterTable.style.display = 'block'
    bookTable.style.display = 'none'
    thesisTable.style.display = 'none'
    dessertationTable.style.display = 'none'
    otherTable.style.display = 'none'
    journalTable.style.display = 'none'
})

bookBtn.addEventListener('click', () => {
    conferenceTable.style.display = 'none'
    chapterTable.style.display = 'none'
    bookTable.style.display = 'block'
    thesisTable.style.display = 'none'
    dessertationTable.style.display = 'none'
    otherTable.style.display = 'none'
    journalTable.style.display = 'none'
})

thesisBtn.addEventListener('click', () => {
    conferenceTable.style.display = 'none'
    chapterTable.style.display = 'none'
    bookTable.style.display = 'none'
    thesisTable.style.display = 'block'
    dessertationTable.style.display = 'none'
    otherTable.style.display = 'none'
    journalTable.style.display = 'none'
})

dessertationBtn.addEventListener('click', () => {
    conferenceTable.style.display = 'none'
    chapterTable.style.display = 'none'
    bookTable.style.display = 'none'
    thesisTable.style.display = 'none'
    dessertationTable.style.display = 'block'
    otherTable.style.display = 'none'
    journalTable.style.display = 'none'
})

otherBtn.addEventListener('click', () => {
    conferenceTable.style.display = 'none'
    chapterTable.style.display = 'none'
    bookTable.style.display = 'none'
    thesisTable.style.display = 'none'
    dessertationTable.style.display = 'none'
    otherTable.style.display = 'block'
    journalTable.style.display = 'none'
})

//  photo request
form = document.getElementById('photoForm')
const photo = document.getElementById('picture')

    window.onload = function() {
        autoSubmitForm();
    };

    function autoSubmitForm() {
        let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let formData = new FormData(form);

        fetch('/api/staff-Photo', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
            },
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            const gender = photo.dataset.gender
            if(data.user_photo !== '') {
                photo.innerHTML = `
            <img src="${data.user_photo}" class="img-fluid rounded-circle w-50" alt="staff photo">
            `
            } else {
                if(gender == 'M') {
                    photo.innerHTML = `
            <img src="../img/staff profiles/Male_Avatar.jpg" class="img-fluid rounded-circle w-50 " alt="staff photo">
            `
                } else {
                    photo.innerHTML = `
                    <img src="../img/staff profiles/female_avatar.jpg" class="img-fluid rounded-circle w-50 " alt="staff photo">
                    `
                }
            }

        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
            console.log(error.message)
        });
    }


