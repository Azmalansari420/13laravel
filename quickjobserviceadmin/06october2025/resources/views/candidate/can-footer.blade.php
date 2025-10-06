   <!-- Copyright -->
    <div class="copyright-text">
      <p>© {!! date('Y') !!} {{env('website_name')}}. All Right Reserved.</p>
    </div>

  </div><!-- End Page Wrapper -->







  <!-- Toast Container -->
<div class="position-fixed bottom-0 start-50 translate-middle-x p-3" style="z-index: 9999;">
  <div id="toastMessage" class="toast align-items-center text-white bg-primary border-0" role="alert">
    <div class="d-flex">
      <div class="toast-body" id="toastText">
        This is a toast message.
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  </div>
</div>



  <script src="{{url('')}}/js/jquery.js"></script>
  <script src="{{url('')}}/js/popper.min.js"></script>
  <script src="{{url('')}}/js/chosen.min.js"></script>
  <script src="{{url('')}}/js/bootstrap.min.js"></script>
  <script src="{{url('')}}/js/jquery-ui.min.js"></script>
  <script src="{{url('')}}/js/jquery.fancybox.js"></script>
  <script src="{{url('')}}/js/jquery.modal.min.js"></script>
  <script src="{{url('')}}/js/mmenu.polyfills.js"></script>
  <script src="{{url('')}}/js/mmenu.js"></script>
  <script src="{{url('')}}/js/appear.js"></script>
  <script src="{{url('')}}/js/ScrollMagic.min.js"></script>
  <script src="{{url('')}}/js/rellax.min.js"></script>
  <script src="{{url('')}}/js/owl.js"></script>
  <script src="{{url('')}}/js/wow.js"></script>
  <script src="{{url('')}}/js/knob.js"></script>
  <script src="{{url('')}}/js/script.js"></script>

 
<script>
function showToast(message, type = 'primary') 
{
    const toastEl = document.getElementById('toastMessage');
    const toastBody = document.getElementById('toastText');

    // Set message and type
    toastBody.textContent = message;
    toastEl.className = `toast align-items-center text-white bg-${type} border-0`;

    // Show the toast for minimum 2 seconds
    const toast = new bootstrap.Toast(toastEl, {
        delay: 2000  // 2 seconds
    });
    toast.show();
}


</script>
</body>

</html>