<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SearchBook</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script src="{{ asset('js/htmx.js') }}">
    </script>


    {{-- @dd(basename($_SERVER['PHP_SELF'])) --}}
    
    <div id="div_to_past"></div>
    


    <div class="container pt-5">
        <!-- Another variation with a button -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            @csrf <!-- {{ csrf_field() }} -->
            <div class="input-group">
                <select class="bg bg-white text-primary rounded form-control" name="sort_source" id="cari">

                    <option value="empty">Choose sort order...</option>
                    <option value="stereophile" <?php
                    if (isset($_POST['sort_source']) && $_POST['sort_source'] == 'stereophile') {
                        echo 'selected';
                    }
                    ?>>Stereophile</option>
                    <option value="asr" <?php
                    if (isset($_POST['sort_source']) && $_POST['sort_source'] == 'asr') {
                        echo 'selected';
                    }
                    ?>>ASR</option>
                    <input class="btn btn-primary  text-light rounded fas fa-search" id="sort" type="submit"
                        value="sort">
                </select>

            
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    @php
                        global $_POST;
                        
                    @endphp
                   
                </table>

            </div>
        </form>

    </div>

    




    </body>


</html>
