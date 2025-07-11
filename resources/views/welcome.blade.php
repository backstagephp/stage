<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, Backstage</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-50">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-4xl">
        <!-- Backstage Info -->
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <h2 class="text-xl font-bold mb-2">Welcome, Backstage</h2>
            <p class="text-gray-600 text-center">Build your site with the Backstage, the CMS done the Laravel way. Backstage in build on top of Laravel and Filament.</p>
            <div class="flex items-center gap-4">
                <a href="https://github.com/backstagephp" class="mt-4 text-blue-600 hover:underline">Github</a> <a href="https://backstagephp.com" class="mt-4 text-blue-600 hover:underline">Offical website</a>
            </div>
        </div>
        <!-- Docs Info -->
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <h2 class="text-xl font-bold mb-2">Documentation</h2>
            <p class="text-gray-600 text-center">Visit the docs for guides, API references and tutorials.</p>
            <a href="https://docs.backstagephp.com" class="mt-4 text-blue-600 hover:underline">Go to Docs</a>
        </div>
        <!-- Quick Start Code Block -->
        <div class="bg-gray-900 rounded-lg shadow p-6 col-span-1 md:col-span-2">
            <h2 class="text-xl font-bold text-white mb-2">Quick Start</h2>
            <pre class="bg-gray-800 rounded p-4 text-green-400 text-sm overflow-x-auto"><code>php artisan make:filament-user</code></pre>
            <div class="text-white mt-2">
                Login at <a href="/backstage">/backstage</a>.
            </div>
        </div>
        <!-- Credits -->
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center col-span-1 md:col-span-2">
            <h2 class="text-xl font-bold mb-2">Credits</h2>
            <p class="text-gray-600 text-center">Made with ❤️ by Backstage. Powered by Tailwind CSS and Vite.</p>
        </div>
        <p class="text-gray-500 text-xs text-center col-span-1 md:col-span-2 mt-4">
            Not meant to see this page? Remove the routes in /routes/web.php.
        </p>
    </div>
</div>
</body>
</html>