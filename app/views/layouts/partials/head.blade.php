    @section('title')
        <title>{{ $title or 'MakerHub' }}</title>
    @show
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    {{ HTML::style('css/vendor/bootstrap.min.css') }}

    <!-- Font Awesome -->
    {{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}

    <!-- FlatUI + Custom Styles -->
    {{ HTML::style('css/styles.css') }}

    <link rel="shortcut icon" href="img/favicon.ico">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
