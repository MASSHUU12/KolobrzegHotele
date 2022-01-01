@extends('master') @section('title')
{{ __("Mapa") }}
@endsection @section('content')

<section class="sub-container">
    <div class="map-container">
        @php $param = $_GET['type']; @endphp @if($param == "dog")
        <h1>{{ __("Wybiegi dla Psów") }}</h1>
        @endif @if($param == "playground")
        <h1>{{ __("Place Zabaw") }}</h1>
        @endif @if($param == "recreation")
        <h1>{{ __("Tereny Rekreacyjne") }}</h1>
        @endif @if($param == "bike")
        <h1>{{ __("Stacje Rowerów Miejskich") }}</h1>
        @endif
        <div class="sub-map-con">
            <div
                id="sub-map"
                style="position: relative; width: 700px; height: 500px"
            ></div>
        </div>
        <div class="sub-map-bottom">
            <p id="address">{{ __("Na razie nie wybrano żadnego punktu.") }}</p>
            <a
                id="largeMapLink"
                target="_blank"
                href="https://www.bing.com/maps?cp=54.18165332867221~15.569575309753434&amp;sty=r&amp;lvl=13&amp;FORM=MBEDLD"
                >{{ __("Wyświetl większą mapę") }}</a
            >
            <a
                id="dirMapLink"
                target="_blank"
                href="https://www.bing.com/maps/directions?cp=54.18165332867221~15.569575309753434&amp;sty=r&amp;lvl=13&amp;rtp=~pos.54.18165332867221_15.569575309753434____&amp;FORM=MBEDLD"
                >{{ __("Pokaż wskazówki dojazdu") }}</a
            >
        </div>
        <div class="map-container-bottom">
            @if($param == "dog")
            <div class="map-container-bottom-txt">
                <p id="d1">{{ __("Psi wybieg - Ogrody") }}</p>
                <p id="d2">{{ __("Psi wybieg - Okopowa") }}</p>
                <p id="d3">{{ __("Psi wybieg - Podczele") }}</p>
            </div>
            <div class="map-container-bottom-btns">
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1792508321551,15.5955672536586);setAddress('d1');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1814742334769,15.5786304009721);setAddress('d2');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1939644890637,15.6690417298156);setAddress('d3');"
                >
                    {{ __("pokaż") }}
                </button>
            </div>
            @endif @if($param == 'playground')
            <div class="map-container-bottom-txt">
                <p id="p1">
                    {{ __("Ul. Mieszka I (naprzeciwko stacji benzynowej)") }}
                </p>
                <p id="p2">
                    {{
                        __(
                            "Ul. Bogusława X (naprzeciwko szkoły podstawowej nr 8)"
                        )
                    }}
                </p>
                <p id="p3">{{ __("Ul. Wylotowa 80") }}</p>
                <p id="p4">{{ __("Ul. Lazurowa - plac trzech pokoleń") }}</p>
                <p id="p5">{{ __("Ul. Makuszyńskiego") }}</p>
                <p id="p6">
                    {{ __('Ul. Unii Lubelskiej "Ogródek Jordanowski"') }}
                </p>
                <p id="p7">{{ __("Ul. Chełmońskiego") }}</p>
                <p id="p8">
                    {{ __("Ul. Łopuskiego 54 AB / Jedności Narodowej 85 AB") }}
                </p>
                <p id="p9">
                    {{ __("Plac na Ogrodach (przy kompleksie sportowym)") }}
                </p>
                <p id="p10">
                    {{
                        __(
                            "Ul. Obrońców Westerplatte (Park im. S. Żeromskiego)"
                        )
                    }}
                </p>
                <p id="p11">{{ __("Park im. S. Żeromskiego") }}</p>
                <p id="p12">{{ __("Ul. Brzeska (Podczele)") }}</p>
                <p id="p13">
                    {{ __("Ul. Rzemieślnicza 8 (Osiedle Janiska)") }}
                </p>
            </div>
            <div class="map-container-bottom-btns">
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1750482884771,15.590509878273);setAddress('p1');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1742010688035,15.5859282406182);setAddress('p2');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1739676570703,15.5452545186702);setAddress('p3');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.162659948607,15.5390002910848);setAddress('p4');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1578620859136,15.5553105943497);setAddress('p5');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1796350474204,15.5781954642306);setAddress('p6');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1564745798723,15.5463450898675);setAddress('p7');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1709644101305,15.5613694443548);setAddress('p8');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1790314023331,15.5967156443096);setAddress('p9');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1847371687459,15.558283472539);setAddress('p10');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1858272057929,15.5788514566289);setAddress('p11');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1927466702085,15.6630502148966);setAddress('p12');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1655869438421,15.600621504716);setAddress('p13');"
                >
                    {{ __("pokaż") }}
                </button>
            </div>
            @endif @if($param == "recreation")
            <div class="map-container-bottom-txt">
                <p id="r1">{{ __("Amfiteatr") }}</p>
                <p id="r2">{{ __("Park Im. Gen. J. Dąbrowskiego") }}</p>
                <p id="r3">{{ __("Park Im. 3 Dywi. Piechoty") }}</p>
                <p id="r4">{{ __("Park Im. Jedności Narodowej") }}</p>
                <p id="r5">{{ __("Park Im. Stefana Żeromskiego") }}</p>
                <p id="r6">
                    {{ __("Plac 18 Marca, Skwer Pionierów Kołobrzegu") }}
                </p>
                <p id="r7">{{ __("Park ul. Jagiellońska") }}</p>
                <p id="r8">{{ __("Miejsce Kempingowe") }}</p>
                <p id="r9">{{ __("Stadion ul. Ppor. Józefa Śliwińskiego") }}</p>
                <p id="r10">{{ __("Stadion ul. Solna") }}</p>
                <p id="r11">{{ __("Park Im. Aleksandra Fredry") }}</p>
                <p id="r12">{{ __("Park ul. Katedralna") }}</p>
                <p id="r13">{{ __("Park ul. Zdrojowa") }}</p>
            </div>
            <div class="map-container-bottom-btns">
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1851330685246,15.5931229136401);setAddress('r1');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1730419230825,15.5798354514383);setAddress('r2');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.175013648965,15.591455256414);setAddress('r3');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1777917995797,15.540253772463);setAddress('r4');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1857721929325,15.5724437410402);setAddress('r5');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1790902677109,15.5718760170712);setAddress('r6');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1815600009459,15.569605720762);setAddress('r7');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1818059094361,15.5946880583727);setAddress('r8');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1740440023994,15.5625370002741);setAddress('r9');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1759537093013,15.5619174423506);setAddress('r10');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1855735535522,15.5946252048793);setAddress('r11');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1773734035407,15.5756254250356);setAddress('r12');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1827278452175,15.5638801455967);setAddress('r13');"
                >
                    {{ __("pokaż") }}
                </button>
            </div>
            @endif @if($param == "bike")
            <div class="map-container-bottom-txt">
                <p id="b1">{{ __("Dworzec PKP") }}</p>
                <p id="b2">{{ __("Kamienny Szaniec") }}</p>
                <p id="b3">{{ __("Latarnia Morska") }}</p>
                <p id="b4">{{ __("Ogrody - ul. Fredry") }}</p>
                <p id="b5">{{ __("Park Handlowy Albatros") }}</p>
                <p id="b6">{{ __("Podczele - ul. Brzeska") }}</p>
                <p id="b7">{{ __("Ratusz") }}</p>
                <p id="b8">{{ __("Stadion") }}</p>
                <p id="b9">{{ __("Ul. 1 Maja") }}</p>
                <p id="b10">{{ __("Ul. Arciszewskiego") }}</p>
                <p id="b11">{{ __("Ul. Słowińców") }}</p>
                <p id="b12">{{ __("Ul. Świętego Wojciecha") }}</p>
                <p id="b13">{{ __("Ul. Toruńska") }}</p>
            </div>
            <div class="map-container-bottom-btns">
                <button
                    class="button-secondary"
                    onclick="GetMap(54.181938,15.570673);setAddress('b1');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.187194979711,15.5920779705048);setAddress('b2');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.185878,15.553748);setAddress('b3');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.17906,15.590422);setAddress('b4');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.17596,15.59378);setAddress('b5');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.192712,15.662689);setAddress('b6');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1762418030137,15.5761778354644);setAddress('b7');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.175202528946,15.5617690086364);setAddress('b8');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1711236753478,15.5672246217728);setAddress('b9');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.177299,15.542635);setAddress('b10');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1759184063292,15.5830657482147);setAddress('b11');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.1567487123925,15.5537974834442);setAddress('b12');"
                >
                    {{ __("pokaż") }}
                </button>
                <button
                    class="button-secondary"
                    onclick="GetMap(54.162546,15.548692);setAddress('b13');"
                >
                    {{ __("pokaż") }}
                </button>
            </div>
            @endif
        </div>
    </div>
    <div class="links">
        @if($param == "dog")
        <div class="links-bottom-txt">
            <h1>{{ __("Inne mapy") }}</h1>
            <p>{{ __("Stacje Rowerów Miejskich") }}</p>
            <p>{{ __("Tereny Rekreacyjne") }}</p>
            <p>{{ __("Place Zabaw") }}</p>
        </div>
        <div class="links-bottom-btns">
            <button class="button-secondary">
                <a href="/maps?type=bike">{{ __("zobacz") }}</a>
            </button>
            <button class="button-secondary">
                <a href="/maps?type=recreation">{{ __("zobacz") }}</a>
            </button>
            <button class="button-secondary">
                <a href="/maps?type=playground">{{ __("zobacz") }}</a>
            </button>
        </div>
        @endif @if($param == 'playground')
        <div class="links-bottom-txt">
            <h1>{{ __("Inne mapy") }}</h1>
            <p>{{ __("Stacje Rowerów Miejskich") }}</p>
            <p>{{ __("Tereny Rekreacyjne") }}</p>
            <p>{{ __("Wybiegi dla Psów") }}</p>
        </div>
        <div class="links-bottom-btns">
            <button class="button-secondary">
                <a href="/maps?type=bike">{{ __("zobacz") }}</a>
            </button>
            <button class="button-secondary">
                <a href="/maps?type=recreation">{{ __("zobacz") }}</a>
            </button>
            <button class="button-secondary">
                <a href="/maps?type=dog">{{ __("zobacz") }}</a>
            </button>
        </div>
        @endif @if($param == "recreation")
        <div class="links-bottom-txt">
            <h1>{{ __("Inne mapy") }}</h1>
            <p>{{ __("Stacje Rowerów Miejskich") }}</p>
            <p>{{ __("Wybiegi dla Psów") }}</p>
            <p>{{ __("Place Zabaw") }}</p>
        </div>
        <div class="links-bottom-btns">
            <button class="button-secondary">
                <a href="/maps?type=bike">{{ __("zobacz") }}</a>
            </button>
            <button class="button-secondary">
                <a href="/maps?type=dog">{{ __("zobacz") }}</a>
            </button>
            <button class="button-secondary">
                <a href="/maps?type=playground">{{ __("zobacz") }}</a>
            </button>
        </div>
        @endif @if($param == "bike")
        <div class="links-bottom-txt">
            <h1>{{ __("Inne mapy") }}</h1>
            <p>{{ __("Tereny Rekreacyjne") }}</p>
            <p>{{ __("Wybiegi dla Psów") }}</p>
            <p>{{ __("Place Zabaw") }}</p>
        </div>
        <div class="links-bottom-btns">
            <button class="button-secondary">
                <a href="/maps?type=recreation">{{ __("zobacz") }}</a>
            </button>
            <button class="button-secondary">
                <a href="/maps?type=dog">{{ __("zobacz") }}</a>
            </button>
            <button class="button-secondary">
                <a href="/maps?type=playground">{{ __("zobacz") }}</a>
            </button>
        </div>
        @endif
    </div>
</section>
<script
    type="text/javascript"
    src="https://www.bing.com/api/maps/mapcontrol?setLang=pl&setMkt=pl-PL"
    async
    defer
></script>
<script type="text/javascript" src="{{ asset('js/mapSubpages.js') }}"></script>

@endsection
