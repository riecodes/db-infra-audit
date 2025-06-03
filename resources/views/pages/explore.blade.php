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
    </section>
    @php
        function building_slug($name) {
            $slug = strtolower($name);
            $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
            $slug = trim($slug, '-');
            return $slug;
        }
        $buildings = [
            ['name' => 'Aquabest', 'lat' => 14.322419965590676, 'lng' => 120.75373130111916],
            ['name' => 'STAR Building', 'lat' => 14.32263864698599, 'lng' => 120.75349043187569],
            ['name' => 'Supply office', 'lat' => 14.322831600981377, 'lng' => 120.75368009269731],
            ['name' => 'Pangasiwaan', 'lat' => 14.323052119630082, 'lng' => 120.75376733667528],
            ['name' => 'HR/Accounting', 'lat' => 14.323202348096572, 'lng' => 120.75402975818552],
            ['name' => 'OSAS/CSG/ROTC', 'lat' => 14.322605109988167, 'lng' => 120.7541075191224],
            ['name' => 'PPSS', 'lat' => 14.322486751807322, 'lng' => 120.75415154925092],
            ['name' => 'Aklatan', 'lat' => 14.32290415466641, 'lng' => 120.7542755995501],
            ['name' => 'Infirmary', 'lat' => 14.323026534415085, 'lng' => 120.75440641622926],
            ['name' => 'Gym', 'lat' => 14.323159840851101, 'lng' => 120.75435905156957],
            ['name' => 'Coop', 'lat' => 14.323175138305908, 'lng' => 120.75423274581038],
            ['name' => 'Canteen', 'lat' => 14.32316639690329, 'lng' => 120.75448310186876],
            ['name' => 'Management Building 1', 'lat' => 14.323281039699578, 'lng' => 120.75438227597373],
            ['name' => 'Management Building 2', 'lat' => 14.323388891254371, 'lng' => 120.75445603672291],
            ['name' => 'Management Building 3', 'lat' => 14.32354098112236, 'lng' => 120.75454643769015],
            ['name' => 'Management Building 4', 'lat' => 14.323638437235923, 'lng' => 120.75469261808402],
            ['name' => 'Management Building 5', 'lat' => 14.323456519123038, 'lng' => 120.7546725015161],
        ];
        // Add slug to each building
        foreach ($buildings as &$b) {
            $b['slug'] = building_slug($b['name']);
        }
        unset($b);
    @endphp
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('explore-map').setView([14.3229, 120.7541], 19);
            L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'Tiles &copy; Esri'
            }).addTo(map);
            var buildings = @json($buildings);
            var section = document.querySelector('.explore-section');
            buildings.forEach(function(bldg) {
                var popupContent = '<b>' + bldg.name + '</b><br><a href="/buildings/' + bldg.slug + '">Building details</a>';
                var marker = L.marker([bldg.lat, bldg.lng]).addTo(map).bindPopup(popupContent);
                marker.on('click', function() {
                    // Convert slug to image filename (e.g., star-building -> 02_STAR_Building.jpg)
                    // You may need to adjust this logic to match your actual filenames
                    var imgName = bldg.slug.replace(/-/g, '_');
                    var imgPath = `/assets/img-buildings/${imgName.charAt(0).toUpperCase() + imgName.slice(1)}.jpg`;
                    // Fallback to default if not found
                    var defaultImg = '/assets/img-buildings/CVSU_Naic Arc.jpg';
                    // Try to set the image, fallback if not found (best effort, no pre-check)
                    section.style.backgroundImage = `url('${imgPath}'), url('${defaultImg}')`;
                });
            });
        });
    </script>
</x-layout.app>
