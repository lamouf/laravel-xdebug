<?php
namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View as View;

/**
 * Class WelcomeController
 *
 * @package App\Http\Controllers
 */
class WelcomeController extends Controller
{
    /**
     * @return Factory|View
     */
    public function __invoke()
    {
        return view('welcome');
    }
}
