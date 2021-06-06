<form action="{{route('searchquery', app()->getLocale())}}" method="get" data-swup-form>
    <div class="searchbar">
        <input type="text" name="q" id="searchfield" placeholder="Nazwa hotelu..." value="{{ $query }}">
        <button class="searchbar-button button-primary"><span class="iconify" data-icon="ant-design:search-outlined" data-inline="false" id="search-iconify"></span>&nbsp;&nbsp;&nbsp;&nbsp;{{__('szukaj')}}</button>
    </div>
</form>