<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Page;

class MenuComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $pages;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Page $pages)
    {
        // Dependencies automatically resolved by service container...
        $this->pages = $pages;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('main_menu', $this->pages->all());
    }
}