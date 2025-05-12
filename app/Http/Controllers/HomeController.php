<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $news = Post::where('type', 'news')
                ->latest()
                ->take(3)
                ->get();
        
        $projects = Post::where('type', 'projects')
                ->latest()
                ->take(3)
                ->get();

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
            'news' => $news,
            'projects' => $projects,
            'gallery' => $gallery,
            'praktykiCount' => 4768,
            'praktykiUczelnianeCount' => 4242,
            'wspolpracaCount' => 124,
            'phone1' => '794 250 440',
            'phone2' => '733 636 477',
            'email' => 'kontakt@fundacjaglosmlodych.org',
        ]);
    }
}