<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Praktikum 02</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h1 style="text-align: center;">Form Belanja</h1>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <body style="background-color: aquamarine;">
    <div class="container">
        <div id="harga_produk">
            <p><strong>Harga Produk:</strong> Rp 0</p>
        </div>
        <form id="shopping-form" action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" id="nama_customer" name="nama_customer" placeholder="Nama Customer" required>
            </div>
            <div class="form-group">
                <label>Pilihan Produk:</label>
                <div class="custom-radio horizontal">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="televisi" name="produk" class="custom-control-input" value="Televisi" data-harga="1000000" required>
                        <label class="custom-control-label" for="televisi">Televisi</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="kulkas" name="produk" class="custom-control-input" value="Kulkas dingin" data-harga="2000000" required>
                        <label class="custom-control-label" for="kulkas">Kulkas dingin</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="kompor" name="produk" class="custom-control-input" value="Kompor Gazz" data-harga="500000" required>
                        <label class="custom-control-label" for="kompor">Kompor Gazz</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
        <div class="result mt-4">
            <h3 class="text-center mb-4">Detail Belanja</h3>
            <div id="nama_customer_result"></div>
            <div id="produk_result"></div>
            <div id="harga_result"></div>
            <div id="jumlah_result"></div>
            <div id="total_harga_result"></div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById("shopping-form").addEventListener("submit", function(event) {
            event.preventDefault();

            var nama_customer = document.getElementById("nama_customer").value;
            var produk = document.querySelector('input[name="produk"]:checked').value;
            var harga = parseInt(document.querySelector('input[name="produk"]:checked').getAttribute("data-harga"));
            var jumlah = parseInt(document.getElementById("jumlah").value);
            var total_harga = harga * jumlah;

            document.getElementById("nama_customer_result").innerHTML = "<p><strong>Nama Customer:</strong> " + nama_customer + "</p>";
            document.getElementById("produk_result").innerHTML = "<p><strong>Pilihan Produk:</strong> " + produk + "</p>";
            document.getElementById("harga_result").innerHTML = "<p><strong>Harga:</strong> Rp " + harga + "</p>";
            document.getElementById("jumlah_result").innerHTML = "<p><strong>Jumlah:</strong> " + jumlah + "</p>";
            document.getElementById("total_harga_result").innerHTML = "<p><strong>Total Harga:</strong> Rp " + total_harga + "</p>";

            document.querySelector(".result").style.display = "block";
        });

        document.querySelectorAll('input[name="produk"]').forEach(function(el){
            el.addEventListener('change', function(){
                var harga_produk = this.getAttribute("data-harga");
                document.getElementById("harga_produk").innerHTML = "<p><strong>Harga Produk:</strong> Rp " + harga_produk + "</p>";
            });
        });
    </script>
</body>
            </div>
            <!-- /.card-body -->
           
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>