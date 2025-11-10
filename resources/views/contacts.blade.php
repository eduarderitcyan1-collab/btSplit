<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Russo+One&display=swap"
        rel="stylesheet">
    <title>Контакты</title>
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/index.css', 'resources/css/footer.css', 'resources/js/app.js', 'resources/js/burger.js', 'resources/js/mask.js', 'resources/js/accordion.js', 'resources/js/yearFooter.js'])
</head>

<body>
    @include('template.header')
    <main class="page">
        @include('template.contacts')
    </main>
    @include('template.footer')
</body>

</html>
