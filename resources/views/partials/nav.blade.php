<?php
namespace Subpages;
// Informacje kontaktowe
$phone1 = '794 250 440';
$phone2 = '733 636 477';
$email = 'kontakt@fundacjaglosmlodych.org';
$currentYear = date('Y'); // Pobiera rok
?>
<div class="h-128"> 
    <footer class="h-auto my-5 bottom-0">
        <div class="bg-cover bg-center h-full"
            style="background-image: url(https://fundacjaglosmlodych.org/images/tlo1234.png);">
            <div class="grid grid-cols-2 gap-4 text-white text-sm pb-4">
                <div class="flex flex-wrap justify-center gap-4 italic mt-6">
                    <h2>Oświadczenie</h2>
                    <h4 class="text-center">Niniejszym, w imieniu własnym oraz Fundacji na Rzecz Promocji i
                        Rozwoju „ Głos Młodych” deklarujemy, że Fundacja przyjmuje i stosuje zasady równego
                        traktowania. Prowadzi działalność wolną od dyskryminacji, w szczególności ze względu na
                        takie cechy jak płeć, rasa (kolor skóry), pochodzenie etniczne, narodowość bądź wyznania
                        religijne.</h4>
                    <h5 class="ml-auto mr-24">Zarząd</h5>
                </div>

                <div class="flex-1 flex-wrap justify-self-center gap-4 italic relative">
                    <div>
                        <img class="max-h-28 mx-auto" src="app/Http/images/cropped-logo_fgm-2-1.webp"
                            alt="Logo Fundacji">
                    </div>

                    <div class="absolute w-full top-24">
                        <h2 class="text-center text-xs"><strong>Wsparcie</strong></h2>
                        <h4 class="text-center text-xs">
                            Fundacja na Rzecz Promocji i Rozwoju „Głos Młodych”
                            <br>
                            Konto: Bank Pekao SA. Poznań ul. Masztalerska 8a
                            <br>
                            Nr Konta: <strong>92 1240 1763 1111 0010 7475 8053</strong>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center text-gray-400 italic mt-12">
            <a href="/" class="hover:text-blue-400">Copyright ©
                <time><?php echo $currentYear; ?></time> Fundacja na rzecz promocji i rozwoju – Głos Młodych, Adrian Reszczyński and Dominik Głowacki<br> Witryna odtworzona za pomocą PHP - Piotr Bińkowski</a>
        </div>


        <?php $style = "absolute top-0 left-0 bg-blue-600 rounded-sm h-full w-full transform duration-300 hover:rotate-90 hover:bg-cyan-400";
        $href = array(
            array("https://www.facebook.com/Fundacja.Glos.Mlodych", "app/Http/images/Facebook.png", "Nasz profil na facebook"),
            array("https://twitter.com/Portal_e_magnes", "app/Http/images/Twitter.png", "Twitter"),
            array("mailto:$email", "app/Http/images/Mail.png", "Napisz do nas"),
            array("/o-fundacji", "app/Http/images/AboutMe.png", "AboutMe"),
             ); ?>


        <div class="flex flex-nowrap justify-center space-x-2.5 mt-11">
             <?php for($row = 0; $row < 4; $row++): ?>
            <a class="relative" href="<?= htmlspecialchars($href[$row][0]) ?>">
                <img class="pointer-events-none relative z-10" src="<?= htmlspecialchars($href[$row][1]) ?>"
                    alt="<?= htmlspecialchars($href[$row][2]) ?>">
                <div class="<?= htmlspecialchars($style) ?>"></div>
            </a>
            <?php endfor; ?>

        </div>
    </footer>
</div> 