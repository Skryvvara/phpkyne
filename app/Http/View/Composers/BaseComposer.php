<?php


namespace App\Http\View\Composers;

use Illuminate\View\View;

class BaseComposer
{
    public function compose(View $view): void {
        $nav = [
            ['home', '/', false],
            ['work', '/work', false],
            ['github', '/github', true]
        ];

        $view->with('nav', $nav);
    }
}
