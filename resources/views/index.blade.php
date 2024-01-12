@extends('layouts.app');

@section('content')


<div class="hero-bg-image flex flex-col items-center justify-center">
    <h1 class="text-5xl uppercase font-bold pb-10 text-center">Welcome to site news</h1>
    <a href="/" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl">Start Reading</a>
</div>

<div class="content sm:grid grid-cols-2 gap-15 mx-auto p-15">
    <div class="mx:2 md:mx-0 flex">
        <img class="sm:rounded-lg" src="https://picsum.photos/id/239/960/620 " alt="">
    </div>

    <div class="flex flex-col iteams-left justify-center m-10 sm:m-0">
        <h2 class="font-blod text-gray-700 text-4xl uppercase"> HOW TO be an expert in 2023</h2>
        <P class="font-blod text-gray-600 text-xl pt-2">
            NOUS SOMMES UNE AGENCE EN WEB DESIGN INFOGRAPHE POUR UN STAGE PRE EMBAUCHECritères pour le poste: STAGE PRE EMBAUCHE WEB DESIGN
        </P>
        <p class="p-4 text-gray-500 text-sm leading-5">    
            polyvalent, vous serez un pilier essentiel, offrant un soutien administratif et commercial crucial à notre
             entreprise. Votre mission consistera à gérer efficacement les tâches administratives, à appuyer nos équipes
            commerciales, à coordonner diverses activités et à assurer un service client exceptionnel.
        </p>
        <a href="/" class="bg-gray-700  text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>
    </div>
</div>

<div class="text-center p-15 bg-gray-700 text-gray-100">
    <h2 class="text-2xl">Blog news</h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4">
        <div class="font-blod text-2xl py-2">ux digne thinking</div>
        <div class="font-blod text-2xl py-2">Programminfg Languge</div>
        <div class="font-blod text-2xl py-2">Graphik desgin</div>
        <div class="font-blod text-2xl py-2">front-end Developpemnt</div>
    </div>
</div>


<div class="container mx-auto text-center py-15">
    <h2 class="font-blod text-5xl py-10"> Recent Posts</h2>
    <P class="text-gray-400 leading-6 px-10">La version 5.0 de Laravel nécessite au minimum PHP 5.412 et son installation est basée sur le gestionnaire de paquets Composer1. Depuis la version 5.3, Laravel nécessite PHP 5.6 au minimum. La version 5.6 (février 2018) nécessite quant à elle PHP 7.1.3 au minimum.LaraveL Le référentiel Laravel/laravel présent sur le site GitHub contient le code source des premières versions de Laravel. À partir de la cinquième version, le framework est développé au sein du référentiel Laravel/framework.</P>
</div>

<div class="sm:grid grid-cols-2 w-4/5 mx-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="block m-auto pt-4 pb-15 w-4/5">
            <ul class="md:flex text-xs gap-2">
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:m-0 hover:bg-yellow-500 hover:text-yellow-100 "><a href="/">PHP</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:m-0 hover:bg-yellow-500 hover:text-yellow-100"><a href="/">Programing</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:m-0 hover:bg-yellow-500 hover:text-yellow-100"><a href="/"> Languages</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:m-0 hover:bg-yellow-500 hover:text-yellow-100"><a href="/">Backend</a></li>
            </ul>

            <h3 class="text-l py-10 leading-6">
                Un fendeur de bois, anciennement merrandier, et à notre époque fendeur ou fendeuse de merrains, est un professionnel du bois dont l'activité consiste à fendre — et non scier — dans la longueur des segments de troncs de bois dur (chêne principalement), des grumes, et à les travailler afin d'obtenir des douelles pour la tonnellerie. Il s'agit d'un très vieux métier qui a suivi l'évolution des techniques au cours des âges, et qui correspond en France au xxie siècle à un emploi qualifié dans un secteur économique très actif
            </h3>
            <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-blod uppercase text-l inline-block hover:bg-yellow-500 hover:text-yellow-100 ">Read More</a>
        </div>
    </div>
    <div class="flex">
        <img class="object-cover" src="https://picsum.photos/id/242/960/620" alt="">
    </div>
    

</div>

@endsection


