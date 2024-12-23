<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="sidebar" style="width: 100%; background-color: #f3f3f3; padding: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <ul style="list-style-type: none; padding: 0; display: flex; justify-content: space-around;">
            <li><a href="/" style="text-decoration: none; color: #0078d4; font-weight: bold;">Home</a></li>
            <li><a href="/about" style="text-decoration: none; color: #0078d4; font-weight: bold;">About</a></li>
            <li><a href="/services" style="text-decoration: none; color: #0078d4; font-weight: bold;">Services</a></li>
            <li><a href="/contact" style="text-decoration: none; color: #0078d4; font-weight: bold;">Contact</a></li>
        </ul>
    </div>
    @yield('conteudo')
    
</body>
</html>