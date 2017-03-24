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

<script type="text/javascript">
  // $('.dropdown-toggle').click(function(){
  //   console.log('click');
  //   //now find the `.child` elements that are direct children of the clicked `<li>` and toggle it into or out-of-view
  //   $(this).parent().children('.submenu').slideToggle('slow');
  // });

  // add active class to nav menu
  $(function() {
      var url = location.pathname.split("/")[1];

      if(location.pathname.split("/")[2] !== undefined){
        url = url + "/" + location.pathname.split("/")[2];
      }

      if(location.pathname.split("/")[3] !== undefined){
        url = url + "/" + location.pathname.split("/")[3];
      }

      $('.nav li a[href^="/' + url + '"]:first').parent().addClass('active');
      $('.nav li a[href^="/' + url + '"]:first').parent().parent().show();
  });
</script>
