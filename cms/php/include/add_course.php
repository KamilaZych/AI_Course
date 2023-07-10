<div class="container-fluid">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Dodaj</h5>
        <div class="card">
          <div class="card-body">
            <form action="../lib/add_course.php" method="POST">
              <div class="mb-3">
                <label class="form-label">Nazwa kursu</label>
                <input type="text" name="Name" class="form-control" id="Name">
              </div>
              <div class="mb-3">
                <label for="selectMenu" class="form-label">Poziom</label>
                <select id="Course_Level" name="Course_Level" class="form-select">
                  <option value="A1">A1</option>
                  <option value="A2">A2</option>
                  <option value="B1">B1</option>
                  <option value="B2">B2</option>
                  <option value="C1">C1</option>
                  <option value="C2">C2</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary m-1" style="width:99.2%;">Dodaj kurs</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>

</html>