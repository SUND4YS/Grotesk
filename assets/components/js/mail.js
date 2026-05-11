document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('feedbackForm');
    const phoneInput = document.getElementById('phoneInput');

    if (!form || !phoneInput) return;

    // 1. Простая и надежная маска для телефона на чистом JS
    phoneInput.addEventListener('input', (e) => {
        let input = e.target.value.replace(/\D/g, ''); // Удаляем всё, кроме цифр
        let formatted = '';

        if (!input) {
            e.target.value = '';
            return;
        }

        // Если первая цифра 7 или 8, приводим к стандарту +7
        if (['7', '8', '9'].includes(input[0])) {
            if (input[0] === '9') input = '7' + input;
            const firstChar = '+7';
            formatted = firstChar + ' ';
            
            if (input.length > 1) {
                formatted += '(' + input.substring(1, 4);
            }
            if (input.length >= 5) {
                formatted += ') ' + input.substring(4, 7);
            }
            if (input.length >= 8) {
                formatted += '-' + input.substring(7, 9);
            }
            if (input.length >= 10) {
                formatted += '-' + input.substring(9, 11);
            }
        } else {
            // Для других форматов номеров
            formatted = '+' + input.substring(0, 15);
        }
        
        e.target.value = formatted;
    });

    // 2. Отправка формы через AJAX (Fetch API)
    form.addEventListener('submit', async (e) => {
        e.preventDefault(); // Запрещаем стандартную перезагрузку страницы

        const formData = new FormData(form);
        
        // Добавляем технический параметр action для обработки на стороне MODX
        formData.append('action', 'feedback'); 

        try {
            // Отправляем данные на текущую страницу, где их перехватит сниппет MODX
            const response = await fetch(window.location.href, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            if (response.ok) {
                const result = await response.json();
                
                if (result.success) {
                    alert('Форма успешно отправлена!');
                    form.reset(); // Очищаем поля формы
                } else {
                    alert('Ошибка: ' + (result.message || 'Не удалось отправить'));
                }
            } else {
                alert('Ошибка сервера при отправке формы.');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Произошла ошибка сети. Попробуйте позже.');
        }
    });
});
