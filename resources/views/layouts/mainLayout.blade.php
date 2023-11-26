@extends('layouts.head')
@section('page_title')
    @yield('page_title')
@endsection
<body>
    <div class="container my-5">
        @yield('main_content')
    </div>
</body>
</html>
