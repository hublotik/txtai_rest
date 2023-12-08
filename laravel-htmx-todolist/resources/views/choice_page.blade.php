@extends('layouts.master')
@dd($device_type_search)
@section('headphones_search')
    <div class="container pt-5">
        <!-- Another variation with a button -->
        <form action="{{ url('/amp/search') }}" type="get">
            <div class="input-group">
                <input type="search" class="bg bg-white text-primary rounded form-control" name="headphones_query"
                    id="cari">

                <div class="ml-2 input-group-append">
                    <input class="btn btn-light  text-primary rounded fas fa-search" id="search" type="submit"
                        value="Search">
                </div>
            </div>
        </form>
    </div>

    <div class="container font-italic">
        <p>Output</p>
        <table class="table table-bordered border-rounded">
            <thead>
                @yield('output')
            </thead>
        </table>
    </div>
@endsection
