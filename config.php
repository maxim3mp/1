<?php
//config page
$language="ru"; //landing page primary language
$page_name="Онлайн Кредиты от 0%"; //landing page name
$title="Кредиты под 0%"; //title tag
$description=""; //meta description tag (not necessary)
$offer_example_title="Реквизиты и примеры расчетов займов наших партнёров";
$full_page_description='
<h2 class="text-xl text-gray-800">Выгодный кредит - онлайн кредит</h2>
<p>Вам не нужно идти в банк, чтобы получить кредит. На этой странице Вы можете сравнить и подать заявку на выгодный кредит. Вы можете заполнить предварительную заявку на получение кредита в нескольких кредитных компаниях сразу. Мы тщательно отобрали лучших займодателей. Чтобы получить кредит онлайн, заёмщик должен быть резидентом Украины, достигшим возраста 18 лет и имеющим регулярные официальные доходы.</p>
<p>Одно из главных преимуществ кредитов онлайн заключается в том, что его можно получить быстро. Как бы невероятно это не звучало, но все это возможно! Сравни, выбери и получи!</p>
<p>Существенно упомянуть, что новым клиентам во многих случаях сумма займа ограничена, но вместо этого новые клиенты могут получить некоторые займы без процентов 0,01% до установленной денежной суммы.</p>

<h2 class="text-xl text-gray-800">Как получить кредит?</h2>
<ul>
<li>Сравни - сравни и выбери наиболее подходящего кредитора.</li>
<li>Заполни заявку - заполни заявку на сайте выбранного кредитора.</li>
<li>Дождись подтверждения - заявка будет обработана незамедлительно.</li>
<li>Получи кредит - получи деньги в среднем в течение 15 минут.</li>
</ul>

<h2 class="text-xl text-gray-800">Годовая процентная ставка (Annual Percentage Rate APR)</h2>
<p>Годовая процентная ставка выражена в процентах и включает в себя все общие затраты по кредиту, за исключением расходов, связанных с невыполнением обязательств по кредиту. Максимальная годовая процентная ставка для кредитов онлайн может быть в пределах до 1095% в год.</p>

<h2 class="text-xl text-gray-800">Штрафные платежи или информация политики возобновления</h2>
<p>В случае, если сумма кредита не будет выплачена в указанный срок, кредитор может требовать штрафной платеж от общей суммы просроченного платежа за каждый день просрочки. В случае, если выплата не осуществляется в длительный период, без согласования с кредитором, кредитор имеет право в одностороннем порядке передать взыскание кредита третьим компаниям.</p>
<p>Важно! Выплатив кредит вовремя, создается хорошая кредитная история, которая в будущем повышает шансы получить кредит онлайн на выгодных условиях.</p>

<h2 class="text-xl text-gray-800">Мгновенные кредиты онлайн</h2>
<p>Срок кредита (minimum and maximum period for repayment) от 62 дней до 1 года. Примеры являются только информативными. Домашняя страница не является заимодателем и не выдает кредиты, также не несет ответственности за условия кредитных соглашений кредитора. Предлагаемые кредиторы должным образом лицензированы кредитной организацией.</p>
'; //full page description with HTML (not necessary)

//config widget
$user_id="325"; //user ID under goodaff profile
$widget_token="94423471bf8d0b79791c27050d0480fcc5c48c0d"; //widget token under goodaff
$country="ua"; //offer country
$date_from=date("Y-m-d",strtotime("-7 days")); //how many days for EPC sorting
$date_to=date("Y-m-d");
$offer_limit="16"; //how many offers in landing page
$exclude_offers=""; //exclude offers by goodaff campaign ID, for example: $exclude_offers="273,550"; will not show Credify and Kreditstar in landing page

//config tracking parametrs
$goodaff_s1=""; //page short name, for example: zaimi365.com.ua
$goodaff_s2=($_COOKIE['utm_campaign']?$_COOKIE['utm_campaign']:"");
$goodaff_s3=($_COOKIE['gclid']?$_COOKIE['gclid']:"");
$goodaff_s4="";
$goodaff_s5=($_COOKIE['utm_source']?$_COOKIE['utm_source']:"");
?>