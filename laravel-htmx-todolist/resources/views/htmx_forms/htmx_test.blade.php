<div class="container pt-5">
    <!-- Another variation with a button -->
    <form action="#" method="post" id="addpost">
        @csrf <!-- {{ csrf_field() }} -->
        <div class="input-group">
            <select hx-post="api/queryed_amp" hx-target="#table_to_paste" hx-swap="innerHTML" hx-indicator=".htmx-indicator"
                class="bg bg-white text-primary rounded form-control" name="get_amp_val" id="get_amp_val">\
                <option value="">Choose...</option>
                @foreach ($vendor_names as $vend)
                    <option value="{{ $vend }}">{{ $vend }}</option>
                @endforeach

            </select>

        </div>
        <div class="table-responsive" id="table_to_paste">

        </div>
    </form>


</div>


