<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'Поздравляем!',
    'description' => '',
    'alias' => 'index',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => NULL,
    'content' => '<p>You have successfully installed MODX Revolution&nbsp;[[++settings_version]]!</p>
<p>Now that MODX is installed you can login to the manager to create your templates, manage content and install third party extras to add functionality to your&nbsp;website. </p>

<h2>New to&nbsp;MODX?</h2>

<p>Pages on a MODX site are called <a href="https://docs.modx.com/current/en/building-sites/resources">Resources</a>, and are visible on the left-hand side of the manager in the Resources tab. Resources can be nested under other resources, making it easy to create a tree of resources. There are different types of resources for different use&nbsp;cases.</p>

<p>Building your website is done through a combination of <b>Templates</b>, <b>Template Variables</b>, <b>Chunks</b>, <b>Snippets</b> and <b>Plugins</b>. Collectively these are known as <b>Elements</b>, and can also be found in the left-hand side of the manager, in the Elements&nbsp;tab.</p>

<p><a href="https://docs.modx.com/current/en/building-sites/elements/templates">Templates</a> contain the outer markup of any page. Each resource can only be assigned to a single template at a time. By adding <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables">Template Variables</a> to a template, you can add custom fields for any resource using that particular&nbsp;template.</p>

<p>With <a href="https://docs.modx.com/current/en/building-sites/elements/chunks">Chunks</a> you can share parts of the markup, such as a header, across different templates. <a href="https://docs.modx.com/current/en/building-sites/elements/snippets">Snippets</a> are pieces of PHP that return dynamic content, such as summaries of other resources or the current date. With snippets, you will often use Chunks to mark up the pieces of content it returns, instead of mixing the PHP and&nbsp;HTML.</p>

<p>Finally, <a href="https://docs.modx.com/current/en/extending-modx/plugins">Plugins</a> enable more advanced features by hooking into the extensive events system provided by&nbsp;MODX.</p>

<p>To learn more about MODX, be sure to check out the <a href="https://docs.modx.com/current/en/getting-started">Getting Started</a> section in the official&nbsp;documentation.</p>
',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1778177526,
    'editedby' => 0,
    'editedon' => 0,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '[[!AjaxFormHandler]]
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <base href="[[!++site_url]]" />
  <link rel="stylesheet" href="assets/fonts/vladivostok.css" />
  <link rel="icon" type="image/svg+xml" href="assets/components/images/favicon.svg" />
  <title>Test case for Grotesk</title>
  <link rel="stylesheet" href="/Grotesk/assets/css/style.css?v=1.2" />
</head>

<body>
  <div class="head"></div>
  <div class="placer">
    <header class="header"><div class="header__logo">
    <a herf="[[!++site_url]]" class="logo">
        <img src="assets/components/images/Logotype.svg" alt="Гротеск">
    </a>
</div>

<div class="header__menu-icon">
    <span class="menu__btn"><div class="menu_img" id="menu_img"></div></span>
</div></header>
  </div>

  <div class="dropdown-menu" id="dropdownMenu">
    <div class="container dropdown-menu__content">
      <div class="dropdown-menu__card">
        <h3 class="h3 dropdown-menu__title">Меню</h3>
        <ul class="dropdown-menu__list">
          <li><a href="#hero" class="dropdown-menu__link t4">Первый экран</a></li>
          <li><a href="#slider" class="dropdown-menu__link t4">Слайдер</a></li>
          <li><a href="#faq" class="dropdown-menu__link t4">Интересные ответы</a></li>
          <li><a href="#form" class="dropdown-menu__link t4">Форма обратной связи</a></li>
        </ul>
      </div>
    </div>
  </div>


  <section class="hero" id="hero">
    <div class="container hero__container">
      <div class="hero_text">
        <h1 class="hero__title">Хочешь стать<br /> частью команды?</h1>
        <p class="hero__subtitle t2">
          Тогда тебе нужно сверстать эту тестовую страницу. А верстая её, ты ещё и узнаешь<br />немного больше о нашей
          студии 😉
        </p>

        <div class="hero__actions-box t3">
          <div class="hero__actions">
            <a href="#form">
              <div class="btn btn--primary">Скролл до формы</div>
            </a>
            <a href="#slider">
              <div class="btn btn--outline">
                Скролл до следующего блока <img class="arrow__img inv" src="assets/components/images/Down_arrow.png"
                  alt="" />
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="hero__switch">
        <label class="switch">
          <input type="checkbox" />
          <span class="slider"></span>
        </label>
        <span class="switch-text t2">
          Сможешь сделать смену цвета у эллемента «Block» на Color2/Main в блоке<br />
          «Image-container» при нажатии на свитч?
        </span>
      </div>
    </div>

    <div class="hero__visual">
      <div class="image-stack">
        <img src="assets/components/images/hero_img_1.png" alt="" class="img-1" />
        <div class="gr-cube"></div>
        <img src="assets/components/images/hero_img_2.png" alt="" class="img-2" />
      </div>
    </div>
  </section>

  <section class="slider__section" id="slider">
    <div class="container">
      <div class="slider__title">
        <h2>Сверстал этот слайдер</h2>
        <div class="slider__buttons">
          <button class="btn_left" id="slidePrev">
            <img class="arrow__img" src="assets/components/images/Left.png" alt="<" />
          </button>
          <button class="btn_right" id="slideNext">
            <img class="arrow__img" src="assets/components/images/right.png" alt=">" />
          </button>
        </div>
      </div>

      <div class="slider__window">
        <div class="slider__track" id="sliderTrack"></div>
      </div>
    </div>
  </section>
  <section class="answer__section" id="faq">
    <div class="container">
      <div class="answer__title h2">Интересные ответы</div>
      <div class="answer__elements" id="faqGrid">
      </div>
    </div>
  </section>


  <section class="form__section" id="form">
    <div class="container form__container">
      <div class="form__info-card">
        <h2 class="h2 form__title">Сможешь сделать форму?</h2>
        <p class="t2 form__subtitle">
          Настрой поля ввода с масками. А если ещё и сможешь настроить отправку, то цены тебе не будет 😎.
        </p>
        <div class="form__socials">
          <p class="t3 form__socials-title">Можешь подписаться на наши соц.сети:</p>
          <div class="form__socials-links">
            <!-- ИСПРАВЛЕНО: пути к картинкам изменены на Tg_main.png и Vk_main.png -->
            <a href="https://t.me/growtask_studio" class="form__soc-link">
              <img src="assets/components/images/Tg_main.png" alt="Telegram">
            </a>
            <a href="https://vk.com/growtask" class="form__soc-link">
              <img src="assets/components/images/Vk_main.png" alt="VK">
            </a>
          </div>
        </div>
      </div>

      <form class="form__fields-card" id="feedbackForm">
        <div class="form__group">
          <label class="t4">Имя и фамилия</label>
          <div class="form__input-wrapper name-icon">
            <input type="text" name="username" placeholder="Иван Иванов" required>
          </div>
        </div>

        <div class="form__group">
          <label class="t4">Телефон</label>
          <div class="form__input-wrapper phone-icon">
            <input type="tel" name="phone" id="phoneInput" placeholder="8 900 555 35 35" required>
          </div>
        </div>

        <div class="form__group">
          <label class="t4">Почта</label>
          <div class="form__input-wrapper email-icon">
            <input type="email" name="email" placeholder="mail@example.com" required>
          </div>
        </div>

        <label class="form__checkbox-label t3">
          <input type="checkbox" name="agree" required checked>
          <span class="form__custom-checkbox"></span>
          Чек-бокс должен быть на каждом сайте с формой.
        </label>

        <button type="submit" class="btn btn--primary form__submit-btn">
          <span class="form__btn-check-icon"></span>
          Отправить форму
        </button>
      </form>
    </div>
  </section>

  </div>
  </section>

  <footer class="footer">
    <div class="container"><footer class="footer">
  <div class="container footer__container">
    <div class="footer__logo-box">
      <!-- Иконка флага / логотипа -->
      <img class="footer__logo-icon" src="assets/components/images/Made in.svg" alt="" />
      <div class="footer__logo-text">
      </div>
    </div>
    
    <p class="footer__note t3">
      Можешь использовать это тестовое задание в своём портфолио
    </p>
  </div>
</footer>
</div>
  </footer>
</body>
<script src="assets/components/js/slider.js"></script>
<script src="assets/components/js/questions.js"></script>
<script src="assets/components/js/menu.js"></script>
<script src="assets/components/js/mail.js"></script>

</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$header]]' => '<div class="header__logo">
    <a herf="[[!++site_url]]" class="logo">
        <img src="assets/components/images/Logotype.svg" alt="Гротеск">
    </a>
</div>

<div class="header__menu-icon">
    <span class="menu__btn"><div class="menu_img" id="menu_img"></div></span>
</div>',
    '[[$footer]]' => '<footer class="footer">
  <div class="container footer__container">
    <div class="footer__logo-box">
      <!-- Иконка флага / логотипа -->
      <img class="footer__logo-icon" src="assets/components/images/Made in.svg" alt="" />
      <div class="footer__logo-text">
      </div>
    </div>
    
    <p class="footer__note t3">
      Можешь использовать это тестовое задание в своём портфолио
    </p>
  </div>
</footer>
',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="header__logo">
    <a herf="[[!++site_url]]" class="logo">
        <img src="assets/components/images/Logotype.svg" alt="Гротеск">
    </a>
</div>

<div class="header__menu-icon">
    <span class="menu__btn"><div class="menu_img" id="menu_img"></div></span>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/elements/chunks/header.tpl',
          'content' => '<div class="header__logo">
    <a herf="[[!++site_url]]" class="logo">
        <img src="assets/components/images/Logotype.svg" alt="Гротеск">
    </a>
</div>

<div class="header__menu-icon">
    <span class="menu__btn"><div class="menu_img" id="menu_img"></div></span>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<footer class="footer">
  <div class="container footer__container">
    <div class="footer__logo-box">
      <!-- Иконка флага / логотипа -->
      <img class="footer__logo-icon" src="assets/components/images/Made in.svg" alt="" />
      <div class="footer__logo-text">
      </div>
    </div>
    
    <p class="footer__note t3">
      Можешь использовать это тестовое задание в своём портфолио
    </p>
  </div>
</footer>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/elements/chunks/footer.tpl',
          'content' => '<footer class="footer">
  <div class="container footer__container">
    <div class="footer__logo-box">
      <!-- Иконка флага / логотипа -->
      <img class="footer__logo-icon" src="assets/components/images/Made in.svg" alt="" />
      <div class="footer__logo-text">
      </div>
    </div>
    
    <p class="footer__note t3">
      Можешь использовать это тестовое задание в своём портфолио
    </p>
  </div>
</footer>
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'AjaxFormHandler' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'AjaxFormHandler',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '// Проверяем, является ли запрос AJAX-запросом и передан ли наш action
if (!empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && strtolower($_SERVER[\'HTTP_X_REQUESTED_WITH\']) == \'xmlhttprequest\') {
    
    if (isset($_POST[\'action\']) && $_POST[\'action\'] == \'feedback\') {
        
        // Санируем полученные данные от спама и инъекций
        $username = filter_var(trim($_POST[\'username\']), FILTER_SANITIZE_STRING);
        $phone = filter_var(trim($_POST[\'phone\']), FILTER_SANITIZE_STRING);
        $email = filter_var(trim($_POST[\'email\']), FILTER_SANITIZE_EMAIL);
        
        // Простая валидация полей
        if (empty($username) || empty($phone) || empty($email)) {
            echo json_encode([\'success\' => false, \'message\' => \'Пожалуйста, заполните все поля.\']);
            exit;
        }

        // Формируем текст письма
        $message = "<h3>Новая заявка с тестового сайта Гротеск</h3>";
        $message .= "<p><strong>Имя:</strong> {$username}</p>";
        $message .= "<p><strong>Телефон:</strong> {$phone}</p>";
        $message .= "<p><strong>Email:</strong> {$email}</p>";

        // Отправка письма средствами MODX API
        $modx->getService(\'mail\', \'mail.modPHPMailer\');
        $modx->mail->set(modMail::PROP_BODYS, $message);
        $modx->mail->set(modMail::PROP_FROM, $modx->getOption(\'emailsender\'));
        $modx->mail->set(modMail::PROP_FROM_NAME, \'Тестовый Лендинг\');
        $modx->mail->set(modMail::PROP_SUBJECT, \'Заявка на стажировку\');
        
        // Укажите почту, куда должны приходить заявки
        $modx->mail->address(\'to\', \'your-email@example.com\'); 
        
        $modx->mail->setHTML(true);

        if ($modx->mail->send()) {
            $modx->mail->reset();
            echo json_encode([\'success\' => true]);
        } else {
            echo json_encode([\'success\' => false, \'message\' => \'Ошибка при отправке письма внутренним сервером.\']);
        }
        
        exit; // Останавливаем дальнейший парсинг страницы MODX
    }
}
return \'\';',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '// Проверяем, является ли запрос AJAX-запросом и передан ли наш action
if (!empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && strtolower($_SERVER[\'HTTP_X_REQUESTED_WITH\']) == \'xmlhttprequest\') {
    
    if (isset($_POST[\'action\']) && $_POST[\'action\'] == \'feedback\') {
        
        // Санируем полученные данные от спама и инъекций
        $username = filter_var(trim($_POST[\'username\']), FILTER_SANITIZE_STRING);
        $phone = filter_var(trim($_POST[\'phone\']), FILTER_SANITIZE_STRING);
        $email = filter_var(trim($_POST[\'email\']), FILTER_SANITIZE_EMAIL);
        
        // Простая валидация полей
        if (empty($username) || empty($phone) || empty($email)) {
            echo json_encode([\'success\' => false, \'message\' => \'Пожалуйста, заполните все поля.\']);
            exit;
        }

        // Формируем текст письма
        $message = "<h3>Новая заявка с тестового сайта Гротеск</h3>";
        $message .= "<p><strong>Имя:</strong> {$username}</p>";
        $message .= "<p><strong>Телефон:</strong> {$phone}</p>";
        $message .= "<p><strong>Email:</strong> {$email}</p>";

        // Отправка письма средствами MODX API
        $modx->getService(\'mail\', \'mail.modPHPMailer\');
        $modx->mail->set(modMail::PROP_BODYS, $message);
        $modx->mail->set(modMail::PROP_FROM, $modx->getOption(\'emailsender\'));
        $modx->mail->set(modMail::PROP_FROM_NAME, \'Тестовый Лендинг\');
        $modx->mail->set(modMail::PROP_SUBJECT, \'Заявка на стажировку\');
        
        // Укажите почту, куда должны приходить заявки
        $modx->mail->address(\'to\', \'your-email@example.com\'); 
        
        $modx->mail->setHTML(true);

        if ($modx->mail->send()) {
            $modx->mail->reset();
            echo json_encode([\'success\' => true]);
        } else {
            echo json_encode([\'success\' => false, \'message\' => \'Ошибка при отправке письма внутренним сервером.\']);
        }
        
        exit; // Останавливаем дальнейший парсинг страницы MODX
    }
}
return \'\';',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);