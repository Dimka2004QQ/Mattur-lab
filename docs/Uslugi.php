<?php
    $connect = mysqli_connect("localhost", "root", "", "sweetshop") or die("Error");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/fonts3.css">
</head>
<body>
    <header class="header">
        <div class="header_content">
            <div class="container">
                <div class="header_content-inner">
                    <div class="header_logo">
                        <a href="../index.php">
                            <img src="../img/LogoBezFO_1x.png" alt="" width="170">
                        </a>
                    </div>
                    <nav class="menu">
                        <div class="header_btn-menu">
                            <span class="icon_bars"></span>
                        </div>
                        <ul>
                            <li><a href="../index.php">Главная</a></li>
                            <li><a href="#">Услуги</a></li>
                            <li><a href="Vacansis.html">Вакансии</a></li>
                            <li><a href="Cotacts.html">Контакты</a></li>
                        </ul>    
                    </nav>
                    <div class="header-auth">
                        <a href="auth.php" class="header_btn">Войти</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="uslugi-sector">
        <div class="uslugi-sector-item">
            <div class="uslugi-sector-title">
                Наши услуги
            </div>
            <div class="uslugi-sector-text">
                <span>Оказываем квалифицированные услуги по интеграциям, настройке и консалтингу</span>
            </div>
            <a href="#part2" class="uslugi-sector-btn">
                <div class="uslugi-sector-button">
                    Оставить заявку
                </div>
            </a>
        </div>
    </section>
    <section>
        <div class="desisions">
            <div class="">
                <div class="desision-inner">
                    <div class="desision-text-title">
                        <div class="desision-title">
                            Наши решения
                        </div>
                        <div class="desision-text">
                            Решения по автоматизации и цифровизации бизнеса
                        </div>
                    </div>
                    <div class="desision-grid">
                        <div class="desision-grid-container">
                            <div class="desision-img-1" >
                                <img src="" alt="">
                                <div class="desision-grid-title">
                                    УПРАВЛЕНИЕ ПРОДАЖАМИ. CRM
                                </div> 
                                <div class="desision-grid-text">
                                    Готовое решение по управлению продажами и взаимотношению с клиентами на базе БИТРИКС24
                                </div>
                                <div class="desision-grid-btn">
                                    <a href="#part2">Оставить заявку</a>
                                </div>
                            </div>
                            <div class="desision-img-2">
                                <div class="desision-grid-title">
                                    УПРАВЛЕНИЕ ЗАДАЧАМИ И ПРОЕКТАМИ
                                </div> 
                                <div class="desision-grid-text">
                                    Распределение задач, управление проектами, контроль выполнения задач
                                </div>
                                <div class="desision-grid-btn">
                                    <a href="#part2">Оставить заявку</a>
                                </div>
                            </div>
                            <div class="desision-img-3">
                                <div class="desision-grid-title">
                                    ОНЛАЙН-ОФИС ДЛЯ УДАЛЕННОЙ РАБОТЫ
                                </div> 
                                <div class="desision-grid-text">
                                    Организация единого пространства для онлайн-работы, коммуникаций и взаимодействия сотрудников компании
                                </div>
                                <div class="desision-grid-btn">
                                    <a href="#part2">Оставить заявку</a>
                                </div>
                            </div>
                            <div class="desision-img-4">
                                <div class="desision-grid-title">
                                    ФИНАНСОВЫЙ И УПРАВЛЕНЧЕСКИЙ УЧЕТ
                                </div> 
                                <div class="desision-grid-text">
                                    Контроль и управление денежными потоками и ресурсами компании, финансовое планирование жизнедеятельности компании и проектной деятельности
                                </div>
                                <div class="desision-grid-btn">
                                    <a href="#part2">Оставить заявку</a>
                                </div>
                            </div>
                            <div class="desision-img-5">
                                <div class="desision-grid-title">
                                    ИНТЕРНЕТ-БУХГАЛТЕРИЯ, КАДРОВОЕ И БУХГАЛТЕРСКОЕ ОБСЛУЖИВАНИЕ
                                </div> 
                                <div class="desision-grid-text">
                                    Готовое решение по сервису интернет-бухгалтерии и аутсорсингу бухгалтерии и кадрового дела
                                </div>
                                <div class="desision-grid-btn">
                                    <a href="#part2">Оставить заявку</a>
                                </div>
                            </div>
                            <div class="desision-img-6">
                                <div class="desision-grid-title">
                                    ТОВАРНЫЙ И СКЛАДСКОЙ УЧЕТ
                                </div> 
                                <div class="desision-grid-text">
                                    отовое решение по автоматизии и управлению торговлей и складским учетом 
                                </div>
                                <div class="desision-grid-btn">
                                    <a href="#part2">Оставить заявку</a>
                                </div>
                            </div>
                            <div class="desision-img-7">
                                <div class="desision-grid-title">
                                    ЭЛЕКТРОННЫЙ ДОКУМЕНТООБОРОТ
                                </div> 
                                <div class="desision-grid-text">
                                    Сервис электронного документооборота Диадок
                                </div>
                                <div class="desision-grid-btn">
                                    <a href="#part2">Оставить заявку</a>
                                </div>
                            </div>
                            <div class="desision-img-8">
                                <div class="desision-grid-title">
                                    ПОИСК И АНАЛИЗ ГОСУДАРСТВЕННЫХ И КОММЕРЧЕСКИХ ЗАКУПОК
                                </div> 
                                <div class="desision-grid-text">
                                    Сервис поиска тенедеров и аналитики поставщиков и заказчиков закупок по 44-ФЗ и 223-ФЗ. Контур.Закупки
                                </div>
                                <div class="desision-grid-btn">
                                    <a href="#part2">Оставить заявку</a>
                                </div>
                            </div>
                            <div class="desision-img-9">
                                <div class="desision-grid-title">
                                    ПРОВЕРКА И АНАЛИТИКА КОНТРАГЕНТОВ
                                </div> 
                                <div class="desision-grid-text">
                                    Сервис проверки и аналитики по более 20 показателям. Контур.Фокус
                                </div>
                                <div class="desision-grid-btn">
                                    <a href="#part2">Оставить заявку</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="slider-btn">
            <div class="container">
                <div class="slider-btn-item">
                    <div class="btn-text">
                        Получите бесплатную консультацию аналитика и узнаете как пошагово
                        <p>будет повышаться эффективность Вашей компании и увеличиться</p>
                        прибыль
                    </div>
                    <div class="btn-btn">
                        <a href="#part2">бесплатная консультация</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="uslugi-ower">
            <div class="container">
                <div class="uslugi-ower-item">
                    <div class="uslugi-ower-title-text">
                        <div class="usugi-ower-title">
                            Наши услуги
                        </div>
                        <div class="uslugi-ower-text">
                            Оказываем квалифицированные услуги по интеграциям, настройке и консалтингу
                        </div>
                    </div>
                    <div class="uslugi-ower-grid">
                        <div class="uslugi-ower-grid-item">



                        <?php
                    $dbUser = 'root';
                    $dbName = 'sweetshop';
                    $dbPass = '';
                    $mysqli = new mysqli("localhost", $dbUser, $dbPass, $dbName);
                    $query = "set names utf8";
                    $mysqli->query($query);
                    $query = "select * from uslugi";
                    $results = $mysqli->query($query);
                    while ($row = $results->fetch_assoc()) {
                        echo '<div class="uslugi-ower-grid-container">
                                <div class="usugi-ower-grid-img">
                                    <img src="'.$row["img"].'" id="image" alt="">
                                </div>
                                <div class="uslugi-ower-grid-title">
                                '.$row["title"].'
                                </div>
                                <div class="uslugi-ower-grid-text">
                                '.$row["text"].'
                                </div>
                            </div>
                    ';}
                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
    <div class="index-form">
            <div class="container">
                <form class="box" action="forms2.php" method="POST">
                    <div id="part2" class="form-title">
                        Контактные данные
                    </div> 
                    <div class="form-text">
                        Оставьте контактные данные и мы обязательно свяжемся с вами
                    </div>
                    <div class="input-box">
                        <input type="name" name="name" placeholder="ФИО" >
                    </div>
                    <div class="input-box">
                        <input type="phone" name="phone" placeholder="Телефон" >
                    </div>
                    <div class="input-box">
                        <input type="text" name="mail" placeholder="E-mail" >
                    </div>
                    
                    <a href="#"><button type="submit">Отправить!</button></a>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer">
            <div class="container">
                <div class="footer-item">
                    <div class="footer-info">
                        <div  class="footer-title">
                            MATTUR LAB. DIGITAL-ИНТЕГРАТОР
                        </div>
                        <div class="footer-text-1">
                            Комплексные digital-решения по автоматизациии цифровизации бизнес-процессов и повышению эффективности управления бизнесом
                            <p>ОГРНИП 320213000045219</p>
                            <p>ИНН 213000051179</p>
                        </div>
                        <div class="footer-phone">
                            <div class="footer-phone-title">
                                Телефон
                            </div>
                            <div class="footer-phone-text">
                                <a href="mailto::tel:+79176779797" id="foot" >+7 917 677 97 97</a>
                            </div>
                        </div>
                        <div class="footer-mail">
                            <div class="footer-mail-title">
                                E-mail:
                            </div>
                            <div class="footer-mail-text">
                                <a href="mailto:info@matturlab.ru" id="foot">info@matturlab.ru</a>
                            </div>
                        </div>
                        <div class="footer-home">
                            Чувашская Республика, г. Чебоксары, ул. Пролетарская д. 3А, кв. 35
                        </div>
                    </div>
                    <div class="footer-products">
                        <div class="footer-title">
                            ПРОДУКТЫ
                        </div>
                        <div class="footer-text">
                            <a href="#" id="footing">Управление продажами</a>
                            <p><a href="#" id="footing">Управление проектами</a></p>
                            <p><a href="#" id="footing">Управление и автоматизация бизнес-процессов</a></p>
                            <p><a href="#" id="footing">Товарный и складской учет</a></p>
                            <p><a href="#" id="footing">Телефония/Виртуальная АТС</a></p>
                        </div>
                    </div>
                    <div class="footer-uslugi">
                        <div class="footer-title">
                            УСЛУГИ
                        </div>
                        <div class="footer-text">
                            <a href="#" id="footing">Интеграция и настройка Битрикс24</a>
                            <p><a href="#" id="footing">Внедрение и настройка ELMA365</a></p>
                            <p><a href="#" id="footing">Аналитика по CRM</a></p>
                            <p><a href="#" id="footing">Разработка корпоративных приложений</a></p>
                            <p><a href="#" id="footing">Автоматизация бизнес-процессов</a></p>
                            <p><a href="#" id="footing">Роботизация бизнес-процессов (RPA)</a></p>
                        </div>
                    </div>
                    <div class="footer-partners">
                        <div class="footer-title">
                            ПАРТНЕРЫ
                        </div>
                        <div class="footer-text">
                            <a href="https://www.bitrix24.ru/?p=11291534" id="footing">Битрикс24</a>
                            <p><a href="https://nemind.com/ru/" id="footing">NEMIND</a></p>
                            <p><a href="https://www.elma-bpm.ru/" id="footing">ELMA</a></p>
                            <p><a href="https://fin-ctrl.ru/" id="footing">Финансист</a></p>
                            <p><a href="https://planfact.io/" id="footing">ПланФакт</a></p>
                            <p><a href="https://www.moedelo.org/reg-form/biz/access-to-the-service?utm_campaign=partner_9840399" id="footing">Мое Дело</a></p>
                            <p><a href="https://www.mango-office.ru/products/virtualnaya_ats/?utm_source=yandex&utm_medium=cpc&utm_campaign=vats_vats_brand_src_all&utm_term=mango%20office&utm_content=phid_17678235963%7Cadid_7779369445%7Cadp_no%7Cpos_premium1%7Cdvc_desktop%7Cregionname_Заринск%7Cregionid_11240&utm_id=cid_29976884%7Cgrid_3894702117%7Cadid_7779369445%7Ccreatid_0%7Ckey_mango%20office%7Ckeyid_17678235963%7Cnetwork_search%7Ckaid_17678235963%7Cregionname_Заринск%7Cregionid_11240%7Cscr_none%7Ccoefid_0&calltouch_tm=yd_c:29976884_gb:3894702117_ad:7779369445_ph:17678235963_st:search_pt:premium_p:1_s:none_dt:desktop_reg:11240_ret:17678235963_apt:none&etext=2202.L9woN0bZjremzIEBwhjLJUklPcDeWlR4j8U1kvp65T1lZ251bWlqc2pweG53eXF2.56a9c33d87323ef9047ad925298878c1b166edb8&yclid=3117981778948725420" id="footing">Mango Office</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
</body>
</html>