<?php
use MakerHub\Ideas\IdeaRepository;
use Laracasts\TestDummy\Factory as TestDummy;

class IdeaRepositoryTest extends \Codeception\TestCase\Test
{
   /**
    * @var \IntegrationTester
    */
    protected $tester;
    protected $repo;

    protected function _before()
    {
        $this->repo = new IdeaRepository;
    }


    //test 
    public function it_gets_all_ideas_for_a_user()
    {
        // Givin I have two users
        $users = TestDummy::times(2)->create('MakerHub\Users\User');
        
        // And Ideas for both of them
        TestDummy::times(2)->create('MakerHub\Ideas\Idea', [
            'user_id' => $users[0]->id,
            'content' => 'My Idea'
        ]);
        TestDummy::times(2)->create('MakerHub\Ideas\Idea', [
            'user_id' => $users[1]->id,
            'content' => 'His Idea'
        ]);
        
        // When I fetch Ideas for one user
        $ideasForUser = $this->repo->getAllForUser($users[0]);

        // Then I should only see ones from him
        $this->assertCount(2, $ideasForUser);
        $this->assserEquals('My Idea', $ideasForUser[0]->content);
        $this->assserEquals('His Idea', $ideasForUser[1]->content);
    }

    //test 
    public function it_saves_an_idea_for_a_user()
    {
        // Given I have an unsaved idea
        $idea = TestDummy::create('MakerHub\Ideas\Idea', [
            'user_id' => null,
            'content' => 'My Idea'
        ]);

        // And am an existing user
        $user = TestDummy::create('MakerHub\Users\User');

        // When I try to persist this idea 
        $savedIdea = $this->repo->save($idea, $user->id);

        // Then it should be saved 
        $this->tester->seeRecord('ideas', [
            'content' => 'My Idea'
        ]);

        // The idea should have correct user_id
        $this->assertEquals($user->id, $savedIdea->user_id);
    }

}