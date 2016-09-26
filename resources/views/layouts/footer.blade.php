
<script src="{{ asset ('/assets/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset ('/assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset ('/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ('/assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset ('/assets/js/pace.min.js') }}"></script>
<script src="{{ asset ('/assets/js/retina.min.js') }}"></script>
<script src="{{ asset ('/assets/js/jquery.cookies.js') }}"></script>
<script src="{{ asset ('/assets/js/jquery.tagsinput.min.js') }}"></script>
<script src="{{ asset ('/assets/js/select2.min.js')}}"></script>
<script src="{{ asset ('/assets/js/custom.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<script language="javascript">
    //disabling past date from datepicker
    var nowDate = new Date();
    var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
    //initializing datepicker
    $('.date').datepicker({format:'yyyy-mm-dd', startDate: today });
</script>

</body>
</html>