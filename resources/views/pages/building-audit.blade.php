@push('styles')
    <link rel="stylesheet" href="{{ asset('css/building-audit.css') }}">
@endpush

<x-layout.app>
    <div class="audit-container">
        <h1 class="audit-title">{{ strtoupper($building->name) }}</h1>
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
</x-layout.app>
