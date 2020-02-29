<?php

use Illuminate\Database\Seeder;

class ReviewQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_timestamp = date('Y-m-d h:i:s');

        DB::table('review_questions')->insert([
            [
                'name' => 'Foi encontrado focos no local?',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ],
            [
                'name' => 'Os focos foram eliminados?',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ],
            [
                'name' => 'Foram encontrado mosquitos voando?',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ],
            [
                'name' => 'O morador relata incidência de mosquitos?',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ]
        ]);

        DB::table('review_question_options')->insert([
            [
                'review_question_id' => '1',
                'name' => 'Nenhum',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ],
            [
                'review_question_id' => '1',
                'name' => '1 a 5',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ],
            [
                'review_question_id' => '1',
                'name' => 'Mais de 5',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ],
            [
                'review_question_id' => '2',
                'name' => 'Sim',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ],
            [
                'review_question_id' => '2',
                'name' => 'Não',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ],
            [
                'review_question_id' => '3',
                'name' => 'Nenhum',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ],
            [
                'review_question_id' => '3',
                'name' => 'Poucos',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ],
            [
                'review_question_id' => '3',
                'name' => 'Alguns',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ],
            [
                'review_question_id' => '3',
                'name' => 'Muitos',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ],
            [
                'review_question_id' => '4',
                'name' => 'Sim',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ],
            [
                'review_question_id' => '4',
                'name' => 'Não',
                'created_at' => $current_timestamp,
                'updated_at' => $current_timestamp,
            ]
        ]);
    }
}
