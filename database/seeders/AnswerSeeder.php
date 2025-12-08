<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    public function run(): void
    {
        $questions = Question::all();

        if ($questions->isEmpty()) {
            $this->command->warn('⚠️  Aucune question trouvée. Exécute d\'abord QuestionSeeder.');
            return;
        }

        $this->command->info("🎯 Génération des réponses pour {$questions->count()} questions...");

        foreach ($questions as $question) {
            $this->createAnswersForQuestion($question);
        }

        $totalAnswers = Answer::count();
        $this->command->info("✅ {$totalAnswers} réponses créées avec succès !");
    }

    /**
     * Créer les réponses selon le type de question
     */
    private function createAnswersForQuestion(Question $question): void
    {
        match ($question->type) {
            Question::TYPE_SINGLE_CHOICE => $this->createSingleChoiceAnswers($question),
            Question::TYPE_MULTIPLE_CHOICE => $this->createMultipleChoiceAnswers($question),
            Question::TYPE_TRUE_FALSE => $this->createTrueFalseAnswers($question),
            Question::TYPE_SHORT_ANSWER => $this->createShortAnswers($question),
            default => null,
        };
    }

    /**
     * Réponses pour QCM à choix unique
     */
    private function createSingleChoiceAnswers(Question $question): void
    {
        $options = ['A', 'B', 'C', 'D'];
        $correctIndex = rand(0, 3);

        foreach ($options as $index => $option) {
            Answer::create([
                'question_id' => $question->id,
                'answer_text' => "Réponse $option : " . $this->getRandomAnswerText(),
                'is_correct' => $index === $correctIndex,
                'order' => $index + 1,
                'explanation' => $index === $correctIndex
                    ? 'Correct ! Cette réponse est exacte.'
                    : 'Incorrect. Revoyez les concepts fondamentaux.',
            ]);
        }
    }

    /**
     * Réponses pour QCM à choix multiples
     */
    private function createMultipleChoiceAnswers(Question $question): void
    {
        $options = ['A', 'B', 'C', 'D', 'E'];
        $correctCount = rand(2, 3); // 2 ou 3 bonnes réponses
        $correctIndices = (array) array_rand(array_flip(range(0, 4)), $correctCount);

        foreach ($options as $index => $option) {
            $isCorrect = in_array($index, $correctIndices);

            Answer::create([
                'question_id' => $question->id,
                'answer_text' => "Option $option : " . $this->getRandomAnswerText(),
                'is_correct' => $isCorrect,
                'order' => $index + 1,
                'explanation' => $isCorrect
                    ? 'Correct ! Cette option fait partie des bonnes réponses.'
                    : 'Incorrect. Cette option n\'est pas correcte.',
            ]);
        }
    }

    /**
     * Réponses pour Vrai/Faux
     */
    private function createTrueFalseAnswers(Question $question): void
    {
        $isTrue = (bool)rand(0, 1);

        Answer::create([
            'question_id' => $question->id,
            'answer_text' => 'Vrai',
            'is_correct' => $isTrue,
            'order' => 1,
            'explanation' => $isTrue
                ? 'Correct ! Cette affirmation est vraie.'
                : 'Incorrect. Cette affirmation est fausse.',
        ]);

        Answer::create([
            'question_id' => $question->id,
            'answer_text' => 'Faux',
            'is_correct' => !$isTrue,
            'order' => 2,
            'explanation' => !$isTrue
                ? 'Correct ! Cette affirmation est fausse.'
                : 'Incorrect. Cette affirmation est vraie.',
        ]);
    }

    /**
     * Réponses courtes
     */
    private function createShortAnswers(Question $question): void
    {
        $answers = [
            'Laravel' => 'Framework PHP moderne et élégant',
            'PHP' => 'Langage de programmation côté serveur',
            'Eloquent' => 'ORM intégré à Laravel',
            'MVC' => 'Modèle-Vue-Contrôleur',
            'Blade' => 'Moteur de template de Laravel',
            'Composer' => 'Gestionnaire de dépendances PHP',
            'Artisan' => 'Interface en ligne de commande de Laravel',
        ];

        $answer = array_rand($answers);

        Answer::create([
            'question_id' => $question->id,
            'answer_text' => $answer,
            'is_correct' => true,
            'order' => 1,
            'explanation' => $answers[$answer],
        ]);
    }

    /**
     * Générer un texte de réponse aléatoire
     */
    private function getRandomAnswerText(): string
    {
        $texts = [
            "Cette option est correcte car elle suit les bonnes pratiques",
            "Ceci représente la meilleure approche dans ce contexte",
            "C'est la solution recommandée par la documentation",
            "Cette réponse est exacte selon les standards actuels",
            "Option valide qui respecte les conventions",
            "Réponse appropriée pour ce type de situation",
            "Cette option correspond aux attentes",
        ];

        return $texts[array_rand($texts)];
    }
}
