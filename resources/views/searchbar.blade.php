<form action="{{route('search', app()->getLocale())}}" method="get" data-swup-form>
    <div class="searchbar">
        <div class="searchbar-filter">
            <div class="filter-icon"><span class="iconify" data-icon="fa-solid:umbrella-beach" data-inline="false" id="beach-icon"></span></div>
            <div class="filter-text">
                <p class="filter-label">{{__('Plaża')}}</p>
                <p class="filter-value filter-end-value">{{__('bez znaczenia')}}</p>
            </div>
            <div class="filter-dropdown">
                <p class="slider-p">{{__('bardzo ważne')}}</p>
                <div class="outer-slider">
                    <div class="range-slider">
                        <input class="input-range search-input" orient="vertical" type="range" step="1" value="0" min="1" max="50" name="sea">
                    </div>
                    <span class="range-value"></span>
                </div>
                <p class="slider-p">{{__('bez znaczenia')}}</p>
            </div>
        </div>
        <div class="searchbar-filter">
            <div class="filter-icon"><span class="iconify" data-icon="cil:bike" data-inline="false"></span></i></div>
            <div class="filter-text">
                <p class="filter-label">{{__('Rowery Miejskie')}}</p>
                <p class="filter-value filter-end-value">{{__('bez znaczenia')}}</p>
            </div>
            <div class="filter-dropdown">
                <p class="slider-p">{{__('bardzo ważne')}}</p>
                <div class="outer-slider">
                    <div class="range-slider">
                        <input class="input-range search-input" orient="vertical" type="range" step="1" value="0" min="1" max="50" name="bike">
                    </div>
                    <span class="range-value"></span>
                </div>
                <p class="slider-p">{{__('bez znaczenia')}}</p>
            </div>
        </div>
        <div class="searchbar-filter">
            <div class="filter-icon"><span class="iconify" data-icon="maki:park-11" data-inline="false"></span></div>
            <div class="filter-text">
                <p class="filter-label">{{__('Tereny rekreacyjne')}}</p>
                <p class="filter-value filter-end-value">{{__('bez znaczenia')}}</p>
            </div>
            <div class="filter-dropdown">
                <p class="slider-p">{{__('bardzo ważne')}}</p>
                <div class="outer-slider">
                    <div class="range-slider">
                        <input class="input-range search-input" orient="vertical" type="range" step="1" value="0" min="1" max="50" name="park">
                    </div>
                    <span class="range-value"></span>
                </div>
                <p class="slider-p">{{__('bez znaczenia')}}</p>
            </div>
        </div>
        <div class="searchbar-filter">
            <div class="filter-icon"><span class="iconify" data-icon="map:playground" data-inline="false"></span></div>
            <div class="filter-text">
                <p class="filter-label">{{__('Place zabaw')}}</p>
                <p class="filter-value filter-end-value">{{__('bez znaczenia')}}</p>
            </div>
            <div class="filter-dropdown">
                <p class="slider-p">{{__('bardzo ważne')}}</p>
                <div class="outer-slider">
                    <div class="range-slider">
                        <input class="input-range search-input" orient="vertical" type="range" step="1" value="0" min="1" max="50" name="playground">
                    </div>
                    <span class="range-value"></span>
                </div>
                <p class="slider-p">{{__('bez znaczenia')}}</p>
            </div>
        </div>
        <div class="searchbar-filter">
            <div class="filter-icon"><span class="iconify" data-icon="fluent:animal-dog-20-filled" data-inline="false"></span></div>
            <div class="filter-text">
                <p class="filter-label">{{__('Wybiegi dla psów')}}</p>
                <p class="filter-value filter-end-value">{{__('bez znaczenia')}}</p>
            </div>
            <div class="filter-dropdown">
                <p class="slider-p">{{__('bardzo ważne')}}</p>
                <div class="outer-slider">
                    <div class="range-slider">
                        <input class="input-range search-input" orient="vertical" type="range" step="1" value="0" min="1" max="50" name="dogpark">
                    </div>
                    <span class="range-value"></span>
                </div>
                <p class="slider-p">{{__('bez znaczenia')}}</p>
            </div>
        </div>
        <div class="searchbar-filter searchbar-standard">
            <div class="filter-icon"><span class="iconify" data-icon="clarity:star-solid" data-inline="false"></span></div>
            <div class="filter-text">
                <p class="filter-label">{{__('Standard')}}</p>
                <p class="filter-value">{{__('dowolny')}}</p>
            </div>
            <div class="filter-dropdown">
                <p class="slider-p">{{__('wysoki')}}</p>
                <div class="outer-slider">
                    <div class="range-slider">
                        <input class="input-range search-input" orient="vertical" type="range" step="1" value="0" min="1" max="50" name="standard">
                    </div>
                    <span class="range-value"></span>
                </div>
                <p class="slider-p">{{__('niski')}}</p>
            </div>
        </div>
        <button class="searchbar-button button-primary"><span class="iconify" data-icon="ant-design:search-outlined" data-inline="false" id="search-iconify"></span>&nbsp;&nbsp;&nbsp;&nbsp;{{__('szukaj')}}</button>
    </div>
</form>

<script src="{{ asset('js/rangeSlider.js') }}"></script>