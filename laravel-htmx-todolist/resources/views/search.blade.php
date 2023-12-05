

@extends('layouts.master')

@section('output')
    <tr>
        <th style="background-image: linear-gradient( 111.4deg, rgb(112 254 236) 18.8%, rgba(4,161,255,1) 100.2% ); border-width: 3px; border-color:honeydew"
            scope="col"> result </th>
        <th class="text-dark"
            style="border-width:3px;  font-weight: normal; background-image: linear-gradient( 111.4deg, rgb(112 254 236) 18.8%, rgba(4,161,255,1) 100.2% ); font-style: italic; "
            scope="col"> similarity  </th>
    </tr>
    @dd($hdph_srch_res)
    {{-- @foreach ($data as $arrs_of_res)
            <tr>
                <td style="background-image: linear-gradient( 111.4deg, rgb(112 254 236) 18.8%, rgba(4,161,255,1) 100.2% ); border-width: 3px; border-color:honeydew"
                    scope="col"> {{$arrs_of_res[0]}} </td>
                <td class="text-dark"
                    style="border-width:3px;  font-weight: normal; background-image: linear-gradient( 111.4deg, rgb(112 254 236) 18.8%, rgba(4,161,255,1) 100.2% ); font-style: italic; "
                    scope="col"> {{$arrs_of_res[1]}}  </td>
            </tr>        
    @endforeach --}}
@endsection

