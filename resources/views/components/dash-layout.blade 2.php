
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="{{asset('images/logo.png')}}"/>
    <title>Dashboard</title>
</head>
<body>

<div>
    <div class="overflow-hidden h-screen grid grid-cols-[auto_1fr] antialiased bg-black text-black ">

        <!-- Header -->
        <x-dash-head />
        <!-- ./Header -->
    
        <!-- Sidebar -->
        <x-dash-asidebar />
        <!-- ./Sidebar -->

        <!-- body -->
        <div class="mt-24 ">

            {{$slot}}

        </div>
        <!-- ./body -->
    </div>
</div>

</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/handleUpladFile.js')}}"></script>
</html>