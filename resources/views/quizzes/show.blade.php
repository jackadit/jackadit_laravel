<x-app-layout>
    <div class="min-h-screen bg-gray-100 py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- En-tête du quiz -->
            <div class="bg-white rounded-lg shadow p-8 mb-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <a href="{{ route('courses.show', $quiz->course->slug) }}"
                           class="text-blue-600 hover:underline text-sm">
                            ← Retour au cours
                        </a>
                        <h1 class="text-3xl font-bold mt-2">{{ $quiz->title }}</h1>
                    </div>

                    @if($quiz->is_required)
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-semibold">
                        Obligatoire
                    </span>
                    @endif
                </div>

                @if($quiz->description)
                    <p class="text-gray-600 mb-6">{{ $quiz->description }}</p>
                @endif

                <div class="flex flex-wrap gap-4 text-sm">
                    <div class="flex items-center gap-2 bg-blue-50 px-4 py-2 rounded-lg">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="font-semibold">{{ $quiz->questions->count() }} questions</span>
                    </div>

                    @if($quiz->time_limit)
                        <div class="flex items-center gap-2 bg-yellow-50 px-4 py-2 rounded-lg">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-semibold">{{ $quiz->time_limit }} minutes</span>
                        </div>
                    @endif

                    @if($quiz->passing_score)
                        <div class="flex items-center gap-2 bg-green-50 px-4 py-2 rounded-lg">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-semibold">Score requis : {{ $quiz->passing_score }}%</span>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Formulaire des questions -->
            <form action="{{ route('quizzes.submit', $quiz->id) }}" method="POST">
                @csrf

                @foreach($quiz->questions as $index => $question)
                    <div class="bg-white rounded-lg shadow p-6 mb-4">
                        <div class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">
                            {{ $index + 1 }}
                        </span>

                            <div class="flex-1">
                                <h3 class="text-lg font-semibold mb-4">{{ $question->question_text }}</h3>

                                @if($question->type === 'multiple_choice')
                                    <div class="space-y-3">
                                        @foreach(json_decode($question->options) as $optionIndex => $option)
                                            <label class="flex items-start p-4 border-2 rounded-lg cursor-pointer hover:bg-blue-50 transition">
                                                <input type="radio"
                                                       name="answers[{{ $question->id }}]"
                                                       value="{{ $optionIndex }}"
                                                       class="mt-1 mr-3"
                                                       required>
                                                <span>{{ $option }}</span>
                                            </label>
                                        @endforeach
                                    </div>

                                @elseif($question->type === 'true_false')
                                    <div class="space-y-3">
                                        <label class="flex items-center p-4 border-2 rounded-lg cursor-pointer hover:bg-blue-50 transition">
                                            <input type="radio"
                                                   name="answers[{{ $question->id }}]"
                                                   value="true"
                                                   class="mr-3"
                                                   required>
                                            <span>✅ Vrai</span>
                                        </label>
                                        <label class="flex items-center p-4 border-2 rounded-lg cursor-pointer hover:bg-blue-50 transition">
                                            <input type="radio"
                                                   name="answers[{{ $question->id }}]"
                                                   value="false"
                                                   class="mr-3"
                                                   required>
                                            <span>❌ Faux</span>
                                        </label>
                                    </div>

                                @elseif($question->type === 'text')
                                    <textarea name="answers[{{ $question->id }}]"
                                              rows="4"
                                              class="w-full rounded-md border-gray-300"
                                              placeholder="Votre réponse..."
                                              required></textarea>
                                @endif

                                @if($question->explanation)
                                    <details class="mt-4">
                                        <summary class="cursor-pointer text-sm text-blue-600 hover:underline">
                                            💡 Voir l'explication
                                        </summary>
                                        <p class="mt-2 text-sm text-gray-600 bg-blue-50 p-3 rounded-lg">
                                            {{ $question->explanation }}
                                        </p>
                                    </details>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Bouton de soumission -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-center">
                        <p class="text-gray-600">
                            Assurez-vous d'avoir répondu à toutes les questions
                        </p>
                        <button type="submit"
                                class="bg-green-600 text-white px-8 py-3 rounded-lg hover:bg-green-700 font-semibold">
                            Soumettre le quiz
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @if($quiz->time_limit)
        <script>
            // Timer countdown
            let timeLeft = {{ $quiz->time_limit * 60 }};

            function updateTimer() {
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;
                console.log(`Temps restant: ${minutes}:${seconds.toString().padStart(2, '0')}`);

                if (timeLeft <= 0) {
                    document.querySelector('form').submit();
                }
                timeLeft--;
            }

            setInterval(updateTimer, 1000);
        </script>
    @endif
</x-app-layout>
