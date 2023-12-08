@extends('layouts.master')
{{-- @dd($device_type_search) --}}

@section('headphones_search')
    <div class="container pt-5">
        <!-- Another variation with a button -->
        <form action="{{ url('/amp/search') }}" type="get">
            <div class="input-group">
                <input type="search" class="bg bg-white text-primary rounded form-control"
                    @if (isset($device_type)) name={{ $device_type }} @else name={{ 'device_search' }}; @endif
                    id="search_device">
                <div class="ml-2 input-group-append">
                    <input class="btn btn-light  text-primary rounded fas fa-search" id="search" type="submit"
                        value="Поиск">
                </div>
            </div>
            <div>
                <p>Для поиска желателен запрос на Русском/Английском языке</p>
            </div>
        </form>
    </div>

    <div class="container font-italic">
        <label for="output_table_id">Таблица Результатов</label>
        <table id="output_table_id" class="table table-bordered border-rounded">
            <thead>
                @yield('output')
            </thead>
        </table>
    </div>
@endsection

<script>
    window.addEventListener('load', function() {
        let Device_type = window.location.href.split('=')[1].split('#')[0];
        if (window.location.href.includes('/search') != true) {
            document.getElementById("modal_trigger").style.display = 'none';
            document.getElementById('search_device').name = Device_type;
        }
    });
</script>
