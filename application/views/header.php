<!DOCTYPE html>
<html>
  <head>
    <title>Mongo Db Appication</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo ROOT_URL ;?>css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style type="text/css">

  ::selection{ background-color: #E13300; color: white; }
  ::moz-selection{ background-color: #E13300; color: white; }
  ::webkit-selection{ background-color: #E13300; color: white; }

  body {
    background-color: #fff;
    margin: 40px;
    font: 13px/20px normal Helvetica, Arial, sans-serif;
    color: #4F5155;
  }

  h1 {
    color: #444;
    background-color: transparent;
    font-size: 19px;
    font-weight: normal;
    margin: 0;
    padding: 14px 15px 0px 15px;
  }

  #body{
    margin: 0 15px 0 15px;
  }
  
  p.footer{
    text-align: right;
    font-size: 11px;
    border-top: 1px solid #D0D0D0;
    line-height: 32px;
    padding: 0 10px 0 10px;
    margin: 20px 0 0 0;
  }
  
  #container{
    margin: 10px;
    border: 1px solid #D0D0D0;
    -webkit-box-shadow: 0 0 8px #D0D0D0;
  }
  .hide{
    display: none;
  }
  </style>
  </head>
  <body>
        <div class="navbar">
    <div class="navbar-inner">
    <div class="container">
     
    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    <span class="icon-bar">Home</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </a>
     
    <!-- Be sure to leave the brand out there if you want it shown -->
    <a class="brand" href="#">Cake Mongo</a>
     
    <!-- Everything you want hidden at 940px or less, place within here -->
    <div class="nav-collapse collapse">
    <!-- .nav, .navbar-search, .navbar-form, etc -->
    
    </div>
     <ul class="nav">
      <li class="divider-vertical"><a href="<?php echo ROOT_URL.'posts'; ?>" >Home</a></li>
    </ul>

    <form class="navbar-search pull-right" action="<?php echo ROOT_URL.'posts/search'; ?>">
    <input type="text" class="search-query" placeholder="Search" name="searchQuery">
    </form>
     
    </div>
    </div>
    </div>
