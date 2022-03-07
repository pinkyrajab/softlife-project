<!DOCTYPE html>
<html lang="en">
    <head>
       @include('partials.head')
    </head>

    <body>
        @include('partials.header')

        @yield('body')

        @include('partials.footer')

        @include('partials.scripts')
        <script>
            $(document).ready(function(){
                @if(Session::has('success'))
                    toastr.options =
                    {
                        "closeButton" : true,
                        "progressBar" : true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-bottom-right",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "3000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1500",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr.success("{{ session('success') }}");
                @endif

                @if(Session::has('error'))
                    toastr.options =
                    {
                        "closeButton" : true,
                        "progressBar" : true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                          "positionClass": "toast-bottom-full-width",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr.error("{{ session('error') }}");
                @endif

                @if(Session::has('info'))
                    toastr.options =
                    {
                        "closeButton" : true,
                        "progressBar" : true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                          "positionClass": "toast-bottom-full-width",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr.info("{{ session('info') }}");
                @endif

                @if(Session::has('warning'))
                    toastr.options =
                    {
                        "closeButton" : true,
                        "progressBar" : true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-bottom-full-width",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr.warning("{{ session('warning') }}");
                @endif
            });
        </script>
    </body>
</html>
