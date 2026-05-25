{{-- @if($errors->count())
    <div class="alert alert-warning alert-dismissible fade show" style="position: fixed; z-index: 10000; top: 30px; right: 30px;" role="alert">
        {{ $errors->first() }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('danger'))
    <div class="alert alert-danger alert-dismissible fade show" style="position: fixed; z-index: 10000; top: 30px; right: 30px;" role="alert">
        {{ session('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('info'))
    <div class="alert alert-info alert-dismissible fade show" style="position: fixed; z-index: 10000; top: 30px; right: 30px;" role="alert">
        {{ session('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" style="position: fixed; z-index: 10000; top: 30px; right: 30px;" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif --}}

@if($errors->count())
    <div class="alert alert-warning alert-dismissible fade show" style="position: fixed; z-index: 10000; top: 30px; right: 30px;" role="alert" id="alert">
        {{ $errors->first() }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('danger'))
    <div class="alert alert-danger alert-dismissible fade show" style="position: fixed; z-index: 10000; top: 30px; right: 30px;" role="alert" id="alert">
        {{ session('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('info'))
    <div class="alert alert-info alert-dismissible fade show" style="position: fixed; z-index: 10000; top: 30px; right: 30px;" role="alert" id="alert">
        {{ session('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" style="position: fixed; z-index: 10000; top: 30px; right: 30px;" role="alert" id="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<script>
    // Automatically close the alert after 5 seconds (5000 ms)
    setTimeout(function() {
        let alertElement = document.getElementById('alert');
        if (alertElement) {
            // Fade out the alert
            alertElement.classList.remove('show');
            alertElement.classList.add('fade');
            setTimeout(function() {
                alertElement.style.display = 'none';
            }, 150); // Wait for the fade-out effect to complete
        }
    }, 5000);
</script>



{{-- @if($errors->count())
    <x-alert type="warning" :allowDismiss="true" :animateEnter="'animate__bounce'" :animateExit="'animate__fadeOut'" :zIndex="10000" :offset="['x' => 30, 'y' => 30]" :delay="5000" :timer="1000">
        {{ $errors->first() }}
    </x-alert>
@elseif(session()->has('danger'))
    <x-alert type="danger" :allowDismiss="true" :animateEnter="'animate__bounce'" :animateExit="'animate__fadeOut'" :zIndex="10000" :offset="['x' => 30, 'y' => 30]" :delay="5000" :timer="1000">
        {{ session('danger') }}
    </x-alert>
@elseif(session()->has('info'))
    <x-alert type="info" :allowDismiss="true" :animateEnter="'animate__bounce'" :animateExit="'animate__fadeOut'" :zIndex="10000" :offset="['x' => 30, 'y' => 30]" :delay="5000" :timer="1000">
        {{ session('info') }}
    </x-alert>
@elseif(session()->has('success'))
    <x-alert type="success" :allowDismiss="true" :animateEnter="'animate__bounce'" :animateExit="'animate__fadeOut'" :zIndex="10000" :offset="['x' => 30, 'y' => 30]" :delay="5000" :timer="1000">
        {{ session('success') }}
    </x-alert>
@endif --}}

{{-- @if($errors->count())
    <div class="alert alert-warning alert-dismissible fade show animate__animated animate__bounce"
        role="alert"
        style="position: fixed; z-index: 10000; top: 30px; right: 30px;"
        data-delay="5000"
        data-timer="1000"
        data-animate-exit="animate__fadeOut">
        {{ $errors->first() }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('danger'))
    <div class="alert alert-danger alert-dismissible fade show animate__animated animate__bounce"
        role="alert"
        style="position: fixed; z-index: 10000; top: 30px; right: 30px;"
        data-delay="5000"
        data-timer="1000"
        data-animate-exit="animate__fadeOut">
        {{ session('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('info'))
    <div class="alert alert-info alert-dismissible fade show animate__animated animate__bounce"
        role="alert"
        style="position: fixed; z-index: 10000; top: 30px; right: 30px;"
        data-delay="5000"
        data-timer="1000"
        data-animate-exit="animate__fadeOut">
        {{ session('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show"
        role="alert"
        style="position: fixed; z-index: 10000; top: 30px; right: 30px;"
        data-delay="5000"
        data-timer="1000"
        data-animate-exit="animate__fadeOut">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif --}}

{{-- <script>
    document.querySelectorAll('.alert').forEach(alert => {
        let delay = alert.dataset.delay;
        let timer = alert.dataset.timer;
        let animateExit = alert.dataset.animateExit;

        if (timer > 0) {
            setTimeout(() => {
                alert.classList.remove('show');
                alert.classList.add(animateExit);
                setTimeout(() => {
                    alert.remove();
                }, delay);
            }, timer);
        }
    });
</script> --}}


{{-- <script type="text/javascript">
    @if($errors->count())
        toastr.warning("{{ $errors->first() }}", "Warning", {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut"
        });
    @elseif(session()->has('danger'))
        toastr.error("{{ session('danger') }}", "Error", {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut"
        });
    @elseif(session()->has('info'))
        toastr.info("{{ session('info') }}", "Info", {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut"
        });
    @elseif(session()->has('success'))
        toastr.success("{{ session('success') }}", "Success", {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut"
        });
    @endif
</script> --}}
{{-- @if(Session::has('success'))
    <script>
        toastr.success("{!! Session::get('success') !!}");
    </script>
@endif --}}




