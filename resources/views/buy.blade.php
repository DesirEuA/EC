@extends('layouts.app')
@section('style')
    label{
    margin-right:30px;
    }
@endsection
@section('content')
<form action="/buy" method="POST">

    <?=csrf_field()?>
<p><label>Name:　</label><input type="text" name="name" value="@if(Auth::user())<?= Auth::user()->name  ?>@endif"></p>
<p><label>E-mail:</label><input type="text" name="email" placeholder="example@oic.jp"></p>
<p><label>TEL:</label><input type="text" name="tel"></p>
<p><label>Address:</label><input type="text" name="address"></p>
<input type="submit"value="ok">
</form>

<?php if($errors->first('name')):?>
    名前を入力してください。
<?php endif;?>

<?php if($errors->first('email')):?>
    Emailを入力してください。
<?php endif;?>


@endsection