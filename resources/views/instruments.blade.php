@extends('main')
@section('content')
    <div class="container">
        @include('contacts')
            <form method="post" action="default.aspx.html" id="aspnetForm">
                <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJOTc5NzEwODk5D2QWAmYPZBYCAgUPZBYCAhcPZBYCZg9kFgICAQ9kFgICEQ9kFgZmDw9kFgIeC3BsYWNlaG9sZGVyBTfQp9GC0L4g0L3QsNC/0LjRgdCw0L3QviDQvdCwINC60LDRgNGC0LjQvdC60LUg0LLRi9GI0LU/ZAIBDw8WAh4MRXJyb3JNZXNzYWdlBTfQp9GC0L4g0L3QsNC/0LjRgdCw0L3QviDQvdCwINC60LDRgNGC0LjQvdC60LUg0LLRi9GI0LU/ZGQCAg8PFgIfAQU30KfRgtC+INC90LDQv9C40YHQsNC90L4g0L3QsCDQutCw0YDRgtC40L3QutC1INCy0YvRiNC1P2RkZNbyge7kKu8SmJvDasd+9SOc/bniKLJScVG5cZDSEVMw" />


                <script type="text/javascript">
                    //<![CDATA[
                    function ValidateLength(source, arguments) { if(arguments.Value.length <= 20)     arguments.IsValid = true; else     arguments.IsValid = false;};//]]>
                </script>

                <script src="../Rel/Js/calculator.js" type="text/javascript"></script>
                <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="3D7D4318" />
                <div id="main">

                    <div class="product_pages">
                        <ul>
                            <li><div class="first"><span>Инструменты</span><div class="right"></div></div>
                            </li>
                            <li><div><a href="../service/index.html">Сервис</a><div class="right"></div></div>
                            </li>
                        </ul>
                    </div>
                    <div class="product_content">
                        <div class="left">
                            <h1>Инструменты</h1>
                            <p>
                                PayOnline предлагает вам пакет профессиональных финансовых инструментов для:
                            <ul>
                                <li>упрощения процесса оплаты, </li>
                                <li>повышения частоты платежей,</li>
                                <li>увеличения доли спонтанных покупок,</li>
                                <li>роста доли успешных платежей,</li>
                                <li><b>увеличения вашей прибыли.</b></li>
                            </ul>
                            </p>
                            <div class="inst_block">
                                <h2>Платежи в «один клик»</h2>
                                <p><span>Специально для интернет-магазинов</span></p>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst1.png" />
                                    Скорость оплаты увеличивается на 93%
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst2.png" />
                                    Доля спонтанных покупок — на 12%
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst3.png" />
                                    Доля повторных покупок — на 27%
                                </div>
                                <p>Плательщик привязывает карту к своему аккаунту на вашем сайте. Следующие оплаты совершаются без ввода полных реквизитов карты.</p>
                            </div>
                            <div class="inst_block">
                                <h2>Автоплатежи (рекуррентные платежи)</h2>
                                <p><span>Для сервисов, работающих по принципу оплаты «подписки»</span></p>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst4.png" />
                                    Увеличивается прибыль с каждого клиента
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst5.png" />
                                    Доля просроченных платежей снижается на 37%
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst6.png" />
                                    Увеличивается точность прогнозов прибыли на краткосрочный и среднесрочный период
                                </div>
                                <p>Плательщик совершает платеж и соглашается ежемесячно оплачивать ваши услуги. Все дальнейшие списания происходят без участия вашего клиента.</p>
                            </div>
                            <div class="inst_block">
                                <h2>«Заморозка» суммы платежа на карте</h2>
                                <p><span>Для интернет-магазинов с обширным ассортиментом или удаленным складом</span></p>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst7.png" />
                                    Снижается недовольство клиентов
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst8.png" />
                                    Ликвидируется риск финансовых потерь из-за возвратов
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst9.png" />
                                    Вы сможете принимать оплаты только за те заказы, которые можете выполнить
                                </div>
                                <p>После совершения оплаты средства не списываются с карты, а «замораживаются». Вы подтверждаете или отклоняете оплату, только убедившись в наличии товаров.</p>
                            </div>
                            <div class="inst_block">
                                <h2>Настройка проверки платежей по 3-D Secure (3DS)</h2>
                                <p><span>Для тех, кто хочет сам определять, кого проверять, а кому — доверять</span></p>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst10.png" />
                                    Конверсия платежей увеличивается до 99,2%
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst11.png" />
                                    Безопасность сохраняется на уровне 99,98%
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst12.png" />
                                    Уровень рисков снижается до 0,02%
                                </div>
                                <p>Не хотите рисковать? Обеспечьте 100% безопасность, включив обязательную проверку всех платежей.</p>
                                <p>Хотите упростить жизнь безопасных клиентов? Отключайте проверку для платежей, подходящих под ваши условия (сумма, страна и т.д.).</p>
                            </div>
                            <div class="inst_block">
                                <h2>Адаптивная платежная форма</h2>
                                <p><span>Для тех, кто заботится о трафике с мобильных устройств</span></p>
                                <div class="inst_item two">
                                    <img src="../rel/img_new/new_images/inst13.png" />
                                    Платить с мобильных устройств становится удобнее
                                </div>
                                <div class="inst_item two">
                                    <img src="../rel/img_new/new_images/inst14.png" />
                                    Повышается лояльность ваших мобильных клиентов (20–50% трафика)
                                </div>
                                <p>Форма подстраивается под размер экрана устройства плательщика. Адаптирована для мобильных устройств: смартфонов и планшетов. Встраивается в сайты, телевизоры, мобильные приложения.</p>
                            </div>
                            <div class="inst_block">
                                <h2>Расширенная география</h2>
                                <p><span>Для тех, чьи клиенты живут не только в России</span></p>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst15.png" />
                                    Ваша аудитория увеличивается за счет новых регионов
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst16.png" />
                                    Вы получаете инструмент масштабирования бизнеса
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst17.png" />
                                    Ваша прибыль растет за счет увеличения числа клиентов
                                </div>
                                <p>Вы можете работать с банками в России, Азии, Европе и Америке и принимать платежи в 50+ валютах.</p>
                                <p>Ваша компания может быть зарегистрирована в Евросоюзе, Центральной Азии или Америке.</p>
                            </div>
                            <div class="inst_block">
                                <h2>Настройка системы фрод-мониторинга</h2>
                                <p><span>Для тех, кто знает своих клиентов</span></p>
                                <div class="inst_item two">
                                    <img src="../rel/img_new/new_images/inst18.png" />
                                    Риски мошеннических операций сохраняются на уровне не более 0,02%
                                </div>
                                <div class="inst_item two">
                                    <img src="../rel/img_new/new_images/inst19.png" />
                                    Доля успешных платежей увеличивается до 99,2%
                                </div>
                                <p>Вы можете управлять 140+ фильтрами системы мониторинга мошеннических операций. Вы определяете лимиты, географию, черные и белые списки карт. Мы оптимизируем настройки и поможем избежать риска для вашей финансовой безопасности.</p>
                            </div>
                            <div class="inst_block">
                                <h2>Интеграция с GDS и «длинная запись»</h2>
                                <p><span>Для авиакасс, авиакомпаний, туристических компаний и сервисов бронирования</span></p>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst20.png" />
                                    Снижает расходы на интернет-эквайринг на 80%
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst21.png" />
                                    Упрощает процесс оформления брони
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst22.png" />
                                    Соответствует международным стандартам
                                </div>
                                <p>Вы совершаете оплату напрямую в GDS и заметно экономите на комиссии. Вместе с данными карты вы передаете параметры покупателя для оформления билета / брони.</p>
                            </div>
                            <div class="inst_block">
                                <h2>Кастомизация платежной формы</h2>
                                <p><span>Для тех, кто ценит свой бренд</span></p>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst23.png" />
                                    Увеличивается уровень доверия клиентов
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst24.png" />
                                    Снижается доля отказов при переходе на платежную форму
                                </div>
                                <div class="inst_item">
                                    <img src="../rel/img_new/new_images/inst25.png" />
                                    Повышается уровень конверсии и конечная прибыль
                                </div>
                                <p>Вы можете реализовать собственный дизайн и логику платежной формы. Вам подвластно все — изменить цвета, размеры, встроить форму в собственный сайт или приложение.</p>
                            </div>
                        </div>

                        <div class="right">

                            <!--[if lte IE 8]>
                            <link href="../rel/css/ie.css" rel="stylesheet" type="text/css" />
                            <![endif]-->
                            <link href="../rel/css/connection-request.css" rel="stylesheet" type="text/css" />
                            <link href="../rel/css/country-selector.css" rel="stylesheet" type="text/css" />
                            <div class="form-block inner-page" id="connection-app">
                                <div class="top_bg_ie"></div>
                                <div id="ctl00_content_Connectionrequestcontrol_Header">



                                </div>
                                <div class="title h1">НАЧНИ ПРИНИМАТЬ ПЛАТЕЖИ!</div>
                                <div class="mpfblock">
                                    <div class="corner top_left"></div>
                                    <div class="corner top_right"></div>
                                    <div id="ctl00_content_Connectionrequestcontrol_divUrl" class="row">
                                        <input name="ctl00$content$Connectionrequestcontrol$tbSiteURL" type="text" id="ctl00_content_Connectionrequestcontrol_tbSiteURL" tabindex="1" placeholder="Адрес сайта" />
                                        <div class="error">


                                        </div>
                                    </div>

                                    <div class="row">
                                        <input name="ctl00$content$Connectionrequestcontrol$contactName" type="text" id="ctl00_content_Connectionrequestcontrol_contactName" tabindex="2" class="inp" placeholder="Контактное лицо" />
                                        <div class="error">


                                        </div>
                                    </div>
                                    <div class="row">
                                        <input name="ctl00$content$Connectionrequestcontrol$email" type="text" id="ctl00_content_Connectionrequestcontrol_email" tabindex="3" class="inp" placeholder="E-mail" />
                                        <div class="error">



                                        </div>
                                    </div>
                                    <div class="row">
                                        <input name="ctl00$content$Connectionrequestcontrol$phone" type="text" id="ctl00_content_Connectionrequestcontrol_phone" tabindex="4" class="inp" placeholder="Телефон" /><br />
                                        <div class="error">


                                        </div>
                                    </div>
                                    <div class="row last">
                                        <input name="ctl00$content$Connectionrequestcontrol$companyName" type="text" id="ctl00_content_Connectionrequestcontrol_companyName" tabindex="5" class="inp" placeholder="Название компании (юр.лицо / ИП)" />
                                        <div class="error">


                                        </div>
                                    </div>
                                    <div class="row country-wrapper">
                                        <div id="ctl00_content_Connectionrequestcontrol_divCountry" class="country">
                                            <span class="ttl">Компания зарегистрирована</span>
                                            <span id="ctl00_content_Connectionrequestcontrol_rblCountryList" class="country-selector"><span class="russia"><input id="ctl00_content_Connectionrequestcontrol_rblCountryList_0" type="radio" name="ctl00$content$Connectionrequestcontrol$rblCountryList" value="RU" checked="checked" tabindex="6" /><label for="ctl00_content_Connectionrequestcontrol_rblCountryList_0">в России</label></span><br /><input id="ctl00_content_Connectionrequestcontrol_rblCountryList_1" type="radio" name="ctl00$content$Connectionrequestcontrol$rblCountryList" value="AU" tabindex="6" /><label for="ctl00_content_Connectionrequestcontrol_rblCountryList_1">в другой стране</label></span>
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
                                            <input name="ctl00$content$Connectionrequestcontrol$tbPromocode" type="text" maxlength="20" id="ctl00_content_Connectionrequestcontrol_tbPromocode" tabindex="8" />
                                        </div>

                                    </div>

                                    <div class="row captcha">
                                        <img src="../rel/img/captcha/image.aspx-code=9C968A2BD47A945F.jpeg" alt="" width="250" height="70" /><br />
                                        <input type="hidden" name="captchaCode" value="9C968A2BD47A945F" />
                                    </div>
                                    <div class="row">
                                        <input name="ctl00$content$Connectionrequestcontrol$cptCaptcha$captchaText" type="text" id="ctl00_content_Connectionrequestcontrol_cptCaptcha_captchaText" tabindex="9" class="inp" placeholder="Что написано на картинке выше?" />
                                        <div class="error">


                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            $('#ctl00_content_Connectionrequestcontrol_cptCaptcha_captchaText').change(function () {
                                                $('#ctl00_content_Connectionrequestcontrol_cptCaptcha_captchaTextCustomValidator').hide();
                                            });
                                        });
                                    </script>

                                    <div class="fbtn">
                                        <a id="ctl00_content_Connectionrequestcontrol_ibtnSendRequest" tabindex="10" class="btn" Value="Отправить заявку" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$content$Connectionrequestcontrol$ibtnSendRequest&quot;, &quot;&quot;, true, &quot;Wizard&quot;, &quot;&quot;, false, true))">Отправить заявку</a>
                                    </div>
                                    <div class="corner bottom_left"></div>
                                    <div class="corner bottom_right"></div>
                                </div>
                                <div class="form_info">
                                    <span class="red">Все поля обязательны для заполнения.</span> После подачи заявки с вами свяжется специалист PayOnline для уточнения деталей и предоставит всю необходимую информацию.
                                </div>
                                <div class="bottom_bg_ie"></div>
                            </div>
                            <script src="../en/rel/js/jquery.placeholder.min.js" type="text/javascript"></script>
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
                                    $('#connection-app .error span').click(function () {
                                        $(this).parent().prevAll('input').focus();
                                    });

                                    $('form#aspnetForm #connection-app input').focus(function () {
                                        $(this).nextAll('#connection-app div.error').hide();
                                    });

                                    $('form#aspnetForm #connection-app input').blur(function () {
                                        $(this).nextAll('#connection-app div.error').show();
                                    });

                                    $('#ctl00_content_Connectionrequestcontrol_email').change(function () {
                                        $('#ctl00_content_Connectionrequestcontrol_cvUniqueEmail').hide();
                                    });
                                });
                            </script>

                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="clear">
                    </div>
                </div>


                <!-- Yandex.Metrika counter -->
                <div style="display:none;">
                    <script type="text/javascript">
                        (function(w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter6279625 = new Ya.Metrika({ id: 6279625, enableAll: true, webvisor: true }); } catch (e) { } }); })(window, "yandex_metrika_callbacks");
                    </script>
                </div>
                <script src="http://mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
                <noscript>
                    <div>
                        <img src="http://mc.yandex.ru/watch/6279625" style="position: absolute; left: -9999px;" alt="" />
                    </div>
                </noscript>
                <!-- /Yandex.Metrika counter -->

                <div class="footer-slogan inner">
                    С заботой о вашей прибыли!<br />
                    <img src="../rel/img_new/new_images/footer-slogan-logo.png" alt="" />
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
                            <li><a href="../aboutus/index.html">О компании</a></li>
                            <li><a href="../aboutus/team/index.html">Команда</a></li>
                            <li><a href="../aboutus/certificates/index.html">Сертификаты</a></li>
                            <li><a href="../aboutus/partners/index.html">Партнеры компании</a></li>
                            <li><a href="../aboutus/clients/index.html">Клиенты компании</a></li>
                        </ul>
                        <div class="left_block">
                            <div class="pos">
                                <a href="https://www.netelement.com/ru">
                                    <img src="../rel/img/page/body/net-element.png" alt="Net Element" /></a>
                                <span>&copy; 2008&ndash;2019
                                        Все права защищены.</span>
                            </div>
                            <div class="search_block">
                                <div class="float">
                                    <div class="ya-site-form ya-site-form_inited_no" onclick="return {'action':'/search','arrow':false,'bg':'transparent','fontsize':12,'fg':'#000000','language':'ru','logo':'rb','publicname':'Поиск по payonline.ru','suggest':true,'target':'_self','tld':'ru','type':3,'searchid':2130974,'webopt':false,'websearch':false,'input_fg':'#000000','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':'поиск по сайту','input_placeholderColor':'#cccccc','input_borderColor':'#999999'}"><form action="http://yandex.ru/sitesearch" method="get" target="_self"><input type="hidden" name="searchid" value="2130974"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value=""/><input type="text" name="text" value="" /><input type="submit" value="Найти"/></form></div><style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type="text/javascript">(function (w, d, c) { var s = d.createElement('script'), h = d.getElementsByTagName('script')[0], e = d.documentElement; if ((' ' + e.className + ' ').indexOf(' ya-page_js_yes ') === -1) { e.className += ' ya-page_js_yes'; } s.type = 'text/javascript'; s.async = true; s.charset = 'utf-8'; s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:') + '//site.yandex.net/v2.0/js/all.js'; h.parentNode.insertBefore(s, h); (w[c] || (w[c] = [])).push(function () { Ya.Site.Form.init() }) })(window, document, 'yandex_site_callbacks');</script>

                                </div>
                                <a target="_blank" href="https://secure.payonlinesystem.com/privacy_policy/payonline_privacy_policy.pdf">Политика конфиденциальности</a>
                            </div>
                        </div>
                        <div class="mpa">
                            <a href="../news/18667/index.html">
                                <img src="../rel/img/page/body/mpa.png" width="100" alt="Microsoft Partner Awards" /></a>
                        </div>
                        <div class="runet_award">
                            <a href="../news/256/index.html">
                                <img src="../rel/img/page/footer/ru-net.png" width="100" alt="Премия Рунета" />
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
@endsection