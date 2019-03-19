@extends('web.app')


@section('content')
<form id="form-giris">
  <input type="text" name="username" placeholder="Kullanıcı Adı"><br>
  <input type="text" name="password" placeholder="Şifre"><br>
  <input type="submit" value="Giriş Yap"><br>
</form>
@endsection

@section('js')
<script>
$(function() {
  $('#form-giris').submit(function(e){
    e.preventDefault();
    var data = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: base_url + 'uye/giris',
      data: data,
      dataType: 'json',
      success: function(e) {
        if (e.statu) {
          window.location.href = e.location;
        } else {
          alert(e.msg);
        }
      },
    });

  })
})

</script>
@endsection