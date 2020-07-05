@extends('layouts.master')

@section('konten')
<h1>Judul: {{$item->judul}}</h1><br>
<h3>Slug: {{$item->slug}}</h3><br>
<h4>{{$item->isi}}</h4>

<?php 
    $misah = explode(", ", $item->tag);
    foreach ($misah as $ms){
        echo '<button class="btn btn-success">' . $ms . '</button>' . ' ';
}
?>

@endsection