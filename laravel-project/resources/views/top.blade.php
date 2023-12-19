@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="">
        <div class="mx-auto" style="max-width:1200px">
            <h1 class="text-center font-weight-bold" style="color:#555555; padding:24px 0px;">ようこそペットフードショップへ！</h1>
            <div class="card-body">
                <div>
                    <p class="text-center" style="font-size: 18px;">
                        哺乳類、鳥類、爬虫類、両生類などたくさんの種類のペットフードをご用意しておりますので、ぜひご覧になってください。<br>
                        ログイン、会員登録は下記からお願いします。
                    </p>
                </div>
                <div class="mt-5 text-center">
                    <form action="/login" method="get">
                        @csrf
                        <button class="btn btn-success" style="width: 500px;">
                            ログイン
                        </button>
                    </form>
                </div>
                <div class="mt-3 text-center">
                    <form action="/register" method="get">
                        @csrf
                        <button class="btn btn-primary mb-5" style="width: 500px;">
                            会員登録
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection