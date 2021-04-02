<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quote = new Quote();
        $quote->text = "I'm a total weirdo and have often felt like an outcast and a freak, and I love that. It makes things so much more exciting.";
        $quote->author = "Zoe Kravitz";
        $quote->save();

        $quote = new Quote();
        $quote->text = "Originals cost more than imitations.";
        $quote->author = "Suzy Kassem";
        $quote->save();

        $quote = new Quote();
        $quote->text = "True acceptance doesn’t require you to fit in or change who you are. It doesn’t have to be sought; it’s given to you.";
        $quote->author = "Yong Kang Chan";
        $quote->save();

        $quote = new Quote();
        $quote->text = "I never fit in. I am a true alternative. And I love being the outcast. That's my role in life, to be an outcast.";
        $quote->author = "Meat Loaf";
        $quote->save();

        $quote = new Quote();
        $quote->text = "I know what it's like to be an outcast in society. I know what it's like to want to find strength, and more importantly, I know what it's like to find that internal strength and rise out of the pain of being just sort of a weirdo.";
        $quote->author = "Andy Biersack";
        $quote->save();

        $quote = new Quote();
        $quote->text = "True acceptance doesn’t require you to fit in or change who you are. It doesn’t have to be sought; it’s given to you.";
        $quote->author = "Yong Kang Chan";
        $quote->save();

    }
}
