@extends('layouts.app')

@section('title', 'About | POS Foundations')

@section('content')
<section class="page-heading"><p class="eyebrow">About the application</p><h1>Learning Laravel through a familiar POS workflow.</h1><p class="lead">This project recreates the four-page POS foundation activity from TFA1 using Laravel MVC architecture.</p></section>
<section class="content-panel">
    <h2>What this project demonstrates</h2>
    <div class="about-list">
        <div><span>01</span><p><strong>Routing</strong><br>Each URL is mapped to a controller method in <code>routes/web.php</code>.</p></div>
        <div><span>02</span><p><strong>Controllers</strong><br>Controllers prepare page content and pass it to the appropriate view.</p></div>
        <div><span>03</span><p><strong>Blade views</strong><br>Reusable layouts and <code>@foreach</code> loops render the account listings.</p></div>
    </div>
</section>
@endsection
