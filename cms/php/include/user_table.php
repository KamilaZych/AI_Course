      <div class="container-fluid">
        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <h5 class="card-title fw-semibold mb-4">Użytkownicy</h5>
              <div class="table-responsive">
                <table class="table">
                  <?php 
                  session_start();
                  include("../lib/display_table.php");
                  display_table('Admin=0'); 
                  ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>