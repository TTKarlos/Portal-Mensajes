<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portal Misional - Elder Hube</title>

    <!-- Favicon -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>EH</text></svg>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700,800&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700&display=swap" rel="stylesheet" />

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
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.8;
        }

        .message-card {
            transition: all 0.3s ease;
            border-radius: 1rem;
            border: 1px solid rgba(229, 231, 235, 0.5);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            background: white;
            overflow: hidden;
            cursor: pointer;
        }

        .message-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border-color: rgba(219, 234, 254, 0.8);
        }

        .message-content {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
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

        .elder-photo {
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .elder-photo:hover {
            transform: scale(1.03);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2);
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

        .social-icon {
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
            color: var(--accent-color);
        }

        .share-section {
            background: linear-gradient(135deg, #f8fafc 0%, #eff6ff 100%);
            border-radius: 1rem;
            overflow: hidden;
            position: relative;
        }

        .share-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%233b82f6' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.5;
        }

        .share-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .share-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            z-index: -1;
            transition: opacity 0.3s ease-out;
            opacity: 0;
        }

        .share-btn:hover::before {
            opacity: 1;
        }

        .copy-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .copy-btn::before {
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

        .copy-btn:hover::before {
            opacity: 1;
        }

        .footer-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
        }

        .toast {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            padding: 1rem 1.5rem;
            background: #10b981;
            color: white;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            z-index: 50;
            transform: translateY(1rem);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .toast.show {
            transform: translateY(0);
            opacity: 1;
        }

        .pagination-container {
            display: flex;
            align-items: center;
            background: white;
            border-radius: 9999px;
            padding: 0.5rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(229, 231, 235, 0.8);
        }

        .pagination-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 9999px;
            transition: all 0.3s ease;
        }

        .pagination-active {
            color: #3b82f6;
        }

        .pagination-active:hover {
            background-color: #eff6ff;
            color: #1e40af;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .pagination-disabled {
            color: #d1d5db;
            cursor: not-allowed;
        }

        .pagination-numbers {
            display: flex;
            align-items: center;
            margin: 0 0.5rem;
        }

        .pagination-number {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            margin: 0 0.25rem;
            border-radius: 9999px;
            font-weight: 500;
            transition: all 0.3s ease;
            color: #4b5563;
        }

        .pagination-number:hover {
            background-color: #eff6ff;
            color: #1e40af;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .pagination-current {
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            color: white;
            font-weight: 600;
            box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.3);
        }

        .pagination-current:hover {
            transform: none;
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            color: white;
            box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.3);
        }

        .pagination-ellipsis {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            color: #6b7280;
        }

        .pagination-mobile {
            padding: 0 1rem;
            font-weight: 500;
            color: #4b5563;
        }

        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 50;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-container {
            background-color: white;
            border-radius: 1rem;
            max-width: 600px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            transform: scale(0.9);
            transition: all 0.3s ease;
        }

        .modal-overlay.active .modal-container {
            transform: scale(1);
        }

        .modal-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-body {
            padding: 1.5rem;
            overflow-x: hidden; /* Prevenir scroll horizontal */
        }

        .modal-content-wrapper {
            width: 100%;
            overflow-wrap: break-word;
            word-wrap: break-word;
            word-break: break-word;
            hyphens: auto;
        }

        .modal-footer {
            padding: 1.5rem;
            border-top: 1px solid #e5e7eb;
            display: flex;
            justify-content: flex-end;
        }

        .modal-close-btn {
            background: transparent;
            border: none;
            color: #6b7280;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .modal-close-btn:hover {
            color: #1f2937;
        }

        /* Estilos para las etiquetas de relación */
        .relationship-tag {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
            margin-top: 0.5rem;
        }

        .relationship-familia {
            background-color: #fee2e2;
            color: #b91c1c;
        }

        .relationship-amigo {
            background-color: #dbeafe;
            color: #1e40af;
        }

        .relationship-miembro_barrio {
            background-color: #d1fae5;
            color: #065f46;
        }

        .relationship-misionero {
            background-color: #fef3c7;
            color: #92400e;
        }

        .relationship-investigador {
            background-color: #e0e7ff;
            color: #4338ca;
        }

        .relationship-otro {
            background-color: #f3f4f6;
            color: #4b5563;
        }

        @media (hover: hover) {
            .pagination-active:active {
                transform: translateY(0);
            }

            .pagination-number:active {
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <!-- Hero Header -->
        <header class="hero-gradient text-white shadow-lg relative">
            <div class="relative z-10 max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-6xl font-extrabold mb-6 font-['Montserrat'] tracking-tight">Portal Misional</h1>
                <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto font-light">Un espacio para compartir mensajes de apoyo y recuerdos para el Elder Hube</p>
            </div>
        </header>

        <main class="flex-grow">
            <!-- Notification -->
            @if (session('success'))
                <div class="max-w-7xl mx-auto mt-6 px-4 sm:px-6 lg:px-8">
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-md shadow-sm" role="alert">
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
                </div>
            @endif

            <!-- Elder Profile Section -->
            <div class="py-20 bg-white shadow-sm">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:flex lg:items-center lg:justify-between">
                        <div class="lg:w-1/3 flex justify-center mb-12 lg:mb-0">
                            <div class="relative">
                                <div class="absolute -top-3 -left-3 z-10">
                                    <img
                                        src="https://flagcdn.com/w40/ec.png"
                                        alt="Bandera de Ecuador"
                                        class="h-10 w-auto rounded shadow-md"
                                    >
                                </div>
                                <img src="{{ asset('img/Elder-Hube.jpeg') }}" alt="Elder Hube" class="elder-photo h-72 w-72 object-cover rounded-full">
                                <div class="absolute -bottom-3 -right-3 bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-full px-5 py-2 text-sm font-bold shadow-lg">
                                    Sirviendo en Ecuador
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-2/3 lg:pl-16">
                            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-8">
                                Elder Hube
                            </h2>
                            <div class="prose prose-blue prose-lg max-w-none">
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    El Elder Hube está sirviendo como misionero, compartiendo el evangelio y ayudando a las personas a acercarse a Cristo. Tu mensaje de apoyo y tus recuerdos significan mucho para él durante este tiempo de servicio.
                                </p>
                                <p class="mt-6 text-lg text-gray-700 leading-relaxed">
                                    Comparte tus experiencias, recuerdos o palabras de aliento para que el Elder Hube pueda sentir tu apoyo durante su misión.
                                </p>
                            </div>
                            <div class="mt-10">
                                <a href="{{ route('messages.create') }}" class="btn-primary inline-flex items-center px-8 py-4 border border-transparent text-base font-medium rounded-md shadow-sm text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Escribir un mensaje
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Messages History Section -->
            <div class="py-24 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="section-heading text-3xl font-extrabold text-gray-900 sm:text-4xl inline-block">
                            Mensajes para Elder Hube
                        </h2>
                        <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto">
                            Mensajes de apoyo, recuerdos y palabras de aliento de amigos y seres queridos.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @forelse($messages as $message)
                            <div class="message-card" data-message-id="{{ $message->id }}" data-relationship="{{ $message->relationship }}">
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center">
                                            <div class="h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-xl">
                                                {{ strtoupper(substr($message->name, 0, 1)) }}
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="font-bold text-lg text-gray-900">{{ $message->name }}</h3>
                                                <p class="text-sm text-gray-500">{{ $message->created_at->format('d/m/Y H:i') }}</p>
                                            </div>
                                        </div>
                                        @if(isset($message->relationship) && !empty($message->relationship))
                                            @php
                                                // Definir colores para cada tipo de relación
                                                $relationshipColors = [
                                                    'familia' => 'bg-red-100 text-red-800',
                                                    'amigo' => 'bg-blue-100 text-blue-800',
                                                    'miembro_barrio' => 'bg-green-100 text-green-800',
                                                    'misionero' => 'bg-purple-100 text-purple-800',
                                                    'investigador' => 'bg-yellow-100 text-yellow-800',
                                                    'otro' => 'bg-gray-100 text-gray-800',
                                                ];

                                                // Obtener el color según la relación o usar el color por defecto
                                                $colorClass = $relationshipColors[$message->relationship] ?? 'bg-gray-100 text-gray-800';

                                                // Convertir a CamelCase
                                                $relationshipParts = explode('_', $message->relationship);
                                                $relationshipCamelCase = '';
                                                foreach ($relationshipParts as $part) {
                                                    $relationshipCamelCase .= ucfirst($part);
                                                }
                                            @endphp
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $colorClass }}">
                                                {{ $relationshipCamelCase }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="prose prose-blue">
                                        <p class="text-gray-700 message-content">{{ $message->content }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-3 text-center py-20 bg-white rounded-xl shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-gray-300 mx-auto mb-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                <h3 class="text-2xl font-medium text-gray-500 mb-2">No hay mensajes aún</h3>
                                <p class="mt-2 text-gray-500 max-w-md mx-auto">¡Sé el primero en dejar un mensaje de apoyo para Elder Hube!</p>
                                <div class="mt-8">
                                    <a href="{{ route('messages.create') }}" class="inline-flex items-center px-5 py-3 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Escribir un mensaje
                                    </a>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    <div class="mt-16">
                     @if ($messages->hasPages())
                         <nav class="flex justify-center" aria-label="Paginación">
                             <div class="pagination-container">
                                 <!-- Botón Anterior -->
                                 @if ($messages->onFirstPage())
                                     <span class="pagination-button pagination-disabled">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                             <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                         </svg>
                                     </span>
                                 @else
                                     <a href="{{ $messages->previousPageUrl() }}" class="pagination-button pagination-active">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                             <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                         </svg>
                                     </a>
                                 @endif

                                 <!-- Números de Página (Escritorio) -->
                                 <div class="hidden md:flex pagination-numbers">
                                     @php
                                         $start = max($messages->currentPage() - 2, 1);
                                         $end = min($start + 4, $messages->lastPage());
                                         if ($end - $start < 4 && $start > 1) {
                                             $start = max(1, $end - 4);
                                         }
                                     @endphp

                                     @if ($start > 1)
                                         <a href="{{ $messages->url(1) }}" class="pagination-number">1</a>
                                         @if ($start > 2)
                                             <span class="pagination-ellipsis">...</span>
                                         @endif
                                     @endif

                                     @for ($i = $start; $i <= $end; $i++)
                                         @if ($i == $messages->currentPage())
                                             <span class="pagination-number pagination-current">{{ $i }}</span>
                                         @else
                                             <a href="{{ $messages->url($i) }}" class="pagination-number">{{ $i }}</a>
                                         @endif
                                     @endfor

                                     @if ($end < $messages->lastPage())
                                         @if ($end < $messages->lastPage() - 1)
                                             <span class="pagination-ellipsis">...</span>
                                         @endif
                                         <a href="{{ $messages->url($messages->lastPage()) }}" class="pagination-number">{{ $messages->lastPage() }}</a>
                                     @endif
                                 </div>

                                 <!-- Indicador de Página Móvil -->
                                 <span class="pagination-mobile md:hidden">
                                     {{ $messages->currentPage() }} de {{ $messages->lastPage() }}
                                 </span>

                                 <!-- Botón Siguiente -->
                                 @if ($messages->hasMorePages())
                                     <a href="{{ $messages->nextPageUrl() }}" class="pagination-button pagination-active">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                             <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                         </svg>
                                     </a>
                                 @else
                                     <span class="pagination-button pagination-disabled">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                             <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                         </svg>
                                     </span>
                                 @endif
                             </div>
                         </nav>
                     @endif
                    </div>
                </div>
            </div>

            <!-- Share Section -->
            <div class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="section-heading text-3xl font-extrabold text-gray-900 sm:text-4xl inline-block">
                            Comparte este Portal
                        </h2>
                        <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto">
                            Ayuda a difundir este portal para que más personas puedan enviar sus mensajes de apoyo al Elder Hube.
                        </p>
                    </div>

                    <div class="share-section p-8 md:p-12 mt-8">
                        <div class="relative z-10 md:flex md:items-center md:justify-between">
                            <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                                <h3 class="text-2xl font-bold text-gray-900 mb-4">Comparte</h3>
                                <p class="text-gray-600 mb-6 leading-relaxed">
                                    Comparte este portal con amigos y familiares para que más personas puedan enviar sus mensajes de apoyo a Elder Hube durante su servicio misional.
                                </p>

                                <div class="flex flex-wrap gap-4 mt-8">
                                    <a href="#" id="shareWhatsAppMainBtn" class="share-btn flex items-center justify-center bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded-lg transition-colors shadow-md">
                                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                        </svg>
                                        Compartir por WhatsApp
                                    </a>
                                    <button id="copyLinkBtn" class="copy-btn flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg transition-colors shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                        </svg>
                                        Copiar enlace
                                    </button>
                                </div>
                            </div>

                            <div class="md:w-1/2 flex justify-center">
                                <div class="qr-container">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data={{ urlencode(route('home')) }}"
                                        alt="QR Code para Portal Misional" class="mx-auto h-64 w-64">
                                    <p class="text-center text-sm text-gray-500 mt-4">Escanea este código QR con tu teléfono</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Admin Access -->
            @if (Route::has('login'))
                <div class="py-6 bg-gray-50 border-t border-gray-200">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                        @auth
                            <a href="{{ route('admin.messages.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Administrar mensajes
                            </a>
                        @endauth
                    </div>
                </div>
            @endif
        </main>

        <!-- Footer with Developer Credits -->
        <footer class="footer-gradient text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <!-- Column 1: About -->
                    <div>
                        <h3 class="text-2xl font-bold mb-6">Portal Misional</h3>
                        <p class="text-blue-200 mb-6 leading-relaxed">
                            Un espacio dedicado a compartir mensajes de apoyo y recuerdos para el Elder Hube durante su servicio misional.
                        </p>
                    </div>

                    <!-- Column 2: Quick Links -->
                    <div>
                        <h3 class="text-2xl font-bold mb-6">Enlaces Rápidos</h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="{{ route('home') }}" class="text-blue-200 hover:text-white transition-colors flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    Inicio
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('messages.create') }}" class="text-blue-200 hover:text-white transition-colors flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Escribir Mensaje
                                </a>
                            </li>
                            @auth
                            <li>
                                <a href="{{ route('admin.messages.index') }}" class="text-blue-200 hover:text-white transition-colors flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Administración
                                </a>
                            </li>
                            @endauth
                        </ul>
                    </div>

                    <!-- Column 3: Developer Info -->
                    <div>
                        <h3 class="text-2xl font-bold mb-6">Desarrollador</h3>
                        <p class="text-blue-200 mb-4 leading-relaxed">
                            Diseñado y desarrollado por Karlos. Especialista en desarrollo web y aplicaciones personalizadas.
                        </p>
                        <div class="flex space-x-5 mt-6">
                            <a href="https://github.com/TTKarlos" target="_blank" class="social-icon text-blue-200 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                            <a href="mailto:carlossayubu@gmail.com" class="social-icon text-blue-200 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-12 pt-8 border-t border-blue-800 text-center md:flex md:items-center md:justify-between">
                    <div>
                        <p class="text-blue-200">
                            &copy; {{ date('Y') }} Portal Misional para Elder Hube. Todos los derechos reservados.
                        </p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <p class="text-blue-300 text-sm">
                            Hecho con <span class="text-red-400">❤</span> por Karlos
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Toast Notification -->
        <div id="toast" class="toast">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span>¡Enlace copiado al portapapeles!</span>
            </div>
        </div>

        <!-- Modal para ver mensaje completo -->
        <div id="messageModal" class="modal-overlay">
            <div class="modal-container">
                <div class="modal-header">
                    <h3 class="text-xl font-bold text-gray-900" id="modalTitle">Mensaje de apoyo</h3>
                    <button class="modal-close-btn" id="closeModal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="flex items-center mb-6">
                        <div id="modalInitial" class="h-14 w-14 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-2xl">
                            A
                        </div>
                        <div class="ml-4">
                            <h4 id="modalName" class="font-bold text-lg text-gray-900">Nombre del remitente</h4>
                            <p id="modalDate" class="text-sm text-gray-500">Fecha</p>
                            <div id="modalRelationship" class="relationship-tag mt-2 hidden"></div>
                        </div>
                    </div>
                    <div class="modal-content-wrapper">
                        <div class="prose prose-blue max-w-none">
                            <p id="modalContent" class="text-gray-700 whitespace-pre-wrap break-words">Contenido del mensaje</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn-primary px-4 py-2 rounded-md text-white text-sm" id="closeModalBtn">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const copyLinkBtn = document.getElementById('copyLinkBtn');
            const toast = document.getElementById('toast');
            const messageCards = document.querySelectorAll('.message-card');
            const messageModal = document.getElementById('messageModal');
            const closeModal = document.getElementById('closeModal');
            const closeModalBtn = document.getElementById('closeModalBtn');
            const modalTitle = document.getElementById('modalTitle');
            const modalInitial = document.getElementById('modalInitial');
            const modalName = document.getElementById('modalName');
            const modalDate = document.getElementById('modalDate');
            const modalContent = document.getElementById('modalContent');
            const modalRelationship = document.getElementById('modalRelationship');
            const shareWhatsAppMainBtn = document.getElementById('shareWhatsAppMainBtn');

            // Función para convertir relación a formato CamelCase
            function formatRelationship(relationship) {
                if (!relationship) return '';

                // Reemplazar guiones bajos con espacios
                const words = relationship.split('_');

                // Convertir primera letra de cada palabra a mayúscula
                const camelCaseWords = words.map(word =>
                    word.charAt(0).toUpperCase() + word.slice(1)
                );

                // Unir las palabras con espacios
                return camelCaseWords.join(' ');
            }

            // Función para obtener clase de color según la relación
            function getRelationshipClass(relationship) {
                if (!relationship) return '';
                return `relationship-${relationship}`;
            }

            // Copiar enlace al portapapeles
            copyLinkBtn.addEventListener('click', function() {
                const url = '{{ route('home') }}';

                navigator.clipboard.writeText(url).then(function() {
                    // Show toast
                    toast.classList.add('show');

                    // Hide toast after 3 seconds
                    setTimeout(function() {
                        toast.classList.remove('show');
                    }, 3000);
                }, function() {
                    alert('No se pudo copiar el enlace');
                });
            });

            // Compartir por WhatsApp desde la sección principal
           // Compartir por WhatsApp desde la sección principal
           shareWhatsAppMainBtn.addEventListener('click', function(e) {
               e.preventDefault();
               const portalUrl = "https://elderhube.karloscode.dev";

               // Mensaje con el texto solicitado
               const whatsappMessage =
                   "Portal Misional - Elder Hube\n\n" +
                   "Te invito a visitar el Portal Misional dedicado a Elder Hube, quien está sirviendo como misionero en Ecuador.\n\n" +
                   "En este portal podrás:\n" +
                   "- Dejar mensajes de apoyo y aliento\n" +
                   "- Compartir recuerdos y experiencias\n" +
                   "- Conectar con otros que apoyan su misión\n\n" +
                   "Cada mensaje significa mucho para él durante su tiempo de servicio misional.\n\n" +
                   "Visita el portal: " + portalUrl + "\n\n" +
                   "¡Gracias por tu apoyo al Elder Hube!";

               const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(whatsappMessage)}`;
               window.open(whatsappUrl, '_blank');
           });

            // Abrir modal al hacer clic en una tarjeta de mensaje
            messageCards.forEach(card => {
                card.addEventListener('click', function() {
                    const messageId = this.getAttribute('data-message-id');
                    const relationship = this.getAttribute('data-relationship');
                    const name = this.querySelector('h3').textContent;
                    const date = this.querySelector('p.text-sm').textContent;
                    const content = this.querySelector('.message-content').textContent;
                    const initial = name.charAt(0).toUpperCase();

                    modalTitle.textContent = 'Mensaje de ' + name;
                    modalInitial.textContent = initial;
                    modalName.textContent = name;
                    modalDate.textContent = date;
                    modalContent.textContent = content;

                    // Mostrar relación en el modal si existe
                    if (relationship) {
                        modalRelationship.textContent = formatRelationship(relationship);
                        modalRelationship.className = 'relationship-tag ' + getRelationshipClass(relationship);
                        modalRelationship.classList.remove('hidden');
                    } else {
                        modalRelationship.classList.add('hidden');
                    }

                    messageModal.classList.add('active');
                    document.body.style.overflow = 'hidden'; // Prevenir scroll
                });
            });

            // Cerrar modal
            function closeMessageModal() {
                messageModal.classList.remove('active');
                document.body.style.overflow = '';
            }

            closeModal.addEventListener('click', closeMessageModal);
            closeModalBtn.addEventListener('click', closeMessageModal);

            messageModal.addEventListener('click', function(e) {
                if (e.target === messageModal) {
                    closeMessageModal();
                }
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && messageModal.classList.contains('active')) {
                    closeMessageModal();
                }
            });
        });
    </script>
</body>
</html>

