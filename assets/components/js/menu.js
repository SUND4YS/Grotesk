function initDropdownMenu() {
    const menuToggleBtn = document.querySelector('.header__menu-icon') || document.querySelector('.menu__btn');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const menuLinks = document.querySelectorAll('.dropdown-menu__link');
    const menuImg = document.getElementById('menu_img');

    if (!dropdownMenu || !menuToggleBtn) return;

    // Переключение меню по клику на иконку в шапке
    menuToggleBtn.addEventListener('click', (e) => {
        e.preventDefault();
        dropdownMenu.classList.toggle('is-open');
        menuImg.classList.toggle('X');
    });

    // Закрытие меню при выборе пункта
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            dropdownMenu.classList.remove('is-open');
            menuImg.classList.remove('X');

        });
    });
}
initDropdownMenu();