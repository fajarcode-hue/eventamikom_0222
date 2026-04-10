<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-100 flex h-screen overflow-hidden">

    <aside class="w-64 bg-white border-r border-slate-200 flex flex-col shadow-sm">
        <div class="h-20 flex items-center justify-center border-b border-slate-200">
            <h1 class="text-2xl font-extrabold text-indigo-600">Event<span class="text-slate-800">Hub</span></h1>
        </div>
        
        <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
            <a href="/profil" class="flex items-center gap-3 px-4 py-3 rounded-lg font-medium transition duration-300 {{ Request::is('profil') ? 'bg-indigo-600 text-white shadow-md' : 'text-slate-500 hover:bg-indigo-50 hover:text-indigo-600' }}">
                <i class="fas fa-user-circle text-lg"></i> Profil
            </a>
            
            <a href="/katalog" class="flex items-center gap-3 px-4 py-3 rounded-lg font-medium transition duration-300 {{ Request::is('katalog') ? 'bg-indigo-600 text-white shadow-md' : 'text-slate-500 hover:bg-indigo-50 hover:text-indigo-600' }}">
                <i class="fas fa-calendar-alt text-lg"></i> Katalog Event
            </a>
            
            <a href="/bantuan" class="flex items-center gap-3 px-4 py-3 rounded-lg font-medium transition duration-300 {{ Request::is('bantuan') ? 'bg-indigo-600 text-white shadow-md' : 'text-slate-500 hover:bg-indigo-50 hover:text-indigo-600' }}">
                <i class="fas fa-question-circle text-lg"></i> Bantuan
            </a>
        </nav>

        <div class="p-4 border-t border-slate-200">
            <a href="/" class="flex items-center justify-center gap-2 px-4 py-2 rounded-lg font-medium text-slate-500 border border-slate-200 hover:bg-slate-50 hover:text-slate-700 transition duration-300">
                <i class="fas fa-arrow-left"></i> Kembali ke Awal
            </a>
        </div>
    </aside>

    <main class="flex-1 overflow-y-auto h-screen p-8">
        @yield('content')
    </main>

</body>
</html>