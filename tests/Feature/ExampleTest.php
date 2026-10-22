<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('Latest Updates')
            ->assertSee('AI-powered Code Review Tools Gain Traction');
    }

    public function test_site_pages_render_without_database_access()
    {
        foreach (['/cv', '/portfolio', '/admin/news', '/subscribe'] as $path) {
            $this->get($path)->assertOk();
        }
    }

    public function test_subscription_validates_email_without_persisting_it()
    {
        $this->post('/subscribe', ['email' => 'not-an-email'])
            ->assertSessionHasErrors('email');

        $this->post('/subscribe', ['email' => 'kamil@example.com'])
            ->assertRedirect('/subscribe')
            ->assertSessionHas('status', 'Your email was not saved. Subscription storage is not connected yet.');
    }
}
