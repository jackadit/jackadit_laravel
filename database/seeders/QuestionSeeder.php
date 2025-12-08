<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $quizzes = Quiz::all();

        if ($quizzes->isEmpty()) {
            $this->command->warn('⚠️  Aucun quiz trouvé. Exécute d\'abord QuizSeeder.');
            return;
        }

        $this->command->info("🎯 Génération des questions pour {$quizzes->count()} quiz...");

        foreach ($quizzes as $quiz) {
            // Créer 5 à 10 questions par quiz
            $questionCount = rand(5, 10);

            for ($i = 1; $i <= $questionCount; $i++) {
                // Alterner les types de questions
                $type = match ($i % 5) {
                    0 => Question::TYPE_TRUE_FALSE,
                    1 => Question::TYPE_MULTIPLE_CHOICE,
                    2 => Question::TYPE_SHORT_ANSWER,
                    default => Question::TYPE_SINGLE_CHOICE,
                };

                // Créer la question
                Question::create([
                    'quiz_id' => $quiz->id,
                    'question_text' => $this->getQuestionText($type, $i),
                    'type' => $type,
                    'difficulty' => $this->getRandomDifficulty(),
                    'points' => $this->getPointsByDifficulty($type),
                    'time_limit' => rand(0, 1) ? rand(30, 120) : null, // 30s à 2min ou illimité
                    'explanation' => 'Explication détaillée de la bonne réponse.',
                    'order' => $i,
                    'show_correct_answers' => true,
                    'is_required' => true,
                ]);
            }
        }

        $totalQuestions = Question::count();
        $this->command->info("✅ {$totalQuestions} questions créées avec succès !");
    }

    /**
     * Générer un texte de question selon le type
     */
    private function getQuestionText(string $type, int $number): string
    {
        return match ($type) {
            Question::TYPE_SINGLE_CHOICE => "Question $number : " . $this->getRandomSingleChoiceQuestion(),
            Question::TYPE_MULTIPLE_CHOICE => "Question $number : " . $this->getRandomMultipleChoiceQuestion(),
            Question::TYPE_TRUE_FALSE => $this->getRandomTrueFalseQuestion(),
            Question::TYPE_SHORT_ANSWER => "Question $number : " . $this->getRandomShortAnswerQuestion(),
            default => "Question $number",
        };
    }

    /**
     * Questions pour choix unique
     */
    private function getRandomSingleChoiceQuestion(): string
    {
        $questions = [
            "Quelle est la commande pour créer un contrôleur en Laravel ?",
            "Quel design pattern Laravel utilise-t-il principalement ?",
            "Comment déclarer une route GET en Laravel ?",
            "Quel est le rôle du fichier .env ?",
            "Quelle méthode permet de valider les données ?",
            "Comment créer une migration ?",
            "Quel fichier contient les routes web ?",
            "Comment créer un middleware ?",
            "Quelle commande génère une factory ?",
            "Comment définir une relation hasMany ?",
        ];

        return $questions[array_rand($questions)];
    }

    /**
     * Questions pour choix multiples
     */
    private function getRandomMultipleChoiceQuestion(): string
    {
        $questions = [
            "Sélectionnez les composants du MVC (plusieurs réponses) :",
            "Quels sont les types de relations Eloquent ? (plusieurs réponses)",
            "Quels fichiers sont générés par php artisan make:model -a ?",
            "Quels sont les avantages de Laravel ?",
            "Quels sont les composants d'une requête HTTP ?",
            "Quelles méthodes HTTP sont disponibles ?",
        ];

        return $questions[array_rand($questions)];
    }

    /**
     * Questions Vrai/Faux
     */
    private function getRandomTrueFalseQuestion(): string
    {
        $questions = [
            "Laravel est un framework PHP",
            "Les migrations permettent de versionner la base de données",
            "Eloquent est un ORM",
            "Blade est un moteur de template",
            "Composer gère les dépendances PHP",
            "Artisan est un outil en ligne de commande",
            "Laravel supporte uniquement MySQL",
            "Les seeders permettent de peupler la base de données",
            "Le fichier .env est versionné dans Git",
            "Les middlewares s'exécutent avant les contrôleurs",
        ];

        return $questions[array_rand($questions)];
    }

    /**
     * Questions à réponse courte
     */
    private function getRandomShortAnswerQuestion(): string
    {
        $questions = [
            "Quel est le nom du framework PHP que nous utilisons ?",
            "Quel ORM est intégré dans Laravel ?",
            "Quel moteur de template utilise Laravel ?",
            "Quel est le nom du gestionnaire de paquets PHP ?",
            "Quelle commande liste toutes les routes ?",
            "Comment s'appelle le fichier de configuration principal ?",
        ];

        return $questions[array_rand($questions)];
    }

    /**
     * Difficulté aléatoire
     */
    private function getRandomDifficulty(): string
    {
        $difficulties = [
            Question::DIFFICULTY_EASY,
            Question::DIFFICULTY_MEDIUM,
            Question::DIFFICULTY_HARD,
        ];

        return $difficulties[array_rand($difficulties)];
    }

    /**
     * Points selon difficulté
     */
    private function getPointsByDifficulty(string $type): int
    {
        return match ($type) {
            Question::TYPE_TRUE_FALSE => rand(5, 10),
            Question::TYPE_SHORT_ANSWER => rand(10, 20),
            Question::TYPE_SINGLE_CHOICE => rand(10, 15),
            Question::TYPE_MULTIPLE_CHOICE => rand(15, 25),
            default => 10,
        };
    }
}
