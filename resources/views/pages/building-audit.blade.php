@push('styles')
    <link rel="stylesheet" href="{{ asset('css/building-audit.css') }}">
@endpush

<x-layout.app>
    <!-- Hero Section -->
    <div class="audit-hero">
        <div class="breadcrumb">
            <a href="{{ route('explore') }}">Explore</a> / 
            <a href="{{ route('buildings.show', $building->slug) }}">{{ $building->name }}</a> / 
            Audit
        </div>
        <a href="{{ route('buildings.show', $building->slug) }}" class="back-btn">
            ← Back to Details
        </a>
        <div class="audit-hero-content">
            <h1 class="audit-building-title">{{ strtoupper($building->name) }}</h1>
            <div class="audit-subtitle">
                <span class="audit-arrow">››</span>
                INFRASTRUCTURE AUDIT
                <span class="audit-arrow">‹‹</span>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="audit-content">
        <!-- RVS Score Card -->
        <div class="audit-card rvs-score-card">
            <div class="rvs-header">
                <div class="rvs-title">
                    🏗️ RVS SCORE:
                </div>
                <div class="rvs-score">3.00</div>
            </div>
            <div class="rvs-description">
                Structure may not be vulnerable to Seismic Hazard
            </div>
        </div>

        <!-- Vulnerability Assessment -->
        <div class="audit-card">
            <div class="section-title">Building Location is Vulnerable To:</div>
            <div class="vulnerability-grid">
                <div class="vulnerability-item yes">
                    <span class="vulnerability-label">🌍 Earthquake</span>
                    <span class="vulnerability-status yes">Yes</span>
                </div>
                <div class="vulnerability-item no">
                    <span class="vulnerability-label">⛰️ Landslide/Soil Erosion</span>
                    <span class="vulnerability-status no">No</span>
                </div>
                <div class="vulnerability-item yes">
                    <span class="vulnerability-label">💧 Liquefaction</span>
                    <span class="vulnerability-status yes">Yes</span>
                </div>
                <div class="vulnerability-item yes">
                    <span class="vulnerability-label">🌊 Tsunami</span>
                    <span class="vulnerability-status yes">Yes</span>
                </div>
            </div>
        </div>

        <!-- Physical Condition Evaluation -->
        <div class="audit-card">
            <div class="section-title">Physical Condition Evaluation</div>
            <div class="condition-grid">
                <div class="condition-item">
                    <div class="condition-type">🏗️ Structural</div>
                    <div class="condition-status">No adverse defects</div>
                </div>
                <div class="condition-item">
                    <div class="condition-type">🏢 Non-Structural</div>
                    <div class="condition-status">Presence of minor non-structural defects</div>
                </div>
            </div>
        </div>

        <!-- Photo Documentation -->
        <div class="audit-card photo-section">
            <div class="photo-title">
                <span class="audit-arrow">››</span>
                📸 Photo Documentation
            </div>
            <div class="photo-placeholder">
                Photo documentation will be displayed here when available
            </div>
        </div>
    </div>
</x-layout.app>
