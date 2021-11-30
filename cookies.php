<?php
require("config.php");
?>
<!DOCTYPE html>
<html lang="<?=$language;?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="./favicon.png" />
    <link rel="stylesheet" href="index.e29fe129.css" />
    <title>Cookies</title>
  </head>
  <body class="font-sans antialiased">
    <nav class="bg-white border-b">
      <div class="max-w-screen-lg px-2 mx-auto md:px-4">
        <div class="flex items-center justify-between">
          <!-- Logo -->
          <div>
            <a class="block py-4 text-lg font-medium text-primary-normal" href="index.php"><?=$page_name;?></a>
          </div>
        </div>
      </div>
    </nav>
    <main>
      <section class="bg-white">
        <div class="max-w-screen-lg px-2 py-4 mx-auto md:px-4">
          <article class="max-w-full prose text-gray-800">
            <h2>Cookies</h2>
            <p>
              Файлы Cookies представляют собой файл с передаваемой информацией на сайте, и данный файл хранится на устройстве пользователя. Содержание Cookies не позволяет идентифицировать пользователя и соответственно не доступны другие файлы на
              устройстве пользователя. Cookies может включать в себя наименование сайта, дату, время и т.д., ему присваивается уникальный номер, по которому его распознает пользователь.
            </p>
            <p>
              Сохраненные cookies позволяют распознать компьютер клиента, таким образом клиенту,&nbsp; при повторном посещении сайта или его раздела, предоставляется возможность избежать повторного ввода данных. Сookies&nbsp; улучшает опыт
              пользователя&nbsp; на сайте и используется, чтобы помочь развивать сайт и создать его более удобным для пользователей, чтобы помочь определить и понять ожидания пользователей, а также показать определенные рекламные объявления на
              различных сайтах соответствующей целевой аудитории, на основании предыдущих посещений сайта.
            </p>
            <p>Пользователь услуги может в любое время внести изменения в настройках, в отношении cookies.&nbsp; Данные настройки можно поменять, включить/блокировать автоматическую обработку cookies.</p>
            <p>Больше информации о Cookies:</p>
            <ul>
              <li>Cookies хранятся в вашем браузере, файлы временно хранятся в устройстве, устройство по истечению соответствующего времени автоматически стирает их.</li>
              <li>Cookies хранятся в вашем браузере, файлы временно хранятся в устройстве до момента, когда пользователь их мануально удалит.</li>
              <li>
                Аналитики Cookies и рекламные файлы с серверов объявлений, их компаний и поставщиков услуг, данные файлы адаптируются к пользователю, его предпочтениям и привычкам. Данные файлы позволяют оценить эффективность рекламы, например, вы
                можно узнать, как много людей нажали на определенную рекламу и посетили сайт рекламодателя. Эти файлы cookies собирают информацию и отправляют ее третьим лицам. Для получения дополнительной информации посетите сайты третьих лиц, получив больше дополнительной информации об использовании файлов cookies.
              </li>
            </ul>
            <p>
              Информация о том, как посетители могут отказаться от Google используемых Cookies файлов, <a href="https://adssettings.google.com/u/0/authenticated?hl=ru" target="_blank">рекламных предпочтений</a> Google или отказаться от третьих сторон
              поставщиков услуг,&nbsp; используемых Cookies&nbsp; файлы, <a href="http://optout.networkadvertising.org/?c=1#!/" target="_blank">страница отказа инициативной рекламной сети</a>.
            </p>
            <p>
              <strong>
                Обратите внимание, что используемые файлы cookies, не могут нанести вред Вашему устройству. Для лучшего опыта пользователей и полноценной&nbsp; деятельности сайта мы рекомендуем сохранять файлы cookies, в таком случае есть возможность
                полноценно использовать доступное содержание и персонализированные функции сайта.
              </strong>
            </p>
          </article>
        </div>
      </section>
    </main>
    <footer class="bg-white">
      <div class="max-w-screen-lg px-2 mx-auto md:px-4">
        <div class="p-4 border-t border-b">
          <ul class="flex flex-wrap items-center justify-center gap-4 text-sm">
            <li>
              <a href="cookies.php" class="text-blue-600 hover:text-blue-800 hover:underline">Cookies</a>
            </li>
          </ul>
        </div>
        <div class="my-4 text-sm text-center text-gray-800">
          &copy; 2021
          <a href="index.php" class="text-blue-600 hover:text-blue-800 hover:underline"><?=$page_name;?></a>
        </div>
      </div>
    </footer>
  </body>
</html>