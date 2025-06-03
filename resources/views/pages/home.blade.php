@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

<x-layout.app>
    <section class="home-hero">        
        <div class="home-hero-content">
            <h1 class="home-title">INFRAVAULT</h1>
            <p class="home-subtitle">An Infrastructure Audit Management System</p>
            
            <div class="home-btns">
                <a href="/explore" class="btn-primary">Explore</a>
                <a href="/login" class="btn-primary">Log in</a>
                <a href="/signup" class="btn-primary">Sign up</a>
            </div>
        </div>
        
        <div class="home-hero-overlay"></div>
    </section>
</x-layout.app>
