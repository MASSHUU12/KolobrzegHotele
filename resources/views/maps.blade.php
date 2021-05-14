@extends('master')

@section('title', 'Wybiegi dla Psów')

@section('content')

<section class="sub-container">
    @php
    $param = $_GET['type'];

    if($param == "dog")
    echo '<h1>Wybiegi dla Psów</h1>';
    if($param == "playground")
    echo '<h1>Place Zabaw</h1>';
    if($param == "recreation")
    echo '<h1>Tereny Rekreacyjne</h1>';
    if($param == "bike")
    echo '<h1>Stacje Rowerów Miejskich</h1>';
    @endphp

    <div class="all">
        <div class="map-container">
            <div id="sub-map"></div>
            <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=54.18165332867221~15.569575309753434&amp;sty=r&amp;lvl=13&amp;FORM=MBEDLD">Wyświetl
                większą mapę</a> &nbsp; | &nbsp;
            <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=54.18165332867221~15.569575309753434&amp;sty=r&amp;lvl=13&amp;rtp=~pos.54.18165332867221_15.569575309753434____&amp;FORM=MBEDLD">Pokaż
                wskazówki dojazdu</a>
        </div>
        <div class="links">
            @php
            $param = $_GET['type'];

            if($param == "dog")
            echo '
            <p onclick="GetMap(54.1792508321551,15.5955672536586)">Psi wybieg - Ogrody</p>
            <p onclick="GetMap(54.1814742334769,15.5786304009721)">Psi wybieg - Okopowa</p>
            <p onclick="GetMap(54.1939644890637,15.6690417298156)">Psi wybieg - Podczele</p>';
            elseif($param == 'playground')
            echo '
            <p onclick="GetMap(54.1750482884771,15.590509878273)">Ul. Mieszka I (na przeciwko stacji benzynowej)</p>
            <p onclick="GetMap(54.1742010688035,15.5859282406182)">Ul. Bogusława X (naprzeciwko szkoły podstawowej nr 8)</p>
            <p onclick="GetMap(54.1739676570703,15.5452545186702)">Ul. Wylotowa 80</p>
            <p onclick="GetMap(54.162659948607,15.5390002910848)">Ul. Lazurowa - plac trzech pokoleń</p>
            <p onclick="GetMap(54.1578620859136,15.5553105943497)">Ul. Makuszyńskiego</p>
            <p onclick="GetMap(54.1796350474204,15.5781954642306)">Ul. Unii Lubelskiej "Ogródek Jordanowski"</p>
            <p onclick="GetMap(54.1564745798723,15.5463450898675)">Ul. Chełmońskiego</p>
            <p onclick="GetMap(54.1709644101305,15.5613694443548)">Ul. Łopuskiego 54 AB / Jedności Narodowej 85 AB</p>
            <p onclick="GetMap(54.1790314023331,15.5967156443096)">Plac na Ogrodach (przy kompleksie sportowym)</p>
            <p onclick="GetMap(54.1847371687459,15.558283472539)">Ul. Obrońców Westerplatte (Park im. S. Żeromskiego)</p>
            <p onclick="GetMap(54.1858272057929,15.5788514566289)">Park im. S. Żeromskiego</p>
            <p onclick="GetMap(54.1927466702085,15.6630502148966)">Ul. Brzeska (Podczele)</p>
            <p onclick="GetMap(54.1655869438421,15.600621504716)">Ul. Rzemieślnicza 8 (Osiedle Janiska)</p>';
            elseif($param == "recreation")
            echo '
            <p onclick="GetMap(54.1851330685246,15.5931229136401)">Amfiteatr</p>
            <p onclick="GetMap(54.1730419230825,15.5798354514383)">Park Im. Gen. J. Dąbrowskiego</p>
            <p onclick="GetMap(54.175013648965,15.591455256414)">Park Im. 3 Dywi. Piechoty</p>
            <p onclick="GetMap(54.1777917995797,15.540253772463)">Park Im. Jedności Narodowej</p>
            <p onclick="GetMap(54.1857721929325,15.5724437410402)">Park Im. Stefana Żeromskiego</p>
            <p onclick="GetMap(54.1790902677109,15.5718760170712)">Plac 18 Marca, Skwer Pionierów Kołobrzegu</p>
            <p onclick="GetMap(54.1815600009459,15.569605720762)">Park ul. Jagiellońska</p>
            <p onclick="GetMap(54.1818059094361,15.5946880583727)">Miejsce Kempingowe</p>
            <p onclick="GetMap(54.1740440023994,15.5625370002741)">Stadion ul. Ppor. Józefa Śliwińskiego</p>
            <p onclick="GetMap(54.1759537093013,15.5619174423506)">Stadion ul. Solna</p>
            <p onclick="GetMap(54.1855735535522,15.5946252048793)">Park Im. Aleksandra Fredry</p>
            <p onclick="GetMap(54.1773734035407,15.5756254250356)">Park ul. Katedralna</p>
            <p onclick="GetMap(54.1827278452175,15.5638801455967)">Park ul. Zdrojowa</p>';
            elseif($param == "bike")
            echo '
            <p onclick="GetMap(54.181938,15.570673)">Dworzec PKP</p>
            <p onclick="GetMap(54.187194979711,15.5920779705048)">Kamienny Szaniec</p>
            <p onclick="GetMap(54.185878,15.553748)">Latarnia Morska</p>
            <p onclick="GetMap(54.17906,15.590422)">Ogrody - ul. Fredry</p>
            <p onclick="GetMap(54.17596,15.59378)">Park Handlowy Albatros</p>
            <p onclick="GetMap(54.192712,15.662689)">Podczele - ul. Brzeska</p>
            <p onclick="GetMap(54.1762418030137,15.5761778354644)">Ratusz</p>
            <p onclick="GetMap(54.175202528946,15.5617690086364)">Stadion</p>
            <p onclick="GetMap(54.1711236753478,15.5672246217728)">Ul. 1 Maja</p>
            <p onclick="GetMap(54.177299,15.542635)">Ul. Arciszewskiego</p>
            <p onclick="GetMap(54.1759184063292,15.5830657482147)">Ul. Słowińców</p>
            <p onclick="GetMap(54.1567487123925,15.5537974834442)">Ul. Świętego Wojciecha</p>
            <p onclick="GetMap(54.162546,15.548692)">Ul. Toruńska</p>';

            @endphp
        </div>
    </div>
</section>
<script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?setLang=pl&setMkt=pl-PL' async defer></script>
<script type='text/javascript' src="{{ asset('js/mapSubpages.js') }}"></script>

@endsection