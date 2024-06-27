 <!DOCTYPE html>
 <html>
 <head>
     <title>@yield('title', 'My App')</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 </head>
 <body>
     {{-- شريط التنقل --}}
     @php
         $navLinks = [
            ['name' => 'information', 'url' => route('info.index')],
            ['name' => 'insert', 'url' => route('info.create')],
            ['name' => 'reuse', 'url' => '#'],
            ['name' => 'reuse', 'url' => '#'],
         ];
     @endphp
     <x-navbar :links="$navLinks" />
     {{-- محتوى الصفحة --}}
     <div class="container mt-4">
         @yield('content')
         
     </div>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
 </html>
 