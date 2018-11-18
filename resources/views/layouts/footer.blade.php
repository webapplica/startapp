<footer class="footer">
    <div class="container-fluid clearfix">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©  @php
          echo date('Y')
      @endphp
        <a href="{{ config('client.website') }}" target="_blank">{{ config('client.name') }} </a>. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
        <i class="mdi mdi-heart text-danger"></i>
      </span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{ asset('vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('js/off-canvas.js')}}"></script>
<script src="{{ asset('js/misc.js')}}"></script>
<!-- endinject -->
@stack('scripts')
<!-- End custom js for this page-->
</body>
</html>
