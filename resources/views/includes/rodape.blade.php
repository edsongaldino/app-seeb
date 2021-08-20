<footer class="br-footer">
    <div class="footer-left">
      <div class="mg-b-2">Copyright &copy; 2017. Bracket. All Rights Reserved.</div>
      <div>Attentively and carefully made by ThemePixels.</div>
    </div>
    <div class="footer-right d-flex align-items-center">
      <span class="tx-uppercase mg-r-10">Share:</span>
      <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
      <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
    </div>
  </footer>
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<script src="/assets/lib/popper.js/popper.js"></script>
<script src="/assets/lib/bootstrap/bootstrap.js"></script>
<script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="/assets/lib/moment/moment.js"></script>
<script src="/assets/lib/jquery-ui/jquery-ui.js"></script>
<script src="/assets/lib/jquery-switchbutton/jquery.switchButton.js"></script>
<script src="/assets/lib/peity/jquery.peity.js"></script>
<script src="/assets/lib/chartist/chartist.js"></script>
<script src="/assets/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
<script src="/assets/lib/d3/d3.js"></script>
<script src="/assets/lib/rickshaw/rickshaw.min.js"></script>

<script type="text/javascript" src="/assets/lib/sweetalert/dist/sweetalert.min.js" ></script>

<script src="/assets/js/bracket.js"></script>
<script src="/assets/js/ResizeSensor.js"></script>
<script src="/assets/js/dashboard.js"></script>

@include('sweetalert::alert')

<script src="{{ asset('assets/js/confirmacoes.js') }}"></script>
<script src="{{ asset('assets/js/busca.js') }}"></script>
<script src="{{ asset('assets/js/cep.js') }}"></script>
<script src="{{ asset('assets/js/mascaras.js') }}"></script>
<script>
  $(function(){
    'use strict'

    // FOR DEMO ONLY
    // menu collapsed by default during first page load or refresh with screen
    // having a size between 992px and 1299px. This is intended on this page only
    // for better viewing of widgets demo.
    $(window).resize(function(){
      minimizeMenu();
    });

    minimizeMenu();

    function minimizeMenu() {
      if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
        // show only the icons and hide left menu label by default
        $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
        $('body').addClass('collapsed-menu');
        $('.show-sub + .br-menu-sub').slideUp();
      } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
        $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
        $('body').removeClass('collapsed-menu');
        $('.show-sub + .br-menu-sub').slideDown();
      }
    }
  });
</script>

</body>
</html>