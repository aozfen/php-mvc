{{--Views dizininin altında ki web klasöründe ki app.blade.php dosyamızı dahil ediyoruz --}}
@extends('web.app')


@section('content')
<div>
 Dinamik Master Page (Web Profil Sayfası)
</div>
@endsection


@section('css')
 <!-- Sayfaya özel CSS kodu eklenebilir -->
 <!--<link rel="stylesheet" href="style.css">-->
@endsection

@section('js')
 <!-- Sayfaya özel JS kodu eklenebilir -->
 <!--<script src=""></script>-->
@endsection
