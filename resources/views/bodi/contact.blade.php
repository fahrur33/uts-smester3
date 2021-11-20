
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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Contact</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card bg-light d-flex flex-fill">
        <div class="card-header text-muted border-bottom-0">
          Digital Strategist
        </div>
        <div class="card-body pt-0">
          <div class="row">
            <div class="col-4">
              <h2 class="lead"><b>Fahrur Rozi</b></h2>
              <p class="text-muted text-sm"><b>Sosial Media: </b> Instagram | Facebook </p>
              <ul class="m-0 fa-ul text-muted">
                <div class="cotainer">
                    <div class="row">
                        <a href="https://www.instagram.com/alrazi_tv/" class="brand-link">
                            <img src="{{asset('tampilan/dist/img/Instagram1.jpg')}}" alt="Instagram" class="brand-image img-circle elevation-3" style="size: 2px">
                            <div class="info">
                                <a href="https://www.instagram.com/alrazi_tv/" class="d-block">alrazi_tv</a>
                            </div>
                        </a>
                        <a href="https://www.facebook.com/alraziiii/?ref=pages_you_manage" class="brand-link">
                            <img src="{{asset('tampilan/dist/img/facebook.png')}}" alt="Instagram" class="brand-image img-circle elevation-3" style="size: 2px">
                            <div class="info">
                                <a href="https://www.facebook.com/alraziiii/?ref=pages_you_manage" class="d-block">Al Razi TV</a>
                            </div>
                        </a>
                    </div>
                </div>
                
              </ul>
              <p class="card-text mt-3">
                You can contact me on my social media above.
            </p>
            </div>
            <div class="col-5 text-center">
              <img src="{{asset('tampilan/dist/img/saya.jpg')}}" alt="user-avatar" class="img-ractegle">
            </div>
          </div>
        </div>
        
    </div>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <aside class="control-sidebar control-sidebar-dark">

    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>

 @include('bodi.footer')
</div>

@include('bodi.script')
</body>
</html>
