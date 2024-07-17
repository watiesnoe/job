<footer class="footer mt-50 ">
    <div class="container-fluid  pt-30 card-shadow border-radius bg-white">
        <div class="row ml-100 pb-30">
            <div class="footer-col-1 col-md-3 col-sm-12"><a href="index.html"><img alt="jobBox" src="{{asset('assets/imgs/template/jobhub-logo.svg')}}"></a>
                <div class="mt-20 mb-20 font-xs color-text-paragraph-2">N°1 dans la mise en realtion entre expert de divers domaines</div>
                <div class="footer-social"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-twitter" href="#"></a><a class="icon-socials icon-linkedin" href="#"></a></div>
            </div>
            <div class="footer-col-4 col-md-2 col-xs-6 ml-100">
                <h3 class="mb-20">LEGALES</h3>
                <ul class="menu-footer">
                    <li><a href="#">Mentions legales</a></li>
                    <li><a href="#">CGU</a></li>
                    <li><a href="#">Données personnelles</a></li>
                    <li><a href="#">Politique de cookies</a></li>
                </ul>
            </div>
            <div class="footer-col-3 col-md-2 col-xs-6 ml-100">
                <h3 class="mb-20">A PROPOS</h3>
                <ul class="menu-footer">
                    <li><a href="#">Qui sommes-nous</a></li>
                    <li><a href="#">Nous contacter</a></li>

                </ul>
            </div>

        </div>
    </div>
</footer>
<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>
<script src="{{asset('assets/js/plugins/wow.js')}}"></script>
<script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/select2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
<script src="{{asset('assets/js/plugins/scrollup.js')}}"></script>
<script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/noUISlider.js')}}"></script>
<script src="{{asset('assets/js/slider.js')}}"></script>
<script src="{{asset('assets/js/main.js?v=4.1')}}"></script>
<script src="{{asset('plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });

        //Date and time picker
        $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        })

        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function(file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function(file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
</script>
{{--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>--}}
{{--<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>--}}
{{--<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>--}}
{{--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script><script  src="./script.js"></script>--}}
{{--<script>--}}
    {{--;(function($) {--}}
        {{--"use strict";--}}

        {{--//* Form js--}}
        {{--function verificationForm(){--}}
            {{--//jQuery time--}}
            {{--var current_fs, next_fs, previous_fs; //fieldsets--}}
            {{--var left, opacity, scale; //fieldset properties which we will animate--}}
            {{--var animating; //flag to prevent quick multi-click glitches--}}

            {{--$(".next").click(function () {--}}
                {{--if (animating) return false;--}}
                {{--animating = true;--}}

                {{--current_fs = $(this).parent();--}}
                {{--next_fs = $(this).parent().next();--}}

                {{--//activate next step on progressbar using the index of next_fs--}}
                {{--$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");--}}

                {{--//show the next fieldset--}}
                {{--next_fs.show();--}}
                {{--//hide the current fieldset with style--}}
                {{--current_fs.animate({--}}
                    {{--opacity: 0--}}
                {{--}, {--}}
                    {{--step: function (now, mx) {--}}
                        {{--//as the opacity of current_fs reduces to 0 - stored in "now"--}}
                        {{--//1. scale current_fs down to 80%--}}
                        {{--scale = 1 - (1 - now) * 0.2;--}}
                        {{--//2. bring next_fs from the right(50%)--}}
                        {{--left = (now * 50) + "%";--}}
                        {{--//3. increase opacity of next_fs to 1 as it moves in--}}
                        {{--opacity = 1 - now;--}}
                        {{--current_fs.css({--}}
                            {{--'transform': 'scale(' + scale + ')',--}}
                            {{--'position': 'absolute'--}}
                        {{--});--}}
                        {{--next_fs.css({--}}
                            {{--'left': left,--}}
                            {{--'opacity': opacity--}}
                        {{--});--}}
                    {{--},--}}
                    {{--duration: 800,--}}
                    {{--complete: function () {--}}
                        {{--current_fs.hide();--}}
                        {{--animating = false;--}}
                    {{--},--}}
                    {{--//this comes from the custom easing plugin--}}
                    {{--easing: 'easeInOutBack'--}}
                {{--});--}}
            {{--});--}}

            {{--$(".previous").click(function () {--}}
                {{--if (animating) return false;--}}
                {{--animating = true;--}}

                {{--current_fs = $(this).parent();--}}
                {{--previous_fs = $(this).parent().prev();--}}

                {{--//de-activate current step on progressbar--}}
                {{--$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");--}}

                {{--//show the previous fieldset--}}
                {{--previous_fs.show();--}}
                {{--//hide the current fieldset with style--}}
                {{--current_fs.animate({--}}
                    {{--opacity: 0--}}
                {{--}, {--}}
                    {{--step: function (now, mx) {--}}
                        {{--//as the opacity of current_fs reduces to 0 - stored in "now"--}}
                        {{--//1. scale previous_fs from 80% to 100%--}}
                        {{--scale = 0.8 + (1 - now) * 0.2;--}}
                        {{--//2. take current_fs to the right(50%) - from 0%--}}
                        {{--left = ((1 - now) * 50) + "%";--}}
                        {{--//3. increase opacity of previous_fs to 1 as it moves in--}}
                        {{--opacity = 1 - now;--}}
                        {{--current_fs.css({--}}
                            {{--'left': left--}}
                        {{--});--}}
                        {{--previous_fs.css({--}}
                            {{--'transform': 'scale(' + scale + ')',--}}
                            {{--'opacity': opacity--}}
                        {{--});--}}
                    {{--},--}}
                    {{--duration: 800,--}}
                    {{--complete: function () {--}}
                        {{--current_fs.hide();--}}
                        {{--animating = false;--}}
                    {{--},--}}
                    {{--//this comes from the custom easing plugin--}}
                    {{--easing: 'easeInOutBack'--}}
                {{--});--}}
            {{--});--}}

            {{--$(".submit").click(function () {--}}
                {{--return false;--}}
            {{--})--}}
        {{--};--}}

        {{--//* Add Phone no select--}}
        {{--function phoneNoselect(){--}}
            {{--if ( $('#msform').length ){--}}
                {{--$("#phone").intlTelInput();--}}
                {{--$("#phone").intlTelInput("setNumber", "+880");--}}
            {{--};--}}
        {{--};--}}
        {{--//* Select js--}}
        {{--function nice_Select(){--}}
            {{--if ( $('.product_select').length ){--}}
                {{--$('select').niceSelect();--}}
            {{--};--}}
        {{--};--}}
        {{--/*Function Calls*/--}}
        {{--verificationForm ();--}}
        {{--phoneNoselect ();--}}
        {{--nice_Select ();--}}
    {{--})(jQuery);--}}
{{--</script>--}}