<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Questions du quiz : {{ $quiz->title }}
            </h2>
            <a href="{{ route('questions.create', ['quiz' => $quiz->id]) }}"
               class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                Ajouter une question
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Statistiques du quiz -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-gray-500 text-sm mb-1">Total questions</div>
                    <div class="text-3xl font-bold text-blue-600">{{ $questions->count() }}</div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-gray-500 text-sm mb-1">Points totaux</div>
                    <div class="text-3xl font-bold text-green-600">{{ $questions->sum('points') }}</div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-gray-500 text-sm mb-1">Score minimum</div>
                    <div class="text-3xl font-bold text-purple-600">{{ $quiz->passing_score ?? 'N/A' }}%</div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-gray-500 text-sm mb-1">Durée limite</div>
                    <div class="text-3xl font-bold text-orange-600">
                        {{ $quiz->time_limit ? $quiz->time_limit . ' min' : 'Illimité' }}
                    </div>
                </div>
            </div>

            <!-- Boutons d'action -->
            <div class="flex gap-4 mb-6">
                <a href="{{ route('quizzes.show', $quiz->id) }}"
                   class="bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700">
                    ← Retour au quiz
                </a>
                <a href="{{ route('quizzes.edit', $quiz->id) }}"
                   class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Modifier le quiz
                </a>
            </div>

            @if($questions->count() > 0)
                <!-- Liste des questions -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="divide-y divide-gray-200">
                        @foreach($questions as $index => $question)
                            <div class="p-6 hover:bg-gray-50 transition">
                                <div class="flex items-start justify-between gap-6">
                                    <!-- Numéro et badge type -->
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center gap-3">
                                        <span class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold">
                                            {{ $index + 1 }}
                                        </span>
                                            @if($question->type === 'multiple_choice')
                                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-xs font-semibold">
                                                QCM
                                            </span>
                                            @elseif($question->type === 'true_false')
                                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-semibold">
                                                Vrai/Faux
                                            </span>
                                            @else
                                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-xs font-semibold">
                                                Texte
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Contenu de la question -->
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-lg mb-3">{{ $question->question_text }}</h3>

                                        <!-- Options pour QCM -->
                                        @if($question->type === 'multiple_choice')
                                            @php
                                                $options = json_decode($question->options, true) ?? [];
                                                $correctAnswer = json_decode($question->correct_answer, true);
                                            @endphp
                                            <div class="space-y-2 mb-3">
                                                @foreach($options as $key => $option)
                                                    <div class="flex items-center gap-2 text-sm">
                                                        @if($correctAnswer == $key)
                                                            <span class="text-green-600 font-bold">✓</span>
                                                            <span class="text-green-700 font-medium">{{ $option }}</span>
                                                        @else
                                                            <span class="text-gray-400">○</span>
                                                            <span class="text-gray-600">{{ $option }}</span>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif

                                        <!-- Réponse Vrai/Faux -->
                                        @if($question->type === 'true_false')
                                            <div class="mb-3">
                                                <span class="text-sm text-gray-600">Bonne réponse : </span>
                                                <span class="font-semibold {{ $question->correct_answer === 'true' ? 'text-green-600' : 'text-red-600' }}">
                                                {{ $question->correct_answer === 'true' ? '✅ Vrai' : '❌ Faux' }}
                                            </span>
                                            </div>
                                        @endif

                                        <!-- Réponse texte -->
                                        @if($question->type === 'text' && $question->correct_answer)
                                            <div class="bg-gray-50 p-3 rounded-md mb-3">
                                                <span class="text-sm text-gray-600 font-medium">Réponse attendue : </span>
                                                <p class="text-sm text-gray-700 mt-1">{{ $question->correct_answer }}</p>
                                            </div>
                                        @endif

                                        <!-- Explication -->
                                        @if($question->explanation)
                                            <div class="bg-blue-50 p-3 rounded-md mb-3">
                                                <span class="text-sm text-blue-900 font-medium">💡 Explication :</span>
                                                <p class="text-sm text-blue-800 mt-1">{{ $question->explanation }}</p>
                                            </div>
                                        @endif

                                        <!-- Métadonnées -->
                                        <div class="flex items-center gap-4 text-sm text-gray-500">
                                        <span class="flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            {{ $question->points }} point(s)
                                        </span>
                                            <span class="flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"/>
                                            </svg>
                                            Ordre : {{ $question->order }}
                                        </span>
                                        </div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="flex-shrink-0 flex gap-2">
                                        <a href="{{ route('questions.edit', $question->id) }}"
                                           class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 text-sm">
                                            Modifier
                                        </a>
                                        <form action="{{ route('questions.destroy', $question->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Supprimer cette question ? Cette action est irréversible.')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 text-sm">
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Informations supplémentaires -->
                <div class="mt-6 bg-yellow-50 border border-yellow-200 rounded-lg p-6">
                    <h3 class="font-bold text-yellow-900 mb-3">📊 Résumé du quiz</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-yellow-800">
                        <div>
                            <strong>Total questions :</strong> {{ $questions->count() }}
                        </div>
                        <div>
                            <strong>Points totaux :</strong> {{ $questions->sum('points') }}
                        </div>
                        @php
                            $qcm = $questions->where('type', 'multiple_choice')->count();
                            $tf = $questions->where('type', 'true_false')->count();
                            $text = $questions->where('type', 'text')->count();
                        @endphp
                        <div>
                            <strong>QCM :</strong> {{ $qcm }}
                        </div>
                        <div>
                            <strong>Vrai/Faux :</strong> {{ $tf }}
                        </div>
                        <div>
                            <strong>Texte :</strong> {{ $text }}
                        </div>
                        <div>
                            <strong>Score minimum :</strong> {{ $quiz->passing_score ?? 'Non défini' }}%
                        </div>
                    </div>
                </div>

            @else
                <!-- Aucune question -->
                <div class="bg-white rounded-lg shadow p-12 text-center">
                    <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Aucune question pour le moment</h3>
                    <p class="text-gray-500 mb-6">Commencez par créer votre première question pour ce quiz.</p>
                    <a href="{{ route('questions.create', ['quiz' => $quiz->id]) }}"
                       class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">
                        Créer la première question
                    </a>
                </div>

                <!-- Conseils pour démarrer -->
                <div class="mt-6 bg-blue-50 rounded-lg p-6">
                    <h3 class="font-bold text-blue-900 mb-3">💡 Conseils pour créer un bon quiz</h3>
                    <ul class="space-y-2 text-sm text-blue-800">
                        <li>• <strong>Variez les types :</strong> Mélangez QCM, Vrai/Faux et questions ouvertes</li>
                        <li>• <strong>Progression logique :</strong> Commencez par des questions faciles</li>
                        <li>• <strong>Ajoutez des explications :</strong> Elles aident à l'apprentissage</li>
                        <li>• <strong>Points cohérents :</strong> Attribuez plus de points aux questions complexes</li>
                        <li>• <strong>Testez le quiz :</strong> Passez le quiz vous-même avant de le publier</li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
