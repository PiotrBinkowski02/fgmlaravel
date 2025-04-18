<?php
namespace Subpages;
?>
        <nav class="sticky top-0 z-50 bg-black text-white md:hidden">
            <ul class=" items-center align-middle justify-center text-base text-nowrap py-auto min-h-12">

                <li x-data="{ open: false }"
                    class="flex flex-col block z-50 relative box-border cursor-pointer transform duration-300 w-full h-full items-center">
                    <span @click="open = !open" class=" items-center mx-auto h-12 w-full">
                        <p class="text-center leading-[45px] h-full"><i class="fa-solid fa-xl mx-auto" :class="open ? 'fa-xmark' : 'fa-bars'"></i></p>
                    </span>

                    <!-- Dropdown menu -->
<?php
$class = "block px-4 py-2 bg-neutral-800 md:bg-teal-400 transform duration-200 md:hover:bg-teal-300";
$about = array("STATUT FUNDACJI"=>"/statut-fundacji", "ZARZĄD FUNDACJI"=>"/zarzad-fundacji", "CELE I ZASADY DZIAŁANIA"=>"/cele-i-zasady-dzialania", "DZIAŁALNOŚĆ GOSPODARCZA"=>"/dzialalnosc-gospodarcza", "SPRAWOZDANIA"=>"/sprawozdania");
                     foreach($about as $dr => $h): ?>
                    <div x-show="open" x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0 -translate-x-6" 
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0 -translate-x-6"
            class="w-full block left-0 z-50 divide-y divide-teal-100 min-w-48">
            <ul class="flex flex-col text-xs text-gray-700 dark:text-gray-200">
                <li>
            <a href="<?= htmlspecialchars($h) ?>"  
            class="<?= htmlspecialchars($class) ?>"><p class="py-2">
            <?= htmlspecialchars($dr) ?>
            </p></a>
        </li>
        
<?php endforeach; 

$menu = array("PRAKTYKI"=>"praktyki", "PROJEKTY"=>"projekty", "AKTUALNOŚCI"=>"aktualnosci", "GALERIA"=>"galeria", "KONTAKT"=>"kontakt", "OPINIE"=>"opinie");
foreach($menu as $m => $h): ?>

                <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
            <a href="<?= htmlspecialchars($h) ?>" class="block py-2 w-full h-full"><p class="py-2 px-2"><?= htmlspecialchars($m) ?>
            </p></a>
        </li>
<?php endforeach; ?> 

            </ul>
        </div>
                </li>
            </ul>
        </nav>
        <nav class="hidden sticky top-0 z-50 md:block bg-black text-white min-h-14 lg:h-14">
            <ul
                class="flex flex-row flex-wrap items-center align-middle justify-center text-sm text-nowrap py-auto h-full">
                <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full ">
    <a href="/" class="block py-2 w-full h-full"><p class="py-2 px-2">STRONA GŁÓWNA</p></a>   
    
</li>

                <li x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false"
                    class="z-50 box-border text-sm cursor-pointer transform duration-300 flex items-center h-full
                    hover:bg-teal-300">
                    <a href="/o-fundacji" class="block py-2 w-full h-full">
                        <p class="py-2 px-2">O FUNDACJI <i class="fa-solid fa-chevron-down fa-sm"></i></p>
                    </a>

                    <!-- Dropdown menu -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-400"
    x-transition:enter-start="opacity-0 -translate-x-6"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-400"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 -translate-x-6"
    class="absolute top-9 lg:top-14 left-0 z-50 bg-teal-400 divide-y divide-teal-100 min-w-48">
    <ul class="text-xs text-gray-700 dark:text-gray-200"> 

<?php
foreach($about as $dr => $h): ?>
    <li>
    <a href="<?= htmlspecialchars($h) ?>" class="<?= $class ?>"><p class="py-2"><?= htmlspecialchars($dr) ?></p></a>

</li>
<?php endforeach; ?> 

    </ul>
</div>

                </li>

<?php foreach($menu as $m => $h): ?>

    <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
        <a href="/<?= htmlspecialchars($h) ?>" class="block py-2 w-full h-full"><p class="py-2 px-2"><?= htmlspecialchars($m) ?>
                </p></a>
        </li>
<?php endforeach; ?>

            </ul>
        </nav>