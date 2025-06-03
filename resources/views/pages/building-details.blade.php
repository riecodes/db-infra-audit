@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/building-details.css') }}">
@endpush

<x-layout.app>
    <div class="building-header-bg">
        <div class="building-header-title">{{ strtoupper($building->name) }}</div>
        <button class="edit-info-btn">EDIT INFO</button>
    </div>
    <div class="building-info-section">
        <h3>BUILDING INFORMATION</h3>
        <div><label>Building Name:</label> {{ $building->name }}</div>
        <div><label>Height:</label> </div>
        <div><label>No. of Storey:</label> </div>
        <div><label>Building Type:</label> </div>
        <div><label>Type of Structure:</label> </div>
        <div><label>Design Occupancy:</label> </div>
        <div><label>Year Ed. of NSCP:</label> </div>
    </div>
    <div class="infra-audit-section" style="text-align:left;">
        <button class="infra-audit-btn" onclick="window.location.href=window.location.pathname+'/audit'">
            <span style="font-size:2.2rem;vertical-align:middle;">&#187;</span>
            <span style="font-size:1.6rem;font-weight:600;color:#40684a;vertical-align:middle;margin-left:0.5rem;">INFRASTRUCTURE AUDIT</span>
        </button>
    </div>
</x-layout.app> 