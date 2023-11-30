

@extends('layouts.master')

@section('output')
   @dd($srch_res)
        <tr>
            <th style="background-image: linear-gradient( 111.4deg, rgb(112 254 236) 18.8%, rgba(4,161,255,1) 100.2% ); border-width: 3px; border-color:honeydew"
                scope="col"> </th>
            <th class="text-dark"
                style="border-width:3px;  font-weight: normal; background-image: linear-gradient( 111.4deg, rgb(112 254 236) 18.8%, rgba(4,161,255,1) 100.2% ); font-style: italic; "
                scope="col">
            </th>
        </tr>

@endsection

<script>
    $(document).ready(function() {
        $("table th:first").removeClass("text-dark").css({
            'text-align': 'center',
            'background-image': 'linear-gradient( 111.4deg,  rgb(149 174 229) 18.8%, rgba(149 174 229) 100.2% )'
        });

        $("table th:first").next().removeClass("text-dark").css({
            'text-align': 'center',
            'background-image': 'linear-gradient( 111.4deg,  rgb(149 174 229) 18.8%, rgba(4,161,255,1) 100.2% )',
            'font-size': '25px',
            'font-style': 'impact',
            'font-weight': '700',
        });
        const br1 = document.querySelector(
            "body > div.container.font-italic > table > thead > tr:nth-child(1) > th:nth-child(2) > br:nth-child(1)"
            );
        const br2 = document.querySelector(
            "body > div.container.font-italic > table > thead > tr:nth-child(1) > th:nth-child(2) > br:nth-child(1)"
            );
        const th1 = document.querySelector(
            "body > div.container.font-italic > table > thead > tr:nth-child(1) > th:nth-child(1)");
        th1.textContent = '';
        br1.remove();
        br2.remove();

    });
</script>
