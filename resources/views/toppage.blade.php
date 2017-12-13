@extends('layouts.app')

@section('content')


    <a  class="btn btn-default" href="/cart" style="float: right;margin-right: 100px;" > カートに行く </a>

    <div class="row" style="margin-top: 70px">
    @if(isset($items))
    <?php foreach($items as $item): ?>
                <div class="col-lg-3">
                    <h4 style="font-size:40px;color:white; font-family: fantasy"><?= $item->name ?></h4>
                    <h4 style="font-size:40px;color:white; font-family: fantasy"><?= $item->price ?> 円</h4>
                    <img  class="img-thumbnail" src="<?= $item->img ?>" style="height: 300px;width: 300px">
                    <a class="btn btn-default" href="/detail/<?= $item->id ?>"> 詳細 </a>
                </div>
            <?php endforeach; ?>
    @endif
    </div>

@endsection