<?php

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = Course::find(1);
        $user1 = User::named("Nairn")->get()->first();
        $user2 = User::named("Stoneham")->get()->first();
        $conversation = Conversation::newConversation($course,array($user1, $user2));
        $conversation->addMessage($user1,"Hi! How's it going?");
        $conversation->addMessage($user1,"Not bad, how are you?");
    }
}