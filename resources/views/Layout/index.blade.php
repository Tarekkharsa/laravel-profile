<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css' ,'resources/js/app.js'])

</head>
<body class="bg-body text-white font-poppins pb-12">
    <header class="py-6">
        <div class="container flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
            <div class="text-lg font-bold">{{$user->name}}</div>
            <div class="hidden md:flex space-x-12 items-center">
                <a href="/" class="text-selected-text">Home</a>
                <a href="/#work">My work</a>
                <a href="/#work-experience">Work Experience</a>
                <a href="{{route('contact')}}"><button class="px-6 py-2 bg-theme font-bold">Hire me</button></a>
            </div>
            <div class="md:hidden">
                <svg width="26" height="18" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 17.5H0.25V14.6667H13V17.5ZM25.75 10.4167H0.25V7.58333H25.75V10.4167ZM25.75 3.33333H13V0.5H25.75V3.33333Z" fill="white"/></svg>
            </div>
        </div>
    </header>


    @yield('content')
    </body>
</html>