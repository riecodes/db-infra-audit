{{-- Photo Documentation Carousel Component --}}
@php
    $docImgs = $building->documentation_imgs ? explode(',', $building->documentation_imgs) : [];
@endphp

<div class="photo-documentation-section">
    <h2 class="photo-section-title">📸 Photo Documentation</h2>
    
    @if(count($docImgs) > 0)
        <div class="photo-carousel-wrapper">
            <div class="owl-carousel owl-theme photo-carousel" id="{{ $carouselId }}">
                @foreach($docImgs as $img)
                    @php 
                        $imgName = basename($img);
                        $imgPath = asset('assets/img-documentation/' . $img);
                    @endphp
                    <div class="photo-carousel-item">                        <div class="photo-item-wrapper">
                            <img src="{{ $imgPath }}" 
                                 alt="{{ $imgName }}" 
                                 class="photo-carousel-image doc-img-thumb" 
                                 loading="lazy" 
                                 data-img="{{ $imgPath }}"
                                 title="Click to view full size">
                            <div class="photo-item-overlay">
                                <div class="photo-zoom-icon">🔍</div>
                                <div class="photo-click-hint">Click to enlarge</div>
                            </div>
                        </div>
                        <div class="photo-item-caption">{{ $imgName }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="photo-empty-state">
            <div class="photo-empty-icon">📷</div>
            <div class="photo-empty-title">No Documentation Images</div>
            <div class="photo-empty-subtitle">Photo documentation is not available for this building.</div>
        </div>
    @endif
</div>

<style>
/* Photo Documentation Carousel Styles */
.photo-documentation-section {
    background: rgba(245, 236, 215, 0.95);
    border-radius: 25px;
    padding: 2.5rem;
    margin-bottom: 2rem;
    box-shadow: 0 15px 50px rgba(0,0,0,0.1);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255,255,255,0.3);
    animation: cardSlideUp 0.8s ease-out 0.6s forwards;
    opacity: 0;
    transform: translateY(30px);
}

.photo-section-title {
    font-size: 2rem;
    font-weight: 800;
    color: #4d6b53;
    margin-bottom: 2rem;
    text-align: center;
    border-bottom: 2px solid rgba(77,107,83,0.2);
    padding-bottom: 1rem;
}

.photo-carousel-wrapper {
    position: relative;
}

.photo-carousel-item {
    padding: 0 10px;
}

.photo-item-wrapper {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    background: #fff;
}

.photo-item-wrapper:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0,0,0,0.25);
}

.photo-carousel-image {
    width: 100%;
    height: 280px;
    object-fit: cover;
    display: block;
    cursor: pointer !important;
    transition: transform 0.4s ease;
    position: relative;
    z-index: 1;
}

.photo-carousel-image.doc-img-thumb {
    cursor: pointer !important;
}

.photo-item-wrapper:hover .photo-carousel-image {
    transform: scale(1.05);
}

.photo-item-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(77,107,83,0.7);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.photo-item-wrapper:hover .photo-item-overlay {
    opacity: 1;
}

.photo-zoom-icon {
    font-size: 3rem;
    color: white;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    animation: pulse 2s infinite;
    margin-bottom: 0.5rem;
}

.photo-click-hint {
    color: #fff;
    font-size: 1rem;
    font-weight: 600;
    text-shadow: 0 1px 5px rgba(0,0,0,0.5);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    text-align: center;
}

.photo-item-caption {
    padding: 1.2rem;
    background: #fff;
    font-weight: 700;
    font-size: 1.1rem;
    color: #4d6b53;
    text-align: center;
    border-top: 3px solid rgba(77,107,83,0.1);
    word-break: break-word;
}

/* Empty State Styles */
.photo-empty-state {
    text-align: center;
    padding: 4rem 2rem;
    color: #7a9d7b;
}

.photo-empty-icon {
    font-size: 4rem;
    margin-bottom: 1.5rem;
    opacity: 0.6;
}

.photo-empty-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #4d6b53;
    margin-bottom: 0.5rem;
}

.photo-empty-subtitle {
    font-size: 1.1rem;
    opacity: 0.8;
}

/* OWL Carousel Custom Navigation */
.photo-carousel .owl-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
    display: flex;
    justify-content: space-between;
    pointer-events: none;
}

.photo-carousel .owl-nav button {
    background: rgba(245, 236, 215, 0.95) !important;
    color: #4d6b53 !important;
    border: none !important;
    border-radius: 50% !important;
    width: 50px !important;
    height: 50px !important;
    font-size: 1.8rem !important;
    font-weight: bold !important;
    pointer-events: all;
    transition: all 0.3s ease !important;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}

.photo-carousel .owl-nav button:hover {
    background: #e5dfc7 !important;
    transform: scale(1.1) !important;
    box-shadow: 0 12px 30px rgba(0,0,0,0.2) !important;
}

.photo-carousel .owl-nav button.owl-prev {
    margin-left: -25px;
}

.photo-carousel .owl-nav button.owl-next {
    margin-right: -25px;
}

/* OWL Carousel Custom Dots */
.photo-carousel .owl-dots {
    text-align: center;
    margin-top: 2rem;
}

.photo-carousel .owl-dot {
    display: inline-block;
    margin: 0 8px;
}

.photo-carousel .owl-dot span {
    width: 12px;
    height: 12px;
    background: rgba(77,107,83,0.3);
    border-radius: 50%;
    display: block;
    transition: all 0.3s ease;
}

.photo-carousel .owl-dot.active span {
    background: #7a9d7b;
    transform: scale(1.3);
}

.photo-carousel .owl-dot:hover span {
    background: #4d6b53;
    transform: scale(1.2);
}

/* Pulse Animation */
@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

/* Responsive Design */
@media (max-width: 768px) {
    .photo-documentation-section {
        padding: 2rem 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .photo-section-title {
        font-size: 1.6rem;
        margin-bottom: 1.5rem;
    }
    
    .photo-carousel-image {
        height: 220px;
    }
    
    .photo-item-caption {
        padding: 1rem;
        font-size: 1rem;
    }
    
    .photo-carousel .owl-nav button {
        width: 40px !important;
        height: 40px !important;
        font-size: 1.4rem !important;
    }
    
    .photo-carousel .owl-nav button.owl-prev {
        margin-left: -20px;
    }
    
    .photo-carousel .owl-nav button.owl-next {
        margin-right: -20px;
    }
}
</style>
