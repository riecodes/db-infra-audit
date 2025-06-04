@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactList = document.querySelector('.contact-list');
    const contactCards = document.querySelectorAll('.contact-card');
    
    if (contactList && contactCards.length > 0) {
        // Add smooth scroll behavior and parallax effect
        contactList.addEventListener('scroll', function() {
            const scrollTop = this.scrollTop;
            const maxScroll = this.scrollHeight - this.clientHeight;
            const scrollProgress = scrollTop / maxScroll;
            
            contactCards.forEach((card, index) => {
                // Create staggered parallax effect
                const offset = (scrollProgress * 20) + (index * 2);
                const opacity = 1 - (Math.abs(scrollTop - (index * 100)) / 300);
                
                card.style.transform = `translateX(${Math.sin(offset * 0.1) * 5}px)`;
                card.style.opacity = Math.max(0.7, Math.min(1, opacity));
            });
        });
        
        // Add intersection observer for reveal animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, {
            root: contactList,
            threshold: 0.1
        });
        
        contactCards.forEach(card => {
            observer.observe(card);
        });
    }
});
</script>
@endpush

<x-layout.app>
    <section class="contact-section">
        <div class="contact-card-container">
            <h2 class="contact-main-title">Contact</h2>
            <div class="contact-list">
                <div class="contact-scroll-container">
                    @foreach($contacts as $contact)
                    <div class="contact-card">
                        <img class="contact-avatar" src="{{ $contact->avatar_url }}" alt="{{ $contact->full_name }} Avatar">
                        <div class="contact-info">
                            <div class="contact-name">{{ $contact->full_name }}</div>
                            <div class="contact-social">
                                <i class="fab fa-facebook-square"></i> 
                                {{ $contact->facebook_name }} - 
                                <a href="{{ $contact->facebook_link }}" target="_blank" style="color: inherit; text-decoration: none;">
                                    facebook.com/{{ $contact->facebook_url }}
                                </a>
                            </div>
                            <div class="contact-email">
                                <i class="fas fa-envelope"></i> 
                                <a href="mailto:{{ $contact->email }}" style="color: inherit; text-decoration: none;">
                                    {{ $contact->email }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="contact-hero-overlay"></div>
    </section>
</x-layout.app>
