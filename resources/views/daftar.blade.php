
<!DOCTYPE html>

<html lang="en">
<head>
  @include('bodi.header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  @include('bodi.navbar')

  @include('bodi.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content">
    <div class="content-wrapper" style="min-height: 2080.12px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>DataTables</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">DataTables</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
                  </div>
                  <!-- /.card-header -->
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal Lahir</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Entok</th>
                        <td>Budinah Roma</td>
                        <td>Berik</td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
</div>
  <!-- /.content-wrapper -->


@include('bodi.footer')

@include('bodi.script')
</body>
</html>
