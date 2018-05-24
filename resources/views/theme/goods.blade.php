<h1>ertert</h1>
@if($goods)
    <h3>goods</h3>
    <div class="">
        <ul id="" class="">
            @foreach($goods as $good)
                <li>
                   {!! $good->name !!}
                </li>
            @endforeach
        </ul>
    </div>
@endif