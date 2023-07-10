<div class="container-fluid">
  <!--  Row 1 -->
  <div class="row">
    <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">
                Statystyki
              </h5>
            </div>
          </div>
          <h6 id="chartTitle" style="text-align: center;">Liczba fiszek z podziałem na kategorię</h6>
          <canvas id="myChart2"></canvas>

          <?php
          include('../lib/count_table.php');
          require_once("../../config/connect.php");

          $connect = connectToDataBase();

          // Sprawdź połączenie z bazą danych
          if ($connect->connect_error) {
            die("Błąd połączenia: " . $connect->connect_error);
          }

          // Pobierz unikalne id_category i nazwy kategorii z tabeli Categories
          $sql = "SELECT Ca.Id_category, Ca.Name FROM Category AS Ca";
          $result = $connect->query($sql);

          $data2 = array(); // Tablica na dane wykresu
          
          if ($result->num_rows > 0) {
            // Iteruj przez wyniki zapytania
            while ($row = $result->fetch_assoc()) {
              $idCategory = $row['Id_category'];
              $categoryName = $row['Name'];

              // Licz ilość kart w danej kategorii
              $cardsCount = countRecords("Card AS Co, Category AS Ca WHERE Co.Id_category=Ca.Id_category AND Ca.Id_category=$idCategory");

              // Dodaj dane do tablicy
              $data2[$categoryName] = $cardsCount;
            }
          }

          // Konwertuj dane na format JSON
          $jsonData2 = json_encode($data2);
          ?>
          <script>
            // Pobierz dane z PHP dla wykresu 2
            var jsonData2 = <?php echo $jsonData2; ?>;

            // Utwórz wykres 2
            var ctx2 = document.getElementById('myChart2').getContext('2d');
            var myChart2 = new Chart(ctx2, {
              type: 'bar',
              data: {
                labels: Object.keys(jsonData2),
                datasets: [{
                  data: Object.values(jsonData2),
                  backgroundColor: ['#bb86fc', '#4f73d9'] // Kolor dla każdej wartości
                }]
              },
              options: {
                aspectRatio: 1.5,
                scales: {
                  y: {
                    beginAtZero: true,
                    precision: 0 // Wyłącza liczby po przecinku na osi Y
                  }
                },
                plugins: {
                  legend: {
                    display: false // Wyłącza wyświetlanie legendy
                  },
                  tooltip: {
                    callbacks: {
                      label: function (context) {
                        var label = context.dataset.label || '';
                        label += ': ' + context.parsed.y;
                        return label;
                      }
                    }
                  }
                }
              }
            });

          </script>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="row">
        <div class="col-lg-12">
          <!-- Liczba użytkowników -->
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 id="labels" class="card-title mb-9 fw-semibold">Liczba użytkowników</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 id="data" class="fw-semibold mb-3">
                    <?php echo countRecords('Application_user WHERE Admin=0'); ?>
                  </h4>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                    <img src="../assets/images/products/users.png" alt="Obrazek z users">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <!-- Liczba adminów -->
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 id="labels" class="card-title mb-9 fw-semibold">Liczba adminów</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 id="data" class="fw-semibold mb-3">
                    <?php echo countRecords('Application_user WHERE Admin=1');
                    ?>
                  </h4>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                    <img src="../assets/images/products/user.png" alt="Obrazek z user">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <!-- Liczba fiszek -->
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 id="labels" class="card-title mb-9 fw-semibold">Liczba fiszek</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 id="data" class="fw-semibold mb-3">
                    <?php echo countRecords('Card');
                    ?>
                  </h4>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                    <img src="../assets/images/products/card.png" alt="Obrazek z fiszkami">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <!-- Liczba fiszek -->
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 id="labels" class="card-title mb-9 fw-semibold">Liczba domyślnych kursów</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 id="data" class="fw-semibold mb-3">
                    <?php echo countRecords('Course WHERE Availability=1');
                    ?>
                  </h4>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                    <img src="../assets/images/products/course.png" alt="Obrazek z biretem">
                  </div>
                </div>
              </div>
            </div>
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