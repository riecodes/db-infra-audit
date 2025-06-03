@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

<x-layout.app>
    <section class="home-hero" style="background: none; min-height: 60vh;">
        <div class="home-hero-content" style="background: rgba(77, 107, 83, 0.85);">
            <h1 class="home-title">Database Export</h1>
            <p class="home-subtitle">Backup your database schema and data as an SQL file.</p>
            <div class="home-btns" style="margin-top: 2rem;">
                <a href="{{ url('/database_export/download') }}" class="btn-primary">Export Database (.sql)</a>
            </div>
            <p style="margin-top: 2rem; color: #e5dfc7; font-size: 1rem;">Click the button above to download a backup of your current database. This will include all tables and data.</p>
        </div>
    </section>
</x-layout.app> 