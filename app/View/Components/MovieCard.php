<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MovieCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $movie;
    // public $genres;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    // public function __construct($movie, $genres)
    public function __construct($movie)

    {
        $this->movie = $movie;
        // $this->genres = $genres;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        return view('components.movie-card');
    }
}
