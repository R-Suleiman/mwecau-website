<?php

namespace App\Providers;

use App\Models\NewsUpdate;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot()
    {
        // $faculties;
        try {
            // Make the API request
             $faculties = Cache::remember('faculty_data', 43200, function () {
                $response = Http::get('https://ums.mwecau.ac.tz/Api/get_university_structure');
                if ($response->successful()) {
                     return $response->json();
                //    $faculties = $response->json();
                } else {
                    Log::error('Failed to fetch programs from API: ' . $response->status());
                    // $faculties = null;
                    return null;
                }
             });

            // If cache or API call failed, provide a fallback
            if ($faculties === null) {
                abort(503, 'No internet access');
            }

            View::share('faculties', $faculties);
            Paginator::useBootstrapFive();
        } catch (\Exception $e) {
            Log::error('Error fetching programs: ' . $e->getMessage());

            // If there's an exception, check if we have cached data
            if (Cache::has('faculty_data')) {
                $programs = Cache::get('faculty_data');
                return view('faculties.faculty', ['faculties' => $faculties]);
            } else {
               abort(503, 'No internet access');

            }
        }

        $news = NewsUpdate::orderBy('created_at', 'desc')->get();
        View::share('news', $news);
    }
}
