<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('template.favicon')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Russo+One&display=swap"
        rel="stylesheet">
    <title>Благодность</title>
    @vite(['resources/css/app.css', 'resources/css/thanks.css', 'resources/css/header.css', 'resources/css/footer.css', 'resources/js/burger.js', 'resources/js/yearFooter.js'])

</head>

<body>
    @include('template.header')
    <main class="page">
        <div class="container">
            <div id="thanks-animation" style="width:320px;height:320px;margin:0 auto;"></div>
            <div class="pageTitle">
                Спасибо за вашу заявку!
            </div>
            <div class="mainText">
                Мы свяжемся с вами в ближайшее время.
            </div>
        </div>
    </main>
    @include('template.footer')
    <script src="https://unpkg.com/lottie-web@5.9.6/build/player/lottie.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            try {
                var container = document.getElementById('thanks-animation');
                if (!container) return;

                lottie.loadAnimation({
                    container: container,
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: "{{ asset('images/animation-1737537656517.json') }}"
                });
            } catch (e) {
                // Fail silently in production
                console.error('Lottie load error:', e);
            }
        });
    </script>
</body>

</html>
