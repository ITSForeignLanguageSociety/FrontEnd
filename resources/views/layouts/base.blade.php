<html>
<head>
    @include('layouts.head')
</head> 
    
<body>
    @include('layouts.navbar')

    <main class="page landing-page">
        @yield('content')
    </main>
    @include('layouts.footer')
</body>
    

