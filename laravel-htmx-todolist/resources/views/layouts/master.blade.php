<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>SearchBook</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>

<body
    style=" font-family: Helvetica, sans-serif; background-image: linear-gradient( 111.4deg,  rgb(149 174 229) 18.8%, rgba(4,161,255,1) 100.2% );">
    <header>
        <nav style="background-image: linear-gradient( 111.4deg, rgb(173 76 132) 18.8%, rgba(4,161,255,1) 100.2% );"
            class="rounded shadow-lg  mb-5 navbar navbar-expand-lg navbar-light bg-white shadow-sm rounded">
            <a class="navbar-brand" href="#">Reviews search</a>
        </nav>
    </header>

    <div class="container pt-5">
        <!-- Another variation with a button -->
        <form action="{{ url('/search') }}" type="get">
            <div class="input-group">
                <input type="search" class="bg bg-white text-primary rounded form-control" name="query"
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
</body>
