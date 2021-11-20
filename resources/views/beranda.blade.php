
<!DOCTYPE html>

<html lang="en">
<head>
  @include('bodi.header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  @include('bodi.navbar')

  @include('bodi.sidebar')

  @include('bodi.content')


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
