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
            <button class="edit-info-btn" id="editImageBtn" type="button">EDIT IMAGE</button>
            <!-- Edit Image Modal -->
            <div id="editImageModal" style="display:none;position:fixed;z-index:10000;left:0;top:0;width:100vw;height:100vh;background:rgba(30,30,30,0.85);align-items:center;justify-content:center;">
                <form method="POST" action="{{ route('buildings.updateImage', $building->id) }}" enctype="multipart/form-data" style="background:#fff;padding:2rem 2.5rem;border-radius:18px;box-shadow:0 8px 40px rgba(0,0,0,0.2);position:relative;min-width:320px;max-width:90vw;">
                    @csrf
                    <span id="closeEditImageModal" style="position:absolute;top:1rem;right:1.5rem;font-size:2rem;color:#333;cursor:pointer;font-weight:bold;">&times;</span>
                    <h2 style="margin-bottom:1.5rem;color:#4d6b53;">Change Main Image</h2>
                    <input type="file" name="main_img" id="mainImgInput" accept="image/*" required style="margin-bottom:1rem;">
                    <div id="mainImgPreviewWrapper" style="margin-bottom:1rem;display:none;">
                        <img id="mainImgPreview" src="" style="max-width:300px;max-height:200px;border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,0.08);">
                    </div>
                    <button type="submit" style="background:#4d6b53;color:#fff;padding:0.7rem 2rem;border:none;border-radius:10px;font-weight:700;font-size:1.1rem;cursor:pointer;">Save Image</button>
                </form>
            </div>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                var editBtn = document.getElementById('editImageBtn');
                var modal = document.getElementById('editImageModal');
                var closeBtn = document.getElementById('closeEditImageModal');
                var input = document.getElementById('mainImgInput');
                var previewWrapper = document.getElementById('mainImgPreviewWrapper');
                var preview = document.getElementById('mainImgPreview');
                if(editBtn && modal && closeBtn) {
                    editBtn.addEventListener('click', function() {
                        modal.style.display = 'flex';
                    });
                    closeBtn.addEventListener('click', function() {
                        modal.style.display = 'none';
                        input.value = '';
                        previewWrapper.style.display = 'none';
                        preview.src = '';
                    });
                    modal.addEventListener('click', function(e) {
                        if(e.target === modal) closeBtn.click();
                    });
                    input.addEventListener('change', function(e) {
                        if(input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(ev) {
                                preview.src = ev.target.result;
                                previewWrapper.style.display = 'block';
                            };
                            reader.readAsDataURL(input.files[0]);
                        } else {
                            previewWrapper.style.display = 'none';
                            preview.src = '';
                        }
                    });
                }
            });
            </script>
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