@if($goods)
    <h3>Перечень товаров</h3>
    <div class="">
        <div id="" class="goodsList">
            @foreach($goods as $good)
                <div class="goodItem">
                    <div>
                        <img src="{{asset($good->image)}}" class="photo"> 
                    </div>
                    <span>
                       {!! $good->name !!}
                   </span>
                   <div>
                      цена:  {!! $good->price !!}
                   </div> 
                   <button>купить</button>
                </div>
            @endforeach
        </ul>
    </div>
    <script src="/public/js/app.js"></script>
@endif