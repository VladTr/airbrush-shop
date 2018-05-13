@extends(env('THEME').'.layouts.site')

@section('navigation')
    {!! $navigation !!}
@endsection

@section('sliders')
    {!! $sliders !!}
@endsection

@section('categories')
    {!! $categories !!}
@endsection
