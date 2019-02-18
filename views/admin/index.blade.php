{{--Views dizininin altında ki admin klasöründe ki app.blade.php dosyamızı dahil ediyoruz --}}
@extends('admin.app') 


@section('content')
<div>
 Dinamik Master Page (Admin Sayfası)
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