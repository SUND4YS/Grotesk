const cardsData = [
    { title: '2 мес.', desc: 'Тебя ждут 2 месяца оплачиваемой стажировки с реальными проектами' },
    { title: '5/2', desc: 'Классический график работы, с выходными по официальному календарю праздников' },
    { title: '2 раза', desc: 'Выплачиваем зарплату 2 раза в месяц (аванс и окончаловка)' },
    { title: 'Ментор', desc: 'За тобой будет закреплен наставник, который будет тебе всячески помогать' },
    { title: '2 экрана', desc: 'У тебя будет отличное рабочее место с 2-мя мониторами и хорошим компьютером' }
];

const track = document.getElementById('sliderTrack');
const btnPrev = document.getElementById('slidePrev');
const btnNext = document.getElementById('slideNext');

function loadCards() {
    track.innerHTML = cardsData.map(card => `
        <div class="element">
            <h2 class="element-title">${card.title}</h2>
            <p class="element-discription t2">${card.desc}</p>
        </div>
    `).join('');
}


loadCards();

let currentIndex = 0;
const cardWidth = 340; 
const gap = 30;        

function updateSliderPosition() {
    const offset = currentIndex * (cardWidth + gap);
    track.style.transform = `translateX(-${offset}px)`;
}

btnNext.addEventListener('click', () => {
    if (currentIndex < cardsData.length - 1) {
        currentIndex++;
        updateSliderPosition();
    }
});

btnPrev.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        updateSliderPosition();
    }
});
