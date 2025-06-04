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
        <button class="edit-info-btn">EDIT INFO</button>
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
                    <th>3.00</th>
                    <th>Structure may not be vulnerable to Seismic Hazard</th>
                </tr>
                <tr>
                    <th colspan="3">BUILDING LOCATION IS VULNERABLE TO:</th>
                </tr>
                <tr>
                    <td>Earthquake</td>
                    <td colspan="2">Yes</td>
                </tr>
                <tr>
                    <td>Landslide/Soil Erosion?</td>
                    <td colspan="2">No</td>
                </tr>
                <tr>
                    <td>Liquefaction?</td>
                    <td colspan="2">Yes</td>
                </tr>
                <tr>
                    <td>Tsunami?</td>
                    <td colspan="2">Yes</td>
                </tr>
                <tr>
                    <th colspan="3">PHYSICAL CONDITION EVALUATION</th>
                </tr>
                <tr>
                    <td>STRUCTURAL</td>
                    <td colspan="2">No adverse defects</td>
                </tr>
                <tr>
                    <td>NON STRUCTURAL</td>
                    <td colspan="2">Presence of minor non-structural defects</td>
                </tr>
            </table>
        </div>
        <div class="audit-section-title audit-photo-title">
            <span class="audit-arrow">&#187;&#187;</span>
            Photo Documentation
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
                <div class="stat-value">3.00</div>
                <div class="stat-label">RVS Score</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">⚠️</div>
                <div class="stat-value">Active</div>
                <div class="stat-label">Audit Status</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">🛡️</div>
                <div class="stat-value">Low Risk</div>
                <div class="stat-label">Risk Level</div>
            </div>
        </div>

        <!-- RVS Score Card -->
        <div class="rvs-score-card">
            <div class="rvs-score">3.00</div>
            <div class="rvs-description">RVS Score</div>
            <div class="rvs-status">Structure may not be vulnerable to Seismic Hazard</div>
        </div>

        <!-- Vulnerability Assessment -->
        <div class="vulnerability-section">
            <h2 class="section-title">Building Location Vulnerability Assessment</h2>
            <div class="vulnerability-grid">
                <div class="vulnerability-item">
                    <span class="vulnerability-label">Earthquake</span>
                    <span class="vulnerability-status yes">Yes</span>
                </div>
                <div class="vulnerability-item">
                    <span class="vulnerability-label">Landslide/Soil Erosion</span>
                    <span class="vulnerability-status no">No</span>
                </div>
                <div class="vulnerability-item">
                    <span class="vulnerability-label">Liquefaction</span>
                    <span class="vulnerability-status yes">Yes</span>
                </div>
                <div class="vulnerability-item">
                    <span class="vulnerability-label">Tsunami</span>
                    <span class="vulnerability-status yes">Yes</span>
                </div>
            </div>
        </div>

        <!-- Physical Condition Evaluation -->
        <div class="condition-section">
            <h2 class="section-title">Physical Condition Evaluation</h2>
            <div class="condition-grid">
                <div class="condition-item">
                    <div class="condition-type">Structural</div>
                    <div class="condition-status">No adverse defects</div>
                </div>
                <div class="condition-item">
                    <div class="condition-type">Non-Structural</div>
                    <div class="condition-status">Presence of minor non-structural defects</div>
                </div>
            </div>
        </div>

        <!-- Photo Documentation -->
        <div class="photo-section">
            <h2 class="section-title">Photo Documentation</h2>
            <div class="photo-placeholder">
                📸 Photo documentation will be displayed here
            </div>
        </div>
    </div>

    <!-- Floating Back Button -->
    <button class="back-btn" onclick="window.history.back()">
        <span class="icon">←</span>
        <span>Back to Details</span>
    </button>

    <script>
    function toggleView() {
        const tableView = document.getElementById('tableView');
        const cardView = document.getElementById('cardView');
        const toggleText = document.getElementById('toggleText');
        const toggleIcon = document.querySelector('.view-toggle-btn .icon');
        
        if (tableView.style.display === 'none') {
            // Switch to table view
            tableView.style.display = 'block';
            cardView.style.display = 'none';
            toggleText.textContent = 'View in Cards';
            toggleIcon.textContent = '📊';
        } else {
            // Switch to card view
            tableView.style.display = 'none';
            cardView.style.display = 'block';
            toggleText.textContent = 'View in Table';
            toggleIcon.textContent = '🃏';
        }
    }
    </script>
</x-layout.app>
