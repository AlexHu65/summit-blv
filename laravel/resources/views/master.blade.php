<!doctype html>
<html lang="en">
<head>
  <meta name="google-site-verification" content="{{setting('site.google-site-verification')}}" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="{{setting('site.description')}}">
  <meta name="keywords" content="{{ setting('site.keywords')}}">
  <meta name="author" content="Difraxion">
  <meta name="robots" content="all">
  <meta name="geo.region" content="MX-GUA">
  <meta name="geo.placename" content="México">
  <meta name="DC.title" content="{{setting('site.title')}}">
  <meta property="og:image:alt" content="{{setting('site.title')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta property="og:type" content="website">
  <meta property="og:title" content="{{setting('site.title')}}">
  <meta property="og:description" content="{{setting('site.description')}}">
  <meta property="og:image" content="{{asset('storage/' . setting('site.logo'))}}">
  <meta property="og:image:alt" content="{{setting('site.title')}}">
  <meta property="og:site_name" content="{{setting('site.nombre')}}">
  <meta property="og:url" content="{{setting('site.url')}}">
  <meta name="twitter:title" content="{{setting('site.title')}}">
  <meta name="twitter:description" content="{{setting('site.description')}}">
  <meta name="twitter:image" content="{{asset('storage/' . setting('site.logo'))}}">
  <meta name="robots" content="all">
  <meta name="copyright" content="Copyright (c) 2017">
  @include('partials.assets')
  <link rel='shortcut icon' type='image/x-icon' href='{{asset('images/favicon.png')}}'/>
  <title> {{setting('site.title')}} - @yield('title') {{ setting('site.keywords')}}</title>
  <!--
  Este sitio ha sido desarrollado por Difraxion Group.
  Tel. +52 01 (477) 198 09 65
  E-mail: ventas@reed.com.mx
  www.difraxion.com
  León, Guanajuato
-->
<!-- analytics de google -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{setting('site.google_analytics_tracking_id')}}"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', '{{setting('site.google_analytics_tracking_id')}}');
</script>
<!-- GetButton.io widget -->
<script type="text/javascript">
(function () {
  var options = {
    facebook: "{{setting('site.facebookid')}}", // Facebook page ID
    whatsapp: "{{setting('site.whatsapp')}}", // WhatsApp number
    call_to_action: "", // Call to action
    button_color: "#FF318E", // Color of button
    position: "right", // Position may be 'right' or 'left'
    order: "facebook,whatsapp", // Order of buttons
  };
  var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
  s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
  var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
<!-- /GetButton.io widget -->
<script src="http://maps.google.com/maps/api/js"></script>
<script src="{{asset('js/gmaps.js')}}"></script>
</head>
<body {{isset($paquetes) ? 'style=background:white;' : ''}}>
  <div id="app">
    <header {{isset($paquetes) ? 'class=headInterior' : ''}} id="header">
      <div class="container">

        @include('partials.menu')

      </div>
    </header>
    @yield('content')
    <footer>
      @include('partials.footer')
    </footer>
  </div>
  @include('partials.scripts')

  <script>
    $(".icono").hover(
      function() {
          console.log('hover');
          $(this).addClass('bounce');
      }, function() {
         console.log('hover out');
         $(this).removeClass('bounce');

      });

      $(".item-soluciones").hover(
      function() {
        var target = $(this).attr('id');
        $(`#${target}Text`).hide(500);
        $(`#${target}Hover`).show(500);
      }, function() {
        var target = $(this).attr('id');
        $(`#${target}Text`).show(500);
        $(`#${target}Hover`).hide(500);

      });


</script>
<!-- Modal -->
<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal modal-background fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
        <video id="videoSummit" controls src="{{asset('video/summit.mp4')}}">
        </video>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">CERRAR <i class="fas fa-times"></i></button>
        </div>
      </div>
    </div>
  </div>
  <script>
      $("#exampleModal").on('shown.bs.modal', function () {
        $('#videoSummit').trigger('play');
    });

    $("#exampleModal").on('hidden.bs.modal', function () {
        $('#videoSummit').trigger('pause');
    });
  </script>
</body>
</html>
