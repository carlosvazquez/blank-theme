<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- replace line with below -->
  <!-- {% if settings.use_favicon %} -->
  <link rel="shortcut icon" href="{{ settings['favicon.png'] }}" type="image/png" />
  <!-- {% endif %} -->
<!-- end replace -->

  <title>{{ page_title }}{% if current_page != 1 %} | Página {{ current_page }}{% endif %}{% if store.name not in page_title %} | {{ store.name }}{% endif %}</title>

  <!-- {% if page_description %} -->
  <meta name="description" content="{{ page_description }}"/>
  <!-- {% endif %} -->

  <!-- {% include '_og-meta-tags.twig' %} -->
  <link rel="canonical" href="{{ canonical_url }}" />
  <!-- {# Bootstrap #} -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- {# Select #} -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/css/bootstrap-select.min.css">
  <!-- {# Material Design Icons #} -->
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/1.7.22/css/materialdesignicons.min.css">
  <!-- {# Google Fonts #} -->
  <!-- replace line with below -->
  <!-- {% include '_google-fonts.twig' %} -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">


  <!-- end replace -->
  <!-- {# Slick Styles #} -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>

  <!-- {# Theme Styles #} -->
<!-- replace line with below -->
  <!-- <link rel="stylesheet" href="{{ 'styles.css' | asset_url }}" media="screen"> -->
  <link rel="stylesheet" href="assets/styles.css" media="screen">
<!-- end replace -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- {{ head_content }} -->

</head>
<body class="home {% block body_class %}{% endblock body_class %}" role="document">
<!-- Define body class -->
<!--  {% block body_class %}home{% endblock body_class %} -->
<!-- {% include '_notifications.twig' %} -->
<!-- {% include '_sidebar.twig' %} -->
<!-- {% include '_mobilenav.twig' %} -->
    <!-- Component Name -->
<?php include 'includes/header.php' ?>