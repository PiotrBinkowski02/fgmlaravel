<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        $aktualnosci = [
            [
                'title' => 'PressGlobal.pl -Nowy innowacyjny serwis informacyjny.',
                'slug' => 'pressglobal-pl-nowy-innowacyjny-serwis-informacyjny',
                'image' => 'images/obraz_2023-02-20_093941572.png',
                'desc' => 'Należy podkreślić, że Fundacja nie zrezygnowała z prowadzenia portalu informacyjnego, a wręcz przeciwnie  - w wyniku przekazania portalu plportal.pl powstał zupełnie nowy serwis informacyjny o nazwie PressGlobal.pl. Projekt ten został sfina...'
            ],
                [
                'title' => 'Zawieszenie działalności e-magnes',
                'slug' => 'zawieszenie-dzialanosci-e-magnes',
                'image' => 'images/logo_plportalpl-150x150.png',
                'desc' => 'Fundacja Głos Młodych, dokonała w ostatnim czasie istotnych zmian w swojej działalności. Ze względu na koszty - Fundacja zawiesiła działalność portalu e-magnes oraz przekazała nieodpłatnie portal o nazwie i pod domeną- https://plportal.pl...'
            ],
                [
                'title' => 'Portal PressGlobal jest gotowy!',
                'slug' => 'portal-pressglobal-jest-gotowy',
                'image' => 'images/presssglobal_logo_20.02.23-150x150.jpg',
                'desc' => 'Projekt “PressGlobal” oraz towarzysząca mu strona pressglobal.pl to nowy, dynamicznie rozwijający się portal wiadomości stworzony w ramach działań Fundacji “Głos Młodych”.Projekt ma na celu dostarczać rzetelnych informacji i opinii świata z...'
            ],
        ];

        $projekty = [
            [
                'title' => 'Powstanie serwisu aukcyjnego',
                'slug' => 'powstanie-serwisu-aukcyjnego',
                'image' => 'images/kurier-150x150.jpg',
                'desc' => 'W ramach praktyk studenckich oraz zlecona zespołowa praca dyplomowa powstała w 2019 roku duża platforma sprzedażowa wraz z aukcjami i serwisem własnym płatności. Projekt nadzorowali Dawid Kowalski , Marcin Tadaszak, Patryk Rajba - całość ko...'
            ],
            [
                'title' => '„Głos Wschodu”',
                'slug' => 'glos-wschodu',
                'image' => 'images/gloswschodu-150x150.jpg',
                'desc' => '„Głos Wschodu” to nazwa najnowszego projektu Fundacji na Rzecz Promocji i Rozwoju " Głos Młodych" oraz towarzyszący mu portal internetowy www.gloswschodu.org, który w chwili obecnej jest ciągle rozbudowywany. Głównym celem przedsięwzięc...'
            ],
            [
                'title' => 'Powstał nowy portal e-magnes.pl',
                'slug' => 'powstal-nowy-portal-e-magnes-pl',
                'image' => 'images/emagnes-150x150.png',
                'desc' => 'Powstał nowy portal www.e-magnes.pl , którego zadaniem jest umożliwienie Wam czynnego uczestnictwa w życiu społeczeństwa. Ideą tego przedsięwzięcia jest działanie w interesie młodego pokolenia, mówienie głośno o jego potrzebach i problemach...'
            ],
        ];

        $gallery = [
            [
                'header' => 'Wśród celów statutowych Fundacji znajdują się:',
                'p1' => '- Działania i inicjatywy wspierające rozwój innowacyjności.',
                'p2' => '- Popieranie i realizacja wszelkich inicjatyw kulturalnych, edukacyjnych i społecznych.',
                'p3' => '',
                'img' => 'images/19.webp',
                'alt' => 'Weseli uczniowie'
            ],
            [
                'header' => 'Promocja',
                'p1' => 'Zachęcanie do rozwoju, pogłębiania swojej wiedzy i podnoszenia swoich kwalifikacji.',
                'p2' => '- Popularyzacja polskiej kultury i sztuki za granicą.',
                'p3' => '',
                'img' => 'images/20.webp',
                'alt' => 'Wesoła grupa studentów'
            ],
            [
                'header' => 'Wsparcie',
                'p1' => '- Integrowanie środowisk twórczych. ',
                'p2' => '- Wspieranie projektów proekologicznych oraz propagowanie idei ochrony środowiska. ',
                'p3' => '- Wspieranie transferu polskich osiągnięć naukowych do praktyki gospodarczej.',
                'img' => 'images/21.webp',
                'alt' => 'sześć dłoni położonych na sobie'
            ],
            [
                'header' => 'Rozwój',
                'p1' => '- Działalność wspomagająca rozwój gospodarczy, w tym rozwój przedsiębiorczości.',
                'p2' => '- Działania na rzecz realizacji projektów badawczo-rozwojowych.', 
                'p3' => '- Działalność wspomagająca rozwój wspólnot i społeczności lokalnych.',
                'img' => 'images/22.webp',
                'alt' => 'cztery wesołe osoby patrzące do przodu'
            ],
            [
                'header' => 'Pomoc',
                'p1' => '- Pomoc edukacyjna dla dzieci niewidomych, słabowidzących i niepełnosprawnych.',
                'p2' => '', 
                'p3' => '',
                'img' => 'images/23.webp',
                'alt' => 'dwie dłonie w uścisku'
            ]
        ];
     
        return view('home', [
            'gallery' => $gallery,
            'praktykiCount' => 4768,
            'praktykiUczelnianeCount' => 4242,
            'wspolpracaCount' => 124,
            'phone1' => '794 250 440',
            'phone2' => '733 636 477',
            'email' => 'kontakt@fundacjaglosmlodych.org',
            'aktualnosci' => $aktualnosci,
            'projekty' => $projekty,
        ]);
    }
}