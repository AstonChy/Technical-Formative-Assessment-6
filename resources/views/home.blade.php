@extends('layouts.app')

@section('title', 'Home | POS Foundations')

@section('content')
<section class="hero">
    <div>
        <p class="eyebrow">Laravel Point of Sale</p>
        <h1>Simple account management for a growing store.</h1>
        <p class="lead">A clean four-page Laravel application demonstrating routes, controllers, Blade templates, and temporary static data.</p>
        <div class="button-row">
            <a class="button primary" href="{{ route('customers.index') }}">View customers</a>
            <a class="button secondary" href="{{ route('about') }}">Learn about the project</a>
        </div>
    </div>
    <div class="hero-card">
        <div class="hero-icon">⌘</div>
        <p class="eyebrow">Application status</p>
        <h2>Ready to explore</h2>
        <p>Browse the sample customer and user accounts from the navigation above.</p>
    </div>
</section>
<section class="feature-grid">
    <article class="feature-card"><span class="feature-number">01</span><h3>Customer accounts</h3><p>Five sample customer records rendered with a Blade loop.</p></article>
    <article class="feature-card"><span class="feature-number">02</span><h3>User accounts</h3><p>Five sample system users with roles and account status.</p></article>
    <article class="feature-card"><span class="feature-number">03</span><h3>MVC structure</h3><p>Routes, controllers, and views are organized using Laravel conventions.</p></article>
</section>
@endsection
