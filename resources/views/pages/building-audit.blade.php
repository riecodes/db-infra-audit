@push('styles')
    <link rel="stylesheet" href="{{ asset('css/building-audit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-utbXrsoQbM6kQz9l8rQn6l16rDpD+s/COM24kTx5cDIeEJD7BqXc9E+u6KDAdAm8YGtS+wT9gPJrv4sF3yFZ1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-2g9GQkQ6l04e6QF6UVx/FuWRzE7dDzIvmhjYQdkWXNoKGdzRbM8mlFinallyWl7zBLmks5nZUD+HdbCMryGZGsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-3gJwYp8sH5PHeTtQKgHdwNwp0UrEGouGZWlznImPi0tLxe3LjVJN8dkUBaRdOy+nK8BPVKx/aRXefxWWEXUOYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-O9CbFf8gDuwZQzQ0jrISFRCGDpa2BkLomqKgJo0vvVuv5AO9M/dwZ0pniS3pSkeCZMt2rt7NmBGG99nmCaTKfQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush

<x-layout.app>
    <!-- Hero Section -->
    <div class="audit-hero"
        @if($building->main_img)
            style="background-image: linear-gradient(rgba(77,107,83,0.3), rgba(77,107,83,0.6)), url('{{ asset('assets/img-buildings/' . $building->main_img) }}'); background-size: cover; background-position: center;"
        @endif
    >
        <div class="breadcrumb">
            <a href="{{ route('explore') }}">Explore</a> / 
            <a href="{{ route('buildings.show', $building->slug) }}">{{ $building->name }}</a> / 
            Infrastructure Audit
        </div>
        @auth
            <button class="edit-info-btn">EDIT INFO</button>
        @endauth
        <!-- View Toggle Button -->
        <button class="view-toggle-btn" id="viewToggle" onclick="toggleView()">
            <span class="icon">📊</span>
            <span id="toggleText">View in Cards</span>
        </button>
        <div class="hero-content">
            <h1 class="audit-title">{{ strtoupper($building->name) }}</h1>
            <p class="audit-subtitle">Infrastructure Audit & Assessment</p>
        </div>
    </div>

    <!-- Table View (Default) -->
    <div class="audit-container table-view" id="tableView">
        <div class="audit-section-title">
            <span class="audit-arrow">&#187;&#187;</span>
            INFRASTRUCTURE AUDIT
        </div>
        <div class="audit-table-wrapper">
            <table class="audit-table">
                <tr>
                    <th>RVS SCORE:</th>
                    <th>{{ $building->rvs_score ?? 'N/A' }}</th>
                    <th>{{ $building->rvs_assessment ?? 'Assessment Pending' }}</th>
                </tr>
                <tr>
                    <th colspan="3">BUILDING LOCATION IS VULNERABLE TO:</th>
                </tr>
                <tr>
                    <td>Earthquake</td>
                    <td colspan="2">{{ $building->vulnerable_earthquake ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <td>Landslide/Soil Erosion?</td>
                    <td colspan="2">{{ $building->vulnerable_landslide ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <td>Liquefaction?</td>
                    <td colspan="2">{{ $building->vulnerable_liquefaction ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <td>Tsunami?</td>
                    <td colspan="2">{{ $building->vulnerable_tsunami ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <td>Storm Surge?</td>
                    <td colspan="2">{{ $building->vulnerable_storm_surge ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <th colspan="3">PHYSICAL CONDITION EVALUATION</th>
                </tr>
                <tr>
                    <td>STRUCTURAL</td>
                    <td colspan="2">{{ $building->structural_condition ?? 'Not assessed' }}</td>
                </tr>
                <tr>
                    <td>NON STRUCTURAL</td>
                    <td colspan="2">{{ $building->nonstructural_condition ?? 'Not assessed' }}</td>
                </tr>
            </table>
        </div>
        <div class="audit-section-title audit-photo-title">
            <span class="audit-arrow">&#187;&#187;</span>
            Photo Documentation
        </div>
        @php
            $docImgs = $building->documentation_imgs ? explode(',', $building->documentation_imgs) : [];
        @endphp
        <div class="photo-section simple-photo-docs" style="margin-bottom:2rem;">
            <h2 class="section-title" style="margin-bottom:1.5rem;">Photo Documentation</h2>
            @if(count($docImgs))
                <div class="simple-photo-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:2rem;">
                    @foreach($docImgs as $img)
                        @php $imgName = basename($img); @endphp
                        <div class="simple-photo-item" style="text-align:center;">
                            <img src="{{ asset('assets/img-documentation/' . $img) }}" alt="{{ $imgName }}" class="simple-doc-img-thumb" style="width:100%;max-width:220px;border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,0.08);margin-bottom:1rem;object-fit:cover;cursor:pointer;aspect-ratio:4/3;background:#f5f5f5;display:block;margin-left:auto;margin-right:auto;" loading="lazy" data-img="{{ asset('assets/img-documentation/' . $img) }}">
                            <div class="photo-label" style="font-weight:700;font-size:1.1rem;color:#40684a;margin-top:0.5rem;">{{ $imgName }}</div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="photo-placeholder" style="background:none;box-shadow:none;padding:0;">
                    <div class="photo-grid" style="background:none;box-shadow:none;padding:0;">
                        <div class="photo-item" style="background:none;box-shadow:none;padding:0;">
                            <div class="photo-preview">📷</div>
                            <div class="photo-label">No Documentation Images</div>
                        </div>
                    </div>
                    <p class="photo-note">📸 No photo documentation available for this building.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Card View (Modern Design) -->
    <div class="audit-content card-view" id="cardView" style="display: none;">
        <!-- Quick Stats -->
        <div class="quick-stats">
            <div class="stat-card">
                <div class="stat-icon">🏢</div>
                <div class="stat-value">{{ $building->name }}</div>
                <div class="stat-label">Building Name</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">🔍</div>
                <div class="stat-value">{{ $building->rvs_score ?? 'N/A' }}</div>
                <div class="stat-label">RVS Score</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">⚠️</div>
                <div class="stat-value">{{ $building->audit_status ?? 'Pending' }}</div>
                <div class="stat-label">Audit Status</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">🛡️</div>
                <div class="stat-value">{{ $building->risk_level ?? 'Unknown' }}</div>
                <div class="stat-label">Risk Level</div>
            </div>
        </div>

        <!-- RVS Score Card -->
        <div class="rvs-score-card">
            <div class="rvs-score">{{ $building->rvs_score ?? 'N/A' }}</div>
            <div class="rvs-description">RVS Score</div>
            <div class="rvs-status">{{ $building->rvs_assessment ?? 'Assessment Pending' }}</div>
        </div>

        <!-- Vulnerability Assessment -->
        <div class="vulnerability-section">
            <h2 class="section-title">Building Location Vulnerability Assessment</h2>
            <div class="vulnerability-grid">
                <div class="vulnerability-item">
                    <span class="vulnerability-label">Earthquake</span>
                    <span class="vulnerability-status {{ $building->vulnerable_earthquake ? 'yes' : 'no' }}">
                        {{ $building->vulnerable_earthquake ? 'Yes' : 'No' }}
                    </span>
                </div>
                <div class="vulnerability-item">
                    <span class="vulnerability-label">Landslide/Soil Erosion</span>
                    <span class="vulnerability-status {{ $building->vulnerable_landslide ? 'yes' : 'no' }}">
                        {{ $building->vulnerable_landslide ? 'Yes' : 'No' }}
                    </span>
                </div>
                <div class="vulnerability-item">
                    <span class="vulnerability-label">Liquefaction</span>
                    <span class="vulnerability-status {{ $building->vulnerable_liquefaction ? 'yes' : 'no' }}">
                        {{ $building->vulnerable_liquefaction ? 'Yes' : 'No' }}
                    </span>
                </div>
                <div class="vulnerability-item">
                    <span class="vulnerability-label">Tsunami</span>
                    <span class="vulnerability-status {{ $building->vulnerable_tsunami ? 'yes' : 'no' }}">
                        {{ $building->vulnerable_tsunami ? 'Yes' : 'No' }}
                    </span>
                </div>
                <div class="vulnerability-item">
                    <span class="vulnerability-label">Storm Surge</span>
                    <span class="vulnerability-status {{ $building->vulnerable_storm_surge ? 'yes' : 'no' }}">
                        {{ $building->vulnerable_storm_surge ? 'Yes' : 'No' }}
                    </span>
                </div>
            </div>
        </div>

        <!-- Physical Condition Evaluation -->
        <div class="condition-section">
            <h2 class="section-title">Physical Condition Evaluation</h2>
            <div class="condition-grid">
                <div class="condition-item">
                    <div class="condition-type">Structural</div>
                    <div class="condition-status">{{ $building->structural_condition ?? 'Not assessed' }}</div>
                </div>
                <div class="condition-item">
                    <div class="condition-type">Non-Structural</div>
                    <div class="condition-status">{{ $building->nonstructural_condition ?? 'Not assessed' }}</div>
                </div>
            </div>
        </div>

        <!-- Photo Documentation -->
        @php
            $docImgs = $building->documentation_imgs ? explode(',', $building->documentation_imgs) : [];
        @endphp
        <div class="photo-section simple-photo-docs" style="margin-bottom:2rem;">
            <h2 class="section-title" style="margin-bottom:1.5rem;">Photo Documentation</h2>
            @if(count($docImgs))
                <div class="simple-photo-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:2rem;">
                    @foreach($docImgs as $img)
                        @php $imgName = basename($img); @endphp
                        <div class="simple-photo-item" style="text-align:center;">
                            <img src="{{ asset('assets/img-documentation/' . $img) }}" alt="{{ $imgName }}" class="simple-doc-img-thumb" style="width:100%;max-width:220px;border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,0.08);margin-bottom:1rem;object-fit:cover;cursor:pointer;aspect-ratio:4/3;background:#f5f5f5;display:block;margin-left:auto;margin-right:auto;" loading="lazy" data-img="{{ asset('assets/img-documentation/' . $img) }}">
                            <div class="photo-label" style="font-weight:700;font-size:1.1rem;color:#40684a;margin-top:0.5rem;">{{ $imgName }}</div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="photo-placeholder" style="background:none;box-shadow:none;padding:0;">
                    <div class="photo-grid" style="background:none;box-shadow:none;padding:0;">
                        <div class="photo-item" style="background:none;box-shadow:none;padding:0;">
                            <div class="photo-preview">📷</div>
                            <div class="photo-label">No Documentation Images</div>
                        </div>
                    </div>
                    <p class="photo-note">📸 No photo documentation available for this building.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Floating Back Button -->
    <button class="back-btn" onclick="window.history.back()">
        <span class="icon">←</span>
        <span>Back to Details</span>
    </button>

    <script>
    // Global function to attach click handlers for modal
    function attachClickHandlers() {
        // Remove existing handlers first
        document.querySelectorAll('.doc-img-thumb').forEach(function(img) {
            img.onclick = null;
            img.style.cursor = 'pointer';
            img.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const modal = document.getElementById('docImgModal');
                const modalImg = document.getElementById('docImgModalImg');
                const modalName = document.getElementById('modalImageName');
                modalImg.src = this.getAttribute('data-img');
                modalName.textContent = this.getAttribute('alt');
                modal.style.display = 'flex';
                modal.classList.add('modal-show');
                document.body.style.overflow = 'hidden';
            });
        });
        document.querySelectorAll('.photo-item-wrapper').forEach(function(wrapper) {
            wrapper.onclick = null;
            wrapper.style.cursor = 'pointer';
            wrapper.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const img = this.querySelector('.doc-img-thumb');
                if (img) {
                    const modal = document.getElementById('docImgModal');
                    const modalImg = document.getElementById('docImgModalImg');
                    const modalName = document.getElementById('modalImageName');
                    modalImg.src = img.getAttribute('data-img');
                    modalName.textContent = img.getAttribute('alt');
                    modal.style.display = 'flex';
                    modal.classList.add('modal-show');
                    document.body.style.overflow = 'hidden';
                }
            });
        });
    }

    // Modal close logic
    function closeModal() {
        const modal = document.getElementById('docImgModal');
        const modalImg = document.getElementById('docImgModalImg');
        modal.classList.remove('modal-show');
        setTimeout(() => {
            modal.style.display = 'none';
            modalImg.src = '';
            document.body.style.overflow = 'auto';
        }, 300);
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Initialize all photo carousels
        $('.photo-carousel').each(function() {
            $(this).owlCarousel({
                loop: $(this).find('.photo-carousel-item').length > 1,
                margin: 20,
                nav: true,
                dots: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                navText: ['‹', '›'],
                mouseDrag: false,
                touchDrag: true,
                pullDrag: false,
                freeDrag: false,
                responsive: {
                    0: { items: 1, margin: 10, mouseDrag: false },
                    600: { items: 2, margin: 15, mouseDrag: false },
                    1000: { items: 3, margin: 20, mouseDrag: false },
                    1200: { items: 4, margin: 20, mouseDrag: false }
                },
                onInitialized: function() { setTimeout(attachClickHandlers, 100); },
                onChanged: function() { setTimeout(attachClickHandlers, 100); }
            });
        });
        attachClickHandlers();
        // Modal close events
        document.getElementById('docImgModalClose').addEventListener('click', closeModal);
        document.getElementById('docImgModal').addEventListener('click', function(e) {
            if (e.target === this || e.target.classList.contains('modal-backdrop')) {
                closeModal();
            }
        });
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('docImgModal');
            if (modal.style.display === 'flex' && e.key === 'Escape') {
                closeModal();
            }
        });
    });

    // Ensure handlers are reattached after toggling views
    function toggleView() {
        const tableView = document.getElementById('tableView');
        const cardView = document.getElementById('cardView');
        const toggleText = document.getElementById('toggleText');
        const toggleIcon = document.querySelector('.view-toggle-btn .icon');
        if (tableView.style.display === 'none') {
            tableView.style.display = 'block';
            cardView.style.display = 'none';
            toggleText.textContent = 'View in Cards';
            toggleIcon.textContent = '📊';
            setTimeout(() => {
                const tableCarousel = $('#table-view-carousel');
                if (tableCarousel.length && tableCarousel.hasClass('owl-loaded')) {
                    tableCarousel.trigger('refresh.owl.carousel');
                }
                attachClickHandlers();
            }, 150);
        } else {
            tableView.style.display = 'none';
            cardView.style.display = 'block';
            toggleText.textContent = 'View in Table';
            toggleIcon.textContent = '🃏';
            setTimeout(() => {
                const cardCarousel = $('#card-view-carousel');
                if (cardCarousel.length && cardCarousel.hasClass('owl-loaded')) {
                    cardCarousel.trigger('refresh.owl.carousel');
                }
                attachClickHandlers();
            }, 150);
        }
    }
    </script>

    <!-- Enhanced Modal for image lightbox -->
    <div id="docImgModal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(30,30,30,0.85);align-items:center;justify-content:center;">
        <span id="docImgModalClose" style="position:absolute;top:2rem;right:3rem;font-size:3rem;color:#fff;cursor:pointer;font-weight:bold;z-index:10001;">&times;</span>
        <img id="docImgModalImg" src="" style="max-width:90vw;max-height:80vh;border-radius:18px;box-shadow:0 8px 40px rgba(0,0,0,0.5);display:block;margin:auto;z-index:10000;">
        <div id="docImgModalName" style="color:#fff;text-align:center;font-size:1.2rem;margin-top:1rem;font-weight:600;"></div>
    </div>
</x-layout.app>
