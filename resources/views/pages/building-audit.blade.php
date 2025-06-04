@push('styles')
    <link rel="stylesheet" href="{{ asset('css/building-audit.css') }}">
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

    <!-- Modal for image lightbox -->
    <div id="docImgModal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(30,30,30,0.85);align-items:center;justify-content:center;">
        <span id="docImgModalClose" style="position:absolute;top:2rem;right:3rem;font-size:3rem;color:#fff;cursor:pointer;font-weight:bold;z-index:10001;">&times;</span>
        <img id="docImgModalImg" src="" style="max-width:90vw;max-height:80vh;border-radius:18px;box-shadow:0 8px 40px rgba(0,0,0,0.5);display:block;margin:auto;z-index:10000;">
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        function showModal(imgSrc) {
            const modal = document.getElementById('docImgModal');
            const modalImg = document.getElementById('docImgModalImg');
            modalImg.src = imgSrc;
            modal.style.display = 'flex';
        }
        function closeModal() {
            document.getElementById('docImgModal').style.display = 'none';
            document.getElementById('docImgModalImg').src = '';
        }
        document.querySelectorAll('.simple-doc-img-thumb').forEach(function(img) {
            img.addEventListener('click', function() {
                showModal(this.getAttribute('data-img'));
            });
        });
        document.getElementById('docImgModalClose').addEventListener('click', closeModal);
        document.getElementById('docImgModal').addEventListener('click', function(e) {
            if (e.target === this) closeModal();
        });
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeModal();
        });
    });
    </script>
</x-layout.app>
