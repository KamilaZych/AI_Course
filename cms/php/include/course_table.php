      <div class="container-fluid">
        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <h5 class="card-title fw-semibold mb-4">Domyślne kursy</h5>
              <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                <?php include("../lib/display_table.php");
                  display_course(); ?></table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>