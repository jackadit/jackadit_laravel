<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajouter une question au quiz : {{ $quiz->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-8">
                <form action="{{ route('questions.store') }}" method="POST" id="questionForm">
                    @csrf
                    <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">

                    <!-- Type de question -->
                    <div class="mb-6">
                        <label for="type" class="block text-sm font-medium text-gray-700 mb-2">
                            Type de question *
                        </label>
                        <select name="type"
                                id="type"
                                class="w-full rounded-md border-gray-300"
                                required
                                onchange="toggleQuestionType()">
                            <option value="">Sélectionnez un type</option>
                            <option value="multiple_choice" {{ old('type') == 'multiple_choice' ? 'selected' : '' }}>
                                Choix multiple (QCM)
                            </option>
                            <option value="true_false" {{ old('type') == 'true_false' ? 'selected' : '' }}>
                                Vrai/Faux
                            </option>
                            <option value="text" {{ old('type') == 'text' ? 'selected' : '' }}>
                                Réponse texte
                            </option>
                        </select>
                        @error('type')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
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
                                  required>{{ old('question_text') }}</textarea>
                        @error('question_text')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Options pour QCM (caché par défaut) -->
                    <div id="multipleChoiceOptions" class="mb-6 hidden">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Options de réponse *
                        </label>
                        <div id="optionsContainer" class="space-y-3">
                            <div class="flex gap-2 items-center option-row">
                                <input type="radio" name="correct_option" value="0" class="mt-1">
                                <input type="text"
                                       name="options[]"
                                       placeholder="Option 1"
                                       class="flex-1 rounded-md border-gray-300">
                                <button type="button"
                                        onclick="removeOption(this)"
                                        class="bg-red-500 text-white px-3 py-2 rounded-md hover:bg-red-600 hidden">
                                    ✕
                                </button>
                            </div>
                            <div class="flex gap-2 items-center option-row">
                                <input type="radio" name="correct_option" value="1" class="mt-1">
                                <input type="text"
                                       name="options[]"
                                       placeholder="Option 2"
                                       class="flex-1 rounded-md border-gray-300">
                                <button type="button"
                                        onclick="removeOption(this)"
                                        class="bg-red-500 text-white px-3 py-2 rounded-md hover:bg-red-600 hidden">
                                    ✕
                                </button>
                            </div>
                        </div>
                        <button type="button"
                                onclick="addOption()"
                                class="mt-3 bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
                            + Ajouter une option
                        </button>
                        <p class="text-sm text-gray-500 mt-2">Cochez la bonne réponse</p>
                    </div>

                    <!-- Réponse pour Vrai/Faux (caché par défaut) -->
                    <div id="trueFalseAnswer" class="mb-6 hidden">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Bonne réponse *
                        </label>
                        <div class="space-y-2">
                            <label class="flex items-center p-3 border rounded-md cursor-pointer hover:bg-gray-50">
                                <input type="radio"
                                       name="correct_answer"
                                       value="true"
                                       class="mr-3">
                                <span>✅ Vrai</span>
                            </label>
                            <label class="flex items-center p-3 border rounded-md cursor-pointer hover:bg-gray-50">
                                <input type="radio"
                                       name="correct_answer"
                                       value="false"
                                       class="mr-3">
                                <span>❌ Faux</span>
                            </label>
                        </div>
                    </div>

                    <!-- Réponse pour texte (caché par défaut) -->
                    <div id="textAnswer" class="mb-6 hidden">
                        <label for="correct_answer_text" class="block text-sm font-medium text-gray-700 mb-2">
                            Réponse attendue (optionnel)
                        </label>
                        <textarea name="correct_answer_text"
                                  id="correct_answer_text"
                                  rows="3"
                                  class="w-full rounded-md border-gray-300"
                                  placeholder="Laissez vide pour une correction manuelle">{{ old('correct_answer_text') }}</textarea>
                        <p class="text-sm text-gray-500 mt-1">Cette réponse servira de référence pour la correction</p>
                    </div>

                    <!-- Explication -->
                    <div class="mb-6">
                        <label for="explanation" class="block text-sm font-medium text-gray-700 mb-2">
                            Explication (optionnel)
                        </label>
                        <textarea name="explanation"
                                  id="explanation"
                                  rows="3"
                                  class="w-full rounded-md border-gray-300"
                                  placeholder="Expliquez pourquoi cette réponse est correcte">{{ old('explanation') }}</textarea>
                        <p class="text-sm text-gray-500 mt-1">Sera affichée après que l'étudiant ait répondu</p>
                    </div>

                    <!-- Points -->
                    <div class="mb-6">
                        <label for="points" class="block text-sm font-medium text-gray-700 mb-2">
                            Points *
                        </label>
                        <input type="number"
                               name="points"
                               id="points"
                               value="{{ old('points', 1) }}"
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
                               value="{{ old('order', $quiz->questions->count() + 1) }}"
                               min="1"
                               class="w-full rounded-md border-gray-300">
                    </div>

                    <!-- Boutons -->
                    <div class="flex gap-4">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">
                            Créer la question
                        </button>
                        <a href="{{ route('quizzes.edit', $quiz->id) }}"
                           class="bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>

            <!-- Aide -->
            <div class="bg-blue-50 rounded-lg p-6 mt-6">
                <h3 class="font-bold text-blue-900 mb-3">💡 Conseils</h3>
                <ul class="space-y-2 text-sm text-blue-800">
                    <li>• <strong>QCM :</strong> Créez au moins 2 options et cochez la bonne réponse</li>
                    <li>• <strong>Vrai/Faux :</strong> Simple et rapide pour tester des affirmations</li>
                    <li>• <strong>Texte :</strong> Pour des réponses ouvertes (correction manuelle possible)</li>
                    <li>• <strong>Explication :</strong> Ajoutez toujours une explication pédagogique</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        let optionCount = 2;

        function toggleQuestionType() {
            const type = document.getElementById('type').value;

            // Cacher tous les champs spécifiques
            document.getElementById('multipleChoiceOptions').classList.add('hidden');
            document.getElementById('trueFalseAnswer').classList.add('hidden');
            document.getElementById('textAnswer').classList.add('hidden');

            // Afficher le champ approprié
            if (type === 'multiple_choice') {
                document.getElementById('multipleChoiceOptions').classList.remove('hidden');
                document.querySelectorAll('input[name="options[]"]').forEach(input => input.required = true);
            } else if (type === 'true_false') {
                document.getElementById('trueFalseAnswer').classList.remove('hidden');
                document.querySelectorAll('input[name="correct_answer"]').forEach(input => input.required = true);
            } else if (type === 'text') {
                document.getElementById('textAnswer').classList.remove('hidden');
            }
        }

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

            // Afficher les boutons de suppression si plus de 2 options
            updateRemoveButtons();
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
            updateRemoveButtons();
        }

        function updateRemoveButtons() {
            const rows = document.querySelectorAll('.option-row');
            rows.forEach(row => {
                const removeBtn = row.querySelector('button[onclick*="removeOption"]');
                if (rows.length <= 2) {
                    removeBtn.classList.add('hidden');
                } else {
                    removeBtn.classList.remove('hidden');
                }
            });
        }

        // Validation du formulaire
        document.getElementById('questionForm').addEventListener('submit', function(e) {
            const type = document.getElementById('type').value;

            if (type === 'multiple_choice') {
                const checkedRadio = document.querySelector('input[name="correct_option"]:checked');
                if (!checkedRadio) {
                    e.preventDefault();
                    alert('Veuillez sélectionner la bonne réponse pour le QCM.');
                    return false;
                }
            }

            if (type === 'true_false') {
                const checkedAnswer = document.querySelector('input[name="correct_answer"]:checked');
                if (!checkedAnswer) {
                    e.preventDefault();
                    alert('Veuillez sélectionner la bonne réponse (Vrai ou Faux).');
                    return false;
                }
            }
        });

        // Initialiser l'affichage au chargement si old() a une valeur
        document.addEventListener('DOMContentLoaded', function() {
            toggleQuestionType();
        });
    </script>
</x-app-layout>
