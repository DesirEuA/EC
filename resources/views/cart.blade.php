@extends('layouts.app')

@section('content')
<p> <h2 style="font-size:60px;color:white; font-family: 'HiraMinProN-W6'">カートの中身</h2> </p>
<a  class="btn btn-default" href="/top" style="float: right;margin-right: 100px;" > 商品ページに戻る </a>
<div class="row" style="margin-top: 70px">


<?php foreach($items as $index => $item):?>
<div class="col-lg-3" >
<form action="/cart/delete/<?=$index?>" method="POST">


    <?= csrf_field() ?>
    <div>
        <img  class="img-thumbnail" src="<?= $item->img ?>">
        <h1 style="font-size:40px;color:white; font-family: fantasy"><?= $item->name ?></h1>
        <h3 style="font-size:40px;color:white; font-family: fantasy">   <?= $item->price ?> 円</h3>

        <input type="submit" value="削除する">
        <!--        <a href="/cart/d"><input type="button" value="削除"></a>-->
    </div>
</form>
</div>
<?php endforeach; ?>
</div>

<a href="/buy"><button type="button" class="btn btn-success btn-lg btn-block"style="float: right;margin-right: 100px;">お届け先入力</button> </a>

</html>
@endsection