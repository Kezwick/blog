<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>{{title}}</title>
  <!-- Bootstrap core CSS -->
  <link href="/views/blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="/views/blog/css/blog-home.css" rel="stylesheet">
</head>
<body>

  <!-- Navigation -->
  {% include '/blog/widget/navigation.php' %}


  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->

          {% block content %}
          {% endblock %}





    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="/views/blog/vendor/jquery/jquery.min.js"></script>
  <script src="/views/blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
