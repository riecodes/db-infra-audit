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
        <div class="photo-section">
            <h2 class="section-title">Photo Documentation</h2>
            <div class="photo-placeholder">
                <div class="photo-grid">
                    <div class="photo-item">
                        <div class="photo-preview">📷</div>
                        <div class="photo-label">Exterior View</div>
                    </div>
                    <div class="photo-item">
                        <div class="photo-preview">📷</div>
                        <div class="photo-label">Interior View</div>
                    </div>
                    <div class="photo-item">
                        <div class="photo-preview">📷</div>
                        <div class="photo-label">Structural Details</div>
                    </div>
                    <div class="photo-item">
                        <div class="photo-preview">📷</div>
                        <div class="photo-label">Documentation</div>
                    </div>
                </div>
                <p class="photo-note">📸 Photo documentation will be implemented in future updates</p>
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
