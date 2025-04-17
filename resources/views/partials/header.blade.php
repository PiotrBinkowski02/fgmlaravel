<?php
namespace Subpages;
$pageTitle = isset($pageTitle) ? $pageTitle : "Fundacja Głos Młodych - Fundacja na rzecz promocji i rozwoju";
$metaDescription = isset($metaDescription) ? $metaDescription : "Fundacja Głos Młodych";
?>
<!doctype html>
<html lang="pl">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>"/>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<title><?php echo htmlspecialchars($pageTitle); ?></title>

<link rel="icon" type="image/x-icon" href="{{asset('images/cropped-logo-32x32.webp')}}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://kit.fontawesome.com/d96bec4722.js" crossorigin="anonymous"></script>
<script src="https://fundacjaglosmlodych.org/assets/vendor/ckeditor5/build/ckeditor.js" type="text/javascript"></script>
<script src="https://cdn.tailwindcss.com"></script>

<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>
</head>

<body style="font-family: Open Sans, sans-serif">
    <div class="px-2 lg:px-9">
            <header class="max-w-full bg-white cursor-pointer">
                <div class="flex justify-center items-center">
                    <a href="/"><img class="h-42" src="{{asset('images/cropped-logo_fgm-2-1.webp')}}" 
                            alt="Logo Fundacji"></a>
                </div>
            </header>