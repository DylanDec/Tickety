@if(session('success'))
<script>
    window.addEventListener('load', function () {
        swal({
            title: '{{ session('success') }}',
            type: 'success',
            padding: '2em'
        })
    });
</script>
@endif

@if(session('warning'))
    <script>
        window.addEventListener('load', function () {
            swal({
                title: '{{ session('warning') }}',
                type: 'warning',
                padding: '2em'
            })
        });
    </script>
@endif

@if(session('danger'))
    <script>
        window.addEventListener('load', function () {
            swal({
                title: '{{ session('danger') }}',
                type: 'error',
                padding: '2em'
            })
        });
    </script>
@endif

@if(session('error'))
    <script>
        window.addEventListener('load', function () {
            swal({
                title: '{{ session('error') }}',
                type: 'error',
                padding: '2em'
            })
        });
    </script>
@endif
