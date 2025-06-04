@push('styles')
    <link rel="stylesheet" href="{{ asset('css/building-details.css') }}">
@endpush

<x-layout.app>
    <!-- Hero Section -->
    <div class="building-hero"
        @if($building->main_img)
            style="background-image: linear-gradient(rgba(77,107,83,0.3), rgba(77,107,83,0.6)), url('{{ asset('assets/img-buildings/' . $building->main_img) }}'); background-size: cover; background-position: center;"
        @endif
    >
        <div class="breadcrumb">
            <a href="{{ route('explore') }}">Explore</a> / Building Details
        </div>
        @auth
            <button class="edit-info-btn">EDIT INFO</button>
        @endauth
        <div class="hero-content">
            <h1 class="building-title">{{ strtoupper($building->name) }}</h1>
            <p class="building-subtitle">Infrastructure Details & Information</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="building-content">
        <!-- Quick Stats -->
        <div class="quick-stats">
            <div class="stat-card">
                <div class="stat-icon">🏢</div>
                <div class="stat-value">{{ $building->no_of_storey ?? 'N/A' }}</div>
                <div class="stat-label">No. of Storey</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">🏗️</div>
                <div class="stat-value">{{ $building->type_of_building ?? 'N/A' }}</div>
                <div class="stat-label">Type of Building</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">🏛️</div>
                <div class="stat-value">{{ $building->type_of_structure ?? 'N/A' }}</div>
                <div class="stat-label">Type of Structure</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">👥</div>
                <div class="stat-value">{{ $building->design_occupancy ?? 'N/A' }}</div>
                <div class="stat-label">Design Occupancy</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">📅</div>
                <div class="stat-value">{{ $building->year_edition_of_nscp ?? 'N/A' }}</div>
                <div class="stat-label">Year Edition of NSCP</div>
            </div>
        </div>        <!-- Building Information Card -->

        <script>
        let currentSlideIndex = 0;
        const totalSlides = 3;
        
        function showSlide(index) {
            const slider = document.getElementById('infoSlider');
            const dots = document.querySelectorAll('.slider-dot');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            // Update slider position
            slider.style.transform = `translateX(-${index * 100}%)`;
            
            // Update dots
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
            
            // Update button states
            prevBtn.disabled = index === 0;
            nextBtn.disabled = index === totalSlides - 1;
            
            currentSlideIndex = index;
        }
        
        function nextSlide() {
            if (currentSlideIndex < totalSlides - 1) {
                showSlide(currentSlideIndex + 1);
            }
        }
        
        function previousSlide() {
            if (currentSlideIndex > 0) {
                showSlide(currentSlideIndex - 1);
            }
        }
        
        function currentSlide(index) {
            showSlide(index - 1);
        }
        
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            showSlide(0);        });
        </script>
    </div>

    <!-- Floating Infrastructure Audit Button -->
    <button class="infra-audit-btn" onclick="window.location.href=window.location.pathname+'/audit'">
        <span class="icon">🔍</span>
        <span>Infrastructure Audit</span>
    </button>
</x-layout.app>