<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>SearchBook</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" src="{{ asset('js/main_page_modal.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>

<body
    style=" font-family: Helvetica, sans-serif; background-image: linear-gradient( 111.4deg,  rgb(149 174 229) 18.8%, rgba(4,161,255,1) 100.2% );">
    <header>
        <nav style="background-image: linear-gradient( 111.4deg, rgb(173 76 132) 18.8%, rgba(4,161,255,1) 100.2% );"
            class="rounded shadow-lg  mb-5 navbar navbar-expand-lg navbar-light bg-white shadow-sm rounded">
            <a class="navbar-brand" name="test_get">Интеллектуальный поиск аудиотехники</a>
        </nav>
    </header>


    <!-- Button to trigger the modal -->
    <div class="d-flex align-items-center justify-content-center">
        <button id="modal_trigger" type="button" class="btn btn-info p-3" data-toggle="modal" data-target="#myModal">
            Поиск/подбор комплектующих
        </button>
    </div>

    <div class="modal " id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Выберите опцию</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form id="myForm" action="{{ url('/choice_page') }}" type="post">
                        <div class="form-group">
                            <select class="form-control" name="device_type" id="h_amp_select">
                                <option target="{{ url('/choice_page') }}" value="Headphones">Поиск наушников</option>
                                <option target="{{ url('/choice_page') }}" value="AMP">Поиск усилителей</option>
                            </select>

                        </div>
                        <div class="form-group">
                            {{-- <label for="email">Email:</label> --}}
                            {{-- <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="toogle_search_type">
                                <label class="form-check-label" for="toogle_search_type">Подбор подходящих
                                    наушников/усилителей</label>
                            </div> --}}
                        </div>
                        <button type="submit" class="btn btn-primary">Подобрать</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    @if (isset($empty_variable))
        <div id="all_devices_tbl" class="container-fluid pt-2">
            <div class="row">
                <div class="col-md-6">
                    <label for="h_table">Усилители</label>
                    <table id="amp_table" class="table table-secondary">
                        <thead>
                            <tr>
                                <th>Model</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($amps_all as $cols)
                                <tr>
                                    <td>{{ $cols->Model }}</td>
                                    <td>{{ $cols->Price }}</td>
                                </tr>
                            @endforeach
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <label for="h_table">Наушники</label>
                    <table id="h_table" class="table table-secondary">
                        <thead>
                            <tr>
                                <th>Model</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($headphones_all as $cols)
                                <tr>
                                    <td>{{ $cols->Brand }} {{ $cols->Model }}</td>
                                    <td>{{ $cols->Price }}</td>
                                </tr>
                            @endforeach
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
    @yield('headphones_search')


</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
