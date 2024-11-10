@extends('layout.layout')

@section('content')
    <!-- Hero Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                    Помогать легко, когда есть кому доверять
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-500">
                    Найдите и поддержите проверенные благотворительные фонды. Давайте вместе сделаем мир лучше.
                </p>
                <div class="mt-10 flex justify-center gap-x-6">
                    <a href="#" class="bg-blue-600 text-white px-8 py-3 rounded-md text-lg font-medium hover:bg-blue-700">
                        Помочь
                    </a>
                    <a href="#" class="bg-gray-100 text-gray-700 px-8 py-3 rounded-md text-lg font-medium hover:bg-gray-200">
                        Подробнее
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">О нас</h2>
                <p class="mt-4 text-xl text-gray-500">Мы создаем надежный мост между благотворителями и фондами</p>
            </div>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3 mt-12">
                <div class="bg-white rounded-lg p-6 text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Проверенные фонды</h3>
                    <p class="text-gray-600">Мы тщательно проверяем каждый фонд перед публикацией на платформе</p>
                </div>
                <div class="bg-white rounded-lg p-6 text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Безопасные платежи</h3>
                    <p class="text-gray-600">Все транзакции защищены и прозрачны для благотворителей</p>
                </div>
                <div class="bg-white rounded-lg p-6 text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Отчетность</h3>
                    <p class="text-gray-600">Регулярные отчеты о использовании собранных средств</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Section (Your existing code) -->
    <div class="bg-gray-50 py-16 mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">
                Проверенные фонды
            </h2>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Fund Card 1 -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="h-40 bg-gray-200 rounded-lg mb-4"></div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Детям с любовью</h3>
                    <p class="text-gray-600 mb-4">Помощь детям</p>
                    <div class="">
                        <div class="text-blue-600 font-medium">Собрано: 950,000 ₸</div>
                        <button class="mt-5 w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Поддержать
                        </button>
                    </div>
                </div>

                <!-- Fund Card 2 -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="h-40 bg-gray-200 rounded-lg mb-4"></div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Старшее поколение</h3>
                    <p class="text-gray-600 mb-4">Поддержка пожилых людей</p>
                    <div class="">
                        <div class="text-blue-600 font-medium">Собрано: 550,000 ₸</div>
                        <button class="bg-blue-600 w-full mt-5 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Поддержать
                        </button>
                    </div>
                </div>

                <!-- Fund Card 3 -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="h-40 bg-gray-200 rounded-lg mb-4"></div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Экология будущего</h3>
                    <p class="text-gray-600 mb-4">Защита окружающей среды</p>
                    <div class="">
                        <div class="text-blue-600 font-medium">Собрано: 650,000 ₸</div>
                        <button class="bg-blue-600 text-white px-4 mt-5 w-full py-2 rounded-md hover:bg-blue-700">
                            Поддержать
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ... -->

    <div class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-3">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-blue-600">150+</div>
                        <div class="mt-2 text-gray-600">Проверенных фондов</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-blue-600">₸50M+</div>
                        <div class="mt-2 text-gray-600">Собрано средств</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-blue-600">10000+</div>
                        <div class="mt-2 text-gray-600">Благотворителей</div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Contact Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Контакты</h2>
                <p class="mt-4 text-xl text-gray-500">Свяжитесь с нами любым удобным способом</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-white rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Наши контакты</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <div class="ml-4">
                                <p class="text-gray-900">Телефон</p>
                                <p class="text-gray-600">+7 (777) 123-45-67</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div class="ml-4">
                                <p class="text-gray-900">Email</p>
                                <p class="text-gray-600">info@example.kz</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div class="ml-4">
                                <p class="text-gray-900">Адрес</p>
                                <p class="text-gray-600">г. Астана, ул. Примерная 123</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Напишите нам</h3>
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Ваше имя</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Сообщение</label>
                            <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Отправить
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
