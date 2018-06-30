@extends('layouts.app')
<div class="nav-wrapper">
   <nav class="red darken-4 navbar navbar-nav fixed-top" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img style="border-radius:60%;" src="{{ asset('images/cap-icon-small.jpg')}}"> </a>
      <ul class="right hide-on-med-and-down white-text">
      	<li><a href="">Search</a> </li>
        <li><a href="">Consultation</a></li>
        <li><a href="">Appointments</a></li>
        <li><a href="">Profile</a> </li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="">Search</a> </li>
        <li><a href="">Consultations</a></li>
        <li><a href="">Appointments</a></li>
        <li><a href="">My-Profile</a> </li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="mdi mdi-menu"></i></a>
    </div>
  </nav>
</div>
@yield('page-contents')



