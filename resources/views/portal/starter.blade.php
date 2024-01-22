<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 21:31:23 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ env('APP_NAME')}} | Starter</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="{{ url('portal/plugins/fontawesome-free/css/all.min.css') }}">

<link rel="stylesheet" href="{{ url('portal/dist/css/adminlte.min2167.css?v=3.2.0') }}">
<script nonce="1308dea5-efb3-40a3-81bc-20e9ba4accfa">(function(w,d){!function(dp,dq,dr,ds){dp[dr]=dp[dr]||{};dp[dr].executed=[];dp.zaraz={deferred:[],listeners:[]};dp.zaraz.q=[];dp.zaraz._f=function(dt){return async function(){var du=Array.prototype.slice.call(arguments);dp.zaraz.q.push({m:dt,a:du})}};for(const dv of["track","set","debug"])dp.zaraz[dv]=dp.zaraz._f(dv);dp.zaraz.init=()=>{var dw=dq.getElementsByTagName(ds)[0],dx=dq.createElement(ds),dy=dq.getElementsByTagName("title")[0];dy&&(dp[dr].t=dq.getElementsByTagName("title")[0].text);dp[dr].x=Math.random();dp[dr].w=dp.screen.width;dp[dr].h=dp.screen.height;dp[dr].j=dp.innerHeight;dp[dr].e=dp.innerWidth;dp[dr].l=dp.location.href;dp[dr].r=dq.referrer;dp[dr].k=dp.screen.colorDepth;dp[dr].n=dq.characterSet;dp[dr].o=(new Date).getTimezoneOffset();if(dp.dataLayer)for(const dC of Object.entries(Object.entries(dataLayer).reduce(((dD,dE)=>({...dD[1],...dE[1]})),{})))zaraz.set(dC[0],dC[1],{scope:"page"});dp[dr].q=[];for(;dp.zaraz.q.length;){const dF=dp.zaraz.q.shift();dp[dr].q.push(dF)}dx.defer=!0;for(const dG of[localStorage,sessionStorage])Object.keys(dG||{}).filter((dI=>dI.startsWith("_zaraz_"))).forEach((dH=>{try{dp[dr]["z_"+dH.slice(7)]=JSON.parse(dG.getItem(dH))}catch{dp[dr]["z_"+dH.slice(7)]=dG.getItem(dH)}}));dx.referrerPolicy="origin";dx.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(dp[dr])));dw.parentNode.insertBefore(dx,dw)};["complete","interactive"].includes(dq.readyState)?zaraz.init():dp.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="index3.html" class="nav-link">Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="#" class="nav-link">Contact</a>
</li>
</ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item">
<a class="nav-link" data-widget="navbar-search" href="#" role="button">
<i class="fas fa-search"></i>
</a>
<div class="navbar-search-block">
<form class="form-inline">
<div class="input-group input-group-sm">
<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-navbar" type="submit">
<i class="fas fa-search"></i>
</button>
<button class="btn btn-navbar" type="button" data-widget="navbar-search">
<i class="fas fa-times"></i>
</button>
</div>
</div>
</form>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-comments"></i>
<span class="badge badge-danger navbar-badge">3</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a href="#" class="dropdown-item">

<div class="media">
<img src="{{ url('portal/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
<div class="media-body">
<h3 class="dropdown-item-title">
Brad Diesel
<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">Call me whenever you can...</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="{{ url('portal/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
John Pierce
<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">I got your message bro</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="{{ url('portal/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
Nora Silvester
<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">The subject goes here</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-bell"></i>
<span class="badge badge-warning navbar-badge">15</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<span class="dropdown-header">15 Notifications</span>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-envelope mr-2"></i> 4 new messages
<span class="float-right text-muted text-sm">3 mins</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-users mr-2"></i> 8 friend requests
<span class="float-right text-muted text-sm">12 hours</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-file mr-2"></i> 3 new reports
<span class="float-right text-muted text-sm">2 days</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>
</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="index3.html" class="brand-link">
<img src="{{ url('portal/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{ url('portal/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">Alexander Pierce</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Starter Pages
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>Active Page</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Inactive Page</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
Simple Link
<span class="right badge badge-danger">New</span>
</p>
</a>
</li>
</ul>
</nav>

</div>

</aside>

<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Starter Page</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Starter Page</li>
</ol>
</div>
</div>
</div>
</div>


<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h5 class="card-title">Card title</h5>
<p class="card-text">
Some quick example text to build on the card title and make up the bulk of the card's
content.
</p>
<a href="#" class="card-link">Card link</a>
<a href="#" class="card-link">Another link</a>
</div>
</div>
<div class="card card-primary card-outline">
<div class="card-body">
<h5 class="card-title">Card title</h5>
<p class="card-text">
Some quick example text to build on the card title and make up the bulk of the card's
content.
</p>
<a href="#" class="card-link">Card link</a>
<a href="#" class="card-link">Another link</a>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="card">
<div class="card-header">
<h5 class="m-0">Featured</h5>
</div>
<div class="card-body">
<h6 class="card-title">Special title treatment</h6>
<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
<a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
<div class="card card-primary card-outline">
<div class="card-header">
<h5 class="m-0">Featured</h5>
</div>
<div class="card-body">
<h6 class="card-title">Special title treatment</h6>
<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
<a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
</div>

</div>

</div>
</div>

</div>


<aside class="control-sidebar control-sidebar-dark">

<div class="p-3">
<h5>Title</h5>
<p>Sidebar content</p>
</div>
</aside>


<footer class="main-footer">

<div class="float-right d-none d-sm-inline">
Anything you want
</div>

<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io/">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
</div>



<script src="{{ url('portal/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ url('portal/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ url('portal/dist/js/adminlte.min2167.js?v=3.2.0') }}"></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 21:31:23 GMT -->
</html>
