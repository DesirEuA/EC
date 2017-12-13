@extends('layouts.app')

@section('content')

            <img src="<?= $item->img?>" style="height: 400px;width:auto">
            <h1 style="color:white; font-family: fantasy"><?= $item->name ?></h1>
            <h3 style="color:white; font-family: fantasy">　　　       <?= $item->price ?> 円</h3>
            <form action="/cart/<?= $item->id ?>" method="POST">
                <?= csrf_field() ?>
                <input style="margin-left:380px" class="btn btn-default" type="submit" value="カートに追加する">
            </form>



@endsection