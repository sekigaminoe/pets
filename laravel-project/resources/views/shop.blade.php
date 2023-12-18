@extends('layouts.app')

@section('content')
<div class="container-fluid">
   　<div class="">
       　<div class="mx-auto" style="max-width:1200px">
            <div>
                <form action="{{ route('shop') }}" method="GET">
                    @csrf
                    <input type="text" name="keyword">
                    <input type="submit" value="検索">
                </form>
            </div>

            <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
            <div class="">
                <div class="d-flex flex-row flex-wrap">
           
                    @foreach($items as $item)
                        <div class="col-xs-6 col-sm-4 col-md-4 ">
                            <div class="mycart_box">
                                {{$item->name}} <br>
                                {{$item->fee}}円<br>
                                <img src="/image/{{$item->imgpath}}" alt="" class="incart" >
                                <br>
                                {{$item->detail}} <br>

                                <form action="mycart" method="post">
                                    @csrf
                                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                                    <input type="submit" value="カートに入れる">
                                </form>

                            </div>

                            <a class="text-center" href="/shop">商品一覧へ</a>
 
                        </div>
                    @endforeach                    
               　</div>
               　<div class="text-center" style="width: 200px;margin: 20px auto;">
                    {{  $items->links()}} 
               　</div>
           　</div>
       　</div>
   　</div>
</div>
@endsection