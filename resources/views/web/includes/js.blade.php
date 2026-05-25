<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="/public/js/jquery.js"></script>
<script src="/public/js/popper.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/jquery-ui.js"></script>
<script src="/public/js/jquery.fancybox.js"></script>
<script src="/public/js/jquery.countdown.js"></script>
<script src="/public/js/appear.js"></script>
<script src="/public/js/owl.js"></script>
<script src="/public/js/wow.js"></script>
<script src="/public/js/parallax.min.js"></script>
<script src="/public/js/script.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

<!-- Color Setting -->
<script src="js/color-settings.js"></script>

<script>
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

</script>