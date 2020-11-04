
@if (session()->has('mensaje'))
    <script>
        toastr.success( "{{ session('mensaje') }}");
    </script>
@endif
@if (session()->has('mensaje-error'))
    <script>
        toastr.error("{{ @session('mensaje-error') }}", "info");
    </script>
@endif




