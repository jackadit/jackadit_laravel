<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Jackadit.com') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50">
<!-- Navigation -->
<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-indigo-600">
                    🎓 E-Learning Platform
                </a>
            </div>
            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-indigo-600">Dashboard</a>
                    <a href="{{ route('courses.index') }}" class="text-gray-700 hover:text-indigo-600">Courses</a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600">Login</a>
                    <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                        Get Started
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32">
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 lg:mt-16 lg:px-8 xl:mt-20">
                <div class="text-center">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block">Learn at your own pace</span>
                        <span class="block text-indigo-600">with expert instructors</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl">
                        Access thousands of courses on programming, design, business and more.
                        Start learning today and advance your career.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center">
                        <div class="rounded-md shadow">
                            <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                Start Learning Free
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                Sign In
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                Why choose our platform?
            </h2>
        </div>

        <div class="mt-10">
            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-indigo-600 text-4xl mb-4">📚</div>
                    <h3 class="text-lg font-medium text-gray-900">Diverse Courses</h3>
                    <p class="mt-2 text-base text-gray-500">
                        Access a wide range of courses across multiple disciplines and skill levels.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-indigo-600 text-4xl mb-4">🎓</div>
                    <h3 class="text-lg font-medium text-gray-900">Expert Instructors</h3>
                    <p class="mt-2 text-base text-gray-500">
                        Learn from industry professionals with years of real-world experience.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-indigo-600 text-4xl mb-4">⏰</div>
                    <h3 class="text-lg font-medium text-gray-900">Learn Anytime</h3>
                    <p class="mt-2 text-base text-gray-500">
                        Study at your own pace with lifetime access to course materials.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-indigo-600 text-4xl mb-4">📊</div>
                    <h3 class="text-lg font-medium text-gray-900">Track Progress</h3>
                    <p class="mt-2 text-base text-gray-500">
                        Monitor your learning journey with detailed progress tracking.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-indigo-600 text-4xl mb-4">🏆</div>
                    <h3 class="text-lg font-medium text-gray-900">Certificates</h3>
                    <p class="mt-2 text-base text-gray-500">
                        Earn certificates upon course completion to showcase your skills.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-indigo-600 text-4xl mb-4">💬</div>
                    <h3 class="text-lg font-medium text-gray-900">Community Support</h3>
                    <p class="mt-2 text-base text-gray-500">
                        Connect with fellow learners and get help when you need it.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-indigo-700">
    <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
            <span class="block">Ready to get started?</span>
        </h2>
        <p class="mt-4 text-lg leading-6 text-indigo-200">
            Join thousands of students already learning on our platform.
        </p>
        <a href="{{ route('register') }}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
            Sign up for free
        </a>
    </div>
</div>

<!-- Footer -->
<footer class="bg-white">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center text-gray-500">
            <p>&copy; {{ date('Y') }} E-Learning Platform. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
