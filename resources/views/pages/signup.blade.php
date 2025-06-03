@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

<x-layout.app>
    <section class="login-section">
        <div class="login-card">
        <h1 class="login-title">INFRAVAULT</h1>
            <p class="login-subtitle">An Infrastructure Audit Management System</p>
            <h2 class="login-box-title">Sign Up</h2>
            <form class="login-form" aria-label="Signup form">
                <div class="login-input-group">
                    <label class="login-label" for="signup-name">Name</label>
                    <input id="signup-name" type="text" class="login-input" required aria-label="Name">
                </div>
                <div class="login-input-group">
                    <label class="login-label" for="signup-password">Password</label>
                    <input id="signup-password" type="password" class="login-input" required aria-label="Password">
                </div>
                <div class="login-input-group">
                    <label class="login-label" for="signup-repeat-password">Repeat Password</label>
                    <input id="signup-repeat-password" type="password" class="login-input" required aria-label="Repeat Password">
                </div>
                <button type="submit" class="login-btn">Sign up</button>
            </form>
            <div class="login-alt-link">
                <a href="/login">Already have an account?</a>
            </div>
        </div>
    </section>
</x-layout.app> 