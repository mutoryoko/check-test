<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Contact;
use App\Models\Category;

class DemoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function index()
    {
        $contacts = Contact::with('category')->latest()->paginate(7);

        $genders = config('constants.genders');
        $gender_label = $genders[$contacts->gender];

        $categories = Category::all();

        return view('auth.admin', compact('contacts', 'gender_label', 'categories'));
    }
}
