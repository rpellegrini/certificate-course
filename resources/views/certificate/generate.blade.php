<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Certificate</title>
</head>
<body>

  <div style="position: fixed; left: 0px; top: 0px; right: 0px; bottom: 0px; text-align: center;z-index: -1000; background-color: brown;">
    <img src="{{ asset('assets/images/fundo.jpg')}}" style="width: 100%;">
  </div>

  <div style="padding-top: 100px; text-align:center;">
    <span style="font-size:60px;">Certificado de Conclusão</span>
  <div>

  <div style="padding-top: 40px; text-align:center;">
    <span style="font-size:20px;">{{$curso ?? null}}</span>
  <div>

  <div style="padding-top: 40px; text-align:center;">
    <span style="font-size:55px;">{{$nome ?? null}}</span>
  <div>

  <div style="padding-top: 5px; text-align:center;">
    <span style="font-size:22px;">{{date('d/m/Y', strtotime($dataConclusao))}}</span>
  <div>

</body>
</html>
