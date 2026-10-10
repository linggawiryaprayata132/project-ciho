<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_whatsapp_float_button_links_to_admin_number(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('https://wa.me/62895333364644', false);
    }

    public function test_contact_page_links_to_admin_whatsapp(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('https://wa.me/62895333364644', false);
        $response->assertSee('0895-3333-64644');
    }

    public function test_materials_page_loads_successfully(): void
    {
        $response = $this->get('/materials');

        $response->assertStatus(200);
        $response->assertSee('Flexi Frontlite');
        $response->assertSee('Albatros Matte');
    }

    public function test_location_page_loads_and_contains_google_maps(): void
    {
        $response = $this->get('/location');

        $response->assertStatus(200);
        $response->assertSee('google-map-iframe', false);
        $response->assertSee('maps.google.com', false);
    }

    public function test_navbar_contains_bahan_and_lokasi_links(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee(route('materials'), false);
        $response->assertSee(route('location'), false);
    }
}
