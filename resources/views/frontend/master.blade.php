<!DOCTYPE html>
<html lang="en">
    @include('frontend.header')
   
    <body class="d-flex flex-column h-100">
        
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('frontend.menu')
           @yield('body')
        </main>
        <!-- Footer-->
       @include('frontend.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <script src="{{asset('/frontend/js/scripts.js')}}"></script>
    </body>
</html>

