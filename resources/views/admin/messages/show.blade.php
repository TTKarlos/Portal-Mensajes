<x-app-layout>
  <x-slot name="header">
      <div class="flex justify-between items-center">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Ver Mensaje') }}
          </h2>
          <a href="{{ route('admin.messages.index') }}" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
              </svg>
              Volver a mensajes
          </a>
      </div>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="p-6">
                  <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 mb-6">
                      <div class="flex items-start justify-between mb-4">
                          <div>
                              <div class="flex items-center">
                                  <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                      <span class="text-blue-700 font-medium">{{ substr($message->name, 0, 2) }}</span>
                                  </div>
                                  <div>
                                      <h3 class="text-lg font-medium text-gray-900">{{ $message->name }}</h3>
                                      @if(isset($message->relationship))
                                          @php
                                              $relationshipClass = 'relationship-' . $message->relationship;
                                              $words = explode('_', $message->relationship);
                                              $formattedRelationship = implode(' ', array_map(function($word) {
                                                  return ucfirst($word);
                                              }, $words));
                                          @endphp
                                          <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $relationshipClass }} mt-1">
                                              {{ $formattedRelationship }}
                                          </span>
                                      @endif
                                  </div>
                              </div>
                          </div>
                          <div class="text-right">
                              <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                  </svg>
                                  {{ $message->created_at->format('d/m/Y') }}
                              </span>
                              <div class="text-xs text-gray-500 mt-1">{{ $message->created_at->format('H:i') }}</div>
                          </div>
                      </div>

                      <div class="border-t border-gray-200 pt-4">
                          <div class="bg-white rounded-lg p-4 shadow-sm">
                              <div class="flex items-start mb-2">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-2 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                  </svg>
                                  <div class="flex-1 overflow-hidden">
                                      <h4 class="text-sm font-medium text-gray-900 mb-1">Mensaje:</h4>
                                      <div class="message-container bg-gray-50 rounded-md border border-gray-100 p-4">
                                          <p class="text-gray-800 text-sm whitespace-pre-line break-all">{{ $message->content }}</p>
                                      </div>
                                  </div>
                              </div>

                              @if(isset($message->emoji))
                              <div class="flex items-start mt-4">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-2 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                                  <div>
                                      <h4 class="text-sm font-medium text-gray-900 mb-1">Emoji:</h4>
                                      <div class="text-2xl">{{ $message->emoji }}</div>
                                  </div>
                              </div>
                              @endif
                          </div>
                      </div>
                  </div>

                  <div class="flex justify-between items-center">
                      <a href="{{ route('admin.messages.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                          </svg>
                          Volver
                      </a>

                      <div class="flex space-x-3">
                          <a href="#" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                              </svg>
                              Exportar
                          </a>

                          <form action="{{ route('admin.messages.destroy', $message) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition"
                                      onclick="return confirm('¿Estás seguro de que deseas eliminar este mensaje?')">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                  </svg>
                                  Eliminar
                              </button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>

<style>
  .message-container {
      max-height: 400px;
      overflow-y: auto;
      word-wrap: break-word;
      overflow-wrap: break-word;
      width: 100%;
  }

  /* Estilos para las etiquetas de relación */
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
</style>

