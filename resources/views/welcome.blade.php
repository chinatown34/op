@extends('main')
@section('content')
    <div class="container">
        @include('contacts')
        <div class="clear"></div>
        <div class="info_block">
            <div class="left">
                <div class="main-content">
                    <h1>Прием платежей на сайте<br />с oPays — это:</h1>
                    <div class="main-blocks">
                        <div class='main-blocks-line'>
                            <div class="main-block b01">
                                <div class="main-block-ico">
                                    <img src="/rel/img/main/main_ico_01.png" alt=""/>
                                </div>
                                <div class="main-block-title">Выгодные тарифы</div>
                                <div class="main-block-text">
                                    Ставка комиссии в зависимости<br>
                                    от вашего типа бизнеса<br>
                                    и оборота составит<br>
                                    не более 2,9 %.<br>
                                    <a href="#" onClick="ga('send', 'event', 'calccall', 'click');" class="js-calculator" >Рассчитать свой тариф</a>
                                </div>
                            </div>
                            <div class="main-block b02">
                                <div class="main-block-ico">
                                    <img src="/rel/img/main/main_ico_02.png" alt=""/>
                                </div>
                                <div class="main-block-title">Функциональность</div>
                                <div class="main-block-text">
                                    Платежи в один клик,<br>
                                    автоплатежи, холдирование<br>
                                    и другие функции будут доступны<br>
                                    вам бесплатно.<br>
                                    <a href="/instruments">Посмотреть все инструменты</a>
                                </div>
                            </div>
                        </div>
                        <div class='main-blocks-line'>
                            <div class="main-block">
                                <div class="main-block-ico">
                                    <img src="/rel/img/main/main_ico_1.png" alt=""/>
                                </div>
                                <div class="main-block-title">Конверсия</div>
                                <div class="main-block-text">
                                    Коэффициент конверсии<br>
                                    в успешные оплаты — до 99,2 %:<br>
                                    платить просто и удобно.
                                </div>
                            </div>
                            <div class="main-block b2">
                                <div class="main-block-ico">
                                    <img src="/rel/img/main/main_ico_2.png" alt=""/>
                                </div>
                                <div class="main-block-title">Стабильность</div>
                                <div class="main-block-text">
                                    Каждый платеж на вашем<br>
                                    сайте будет обработан!<br>
                                    Отказоустойчивость — 99,98 %.
                                </div>
                            </div>
                        </div>
                        <div class='main-blocks-line'>
                            <div class="main-block">
                                <div class="main-block-ico">
                                    <img src="/rel/img/main/main_ico_3.png" alt=""/>
                                </div>
                                <div class="main-block-title">Безопасность</div>
                                <div class="main-block-text">
                                    140 настраиваемых<br>
                                    фильтров безопасности,<br>
                                    уровень рисков менее 0,02 %.
                                </div>
                            </div>
                            <div class="main-block b2">
                                <div class="main-block-ico">
                                    <img src="/rel/img/main/main_ico_4.png" alt=""/>
                                </div>
                                <div class="main-block-title">Сервис</div>
                                <div class="main-block-text">
                                    Личный менеджер и техническая<br>
                                    поддержка. Колл-центр<br>
                                    для плательщиков 24 × 7.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pay-sys">
                        <h2>Поддержка ключевых платежных систем</h2>
                        <p>Подключившись к oPays, вы сможете принимать платежи на своем сайте с помощью популярных платежных средств.</p><br /><br />
                        <h3>Банковские карты</h3><br />
                        <p>
                            <span>Основные</span><br />
                            <img src="/rel/img_new/new_images/pay_sys_main.png" alt=""/><br />
                            <span>Дополнительные</span><br />
                            <img src="/rel/img_new/new_images/pay_sys_dop.png" alt=""/><br />
                        <h3>Электронные кошельки</h3>
                        <img src="/rel/img_new/new_images/pay_sys_cash.png" alt=""/>
                        </p>
                    </div>

                    <div class="popular-techlogy">
                        <h2>Популярные технологии платежей</h2>

                        <div class="popular-techlogy-block">
                            <div class="popular-techlogy-item">
                                <div class="popular-techlogy-img">
                                    <a href="/applepay">
                                        <img src="/rel/img/popular-techlogy/apple_pay.png" />
                                    </a>
                                </div>
                                <div class="popular-techlogy-text">
                                    <a href="/applepay">Apple Pay</a>&nbsp;&mdash; возможность для пользователей Apple оплачивать покупки в&nbsp;одно касание.
                                </div>
                            </div>

                            <div class="popular-techlogy-item">
                                <div class="popular-techlogy-img">
                                    <a href="/instant-credit">
                                        <img src="/rel/img/popular-techlogy/instant_credit.png" />
                                    </a>
                                </div>
                                <div class="popular-techlogy-text">
                                    <a href="/instant-credit">Instant Credit</a>&nbsp;&mdash; мгновенные онлайн-кредиты для ваших покупателей.
                                </div>
                            </div>

                            <div class="popular-techlogy-item">
                                <div class="popular-techlogy-img">
                                    <a href="/masterpass">
                                        <img src="/rel/img/popular-techlogy/master_pass.png" />
                                    </a>
                                </div>
                                <div class="popular-techlogy-text">
                                    <a href="/masterpass">Masterpass</a>&nbsp;&mdash; инструмент для совершения быстрых платежей от&nbsp;MasterCard.
                                </div>
                            </div>

                            <div class="popular-techlogy-item">
                                <div class="popular-techlogy-img">
                                    <a href="/news/25898">
                                        <img src="/rel/img/popular-techlogy/botmother.png" />
                                    </a>
                                </div>
                                <div class="popular-techlogy-text">
                                    <a href="/news/25898">Чат-боты</a>&nbsp;&mdash; возможность оплачивать покупки напрямую в&nbsp;месседжерах через чат-боты botmother.
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>География работы oPays</h2>
                    <p>С каждым годом компании из все большего количества стран могут выбрать oPays в качестве своего платежного партнера.</p>
                    <br/>
                    <p>Клиенты oPays могут принимать платежи более, чем в 120 валютах.</p>
                    <img class="main-map" src="/rel/img/main/map.png" alt=""/>
                </div>
            </div>
            <div class="right">
                <form method="post" action="default.aspx.html" id="form">
                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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" />


                    <script type="text/javascript">
                        //<![CDATA[
                        function ValidateLength(source, arguments) { if(arguments.Value.length <= 20)     arguments.IsValid = true; else     arguments.IsValid = false;};//]]>
                    </script>

                    <script src="/rel/Js/calculator.js" type="text/javascript"></script>
                    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />

                    <!--[if lte IE 8]>
                    <link href="../rel/css/ie.css" rel="stylesheet" type="text/css" />
                    <![endif]-->
                    <link href="/rel/css/connection-request.css" rel="stylesheet" type="text/css" />
                    <link href="/rel/css/country-selector.css" rel="stylesheet" type="text/css" />
                    <div class="form-block">
                        <div class="top_bg_ie"></div>
                        <div id="Connectionrequestcontrol_Header">

                            <div id="Connectionrequestcontrol_hTitle" class="title">НАЧНИ ПРИНИМАТЬ ПЛАТЕЖИ!</div>

                        </div>
                        <div class="mpfblock">
                            <div class="corner top_left"></div>
                            <div class="corner top_right"></div>
                            <div id="Connectionrequestcontrol_divUrl" class="row url">
                                <input name="Connectionrequestcontrol$tbSiteURL" type="text" maxlength="256" id="Connectionrequestcontrol_tbSiteURL" tabindex="1" class="inp" placeholder="Адрес сайта" />
                                <div class="error">


                                </div>
                            </div>

                            <div class="row">
                                <input name="Connectionrequestcontrol$contactName" type="text" id="Connectionrequestcontrol_contactName" tabindex="2" class="inp" placeholder="Контактное лицо" />
                                <div class="error">


                                </div>
                            </div>
                            <div class="row">
                                <input name="Connectionrequestcontrol$email" type="text" id="Connectionrequestcontrol_email" tabindex="3" class="inp" placeholder="E-mail" />
                                <div class="error">



                                </div>
                            </div>
                            <div class="row">
                                <input name="Connectionrequestcontrol$phone" type="text" id="Connectionrequestcontrol_phone" tabindex="4" class="inp" placeholder="Телефон" /><br />
                                <div class="error">


                                </div>
                            </div>

                            <div class="row">
                                <input name="Connectionrequestcontrol$companyName" type="text" id="Connectionrequestcontrol_companyName" tabindex="5" class="inp" placeholder="Название компании (юр.лицо / ИП)" />
                                <div class="error">


                                </div>
                            </div>
                            <div class="row country-wrapper">
                                <div id="Connectionrequestcontrol_divCountry" class="country">
                                    <span class="ttl">Компания зарегистрирована</span>
                                    <span id="Connectionrequestcontrol_rblCountryList" class="country-selector"><span class="russia"><input id="Connectionrequestcontrol_rblCountryList_0" type="radio" name="Connectionrequestcontrol$rblCountryList" value="RU" checked="checked" tabindex="6" /><label for="Connectionrequestcontrol_rblCountryList_0">в России</label></span><br /><input id="Connectionrequestcontrol_rblCountryList_1" type="radio" name="Connectionrequestcontrol$rblCountryList" value="AU" tabindex="6" /><label for="Connectionrequestcontrol_rblCountryList_1">в другой стране</label></span>
                                    <br />
                                    <div class="error">

                                    </div>
                                </div>
                            </div>
                            <div class="row last">
                                <div id="promocode_prev">
                                    <span class="ttl">Промокод (не обязательно)</span>
                                </div>
                                <div id="promocode" class="hidden">
                                    <input name="Connectionrequestcontrol$tbPromocode" type="text" maxlength="20" id="Connectionrequestcontrol_tbPromocode" tabindex="8" />
                                </div>
                            </div>

                            <div class="row captcha">
                                <img src="/rel/img/captcha/image.aspx-code=FF9F0C1E845260C6.jpeg" alt="" width="250" height="70" /><br />
                                <input type="hidden" name="captchaCode" value="FF9F0C1E845260C6" />
                            </div>
                            <div class="row">
                                <input name="Connectionrequestcontrol$cptCaptcha$captchaText" type="text" id="Connectionrequestcontrol_cptCaptcha_captchaText" tabindex="9" class="inp" placeholder="Что написано на картинке выше?" />
                                <div class="error">


                                </div>
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#Connectionrequestcontrol_cptCaptcha_captchaText').change(function () {
                                        $('#Connectionrequestcontrol_cptCaptcha_captchaTextCustomValidator').hide();
                                    });
                                });
                            </script>

                            <div class="fbtn">
                                <a id="Connectionrequestcontrol_ibtnSendRequest" tabindex="9" class="btn" Value="Отправить заявку" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;Connectionrequestcontrol$ibtnSendRequest&quot;, &quot;&quot;, true, &quot;Wizard&quot;, &quot;&quot;, false, true))">Отправить заявку</a>
                            </div>
                            <div class="corner bottom_left"></div>
                            <div class="corner bottom_right"></div>
                        </div>
                        <div class="form_info">
                            <span class="red">Все поля обязательны для заполнения.</span>После подачи заявки с вами свяжется специалист oPays для уточнения деталей и предоставит всю необходимую информацию.

                        </div>
                        <div class="bottom_bg_ie"></div>
                    </div>
                    <script src="en/rel/js/jquery.placeholder.min.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(function () {
                            $('input, textarea').placeholder();
                        });
                    </script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            var additionalInfo = $('#promocode');
                            $("#promocode_prev").click(function (event) {
                                additionalInfo.slideToggle("slow", "linear"); return false;
                            });
                            $('.error span').click(function () {
                                $(this).parent().prevAll('input').focus();
                            });

                            $('form#form input').focus(function () {
                                $(this).nextAll('div.error').hide();
                            });

                            $('form#form input').blur(function () {
                                $(this).nextAll('div.error').show();
                            });

                            $('#Connectionrequestcontrol_email').change(function () {
                                $('#Connectionrequestcontrol_cvUniqueEmail').hide();
                            });
                        });
                    </script>

                </form>
            </div>
        </div>
        <div class="clear"></div>
        <div class="info_block">
            <div class="footer-slogan">
                С заботой о вашей прибыли!
            </div>
            <div id="footer">
                <table cellpadding="0" cellspacing="0" class="certified">
                    <tr>
                        <td>
                            <span class="mir"></span>
                        </td>
                        <td>
                            <span class="mc"></span>
                        </td>
                        <td>
                            <span class="visa"></span>
                        </td>
                        <td>
                            <span class="amex"></span>
                        </td>
                        <td>
                            <span class="din"></span>
                        </td>
                        <td>
                            <span class="jcb"></span>
                        </td>
                        <td>
                            <span class="union"></span>
                        </td>
                        <td>
                            <span class="pci"></span>
                        </td>
                    </tr>
                </table>
                <div class="cont">
                    <ul class="main_menu">
                        <li><a href="/aboutus">О компании</a></li>
                        <li><a href="/aboutus/team">Команда</a></li>
                        <li><a href="/aboutus/partners">Партнеры компании</a></li>
                        <li><a href="/aboutus/clients">Клиенты компании</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection