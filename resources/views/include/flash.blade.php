<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
</script>

@if ($message = Session::get('success'))
    <script>
        Toast.fire({
            icon: 'success',
            title: '{{$message}}'
        })
    </script>
@endif


@if ($message = Session::get('error'))
<script>
    Toast.fire({
        icon: 'error',
        title: '{{$message}}'
    })
</script>
@endif


@if ($message = Session::get('warning'))
<script>
    Toast.fire({
        icon: 'warning',
        title: '{{$message}}'
    })
</script>
@endif


@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($errors->any())
    <script>
        Toast.fire({
            icon: 'error',
            title: 'Please check the form below for errors'
        })
    </script>
@endif
