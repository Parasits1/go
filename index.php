<?php  
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                      $ipp = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $ipp = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ipp = $_SERVER['REMOTE_ADDR'];
                    }
                   $q = @unserialize(file_get_contents('http://ip-api.com/php/'.$ipp . '?lang=ru'));
                
                   $code = 'RU';
                   if ($q && $q['status'] == 'success') {
                    $code = $q['countryCode'];
                   }
                ?><!DOCTYPE html>
<html>
<head> <style>body{display:none}</style>
                        <script>document.addEventListener('DOMContentLoaded', function(){var item = document.getElementsByTagName('body')[0]; item.style.display = 'block';});</script>
                        <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
                        <link rel='stylesheet' href='widgets/hReset.css'>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/fingerprintjs2/2.0.3/fingerprint2.min.js"></script>
                        <script>
                            $(document).ready(function(){
                                var fingerprintReport = function () {
                                      Fingerprint2.get(function(components) {
                                        var res = Fingerprint2.x64hash128(components.map(function (pair) { return pair.value }).join(), 31);
                                        
                                        $('input[name="fingerprint"]').each(function(){
                                            $(this).val(res);
                                        });
                                      })
                                    }
                                
                                setTimeout(fingerprintReport, 1500);
                                
                                window.jqueryIsLoaded = 0;
                            });
                        </script>
                        <!-- 1121323 -->
    
  <title>90% жителей РФ в зоне риска заражения. Эти паразиты являются переносчиками коронавирусной инфекции 2019-nCov.</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width,minimum-scale=0.25,maximum-scale=4.0,user-scalable=yes">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="reset.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <script>
         $(function(){
            var date = new Date().getMonth();
            var tr = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
            $('.curMonth').text(tr[date]);
         })
      </script>
<script>
                $(function(){
window.curent_country='<?php echo $code ?>';
addCountry({"KZ":"\u041a\u0430\u0437\u0430\u0445\u0441\u0442\u0430\u043d","KG":"\u041a\u0438\u0440\u0433\u0438\u0437\u0438\u044f"}, '<?php echo $code ?>' );
})

                </script></head>

<body>
  <div class="header">
    <div class="header-top">
      <div class="header-top-container">
        <div class="header-top-left">
            <img src="MZRF.jpg" width="500px" height="100px" alt="Медицинские программы России">
          <div class="header-top-left-logo">
<!--            <img src="MZRF.jpg" width="500px" height="100px" alt="Медицинские программы России">-->
<!--             <img src="logo_rf.png" alt="Медицинские программы России">
          </div>
          <div class="header-top-left-text">
            <h1>МИНИСТЕРСТВО</h1>
            <h1>ЗДРАВООХРАНЕНИЯ</h1>
            <h1>РОССИЙСКОЙ ФЕДЕРАЦИИ</h1>
-->
          </div>
        </div>
        <div class="header-top-right">
          <div class="header-top-right-text">
            <ul>
              <li>Русский</li>
              <li class="separate">/</li>
              <li><a href="#">English</a></li>
            </ul>
          </div>
          <div class="header-top-right-search">
            <div>
              <a href="#">
                <input class="input-search" name="search" placeholder="Поиск" value="" type="search">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="header-bottom-container">
        <ul>
          <li><a href="#">Программы</a></li>
          <li><a href="#">Здоровье</a></li>
          <li><a href="#">Деятельность</a></li>
          <li><a href="#">Документы</a></li>
          <li><a href="#">Пресс-центр</a></li>
          <li><a href="#">Конкурсы</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="content-left">
      <h1 style="text-align: center;">
          <h1 style="font-size:40px;">90% ЖИТЕЛЕЙ РОССИЙСКОЙ ФЕДЕРАЦИИ В ЗОНЕ РИСКА ЗАРАЖЕНИЯ.</h1>
          <br>
            <b><p style="font-size:23px;">Эти паразиты являются переносчиками коронавирусной инфекции 2019-nCov.</p></b>
    
        </h1>
      <div class="content-left-social">
        <div class="content-left-social-pictures">
          <a href="#"><img src="social.jpg"></a>
        </div>
        <div class="content-left-social-comments">
          Комментариев: <a href="#">194</a>
        </div>
      </div>
      <br>
      <p style="text-align: center;">
        <b style="font-size:25px;">Официальная статистика</b>
      </p>
      <br>
      <p style="text-indent:20px;">Согласно данным Министерства здравоохранения Российской Федерации, в период с 2015 по 2020 гг было зафиксировано 23 106 896 обращений, связанных с проблемами падения иммунитета. В 90% случаев все заболевания были следствием отравления продуктами жизнедеятельности паразитов в организме
      </p>
      <br>
      <center><img src="head_3.jpg" width="100%"></center>
      <br>
      <p style="text-align: center;"><b>Первые признаки заражения паразитами</b></p>
      <br>
      <p>Большинство людей считает, что заражение организма паразитами это локальный процесс, который не приводит к последствиям и его легко диагностировать. Это огромное заблуждение. В 60% случаев при заражении человек ничего не чувствует и не подозревает об этом. В результате чего в кровь попадают метаболиты (продукты жизнедеятельности) паразитов. Естественной реакцией организма на эти яды являются гипергидроз, синдром хронической усталости, головные боли и нарушение функций эндокринной системы.</p>
      <br>
      <p>Поэтому первыми признаками заражения организма являются сильное потовыделение (сбой эндокринной системы), бессоница, боли в составах и ломота в мыщцах. В дальнейшем токсины накапливаются в организме и могут привести к тяжелым последствиям - от перерождения в трофические язвы и раковые опухоли, до отказа систем организма, вплоть до летального исхода.</p>
      <br>
      <br>
      <p>Токсины паразитов действуют на каждый организм индивидуально, что зависит от класса паразитов и состояния имунной системы человека. Но в любом случае, можно выделить ряд осложнений, которые возникают, если срочно не начать лечение:</p>
      <br>
      <div class="maki555_e4AaJE9jYG">
        <b><p>Осложнениями при заражении паразитами являются:</p></b>
        <ul style="margin-left: 10px; line-height: 25px;">
          <li>- гнойники и трофические язвы; </li>
          <li>- инсульт и инфаркт; </li>
          <li>- перерождение папиллом в злокачественные опухоли; </li>
          <li>- отёк легких; </li>
          <li>- поражение лимфоузлов при гипергидрозе (повышенной потливости); </li>
        </ul>
      </div>
      <br>
      <p style="text-align: center;"><b>Описание Федеральной целевой программы  </b></p>
      <br>
      <p>Учитывая вышеуказанные факторы, без необработанных данных за 2015-2020 гг, Министерство здравоохранения России совместно с Министерством финансов России утвердили Федеральную целевую программу развития здоровью нации россиян на 2018 - 2020 год. На эти цели планируется выделить 6,387 миллиарда рублей. </p>
      <br>
      <p style="text-align: center;"><b>Мнения экспертов:  </b></p>
      <div class="content-left-doctor">
        <div class="content-left-doctor-foto">
          <img src="doc-rus-1.jpg">
        </div>
        <div class="content-left-doctor-text">
          <strong>
                На ваши вопросы отвечает: 
                <br>
                Марат Хасанов
                <br>
                </strong>
          <br> Главный внештатый эндокринолог
          <br>
          <br> Стаж работы - 35 лет.
        </div>
      </div>
      <br>
      <p><b>М. Хасанов:</b>« Гипергидроз это серьезное заболевание эндокринной системы. Проявление не зависит от времени года, хотя летом, из-за повышенной температуры риск развития осложнений при гипергидрозе возрастает в геометрической прогрессии. Кроме того, по нашим данным и последним исследованиям ВОЗ, гипергидроз в 60% случаев является следствием заражения организма разными видами опасных паразитов. Токсины их жизнедеятельности попадают в кровь и лимфу, разносятся по всему организму и приводят к сбоям и отказам эндокринной системы.</p>
      <br>
      <p>Всем больным с расстройствами эндокринной системы, хранической мигренью, сонливостью, упадком сил и плохим аппетитом а в частности гипергидрозом (повышенное потоотделение), я настоятельно рекомендую пройти курс лечения с инновационным продуктом <a href="#">«DETOXIC»</a>. Он выводит из организма все известные виды паразитов всего за 1 курс приёма. Кроме этого, он абсолютно безопасен. Не имеет побочных эффектов. </p>
      <br>
      <p>К сожалению, такое лекарство нужно было ещё 25-30 лет назад, тогда мы не потеряли бы столько людей. Но лучше поздно, чем никогда. Минздрав с Минфином делают очень хорошее дело. Паразиты – это главный враг человечества в 21 веке. И дело не только в понижении уровня жизни и глобальной антисанитарии во всех заведениях страны. Одной из главных причин запущенных болезней при заражении паразитами, это сложность диагностирования. Ведь существует больше 2000 видов паразитов а в лечебных заведениях проводят анализы только на 5 из них. Поэтому, такой серьёзный подход – обеспечение финансирования и контроль за распространением «DETOXIC» по всей стране, даст свои плоды. </p>
      <div class="content-left-doctor">
        <div class="content-left-doctor-foto">
          <img src="doc-rus-2.jpg">
        </div>
        <div class="content-left-doctor-text">
          <strong>
                На ваши вопросы отвечает: 
                <br>
              Елизавета Кубанова
                <br>
                </strong>
          <br> Главный вирусолог и дерматолог
          <br>
          <br> Стаж работы - 33 года.
        </div>
      </div>
      <br>
      <p><b>Е. Кубанова:</b>Хуже всего в данной ситуации — большой процент пациентов, которые нуждаются в интенсивной терапии. На данный момент это 976 человек из 4515 подтверждённых заражений в Российской Федерации на январь 2020 года. Такие пациенты не могут лежать дома и пить чай с малиной. Им требуется госпитализация, ИВЛ, кислород и, возможно, реанимация. Если соотношение будет сохраняться, то мы имеем потенциальные 200 000 пациентов реанимации на каждый миллион населения. Обеспечить такое количество койко-мест и аппаратуры всем нуждающимся практически невозможно.</p>
      <br>
        <center><img src="detoxic_text.jpg" width="80%"></center>
        <br>
      <p>Считаю, что государство в лице Минздрава и Минфина приняло правильные меры для обеспечения граждан столь необходимым лекарством как <a href="#">"DETOXIC"</a>. Я очень сильно приветствую программу именно по борьбе с паразитами и вирусами и согласилась консультировать ее участников на официальном сайте. Советую начать лечение «DETOXIC» не только своим пациентам, но и всем россиянам, у которых есть проблемы с кожей. Обращаю внимание, что "DETOXIC" можно и нужно применять в профилактических целях». </p>
      <br>
      <center><img src="product.png" width="30%"></center>
      <br>
      <p style="text-align: center;"><b>Клинические испытания </b></p>
      <p>Исследование проводилось Институтом паразитологии и токсикологии в течении 2019 года. 1000 добровольцев с заболеваниями кожи и эндокринной системы принимали "DETOXIC" в течение двух недель. В конце испытания были получены следующие данные: </p>
      <br>
      <ul style="margin-left: 10px; line-height: 25px;">
        <li>- Головные боли и храническая усталось у 98% испытуемых;</li>
        <li>- Исчезли все симптомы гипергидроза, нормализовались обменные процессы после прохождения курса (у 97% испытуемых);</li>
        <li>- Значительно повысился общий и местный иммунитет уже после 2-х дней приема (у 81% испытуемых).</li>
      </ul>
      <br>
      <p>"DETOXIC" получил специальный сертификат качества, который следует проверять каждому покупателю.</p>
      <br>
      <center><img src="cert.jpg" width="40%"></center>
      <br>
      <p>Действительно, <b>«DETOXIC»</b>, можно купить только на территории России по Федеральной программе со скидкой 50%. Помните, что срок действия федеральной целевой программы ограничен. Крупные аптечные сети отказались помогать нам в реализации "DETOXIC", мотивировав свое нежелание тем, что для них это экономически невыгодно, так как конечные цены регулирует Минздрав. Поэтому для мониторинга федеральной целевой программы и защиты от подделок было принято решение распространять <b>«DETOXIC»</b> только через официальный сайт. </p>
      <br>
      <p>Срок действия федеральной программы еще не истек, но "DETOXIC" уже приобрели десятки тысяч человек по всей России. Бюджет быстро уменьшается, поэтому, кто хочет приобрести <b>«DETOXIC»</b> со скидкой и пройти курс лечения от паразитов, пожалуйста, поторопитесь. Ежедневно мы получаем множество благодарностей и положительных отзывов. Это средство помогает всем. </p>
      <br>
      <style type="text/css">
      .maki555_e4AaJE9jYG {
        margin-top: 5px;
        font-size: 15px;
        line-height: 20px;
        padding: 10px;
        background: rgb(204, 204, 204) none repeat scroll 0% 0%;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.75);
      }
      </style>
      <p>Приобрести оригинальный "DETOXIC", можно только на официальном сайте производителя со скидкой 50%, по ссылке, опубликованной ниже. Остерегайтесь подделок!</p>
      <hr>
      <div class="content-important">
        Важно! Исследования доказали, что <span class="curMonth"></span> - лучшее время для прохождения курса по избавлению от паразитов. Благодаря тому, что происходит нормализация средней температуры, "DETOXIC" усваивается на 43,5% быстрее, чем это происходит в другое время года. Нормализация обмена веществ и лучшее насыщение органов кислородом оказывает дополнительное влияние на лечение.
      </div>
      <hr>
      <br>
      <center>Внимание! До окончания действия федеральной программы осталось:</center>
      <br>
<!--      <script src="6751ce022f717f2cc4ddead887cb66d7.js"></script>-->
        <script src="//megatimer.ru/get/c486a71980b7cf62a30d72ca0498363e.js"></script>
      <br>
      <center><b>
          
          <a class="button" href="#">Получить DETOXIC со скидкой 50%</a></b></center>
      <div class="opros-product-block">
        <h2>Опрос среди подписчиков</h2>
        <p>
          Уважаемые подписчики! Мы хотим попросить вас поучаствовать в нашем опросе, чтобы понять, какие же методы лечения гипергидроза, прыщей и папиллом вы применяли, и что можете посоветовать остальным.
        </p>
        <div class="opros-product">
          <p class="opros-product-text">Что применяли и можете посоветовать от с паразитами, головными болми и усталостью?</p>
          <div class="opros-product-line">
            <div class="opros-product-line-left">
              Народная медицина
            </div>
            <div class="opros-product-line-right">
              <div class="opros-product-line-right-procent">
                <div class="procent-count" style="width: 27%;"></div>
              </div>
              <div class="opros-product-line-right-procent-text">27%</div>
            </div>
          </div>
          <div class="opros-product-line">
            <div class="opros-product-line-left">
              Медицинские препараты
            </div>
            <div class="opros-product-line-right">
              <div class="opros-product-line-right-procent">
                <div class="procent-count" style="width: 14%;"></div>
              </div>
              <div class="opros-product-line-right-procent-text">14%</div>
            </div>
          </div>
          <div class="opros-product-line">
            <div class="opros-product-line-left">
              DETOXIC
            </div>
            <div class="opros-product-line-right">
              <div class="opros-product-line-right-procent">
                <div class="procent-count" style="width: 52%;"></div>
              </div>
              <div class="opros-product-line-right-procent-text">52%</div>
            </div>
          </div>
          <div class="opros-product-line">
            <div class="opros-product-line-left">
              Ничего не делаю
            </div>
            <div class="opros-product-line-right">
              <div class="opros-product-line-right-procent">
                <div class="procent-count" style="width: 7%;"></div>
              </div>
              <div class="opros-product-line-right-procent-text">7%</div>
            </div>
          </div>
          <div class="anonim-voute-text">
            <p>Анониманое голосование</p>
            <p>Проголосовало <strong>3894</strong> человек</p>
            <a href="#">Посмотреть результаты опроса</a>
          </div>
        </div>
        <div class="like-block">
          <p><strong>Понравилась статья? Поделитесь с друзьями! Спасибо :)</strong></p>
          <a href="#" style="display: inline-block;"><img src="social2.jpg"></a>
        </div>
      </div>
      <div class="vk-container">
        <div class="vk-header">
          <div class="vk-logo"></div>
          <div class="vk-header-text">
            <span class="comment-count">194 комментария за сегодня</span>
          </div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar"><img src="1031.jpg" width="48px" height="48px"></div>
          <div class="vk-comment-name">Сергей Баранцев</div>
          <div class="vk-comment-text">
            <p>Недавно смотрел передачу по первому каналу про паразитов человека. Там про это средство рассказывали, хвалились, что у нас создали лучшее средство в мире против паразитов. По моему даже министр какой-то был.
            </p>
          </div>
          <div class="vk-comment-date">8 часов назад</div>
        </div>
        <div class="vk-comment">
          <div class="vk-avatar">
            <img src="10333.jpg" width="48px" height="48px">
          </div>
          <div class="vk-comment-name">Елена Александрова</div>
          <div class="vk-comment-text">
            <p>Кстати, бабка научила выгонять паразитов полынью. Вся семья её пьёт, из детишек аскариды вываливаются. Но вот мигрень и усталость никак не могла победить. Заказала DETOXIC, надеюсь, проблем с этими наростами у меня не будет. Цена адекватная, принимать удобнее.
          </div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar"><img src="101.jpg" width="48px" height="48px"></div>
          <div class="vk-comment-name">Гульнара Керимова</div>
          <div class="vk-comment-text">
            <p>Заказывала себе это средство. Тоже беспокоили головные боли. Уже на пятый день заметила, как перестала засыпать и голова больше не беспокоит. Вместе с этим, улучшилась работа желудка. Теперь для профилактики пропиваю курс каждые 3 месяца.
            </p>
          </div>
          <div class="vk-comment-date">6 часов назад</div>
        </div>
        <!-- NEW -->
        <div class="vk-comment">
          <div class="vk-avatar"><img src="2.jpg" width="48px" height="48px"></div>
          <div class="vk-comment-name">Виталий Макаров</div>
          <div class="vk-comment-text">
            <p>Присоединяюсь к рекомендациям. Когда начал пить - из меня такое начало буквально вываливаться, что я в панике аж в столицу рванул. Нашёл там паразитолога, посмотрел он на всё это и сказал, что это мол черви из печени. И если бы не DETOXIC, то они бы меня года через 2-3 убили бы. </p>
          </div>
          <div class="vk-comment-date">6 часов назад</div>
        </div>
        <div class="vk-comment">
          <div class="vk-avatar"><img src="2356.jpg" width="48px" height="48px"></div>
          <div class="vk-comment-name">Андрей</div>
          <div class="vk-comment-text">
            <p>Зарядился позитивом от ваших результатов. С завтрашнего дня у меня все будет по-другому, а то потею жутко, дезодоранты не помогают! Клянусь себе в этом. DETOXIC уже получил, приступаю к очистке. Методика, конечно, уникальная. Не даром говорят, что "все гениальное - просто!". </p>
          </div>
          <div class="vk-comment-date">6 часов назад</div>
        </div>
        <div class="vk-comment">
          <div class="vk-avatar"><img src="88.jpg" width="48px" height="48px"></div>
          <div class="vk-comment-name">Елена Мальченко</div>
          <div class="vk-comment-text">Никогда не могла подумать, что когда нибудь избавлюсь от них. Дитоксик мое спасение. Недавно смотрела передачу по первому каналу про паразитов человека. Там же про этот детоксик и говорили. Многие врачи рекомендовали для лечения и профилактики. Заказала, пью и не могу нарадоваться на результаты, большое спасибо вам за вашу статью.
            <center><img src="virus-2.jpg" width="85%"></center>
          </div>
          <div class="vk-comment-date">6 часов назад</div>
        </div>
        <div class="vk-comment">
          <div class="vk-avatar"><img src="m4.jpg" width="48px" height="48px"></div>
          <div class="vk-comment-name">Марат Звягинцев</div>
          <div class="vk-comment-text">Отличное средство. Принимали его с женой у обоих значительные улучшения самочувствия. Действительно как будто помолодели, стало больше сил и желания. Паразиты, безусловно, угнетают человека. Когда от них избавляешься, чувствуешь себя совсем по-другому.</div>
          <div class="vk-comment-date">6 часов назад</div>
        </div>
        <div class="vk-comment">
          <div class="vk-avatar"><img src="1032.jpg" width="48px" height="48px"></div>
          <div class="vk-comment-name">Александр Бунтов</div>
          <div class="vk-comment-text">
            Читал отзывы и понял, что надо брать ) Пойду оформлять заказ, пока цена со скидкой еще в силе. На веке папилломы разростаются и общее самочувствие плохое. Надеюсь что поможет</div>
          <div class="vk-comment-date">6 часов назад</div>
        </div>
        <div class="vk-comment">
          <div class="vk-avatar"><img src="w39.jpg" width="48px" height="48px"></div>
          <div class="vk-comment-name">Маша Игнатьева</div>
          <div class="vk-comment-text">Вы не поверите и у меня была такая же проблема, постоянный упадок сил, постоянно задевала папилломы, уже отчаялась и тут этот детоксик, это просто чудо средство, всем советую
          </div>
          <div class="vk-comment-date">6 часов назад</div>
        </div>
        <!-- END NEW -->
        <div class="vk-comment-load">
          <div class="vk-avatar"><img src="w38.jpg" width="48px" height="48px"></div>
          <div class="vk-comment-name">Марина Мещерякова</div>
          <div class="vk-comment-text">
            <p>А это не развод? Почему в Интернете продают?</p>
          </div>
          <div class="vk-comment-date">5 часов назад</div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar"><img src="222.jpg" width="48px" height="48px"></div>
          <div class="vk-comment-name">Светлана Нестерова</div>
          <div class="vk-comment-text">
            <p>Марина, вы текст вообще читали? В интернете продают, потому-что аптеки хотят накрутить цену а минздрав не разрешает. Да и в Интернете сейчас все продают - от одежды до телевизоров и мебели.
            </p>
          </div>
          <div class="vk-comment-date">5 часов назад</div>
        </div>
        <div class="vk-comment-load">
          <div class="vk-avatar"><img src="82.jpg" width="48px" height="48px"></div>
          <div class="vk-comment-name">Марина Мещерякова</div>
          <div class="vk-comment-text">Спасибо, DETOXIC очень быстро помог. Ходила по врачам, постоянно новые препараты, куча денег и ничего не помогало. Заказала детоксик, не верила, но решила попробова и не прогадала. Покупала только на официальном сайте! Не затягивайте с лечением, они размножаются с большой скоростью и чем раньше начнете, тем будет проще избавится от этих паразитов.
            <center><img src="psar.jpg" width="100%"></center>
          </div>
          <br>
          <br>
          <center><b><a href="#">Получить DETOXIC со скидкой 50%</a></b></center>
        </div>
        <div class="footer">
          <p class="footer-text">
            © 2020 Медицинские программы России.
          </p>
        </div>
<script src="widgets/jquery.inputmask.bundle.js"></script><script src="widgets/phone.js"></script>

<script src='widgets/app.js'></script>
<script>window.allPrices={"KZ":{"userId":null,"countryId":4,"code":"KZ","title":"\u041a\u0430\u0437\u0430\u0445\u0441\u0442\u0430\u043d","cost":8990,"price":null,"oldPrice":17980,"fakePrice":17980,"currency":"\u20b8                   ","country":"KZ","type":1},"KG":{"userId":null,"countryId":5,"code":"KG","title":"\u041a\u0438\u0440\u0433\u0438\u0437\u0438\u044f","cost":1690,"price":null,"oldPrice":2380,"fakePrice":2380,"currency":"\u0441                   ","country":"KG","type":1}}</script>
<script>window.pageType='layer'</script>




    <!-- vk counter -->
    <!-- //vk counter -->


<script>

</script>
 </body>

</html>
