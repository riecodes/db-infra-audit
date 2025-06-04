<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Infravault') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&family=Glacial+Indifference:wght@400;700&family=League+Spartan:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @stack('styles')
</head>
<body>
    <x-layout.navbar />
    
    <!-- Flash Messages -->
    @if(session('success'))
        <div class="flash-message flash-success" id="flashMessage">
            {{ session('success') }}
        </div>
    @endif
    
    @if(session('error'))
        <div class="flash-message flash-error" id="flashMessage">
            {{ session('error') }}
        </div>
    @endif
    
    <main>
        {{ $slot }}
    </main>
    @stack('scripts')
    
    <script>
        // Auto-hide flash messages after 5 seconds
        const flashMessage = document.getElementById('flashMessage');
        if (flashMessage) {
            setTimeout(() => {
                flashMessage.style.opacity = '0';
                setTimeout(() => {
                    flashMessage.remove();
                }, 300);
            }, 5000);
        }
    </script>
</body>
</html>
