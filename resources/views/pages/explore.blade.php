@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
@endpush

@push('scripts')
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
@endpush

<x-layout.app>
    <section class="explore-section">
        <div class="explore-card">
            <h2 class="explore-title">Explore CvSU Naic</h2>
                <div id="explore-map" class="explore-map"></div>
                <a href="{{ url('/about-cvsu-naic') }}" class="about-cvsu-btn">About CvSU - Naic</a>
        </div>
        <div class="explore-hero-overlay"></div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('explore-map').setView([14.3230, 120.7541], 20);
            L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'Tiles &copy; Esri'
            }).addTo(map);
            var buildings = @json($buildings);
            var section = document.querySelector('.explore-section');
            section.style.backgroundImage = "url('/assets/img-buildings/CVSU_Naic Arc.jpg')";
            buildings.forEach(function(bldg) {
                var popupContent = '<b>' + bldg.name + '</b><br><a href="/buildings/' + bldg.slug + '">Building details</a>';
                var marker = L.marker([bldg.lat, bldg.lng]).addTo(map).bindPopup(popupContent);
            });
        });
    </script>
</x-layout.app>
