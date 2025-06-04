@push('styles')
    <link rel="stylesheet" href="{{ asset('css/building-details.css') }}">
@endpush

<x-layout.app>
    <!-- Hero Section -->
    <div class="building-hero">
        <div class="breadcrumb">
            <a href="{{ route('explore') }}">Explore</a> / Building Details
        </div>
        <button class="edit-info-btn">EDIT INFO</button>
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
                <div class="stat-value">{{ $building->name }}</div>
                <div class="stat-label">Building Name</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">📍</div>
                <div class="stat-value">Active</div>
                <div class="stat-label">Status</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">🗓️</div>
                <div class="stat-value">{{ date('Y') }}</div>
                <div class="stat-label">Current Year</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">🔍</div>
                <div class="stat-value">Ready</div>
                <div class="stat-label">Audit Status</div>
            </div>
        </div>        <!-- Building Information Card -->
        <div class="info-card">
            <h2 class="info-title">Building Information</h2>
            <div class="info-slider-container">
                <div class="info-slider-wrapper" id="infoSlider">
                    <!-- Slide 1: Basic Information -->
                    <div class="info-slide">
                        <div class="info-grid">
                            <div class="info-item">
                                <div class="info-label">Building Name</div>
                                <div class="info-value">{{ $building->name }}</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Coordinates</div>
                                <div class="info-value">{{ $building->lat }}, {{ $building->lng }}</div>
                            </div>
                            @if($building->main_img)
                            <div class="info-item">
                                <div class="info-label">Main Image</div>
                                <div class="info-value">{{ $building->main_img }}</div>
                            </div>
                            @endif
                            <div class="info-item">
                                <div class="info-label">Date Added</div>
                                <div class="info-value">N/A</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 2: Technical Details -->
                    <div class="info-slide">
                        <div class="info-grid">
                            <div class="info-item">
                                <div class="info-label">Building ID</div>
                                <div class="info-value">#{{ $building->id }}</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Latitude</div>
                                <div class="info-value">{{ $building->lat }}°</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Longitude</div>
                                <div class="info-value">{{ $building->lng }}°</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Last Updated</div>
                                <div class="info-value">N/A</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 3: System Information -->
                    <div class="info-slide">
                        <div class="info-grid">
                            <div class="info-item">
                                <div class="info-label">Database Record</div>
                                <div class="info-value">Active</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Audit Status</div>
                                <div class="info-value">Pending</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Map Visibility</div>
                                <div class="info-value">Visible</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Total Records</div>
                                <div class="info-value">{{ \App\Models\Building::count() }} Buildings</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slider Controls -->
            <div class="slider-controls">
                <button class="slider-btn" id="prevBtn" onclick="previousSlide()">‹</button>
                <div class="slider-dots">
                    <div class="slider-dot active" onclick="currentSlide(1)"></div>
                    <div class="slider-dot" onclick="currentSlide(2)"></div>
                    <div class="slider-dot" onclick="currentSlide(3)"></div>
                </div>
                <button class="slider-btn" id="nextBtn" onclick="nextSlide()">›</button>
            </div>
        </div>

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