

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="X-UA-Compatible" content="IE=IE9" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link type="text/css" rel="stylesheet" href="/rel/css/core-ui-select.css" /><link type="text/css" rel="stylesheet" href="/rel/css/page.css" /><link type="text/css" rel="stylesheet" href="/rel/css/main_page1.css" /><link type="text/css" rel="stylesheet" href="/rel/css/top_menu.css" /><link type="text/css" rel="stylesheet" href="/rel/css/contact_info.css" /><link type="text/css" rel="stylesheet" href="/rel/css/font.css" /><link type="text/css" rel="stylesheet" href="/rel/css/footer.css" /><link type="text/css" rel="stylesheet" href="/rel/css/product-menu.css" /><link type="text/css" rel="stylesheet" href="/rel/css/up.css" /><link type="text/css" rel="stylesheet" href="/rel/css/slides.css" />
    <!--[if lt IE 9]> <link type="text/css" rel="stylesheet" href="/rel/css/ie_new.css" /> <![endif]-->
    <link rel="icon" type="image/png" href="/rel/img/favicon/favicon.png" /><link rel="apple-touch-icon" href="/rel/img/favicon/favicon-i.png" />

    <script src="/rel/js/jquery1.6.1.min.js" type="text/javascript"></script>
    <script src="/rel/js/jquery.core-ui-select.js" type="text/javascript"></script>
    <script src="/rel/js/jquery.parallax-0.2-min.js" type="text/javascript"></script>
    <script src="/rel/js/slides.js" type="text/javascript"></script>
    <script src="/rel/js/up.js" type="text/javascript"></script>
    <script src="/rel/js/main_page1.js" type="text/javascript"></script>
    <script src="/rel/js/newfunc.js" type="text/javascript"></script>
    <title>
        Прием платежей на сайте – online платежи, оплата на сайте и прием электронных платежей через интернет
    </title><meta name="keywords" content="прием платежей, прием платежей на сайте, прием платежей через интернет, online платежи, онлайн платежи, электронные платежи, оплата через интернет, оплата на сайте, платежи в интернете, платежи через интернет " /><meta name="description" content="Решения по организации приема всех видов платежей на сайте. Прием оплаты через интернет и из мобильных приложений. Онлайн платежи" />
</head>
<body class="parallax-enabled">
<div class="parallax_wrapper">
    <div class="parallax outer parallax-enabled">
        <div class="parallax inner parallax-enabled">
            <div class="modern-upbutton" title="" data-scroll="up" data-pos="0">
                <div class="highlight-area">
                    <div class="subscripted-arrow">
                        <span>Наверх</span>
                    </div>
                </div>
            </div>

            <style type="text/css">.notificationContainer {
                    background: #253e46;
                    overflow: auto;
                }

                .notificationBlock {
                    width: 1012px;
                    margin: 0 auto;
                }
            </style>
            <div class="notificationContainer">
                <div class="notificationBlock">
                    <span></span>
                </div>
            </div>


            <div style="clear: both" />
            <div class="top_menu">
                <div class="top_block">
                    <ul>
                        <li class="first"><a href="/request">Подключиться</a></li>
                        <li><a href="/products/rates/cards">Тарифы</a></li>
                        <li><a href="/instruments">Инструменты</a></li>
                        <li><a href="/service">Сервис</a></li>
                        <li><a href="/developers/cms">Интеграция</a></li>
                        <li><a href="/bonus">Бонусы</a></li>
                        <li><a href="/aboutus">О компании</a></li>
                        <li><a href="/news">Новости</a></li>
                        <li><a href="/aboutus/contacts">Контакты</a></li>
                    </ul>

                    <div class="container">
                        <ul class="right_login">
                            <li class="lk"><a href="/login/">Личный кабинет</a></li>
                            <li class="payment_search"><a href="/help" rel="nofollow">Поиск платежей</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @yield('content')

            <link href="/rel/Css/calculator.css" rel="stylesheet" />
            <link href="/rel/css/country-selector.css" rel="stylesheet" type="text/css" />
            <!--[if lt IE 9]>
            <link href="/Rel/Css/ie.css" rel="stylesheet" />
            <![endif]-->
            <div class="calculator-block">
                <div class="calculator-blur"></div>

                <div class="calculator-form">
                    <div class="close"></div>
                    <div class="title">Калькулятор тарифа</div>
                    <div class="corner top_left"></div>
                    <div class="corner top_right"></div>
                    <div class="mpfblock">
                        <div class="fee_calc">
                            <p>Рассчитайте примерный размер комиссии за интернет-эквайринг с учетом особенностей вашего бизнеса.</p>
                            <div class="calc_block">
                                <div class="country">
                                    <span class="ttl">Компания зарегистрирована</span>
                                    <ul class="country-selector">
                                        <li class="russia">
                                            <input id="CountryList_2" type="radio" name="connectionRequest$rblCountryList" value="RU" checked="checked" />
                                            <label for="CountryList_2">в России</label></li>
                                        <li>
                                            <input id="CountryList_1" type="radio" name="connectionRequest$rblCountryList" value="AU" />
                                            <label for="CountryList_1">в другой стране</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="">
                                    <div class="column column-left">
                                        <div class="calc-select active">
                                            <span class="ttl">Тип бизнеса</span>
                                            <select>
                                                <option value="0" selected="selected" data-tab="0">E-Commerce</option>
                                                <option value="1" data-tab="1">ЖКХ</option>
                                                <option value="2" data-tab="1">GDS</option>
                                                <option value="3" data-tab="1">Авиабилеты</option>
                                            </select>
                                        </div>
                                        <div class="calc-select">
                                            <span class="ttl">Страна</span>
                                            <select>
                                                <option value="4" selected="selected" data-tab="0">В Европе</option>
                                                <option value="5" data-tab="1">Казахстан</option>
                                                <option value="6" data-tab="2">Кыргызстан, Таджикистан</option>
                                                <option value="7" data-tab="3">В Азии</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="column column-right">
                                        <div class="calc-select active">
                                            <span class="ttl">Ежемесячный оборот</span>
                                            <select>
                                                <option value="0" selected="selected">менее 100 тыс. руб.</option>
                                                <option value="1">100 тыс. руб. – 200 тыс. руб.</option>
                                                <option value="2">200 тыс. руб. – 300 тыс. руб.</option>
                                                <option value="3">300 тыс. руб. – 500 тыс. руб.</option>
                                                <option value="4">0.5 млн руб. – 1 млн руб.</option>
                                                <option value="5">1 млн руб. – 5 млн руб.</option>
                                                <option value="6">5 млн руб. – 10 млн руб.</option>
                                                <option value="7">10 млн руб. – 20 млн руб.</option>
                                                <option value="8">20 млн руб. - 50 млн руб.</option>
                                            </select>
                                        </div>
                                        <div class="calc-select">
                                            <span class="ttl">Ежемесячный оборот</span>
                                            <select>
                                                <option value="0" selected="selected">менее 1 млн руб.</option>
                                                <option value="1">1 млн руб. – 3 млн руб.</option>
                                                <option value="2">3 млн руб. – 10 млн руб.</option>
                                                <option value="3">10 млн руб. – 30 млн руб.</option>
                                                <option value="4">30 млн руб. - 100 млн руб.</option>
                                            </select>
                                        </div>
                                        <div class="calc-select">
                                            <span class="ttl">Ежемесячный оборот</span>
                                            <select>
                                                <option value="0" selected="selected">менее 1 млн руб.</option>
                                                <option value="1">1 млн руб. – 3 млн руб.</option>
                                                <option value="2">3 млн руб. – 10 млн руб.</option>
                                                <option value="3">10 млн руб. – 30 млн руб.</option>
                                                <option value="4">30 млн руб. - 100 млн руб.</option>
                                            </select>
                                        </div>
                                        <div class="calc-select">
                                            <span class="ttl">Ежемесячный оборот</span>
                                            <select>
                                                <option value="0" selected="selected">менее 1 млн руб.</option>
                                                <option value="1">1 млн руб. – 3 млн руб.</option>
                                                <option value="2">3 млн руб. – 10 млн руб.</option>
                                                <option value="3">10 млн руб. – 30 млн руб.</option>
                                                <option value="4">30 млн руб. - 100 млн руб.</option>
                                            </select>
                                        </div>
                                        <div class="calc-select">
                                            <span class="ttl">Ежемесячный оборот</span>
                                            <select>
                                                <option value="0" selected="selected">менее 50 тыс. €</option>
                                                <option value="1">50 тыс. € – 150 тыс. €</option>
                                                <option value="2">более 150 тыс. €</option>
                                            </select>
                                        </div>
                                        <div class="calc-select">
                                            <span class="ttl">Ежемесячный оборот</span>
                                            <select>
                                                <option value="0" selected="selected">менее 5 млн тенге</option>
                                                <option value="1">5 млн тенге – 15 млн тенге</option>
                                                <option value="2">15 млн тенге – 25 млн тенге</option>
                                                <option value="3">более 25 млн тенге</option>
                                            </select>
                                        </div>
                                        <div class="calc-select"></div>
                                        <div class="calc-select">
                                            <span class="ttl">Ежемесячный оборот</span>
                                            <select>
                                                <option value="0" selected="selected">менее 50 тыс. $</option>
                                                <option value="1">50 тыс. $ – 150 тыс. $</option>
                                                <option value="2">более 150 тыс. $</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="calc_btn">
                                <a href="#" class="btn" onClick="ga('send', 'event', 'calccount', 'click');" id="calcLink">Рассчитать тариф</a>
                            </div>
                        </div>
                        <div class="feeResults">
                            <div class="calc_results">
                                <p>По предварительным расчетам ваша эквайринговая комиссия составит</p>
                                <span id="outFee" class="outFee"></span><span id="outFeeText"></span>
                                <br/>
                                <span id="outFee2" class="outFee"></span><span id="outFeeText2"></span>
                                <div class="fee_info">Плата за транзакцию: <span id="transactionFee"></span></div>
                                <div class="fee_info">Абонентская плата: <span id="subscribFee"></span></div>
                                <span class="exlamation" id="exclamation"></span>
                                <div class="estimation">
                                    Данный расчет является предварительным.<br />
                                    Более точную информацию вы сможете получить после подачи заявки.
                                </div>
                                <div class="send_request">
                                    <a href="request/" onClick="ga('send', 'event', 'calcrequestbutton', 'click');"  class="btn">Подключиться</a>
                                </div>
                            </div>
                            <div class="calc_rates">
                                <div class="rates">
                                    <div class="calc_rates_block active">
                                        <div class="rates-items">
                                            <div class="rate-item active">E-Commerce</div>
                                            <div class="rate-item">Другие отрасли</div>
                                        </div>
                                        <div class="calc-table-item ecommerce active">
                                            <table cellspacing="0">
                                                <tr>
                                                    <th>Месячный<br />оборот, руб.</th>
                                                    <th>Ставка<br />комиссии</th>
                                                    <th>Абонентская<br />плата, руб.</th>
                                                </tr>
                                                <tr class="white">
                                                    <td>< 100 тыс.</td>
                                                    <td>2,9%</td>
                                                    <td>2990</td>
                                                </tr>
                                                <tr class="">
                                                    <td>100&ndash;200 тыс.</td>
                                                    <td>2,9%</td>
                                                    <td>1990</td>
                                                </tr>
                                                <tr class="white">
                                                    <td>200&ndash;300 тыс.</td>
                                                    <td>2,9%</td>
                                                    <td>990</td>
                                                </tr>
                                                <tr class="">
                                                    <td>300&ndash;500 тыс.</td>
                                                    <td>2,9%</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr class="white">
                                                    <td>0,5&ndash;1 млн</td>
                                                    <td>2,8%</td>
                                                    <td>0</td>
                                                </tr>
                                            </table>
                                            <table cellspacing="0">
                                                <tr>
                                                    <th>Месячный<br />оборот, руб.</th>
                                                    <th>Ставка<br />комиссии</th>
                                                    <th>Абонентская<br />плата, руб.</th>
                                                </tr>
                                                <tr class="white">
                                                    <td>1&ndash;5 млн</td>
                                                    <td>2,7%</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr class="">
                                                    <td>5&ndash;10 млн</td>
                                                    <td>2,6%</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr class="white">
                                                    <td>10&ndash;20 млн</td>
                                                    <td>2,5%</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr class="">
                                                    <td>20&ndash;50 млн</td>
                                                    <td>2,45%</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr class="white">
                                                    <td>более 100 млн</td>
                                                    <td colspan="2">индивидуальные условия</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="calc-table-item other">
                                            <table cellspacing="0">
                                                <tr>
                                                    <th>Месячный оборот, <span class="rur">р<span>уб.</span></span></th>
                                                    <th>ЖКХ</th>
                                                    <th>Авиакассы</th>
                                                    <th>GDS</th>
                                                </tr>
                                                <tr class="white">
                                                    <td>< 1 млн</td>
                                                    <td>1,5%<span style="color:red;">*</span></td>
                                                    <td>2,3%<span style="color:red;">*</span></td>
                                                    <td>0,8%</td>
                                                </tr>
                                                <tr>
                                                    <td>1&ndash;3 млн</td>
                                                    <td>1,4%</td>
                                                    <td>2,2%</td>
                                                    <td>0,7%</td>
                                                </tr>
                                                <tr class="white">
                                                    <td>3&ndash;10 млн</td>
                                                    <td>1,3%</td>
                                                    <td>2,1%</td>
                                                    <td>0,6%</td>
                                                </tr>
                                                <tr>
                                                    <td>10&ndash;30</td>
                                                    <td>1,2%</td>
                                                    <td>2,0%</td>
                                                    <td>0,5%</td>
                                                </tr>
                                                <tr class="white">
                                                    <td>30&ndash;100</td>
                                                    <td>1,1%</td>
                                                    <td>1,9%</td>
                                                    <td>0,4%</td>
                                                </tr>
                                            </table>
                                            <span class="red">*Абонентская плата 1990 руб./мес. при обороте менее 400 000 руб.</span>
                                        </div>
                                    </div>
                                    <div class="calc_rates_block">
                                        <div class="rates-items">
                                            <div class="rate-item active">Европа</div>
                                            <div class="rate-item">Казахстан</div>
                                            <div class="rate-item">Кыргызстан, Таджикистан</div>
                                            <div class="rate-item">Азия</div>
                                        </div>
                                        <div class="calc-table-item active">
                                            <table cellspacing="0">
                                                <tr>
                                                    <th>Месячный оборот безналичных платежей, €</th>
                                                    <th>Ставка комиссии<br/>(EUR, USD, GBP, PLN, CZK, DKK, NOK, SEK)<span style="color:red;">*</span></th>
                                                    <th>Ставка комиссии<br/>(RUB, CHF)<span style="color:red;">*</span></th>
                                                </tr>
                                                <tr class="white">
                                                    <td>< 50 тыс.</td>
                                                    <td>2,7%</td>
                                                    <td>3,2%</td>
                                                </tr>
                                                <tr>
                                                    <td>50 тыс. &ndash; 150 тыс.</td>
                                                    <td>2,6%</td>
                                                    <td>3,1%</td>
                                                </tr>
                                                <tr class="white">
                                                    <td>> 150 тыс.</td>
                                                    <td>2,5%</td>
                                                    <td>3,0%</td>
                                                </tr>
                                            </table>
                                            <span class="red">* При среднем чеке ниже 25€ взимается дополнительная плата за транзакцию в размере 0,15€.</span>
                                        </div>
                                        <div class="calc-table-item">
                                            <table cellspacing="0">
                                                <tr>
                                                    <th>Месячный оборот безналичных платежей, тенге</th>
                                                    <th>Ставка комиссии</th>
                                                </tr>
                                                <tr class="white">
                                                    <td>< 5 млн</td>
                                                    <td>2,8%</td>
                                                </tr>
                                                <tr>
                                                    <td>5 &ndash; 15 млн</td>
                                                    <td>2,6%</td>
                                                </tr>
                                                <tr class="white">
                                                    <td>15 &ndash; 25 млн</td>
                                                    <td>2,5%</td>
                                                </tr>
                                                <tr>
                                                    <td>> 25 млн</td>
                                                    <td>Индивидуальные условия</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="calc-table-item">
                                            <table cellspacing="0">
                                                <tr>
                                                    <th>Страна</th>
                                                    <th>Ставка коммиссии</th>
                                                </tr>
                                                <tr class="white">
                                                    <td>Кыргызстан</td>
                                                    <td>4,0%</td>
                                                </tr>
                                                <tr>
                                                    <td>Таджикистан</td>
                                                    <td>4,0%</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="calc-table-item">
                                            <table cellspacing="0">
                                                <tr>
                                                    <th>Месячный оборот безналичных платежей, $</th>
                                                    <th>Ставка комиссии<br/>(HKD, USD, EUR, SGD, RUB, JPY, CNY)</th>
                                                    <th>Стоимость транзакции, $</th>
                                                </tr>
                                                <tr class="white">
                                                    <td>< 50 тыс.</td>
                                                    <td>4,5%</td>
                                                    <td>0,30</td>
                                                </tr>
                                                <tr>
                                                    <td>50 тыс. &ndash; 150 тыс.</td>
                                                    <td>4,2%</td>
                                                    <td>0,30</td>
                                                </tr>
                                                <tr class="white">
                                                    <td>> 150 тыс.</td>
                                                    <td>3,8%</td>
                                                    <td>0,30</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <p>В таблице представлены базовые тарифы. Ваша ставка может быть ниже – узнайте ее, подав <a href="/request">заявку на подключение</a>.</p>
                            </div>
                            <div class="new_calc">
                                <a href="#" id="recalculate">Рассчитать тариф заново</a>
                                <a href="#" id="show_rates">Тарифная сетка</a>
                            </div>
                        </div>
                    </div>
                    <div class="corner bottom_left"></div>
                    <div class="corner bottom_right"></div>
                    <div class="calculator-form-info">
                        Внимание! Все расчеты являются предварительными! Более точную информацию вы сможете получить после подачи <a href="/request" onClick="ga('send', 'event', 'calcrequestlink', 'click');" >заявки на подключение</a>.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
