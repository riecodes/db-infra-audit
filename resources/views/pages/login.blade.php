@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

<x-layout.app>
    <section class="login-section">
        <div class="login-card">
        <h1 class="login-title">INFRAVAULT</h1>
            <p class="login-subtitle">An Infrastructure Audit Management System</p>
            <h2 class="login-box-title">Log In</h2>
            
            @if($errors->any())
                <div class="login-error">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form class="login-form" method="POST" action="{{ route('login') }}" aria-label="Login form">
                @csrf
                <div class="login-input-group">
                    <label class="login-label" for="login-email">Email</label>
                    <input id="login-email" name="email" type="email" class="login-input" 
                           value="{{ old('email') }}" required aria-label="Email">
                </div>
                <div class="login-input-group">
                    <label class="login-label" for="login-password">Password</label>
                    <input id="login-password" name="password" type="password" class="login-input" required aria-label="Password">
                </div>
                <button type="submit" class="login-btn">Log in</button>
            </form>
            <div class="login-alt-link">
                <a href="/signup">Create account here</a>
            </div>
        </div>
        <div class="login-hero-overlay"></div>
    </section>
</x-layout.app>
