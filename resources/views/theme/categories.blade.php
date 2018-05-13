@if($categories)

    <div class="menu classic">
        <ul id="nav" class="menu">
            @foreach($categories as $category)
                <li>
                    {!! $category->goods !!}
                </li>
            @endforeach
        </ul>
    </div>

@endif
