<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    <div class="container-scroller">
        @include('partials.navbar')

        <div class="container-fluid page-body-wrapper">
            @include('partials.sidebar')

            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>

                @include('partials.footer')
            </div>
        </div>
    </div>

    
</body>

</html>