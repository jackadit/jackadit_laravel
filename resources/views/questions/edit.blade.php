<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier la question
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-8">
                <form action="{{ route('questions.update', $question) }}" method="POST" id="questionForm">
                    @csrf
                    @method('PUT')

                    <!-- Type de question (non modifiable après création) -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Type de question
                        </label>
                        <input type="text"
                               value="{{ ucfirst(str_replace('_', ' ', $question->type)) }}"
                               class="w-full rounded-md border-gray-300 bg-gray-100"
                               disabled>
                        <input type="hidden" name="type" value="{{ $question->type }}">
                        <p class="text-sm text-gray-500 mt-1">Le type ne peut pas être modifié après création</p>
                    </div>

                    <!-- Question -->
                    <div class="mb-6">
                        <label for="question_text" class="block text-sm font-medium text-gray-700 mb-2">
                            Question *
                        </label>
                        <textarea name="question_text"
                                  id="question_text"
                                  rows="3"
                                  class="w-full rounded-md border-gray-300 @error('question_text') border-red-500 @enderror"
                                  required>{{ old('question_text', $question->question_text) }}</textarea>
                        @error('question_text')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    @if($question->type === 'multiple_choice')
                        <!-- Options pour QCM -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Options de réponse *
                            </label>
                            @php
                                $options = json_decode($question->options, true) ?? [];
                                $correctAnswer = json_decode($question->correct_answer, true);
                            @endphp
                            <div id="optionsContainer" class="space-y-3">
                                @foreach($options as $index => $option)
                                    <div class="flex gap-2 items-center option-row">
                                        <input type="radio"
                                               name="correct_option"
                                               value="{{ $index }}"
                                               {{ $correctAnswer == $index ? 'checked' : '' }}
                                               class="mt-1">
                                        <input type="text"
                                               name="options[]"
                                               value="{{ $option }}"
                                               placeholder="Option {{ $index + 1 }}"
                                               class="flex-1 rounded-md border-gray-300"
                                               required>
                                        @if($index >= 2)
                                            <button type="button"
                                                    onclick="removeOption(this)"
                                                    class="bg-red-500 text-white px-3 py-2 rounded-md hover:bg-red-600">
                                                ✕
                                            </button>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <button type="button"
                                    onclick="addOption()"
                                    class="mt-3 bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
                                + Ajouter une option
                            </button>
                            <p class="text-sm text-gray-500 mt-2">Cochez la bonne réponse</p>
                        </div>

                    @elseif($question->type === 'true_false')
                        <!-- Réponse Vrai/Faux -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Bonne réponse *
                            </label>
                            <div class="space-y-2">
                                <label class="flex items-center p-3 border rounded-md cursor-pointer hover:bg-gray-50">
                                    <input type="radio"
                                           name="correct_answer"
                                           value="true"
                                           {{ $question->correct_answer === 'true' ? 'checked' : '' }}
                                           class="mr-3"
                                           required>
                                    <span>✅ Vrai</span>
                                </label>
                                <label class="flex items-center p-3 border rounded-md cursor-pointer hover:bg-gray-50">
                                    <input type="radio"
                                           name="correct_answer"
                                           value="false"
                                           {{ $question->correct_answer === 'false' ? 'checked' : '' }}
                                           class="mr-3"
                                           required>
                                    <span>❌ Faux</span>
                                </label>
                            </div>
                        </div>

                    @elseif($question->type === 'text')
                        <!-- Réponse texte -->
                        <div class="mb-6">
                            <label for="correct_answer_text" class="block text-sm font-medium text-gray-700 mb-2">
                                Réponse attendue (optionnel)
                            </label>
                            <textarea name="correct_answer_text"
                                      id="correct_answer_text"
                                      rows="3"
                                      class="w-full rounded-md border-gray-300"
                                      placeholder="Laissez vide pour une correction manuelle">{{ old('correct_answer_text', $question->correct_answer) }}</textarea>
                        </div>
                    @endif

                    <!-- Explication -->
                    <div class="mb-6">
                        <label for="explanation" class="block text-sm font-medium text-gray-700 mb-2">
                            Explication (optionnel)
                        </label>
                        <textarea name="explanation"
                                  id="explanation"
                                  rows="3"
                                  class="w-full rounded-md border-gray-300">{{ old('explanation', $question->explanation) }}</textarea>
                    </div>

                    <!-- Points -->
                    <div class="mb-6">
                        <label for="points" class="block text-sm font-medium text-gray-700 mb-2">
                            Points *
                        </label>
                        <input type="number"
                               name="points"
                               id="points"
                               value="{{ old('points', $question->points) }}"
                               min="1"
                               class="w-full rounded-md border-gray-300"
                               required>
                    </div>

                    <!-- Ordre -->
                    <div class="mb-6">
                        <label for="order" class="block text-sm font-medium text-gray-700 mb-2">
                            Ordre d'affichage
                        </label>
                        <input type="number"
                               name="order"
                               id="order"
                               value="{{ old('order', $question->order) }}"
                               min="1"
                               class="w-full rounded-md border-gray-300">
                    </div>

                    <!-- Boutons -->
                    <div class="flex gap-4">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">
                            Mettre à jour
                        </button>
                        <a href="{{ route('quizzes.edit', $question->quiz_id) }}"
                           class="bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if($question->type === 'multiple_choice')
        <script>
            let optionCount = {{ count(json_decode($question->options, true)) }};

            function addOption() {
                const container = document.getElementById('optionsContainer');
                const newOption = document.createElement('div');
                newOption.className = 'flex gap-2 items-center option-row';
                newOption.innerHTML = `
                <input type="radio" name="correct_option" value="${optionCount}" class="mt-1">
                <input type="text"
                       name="options[]"
                       placeholder="Option ${optionCount + 1}"
                       class="flex-1 rounded-md border-gray-300"
                       required>
                <button type="button"
                        onclick="removeOption(this)"
                        class="bg-red-500 text-white px-3 py-2 rounded-md hover:bg-red-600">
                    ✕
                </button>
            `;
                container.appendChild(newOption);
                optionCount++;
            }

            function removeOption(button) {
                const row = button.closest('.option-row');
                row.remove();

                // Réindexer les options
                document.querySelectorAll('.option-row').forEach((row, index) => {
                    row.querySelector('input[type="radio"]').value = index;
                    row.querySelector('input[type="text"]').placeholder = `Option ${index + 1}`;
                });

                optionCount = document.querySelectorAll('.option-row').length;
            }
        </script>
    @endif
</x-app-layout>
