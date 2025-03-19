<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Escribir Mensaje - Portal Misional</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700,800&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --primary-color: #1e3a8a;
            --primary-light: #3b82f6;
            --primary-dark: #1e3a8a;
            --accent-color: #f59e0b;
            --gradient-start: #1e40af;
            --gradient-end: #3b82f6;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }

        .hero-gradient {
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.8;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--gradient-end) 0%, var(--gradient-start) 100%);
            z-index: -1;
            transition: opacity 0.3s ease-out;
            opacity: 0;
        }

        .btn-primary:hover::before {
            opacity: 1;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(30, 64, 175, 0.4);
        }

        .section-heading {
            position: relative;
            display: inline-block;
            padding-bottom: 0.75rem;
        }

        .section-heading::after {
            content: '';
            position: absolute;
            width: 60%;
            height: 4px;
            background: linear-gradient(90deg, var(--accent-color), var(--primary-light));
            bottom: 0;
            left: 20%;
            border-radius: 4px;
        }

        .form-card {
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid rgba(229, 231, 235, 0.5);
        }

        .form-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            transform: translateY(-5px);
        }

        .form-input {
            transition: all 0.3s ease;
            border-radius: 0.5rem;
            border: 1px solid rgba(229, 231, 235, 0.8);
            width: 100%;
        }

        .form-input:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            transform: translateY(-1px);
        }

        .character-counter {
            transition: all 0.3s ease;
        }

        .character-counter.warning {
            color: #f59e0b;
        }

        .character-counter.danger {
            color: #ef4444;
        }

        .qr-container {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
        }

        .qr-container::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--gradient-start), var(--gradient-end));
            bottom: 0;
            left: 0;
        }

        .qr-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .footer-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
        }

        .social-icon {
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
            color: var(--accent-color);
        }

        .emoji-picker {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            padding: 0.75rem;
            border: 1px solid rgba(229, 231, 235, 0.8);
            transition: all 0.3s ease;
            display: none;
            margin-top: 0.75rem;
            width: 100%;
            max-width: 100%;
            overflow-x: hidden;
        }

        .emoji-picker.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .emoji-category {
            display: flex;
            overflow-x: auto;
            padding-bottom: 0.5rem;
            margin-bottom: 0.5rem;
            scrollbar-width: thin;
            scrollbar-color: rgba(59, 130, 246, 0.5) rgba(229, 231, 235, 0.5);
            -webkit-overflow-scrolling: touch;
        }

        .emoji-category::-webkit-scrollbar {
            height: 6px;
        }

        .emoji-category::-webkit-scrollbar-track {
            background: rgba(229, 231, 235, 0.5);
            border-radius: 3px;
        }

        .emoji-category::-webkit-scrollbar-thumb {
            background-color: rgba(59, 130, 246, 0.5);
            border-radius: 3px;
        }

        .emoji-btn {
            font-size: 1.5rem;
            width: 2.5rem;
            height: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border-radius: 0.375rem;
            transition: all 0.2s ease;
            user-select: none;
            flex-shrink: 0;
        }

        .emoji-btn:hover {
            background-color: rgba(59, 130, 246, 0.1);
            transform: scale(1.1);
        }

        .emoji-tabs {
            display: flex;
            border-bottom: 1px solid rgba(229, 231, 235, 0.8);
            margin-bottom: 0.75rem;
            flex-wrap: wrap;
        }

        .emoji-tab {
            padding: 0.5rem 0.75rem;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            transition: all 0.2s ease;
            white-space: nowrap;
            font-size: 0.875rem;
        }

        .emoji-tab.active {
            border-bottom: 2px solid var(--primary-light);
            color: var(--primary-light);
        }

        .emoji-tab:hover:not(.active) {
            border-bottom: 2px solid rgba(59, 130, 246, 0.3);
        }

        .toggle-emoji-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            background-color: #f3f4f6;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: #4b5563;
            transition: all 0.2s ease;
            cursor: pointer;
            width: 100%;
            max-width: 200px;
        }

        .toggle-emoji-btn:hover {
            background-color: #e5e7eb;
            color: #1f2937;
        }

        .toggle-emoji-btn svg {
            margin-right: 0.5rem;
            flex-shrink: 0;
        }

        .toggle-emoji-btn.active {
            background-color: #dbeafe;
            border-color: #93c5fd;
            color: #1e40af;
        }

        .error-message {
            background-color: #fee2e2;
            border-left: 4px solid #ef4444;
            color: #b91c1c;
            padding: 1rem;
            margin-top: 0.5rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            display: none;
        }

        .error-message.active {
            display: block;
            animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
        }

        @keyframes shake {
            10%, 90% { transform: translate3d(-1px, 0, 0); }
            20%, 80% { transform: translate3d(2px, 0, 0); }
            30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
            40%, 60% { transform: translate3d(4px, 0, 0); }
        }

        /* Responsive improvements */
        @media (max-width: 768px) {
            .emoji-section {
                display: none; /* Ocultar toda la sección de emojis en vista móvil */
            }

            .footer-gradient div {
                flex-direction: column;
                text-align: center;
            }

            .footer-gradient div > div {
                margin-top: 1rem;
            }
        }

        @media (max-width: 640px) {
            .emoji-tabs {
                justify-content: space-between;
            }

            .emoji-tab {
                padding: 0.5rem;
                font-size: 0.75rem;
            }

            .emoji-btn {
                font-size: 1.25rem;
                width: 2.25rem;
                height: 2.25rem;
            }

            .form-card {
                padding: 1rem !important;
            }

            .section-heading {
                font-size: 1.5rem !important;
            }

            .btn-primary {
                width: 100%;
            }

            .qr-container {
                margin-bottom: 2rem;
            }
        }

        @media (max-width: 480px) {
            .hero-gradient {
                padding: 2rem 1rem;
            }

            .form-input, .toggle-emoji-btn {
                font-size: 16px; /* Prevents zoom on iOS */
            }
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <!-- Hero Header -->
        <header class="hero-gradient text-white shadow-lg relative">
            <div class="relative z-10 max-w-7xl mx-auto py-8 sm:py-12 px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-2xl sm:text-3xl md:text-5xl font-extrabold mb-2 sm:mb-4 font-['Montserrat'] tracking-tight">Portal Misional</h1>
                <p class="text-base sm:text-lg md:text-xl text-blue-100 max-w-3xl mx-auto font-light">Escribe un mensaje de apoyo para Elder Hube</p>
            </div>
        </header>

        <main class="flex-grow py-8 sm:py-16">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                @if (session('success'))
                    <div class="mb-8 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-md shadow-sm" role="alert">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="text-center mb-6 sm:mb-10">
                    <h2 class="section-heading text-2xl sm:text-3xl font-extrabold text-gray-900 inline-block">
                        Escribe tu Mensaje
                    </h2>
                    <p class="mt-3 sm:mt-4 text-base sm:text-lg text-gray-600 max-w-2xl mx-auto">
                        Comparte tus palabras de apoyo, recuerdos o experiencias con Elder Hube durante su servicio misional.
                    </p>
                </div>

                <div class="form-card bg-white p-4 sm:p-8 md:p-10">
                    <form action="{{ route('messages.store') }}" method="POST" id="messageForm">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 mb-4 sm:mb-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Tu nombre completo <span class="text-red-500">*</span></label>
                                <input id="name" name="name" type="text" value="{{ old('name') }}"
                                    class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 sm:py-3"
                                    required autofocus>
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Tu correo electrónico (opcional)</label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}"
                                    class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 sm:py-3">
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 sm:mb-6">
                            <label for="relationship" class="block text-sm font-medium text-gray-700 mb-1">Relación con Elder Hube</label>
                            <select id="relationship" name="relationship"
                                class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 sm:py-3">
                               <option value="">Selecciona una opción</option>
                               <option value="familia" {{ old('relationship') == 'familia' ? 'selected' : '' }}>Familia</option>
                               <option value="amigo" {{ old('relationship') == 'amigo' ? 'selected' : '' }}>Amigo/a</option>
                               <option value="miembro_barrio" {{ old('relationship') == 'miembro_barrio' ? 'selected' : '' }}>Miembro del Barrio</option>
                               <option value="misionero" {{ old('relationship') == 'misionero' ? 'selected' : '' }}>Compañero/a Misionero/a</option>
                               <option value="investigador" {{ old('relationship') == 'investigador' ? 'selected' : '' }}>Investigador/a</option>
                               <option value="otro" {{ old('relationship') == 'otro' ? 'selected' : '' }}>Otro</option>
                            </select>
                            @error('relationship')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4 sm:mb-6">
                            <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Tu mensaje <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <textarea id="content" name="content" rows="6"
                                    class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    required maxlength="500">{{ old('content') }}</textarea>
                                <div class="absolute bottom-3 right-3">
                                    <span id="charCount" class="character-counter text-sm text-gray-500">0/500 caracteres</span>
                                </div>
                            </div>
                            <div id="contentError" class="error-message">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    <span id="contentErrorText">Tu mensaje contiene lenguaje inapropiado. Por favor, revísalo.</span>
                                </div>
                            </div>
                            @error('content')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Emoji Button and Picker -->
                        <div class="mb-6 sm:mb-8 emoji-section">
                            <button type="button" id="toggleEmojiBtn" class="toggle-emoji-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-7.536 5.879a1 1 0 001.415 0 3 3 0 014.242 0 1 1 0 001.415-1.415 5 5 0 00-7.072 0 1 1 0 000 1.415z" clip-rule="evenodd" />
                                </svg>
                                Añadir emojis
                            </button>

                            <div class="emoji-picker" id="emojiPicker">
                                <div class="emoji-tabs">
                                    <div class="emoji-tab active" data-category="smileys">😊 Sonrisas</div>
                                    <div class="emoji-tab" data-category="hearts">❤️ Corazones</div>
                                    <div class="emoji-tab" data-category="hands">👍 Gestos</div>
                                    <div class="emoji-tab" data-category="symbols">✨ Símbolos</div>
                                </div>

                                <!-- Smileys Category -->
                                <div class="emoji-category" id="smileys">
                                    <div class="emoji-btn" data-emoji="😊">😊</div>
                                    <div class="emoji-btn" data-emoji="😃">😃</div>
                                    <div class="emoji-btn" data-emoji="😄">😄</div>
                                    <div class="emoji-btn" data-emoji="😁">😁</div>
                                    <div class="emoji-btn" data-emoji="😆">😆</div>
                                    <div class="emoji-btn" data-emoji="😅">😅</div>
                                    <div class="emoji-btn" data-emoji="😂">😂</div>
                                    <div class="emoji-btn" data-emoji="🤣">🤣</div>
                                    <div class="emoji-btn" data-emoji="😇">😇</div>
                                    <div class="emoji-btn" data-emoji="😍">😍</div>
                                    <div class="emoji-btn" data-emoji="🥰">🥰</div>
                                    <div class="emoji-btn" data-emoji="😘">😘</div>
                                    <div class="emoji-btn" data-emoji="😗">😗</div>
                                    <div class="emoji-btn" data-emoji="😙">😙</div>
                                    <div class="emoji-btn" data-emoji="😚">😚</div>
                                </div>

                                <!-- Hearts Category -->
                                <div class="emoji-category" id="hearts" style="display: none;">
                                    <div class="emoji-btn" data-emoji="❤️">❤️</div>
                                    <div class="emoji-btn" data-emoji="🧡">🧡</div>
                                    <div class="emoji-btn" data-emoji="💛">💛</div>
                                    <div class="emoji-btn" data-emoji="💚">💚</div>
                                    <div class="emoji-btn" data-emoji="💙">💙</div>
                                    <div class="emoji-btn" data-emoji="💜">💜</div>
                                    <div class="emoji-btn" data-emoji="🖤">🖤</div>
                                    <div class="emoji-btn" data-emoji="🤍">🤍</div>
                                    <div class="emoji-btn" data-emoji="🤎">🤎</div>
                                    <div class="emoji-btn" data-emoji="💔">💔</div>
                                    <div class="emoji-btn" data-emoji="❤️‍🔥">❤️‍🔥</div>
                                    <div class="emoji-btn" data-emoji="❤️‍🩹">❤️‍🩹</div>
                                    <div class="emoji-btn" data-emoji="💕">💕</div>
                                    <div class="emoji-btn" data-emoji="💞">💞</div>
                                    <div class="emoji-btn" data-emoji="💓">💓</div>
                                </div>

                                <!-- Hands Category -->
                                <div class="emoji-category" id="hands" style="display: none;">
                                    <div class="emoji-btn" data-emoji="👍">👍</div>
                                    <div class="emoji-btn" data-emoji="👎">👎</div>
                                    <div class="emoji-btn" data-emoji="👌">👌</div>
                                    <div class="emoji-btn" data-emoji="🤌">🤌</div>
                                    <div class="emoji-btn" data-emoji="🤏">🤏</div>
                                    <div class="emoji-btn" data-emoji="✌️">✌️</div>
                                    <div class="emoji-btn" data-emoji="🤞">🤞</div>
                                    <div class="emoji-btn" data-emoji="🤟">🤟</div>
                                    <div class="emoji-btn" data-emoji="🤘">🤘</div>
                                    <div class="emoji-btn" data-emoji="👊">👊</div>
                                    <div class="emoji-btn" data-emoji="👏">👏</div>
                                    <div class="emoji-btn" data-emoji="🙌">🙌</div>
                                    <div class="emoji-btn" data-emoji="🙏">🙏</div>
                                    <div class="emoji-btn" data-emoji="🤝">🤝</div>
                                    <div class="emoji-btn" data-emoji="👋">👋</div>
                                </div>

                                <!-- Symbols Category -->
                                <div class="emoji-category" id="symbols" style="display: none;">
                                    <div class="emoji-btn" data-emoji="✨">✨</div>
                                    <div class="emoji-btn" data-emoji="⭐">⭐</div>
                                    <div class="emoji-btn" data-emoji="🌟">🌟</div>
                                    <div class="emoji-btn" data-emoji="💫">💫</div>
                                    <div class="emoji-btn" data-emoji="🌈">🌈</div>
                                    <div class="emoji-btn" data-emoji="☀️">☀️</div>
                                    <div class="emoji-btn" data-emoji="🌤️">🌤️</div>
                                    <div class="emoji-btn" data-emoji="⛅">⛅</div>
                                    <div class="emoji-btn" data-emoji="🌥️">🌥️</div>
                                    <div class="emoji-btn" data-emoji="☁️">☁️</div>
                                    <div class="emoji-btn" data-emoji="🌦️">🌦️</div>
                                    <div class="emoji-btn" data-emoji="🌧️">🌧️</div>
                                    <div class="emoji-btn" data-emoji="⛈️">⛈️</div>
                                    <div class="emoji-btn" data-emoji="🌩️">🌩️</div>
                                    <div class="emoji-btn" data-emoji="🌨️">🌨️</div>
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 mt-2">Haz clic en un emoji para añadirlo a tu mensaje</p>
                        </div>

                        <div class="flex justify-center mt-6 sm:mt-10">
                            <button type="submit" id="submitBtn"
                                class="btn-primary inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 border border-transparent rounded-md font-semibold text-sm sm:text-base text-white tracking-wide focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition shadow-md w-full sm:w-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 sm:mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                                Enviar mensaje
                            </button>
                        </div>
                    </form>
                </div>

                <div class="mt-8 sm:mt-12 text-center">
                    <a href="{{ route('home') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Volver a la página principal
                    </a>

                    @if (Route::has('login'))
                        @auth
                            <span class="mx-3 text-gray-300">|</span>
                            <a href="{{ route('admin.messages.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Administrar mensajes
                            </a>
                        @endauth
                    @endif
                </div>

                <div class="mt-12 sm:mt-16 flex flex-col md:flex-row items-center justify-center gap-6 sm:gap-8">
                    <div class="qr-container">
                        <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2 sm:mb-3 text-center">Comparte este QR</h3>
                        <p class="mb-3 sm:mb-4 text-xs sm:text-sm text-gray-600 text-center">Escanea o comparte este código para que otros puedan dejar mensajes</p>
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{ urlencode(route('messages.create')) }}"
                            alt="QR Code" class="mx-auto h-36 sm:h-48 w-36 sm:w-48">
                    </div>

                    <div class="max-w-md">
                        <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2 sm:mb-3">¿Por qué escribir un mensaje?</h3>
                        <p class="text-sm sm:text-base text-gray-600 mb-3 sm:mb-4 leading-relaxed">
                            Tu mensaje de apoyo significa mucho para Elder Hube durante su servicio misional. Tus palabras de aliento, recuerdos compartidos o experiencias pueden darle fuerza y motivación en momentos difíciles.
                        </p>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                            Todos los mensajes serán recopilados y compartidos con él durante su misión.
                        </p>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="footer-gradient text-white py-6 sm:py-10 mt-8 sm:mt-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div>
                        <h3 class="text-lg sm:text-xl font-bold">Portal Misional</h3>
                        <p class="text-blue-200 mt-1 sm:mt-2 text-sm sm:text-base">Un espacio para compartir mensajes de apoyo</p>
                    </div>

                    <div class="mt-4 md:mt-0">
                        <p class="text-blue-200 text-sm sm:text-base">
                            &copy; {{ date('Y') }} Portal Misional para Elder Hube
                        </p>
                        <p class="text-blue-300 text-xs sm:text-sm mt-1">
                            Hecho con <span class="text-red-400">❤</span> por Karlos
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contentTextarea = document.getElementById('content');
            const charCount = document.getElementById('charCount');
            const maxLength = 500;
            const emojiButtons = document.querySelectorAll('.emoji-btn');
            const emojiTabs = document.querySelectorAll('.emoji-tab');
            const emojiCategories = document.querySelectorAll('.emoji-category');
            const toggleEmojiBtn = document.getElementById('toggleEmojiBtn');
            const emojiPicker = document.getElementById('emojiPicker');
            const contentError = document.getElementById('contentError');
            const contentErrorText = document.getElementById('contentErrorText');
            const submitBtn = document.getElementById('submitBtn');
            const messageForm = document.getElementById('messageForm');

            // Lista de palabras prohibidas
            const prohibitedWords = [
                'odio', 'matar', 'muerte', 'asesino', 'violencia', 'racista', 'racismo',
                'nazi', 'terrorista', 'puta', 'puto', 'mierda', 'joder', 'coño', 'gilipollas',
                'cabrón', 'idiota', 'imbécil', 'estúpido', 'maricón', 'marica', 'homosexual',
                'negro', 'judío', 'musulmán', 'inmigrante', 'extranjero', 'retrasado',
                'discapacitado', 'gordo', 'feo', 'perra', 'zorra', 'prostituta'
            ];

            // Character counter functionality
            function updateCharCount() {
                const currentLength = contentTextarea.value.length;
                charCount.textContent = `${currentLength}/${maxLength} caracteres`;

                // Add warning colors as the user approaches the limit
                if (currentLength >= maxLength * 0.9) {
                    charCount.classList.add('danger');
                    charCount.classList.remove('warning');
                } else if (currentLength >= maxLength * 0.7) {
                    charCount.classList.add('warning');
                    charCount.classList.remove('danger');
                } else {
                    charCount.classList.remove('warning', 'danger');
                }
            }

            // Check for prohibited words
            function checkProhibitedContent() {
                const text = contentTextarea.value.toLowerCase();
                let containsProhibited = false;
                let foundWord = '';

                // Check for prohibited words
                for (const word of prohibitedWords) {
                    if (text.includes(word)) {
                        containsProhibited = true;
                        foundWord = word;
                        break;
                    }
                }

                // Check for hate speech patterns
                const hatePatterns = [
                    /odio a los/i, /muerte a/i, /eliminar a/i, /exterminar/i,
                    /no debería(n)? existir/i, /son una plaga/i, /fuera de aquí/i,
                    /vete(te)? a tu país/i, /no pertenece(n)? aquí/i
                ];

                for (const pattern of hatePatterns) {
                    if (pattern.test(text)) {
                        containsProhibited = true;
                        foundWord = 'discurso de odio';
                        break;
                    }
                }

                if (containsProhibited) {
                    contentErrorText.textContent = `Tu mensaje contiene lenguaje inapropiado (${foundWord}). Por favor, revísalo.`;
                    contentError.classList.add('active');
                    return false;
                } else {
                    contentError.classList.remove('active');
                    return true;
                }
            }

            // Initial count
            updateCharCount();

            // Update count on input and check content
            contentTextarea.addEventListener('input', function() {
                updateCharCount();
                checkProhibitedContent();
            });

            // Toggle emoji picker
            toggleEmojiBtn.addEventListener('click', function() {
                emojiPicker.classList.toggle('active');
                this.classList.toggle('active');

                if (emojiPicker.classList.contains('active')) {
                    this.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-7.536 5.879a1 1 0 001.415 0 3 3 0 014.242 0 1 1 0 001.415-1.415 5 5 0 00-7.072 0 1 1 0 000 1.415z" clip-rule="evenodd" />
                        </svg>
                        Ocultar emojis
                    `;
                } else {
                    this.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-7.536 5.879a1 1 0 001.415 0 3 3 0 014.242 0 1 1 0 001.415-1.415 5 5 0 00-7.072 0 1 1 0 000 1.415z" clip-rule="evenodd" />
                        </svg>
                        Añadir emojis
                    `;
                }
            });

            // Emoji picker functionality
            emojiButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    const emoji = this.getAttribute('data-emoji');
                    const start = contentTextarea.selectionStart;
                    const end = contentTextarea.selectionEnd;
                    const text = contentTextarea.value;
                    const before = text.substring(0, start);
                    const after = text.substring(end, text.length);

                    contentTextarea.value = before + emoji + after;
                    contentTextarea.selectionStart = contentTextarea.selectionEnd = start + emoji.length;
                    contentTextarea.focus();

                    // Update character count
                    updateCharCount();
                });
            });

            // Emoji tabs functionality
            emojiTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');

                    // Update active tab
                    emojiTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');

                    // Show selected category, hide others
                    emojiCategories.forEach(cat => {
                        if (cat.id === category) {
                            cat.style.display = 'flex';
                        } else {
                            cat.style.display = 'none';
                        }
                    });
                });
            });

            // Form submission validation
            messageForm.addEventListener('submit', function(e) {
                if (!checkProhibitedContent()) {
                    e.preventDefault();
                    contentError.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>

