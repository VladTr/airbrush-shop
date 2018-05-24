@foreach($items as $item)
    <li {!! URL::current() == $item->url() ? "class=active" : "" !!} class="dropdown">
    {{--<li {!! $item->hasChildren() ? "class=parent dropdown-menu" : "dropdown-menu" !!}>--}}
        @if($item->hasChildren())
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{!! $item->title !!}</a>
        @else
            <a href={!! $item->url() !!}>{!! $item->title !!}</a>
        @endif

        @if($item->hasChildren())
            <ul class="dropdown-menu">
                @include(env('THEME').'.customMenuItems', ['items'=>$item->children()])
            </ul>
        @endif
    </li>
@endforeach