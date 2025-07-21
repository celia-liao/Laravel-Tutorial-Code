<!-- layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task List APP</title>
    @yield('styles') <!-- 個別頁面的樣式插這裡 -->
</head>
<body>
    <h1>@yield('title')</h1>
    <div>
        @yield('content')
    </div>
</body>
</html>
