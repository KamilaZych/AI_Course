<div class="container-fluid">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Edytuj kurs</h5>
        <div class="card">
          <div class="card-body">
            <form action="../lib/edit_course.php" method="POST">
              <div class="mb-3">
                <label class="form-label">Nazwa kursu</label>
                <input type="text" name="Name" class="form-control" id="Name" required
                  value="<?php include("../lib/data_course.php");
                  echo data_course("Name"); ?>">
              </div>
              <div class="mb-3">
                <label for="selectMenu" class="form-label">Poziom </label>
                <select id="Course_Level" name="Course_Level" class="form-select">
                  <option value="A1" <?php if (data_course("Course_Level") == "A1") {
                    echo "selected";
                  } ?>>A1</option>
                  <option value="A2" <?php if (data_course("Course_Level") == "A2") {
                    echo "selected";
                  } ?>>A2</option>
                  <option value="B1" <?php if (data_course("Course_Level") == "B1") {
                    echo "selected";
                  } ?>>B1</option>
                  <option value="B2" <?php if (data_course("Course_Level") == "B2") {
                    echo "selected";
                  } ?>>B2</option>
                  <option value="C1" <?php if (data_course("Course_Level") == "C1") {
                    echo "selected";
                  } ?>>C1</option>
                  <option value="C2" <?php if (data_course("Course_Level") == "C2") {
                    echo "selected";
                  } ?>>C2</option>
                </select>
              </div>
              <input type="hidden" name="Id_course" value=<?php echo $_POST['Id_course']; ?>>
              <button type="submit" class="btn btn-primary m-1" style="width:99.2%;">Edytuj kurs</button>
              <p></p>
              <h5 class="error">
                <?php
                session_start();
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
              </h5>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/sidebarmenu.js"></script>
<script src="../assets/js/app.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>
</html>