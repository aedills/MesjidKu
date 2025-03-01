<!DOCTYPE html>
<html lang="en">
@include('admin.components.header')

<body>
    @include('admin.components.toopbar')
    @include('admin.components.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{$page_title}}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        @yield('content')
    </main>

    @include('admin.components.footer')
</body>

</html>