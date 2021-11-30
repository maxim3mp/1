<?php
if($_GET['utm_source']){
	if($_COOKIE['utm_source']!=$_GET['utm_source']){
		setcookie("utm_source", $_GET['utm_source'], strtotime('+30 days'), "/", str_replace("www.","",$_SERVER['SERVER_NAME']));
		$_COOKIE['utm_source']=$_GET['utm_source'];
	}
}

if($_GET['utm_medium']){
	if($_COOKIE['utm_medium']!=$_GET['utm_medium']){
		setcookie("utm_medium", $_GET['utm_medium'], strtotime('+30 days'), "/", str_replace("www.","",$_SERVER['SERVER_NAME']));
		$_COOKIE['utm_medium']=$_GET['utm_medium'];
	}
}

if($_GET['utm_campaign']){
	if($_COOKIE['utm_campaign']!=$_GET['utm_campaign']){
		setcookie("utm_campaign", $_GET['utm_campaign'], strtotime('+30 days'), "/", str_replace("www.","",$_SERVER['SERVER_NAME']));
		$_COOKIE['utm_campaign']=$_GET['utm_campaign'];
	}
}

if($_GET['utm_content']){
	if($_COOKIE['utm_content']!=$_GET['utm_content']){
		setcookie("utm_content", $_GET['utm_content'], strtotime('+30 days'), "/", str_replace("www.","",$_SERVER['SERVER_NAME']));
		$_COOKIE['utm_content']=$_GET['utm_content'];
	}
}

if($_GET['gclid']){
	if($_COOKIE['gclid']!=$_GET['gclid']){
		setcookie("gclid", $_GET['gclid'], strtotime('+30 days'), "/", str_replace("www.","",$_SERVER['SERVER_NAME']));
		$_COOKIE['gclid']=$_GET['gclid'];
	}
}

require("config.php");
?>
<!DOCTYPE html>
<html lang="<?=$language;?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABHNCSVQICAgIfAhkiAAABN5JREFUSIm1lmtsFFUUx3/3zu7s7Mxui7yikigmUARFoIYY5Yt88AUaNAYspTYkYmpiSjQhKBiT/eIDTRQxfqiENF2kj8WISlLCWw0aTBRDg0BAK5oQpYhFuruzr7nXDwvbnT7ow3A+zT33nP//nHPPnHsFY5EEJtnQHYS0SS73O3VcGZN/mchRWzZRiYp+R9DsQoWOEYgcppPQjSeudO4D5oMwQQRAVnM5uvbGE2tRMcheqsk3ntjzjqL5uyySi+QLW8dLLMZk3RKqwjQ3Aneis89Rm/u5tBdDUmVvAGMpwlvLyvQP4w1qeGmzXxiki+PQHu2hvULTFv1mJIjrl7oZizhTB+mVPkaCSp+umyzob9H6F0Thw/ETJzCxIt9jRs/Taj/p28u5XaiQv7HmoFGFzazsm0mNuxOA9wiTYBrbiI6e2LOfRch7QAQQxku+PQdFTiifLmMvoJA5VVq3m7O5NdqFiv6BEz03MPhA6Ssevo2gmIuWLoXkCQreEQLGnwgmIfXxQYGZOtjvi0NAz6SW/oZSwceRYsbV1USE8T7wuT/j7XY1wcCPCGM3QuwnGD1IIXuBHHPRhRlkku/QFn6mBHqSAkr2n71pz2GXm/AFpsn51kKn/RknMFBGM4jimQkE6LsIOaup7dsMXCpm5R6mNfQQZ7KHiVFgh6gAIEGEnDbZiQfAFkJMDlejOQ1qH1osRtBNQa32E2ewMBkwgYRAMI/if64BqKeHRPYQVfYSlqc7MbTFR0TI27WsSm+lDogzlaD9BJXpT1hCFtjrwyhnQCPoiHSAXF5WpwLaa0Cp3zCkQ0H3knJ/ooE0LUzCjG5DsAgNCH0EnXwRYS8E7wQ12V8HkhBDEsPXjMXJFcchGO1AshDIoelE9jWy4uo5NTMBy7kXrSYgjGkI+YEPWHnrqU29O4gwQQQv0gSiBqF7KNBIXfLTfmKAJoLcFJkASY+TXB4YYUlanUeRxh6fTnsteGoPUgYR6ix59wT1pGiLNCHE8yCu8fzL6Ss3EyMztlkN0GZNh+BBBHcUAfUplFpMbeoCIIgzBdOchDYqILAbIab4AfL3U+MeDQwJPpxsIYQSCwn2zcazN6C5CNrkjHvpWu7U0wO5nmKQzl6Qq/oz1imkexzKB8hIsiM4H4Cz7i5uwSSitrMq080WQlRZiyDz9SAfK9WI61Qi5FKgF9Q6VuDCcNdiMxZWtBryBl7mONJaAKqX2lwXAB2RFVxIfsFasgDEzbsRuUvU8RcfE6CBvA8vQYSTpMv7ZmjiNudthFxXrI4+jZd8oPSwa8YiGF5GndtR5iFoDW9CGA8jZCVKHSCdfIU1/DNcAYe+JIR8CoQBwkDI21FYpb2wM4uU+5k/0EgjMrAOIecB05FyDZHIfhKEx0as1B7QCrRCe6foLnvyeCo0oJQCxMayX+YadDV5++XhiIdurkLqNQx7HwYSI/0VMRQxZDFQbfls49Z0xBCPBQApHwTeHD1xPSlId5YyarcbwNgEhFB6PdD/tHEzFzADLgh7CKRzQ+IzmldmAgdtvAWiEoSFFG+wHKO030AaTctgR91LKvnq+IlzSPA1SZhlOH6b5OugNoPuRutetDqEyD99va4eeWTGkMxyvgT5WFGhD7Ay+ciIfiPI6Gd1nKkEzIk4ufMso+//Ev8HcPKvo/6ZyZ4AAAAASUVORK5CYII=" />
    <title><?=$title;?></title>
    <meta name="description" content="<?=$description;?>" />
    <meta property="og:title" content="<?=$title;?>" />
    <meta property="og:description" content="<?=$description;?>" />
    <script>
      const goodAffUser = {
        user: <?=$user_id;?>,
        token: "<?=$widget_token;?>",
        country: "<?=$country;?>",
        datefrom: "<?=$date_from;?>",
        dateto: "<?=$date_to;?>",
        limit: <?=$offer_limit;?>,
        excludeoffers: [<?=$exclude_offers;?>],
      };

      const goodAffGo = {
        s1: "<?=$goodaff_s1;?>",
        s2: "<?=$goodaff_s2;?>",
        s3: "<?=$goodaff_s3;?>",
        s4: "<?=$goodaff_s4;?>",
        s5: "<?=$goodaff_s5;?>",
      };
    </script>
    <script type="module" crossorigin src="index.1c0db6de.js"></script>
    <link rel="stylesheet" href="index.e29fe129.css">
  </head>
  <body class="font-sans antialiased">
    <nav class="bg-white border-b">
      <div class="max-w-screen-lg px-2 mx-auto md:px-4">
        <div class="flex items-center justify-between">
          <!-- Logo -->
          <div>
            <a class="block py-4 text-lg font-medium text-primary-normal" href="#"><?=$page_name;?></a>
          </div>
        </div>
      </div>
    </nav>
    <main>
      <section class="bg-white">
        <div class="max-w-screen-lg px-2 py-4 mx-auto md:px-4">
          <!-- Loading spinner -->
          <div class="flex items-center justify-center hidden mt-12 mb-4" id="loading_spinner">
            <svg class="w-8 h-8 animate-spin text-primary-normal" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
          </div>
          <!-- Offer container -->
          <div class="grid grid-cols-2 gap-2 mb-8 lg:grid-cols-3 xl:grid-cols-4 md:gap-4" id="offer_container"></div>
          <p class="hidden mb-4 text-xl text-gray-800" id="offer_info_container_headline"><?=$offer_example_title;?></p>
          <!-- Offer info boxes -->
		  <div class="grid grid-cols-1 gap-2 mb-4 sm:grid-cols-2 md:gap-4" id="offer_info_container"></div>
		  <div class="prose max-w-full text-gray-800">
			<?=$full_page_description;?>
		  </div>
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
          <a href="#" class="text-blue-600 hover:text-blue-800 hover:underline"><?=$page_name;?></a>
        </div>
      </div>
    </footer>
  </body>
</html>