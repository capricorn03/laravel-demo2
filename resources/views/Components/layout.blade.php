<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://cdn.tailwindcss.com'>
        </script>
</head>
<body>
    <nav>
        <x-nav-link href='/'>Home</x-nav-link>
        <x-nav-link href='/about'>About</x-nav-link>
    </nav>
    {{ $slot }}
    <!-- {{ $slot }}  = <?php echo $slot ?> -->
</body>
</html>