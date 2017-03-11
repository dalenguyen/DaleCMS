<!-- basic scripts -->

<!--[if !IE]> -->
<script src="http://ace.jeka.by/assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="http://ace.jeka.by/assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
  if('ontouchstart' in document.documentElement) document.write("<script src='http://ace.jeka.by/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="http://ace.jeka.by/assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
  <script src="http://ace.jeka.by/assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="http://ace.jeka.by/assets/js/jquery-ui.custom.min.js"></script>
<script src="http://ace.jeka.by/assets/js/jquery.ui.touch-punch.min.js"></script>

<!-- ace scripts -->
<script src="http://ace.jeka.by/assets/js/ace-elements.min.js"></script>
<script src="http://ace.jeka.by/assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
@yield('scripts')
