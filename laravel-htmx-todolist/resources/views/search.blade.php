@extends('choice_page')
@section('output')
<label for="output_table_id">Таблица Результатов</label>
    <tr>
        <th style="background-image: linear-gradient( 111.4deg, rgb(112 254 236) 18.8%, rgba(4,161,255,1) 100.2% ); border-width: 3px; border-color:honeydew"
            scope="col"> Рекомендуемые модели по запросу </th>
        <th class="text-dark"
            style="border-width:3px; background-image: linear-gradient( 111.4deg, rgb(112 254 236) 18.8%, rgba(4,161,255,1) 100.2% ); font-style: italic; "
            scope="col"> Процент схожести запроса и обзора на модель (similarity)</th>
    </tr>

    @foreach ($srch_res as $arrs_of_res)
            <tr>
                <td style="background-image: linear-gradient( 111.4deg, rgb(112 254 236) 18.8%, rgba(4,161,255,1) 100.2% ); border-width: 3px; border-color:honeydew"
                    scope="col"> {{$arrs_of_res[1]}} </td>
                <td class="text-dark"
                    style="border-width:3px;  font-weight: normal; background-image: linear-gradient( 111.4deg, rgb(112 254 236) 18.8%, rgba(4,161,255,1) 100.2% ); font-style: italic; "
                    scope="col"> {{intval($arrs_of_res[0] * 100)}}%</td>
            </tr>        
    @endforeach
@endsection



