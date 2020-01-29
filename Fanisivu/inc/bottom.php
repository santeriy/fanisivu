  <!-- Footer -->
  <footer class="py-4 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Santeri Yritys &copy; Jerusalem fanisivu</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
            $(document).ready(function() {
                console.log("toimii");
                
                $("#new").click(function() {
                  $("#asiakastiedot").submit();
                });
            });
        </script>


</body>
</html>