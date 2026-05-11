const faqData = [
    { question: 'Какими проектами я буду заниматься?', answer: 'Ты будешь работать над реальными коммерческими проектами студии разной сложности.' },
    { question: 'Будет ли у меня карьерный рост?', answer: 'Да, лучшие стажеры переходят на позицию Junior-разработчика в штат.' },
    { question: 'Какой CMS вы пользуетесь?', answer: 'Мы преимущественно разрабатываем сайты на MODX Revolution, а также используем современные JS-фреймворки.' },
    { question: 'С какими технологиями я буду работать?', answer: 'В стеке HTML5, CSS3/SASS, JavaScript (ES6+), Git, MODX API, Fenom.' },
    { question: 'У вас большой штат?', answer: 'Наша команда состоит из опытных дизайнеров, разработчиков и менеджеров проектов.' },
    { question: 'Проводите ли вы корпоративы?', answer: 'Конечно! Мы регулярно собираемся на тимбилдинги, отмечаем праздники и релизы крупных проектов.' }
];


function initFaq() {
    const gridContainer = document.getElementById('faqGrid');
    if (!gridContainer) return;

    gridContainer.innerHTML = faqData.map(item => `
        <details class="answer_element t2">
            <summary class="answer__question t2">
                <span>${item.question}</span>
                <span class="answer__arrow"><img class='arrow__img' src='assets/components/images/Down_arrow.png' alt='\\/'></span>
            </summary>
            <div class="answer__content" style="height: 0; overflow: hidden; transition: height 0.3s ease;">
                <div class="answer__text t2" style="padding-top: 12px;">${item.answer}</div>
            </div>
        </details>
    `).join('');

    const items = gridContainer.querySelectorAll('.answer_element');
    
    items.forEach(item => {
        const summary = item.querySelector('summary');
        const content = item.querySelector('.answer__content');
        
        summary.addEventListener('click', (e) => {
            e.preventDefault(); // Отключаем мгновенное открытие браузером
            
            if (!item.open) {
                // Сначала закрываем все остальные открытые вкладки
                items.forEach(el => {
                    if (el !== item && el.open) {
                        const openContent = el.querySelector('.answer__content');
                        openContent.style.height = '0px';
                        setTimeout(() => el.open = false, 300);
                    }
                });
                
                // Открываем текущую вкладку
                item.open = true;
                content.style.height = content.scrollHeight + 'px';
            } else {
                // Плавно закрываем текущую вкладку
                content.style.height = '0px';
                setTimeout(() => item.open = false, 300);
            }
        });
    });
}
initFaq();