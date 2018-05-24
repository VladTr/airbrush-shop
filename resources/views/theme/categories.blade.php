@if($categories)
    <h3>categories</h3>
    <div class="menu classic">
        <ul id="nav" class="menu">
            @foreach($categories as $category)
                <li>
                    <a href={{ url('/category',[$category->id]) }}>{!! $category->name !!}</a>
                    <!--
                        $category->goods - list of the goods
                    -->
                </li>
            @endforeach
        </ul>
    </div>
@endif
