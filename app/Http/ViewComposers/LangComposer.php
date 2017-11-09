<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Lang;

class LangComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $languages;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Lang $languages)
    {
        // Dependencies automatically resolved by service container...
        $this->languages = $languages;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('languages', $this->languages->all());
    }
}