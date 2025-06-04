@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

<x-layout.app>
    <section class="login-section">
        <div class="login-card">
        <h1 class="login-title">INFRAVAULT</h1>
            <p class="login-subtitle">An Infrastructure Audit Management System</p>
            <h2 class="login-box-title">Sign Up</h2>
            
            @if($errors->any())
                <div class="login-error">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form class="login-form" method="POST" action="{{ route('signup') }}" aria-label="Signup form">
                @csrf
                <div class="login-input-group">
                    <label class="login-label" for="signup-name">Name</label>
                    <input id="signup-name" name="name" type="text" class="login-input" 
                           value="{{ old('name') }}" required aria-label="Name">
                </div>
                <div class="login-input-group">
                    <label class="login-label" for="signup-email">Email</label>
                    <input id="signup-email" name="email" type="email" class="login-input" 
                           value="{{ old('email') }}" required aria-label="Email">
                </div>
                <div class="login-input-group">
                    <label class="login-label" for="signup-password">Password</label>
                    <input id="signup-password" name="password" type="password" class="login-input" required aria-label="Password">
                </div>
                <div class="login-input-group">
                    <label class="login-label" for="signup-repeat-password">Repeat Password</label>
                    <input id="signup-repeat-password" name="password_confirmation" type="password" class="login-input" required aria-label="Repeat Password">
                </div>
                <button type="submit" class="login-btn">Sign up</button>
            </form>
            <div class="login-alt-link">
                <a href="/login">Already have an account?</a>
            </div>
        </div>
        <div class="login-hero-overlay"></div>
    </section>
</x-layout.app> 