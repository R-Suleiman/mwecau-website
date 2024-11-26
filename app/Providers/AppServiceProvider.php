<?php

namespace App\Providers;

use App\Models\Footer;
use App\Models\NewsUpdate;
use App\Models\Document;
use App\Models\event;
use App\Models\Project;
use App\Models\ProjectConferences;
use App\Models\ProjectPartner;
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
        // $faculties = null;
        try {
            // Make the API request
            $faculties = Cache::remember('faculty_data', 43200, function () {
                $response = Http::get('https://ums.mwecau.ac.tz/Api/get_university_structure');
                if ($response->successful()) {
                    return $response->json();
                    // $faculties = $response->json();
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

        //fetching joining instructions
        $postgraduateJoiningInstruction = Document::where('type', 'joining-instruction')
            ->where('level', 'postgraduate')
            ->orderByDesc('created_at')
            ->first();
        $undergrduateJoiningInstruction = Document::where('type', 'joining-instruction')
            ->where('level', 'undergraduate')
            ->orderByDesc('created_at')
            ->first();
        $NondegreeJoiningInstruction = Document::where('type', 'joining-instruction')
            ->where('level', 'non-degree')
            ->orderByDesc('created_at')
            ->first();

        //fetching fee Structure
        $postgraduateFeeStructure = Document::where('type', 'fee-structure')
            ->where('level', 'postgraduate')
            ->orderByDesc('created_at')
            ->first();
        $undergrduateFeeStructure = Document::where('type', 'fee-structure')
            ->where('level', 'undergraduate')
            ->orderByDesc('created_at')
            ->first();
        $NondegreeFeeStructure = Document::where('type', 'fee-structure')
            ->where('level', 'non-degree')
            ->orderByDesc('created_at')
            ->first();

        //fetching Timetables
        $postgraduateTimetable = Document::where('type', 'timetable')
            ->where('level', 'postgraduate')
            ->orderByDesc('created_at')
            ->first();
        $undergraduateTimetable = Document::where('type', 'timetable')
            ->where('level', 'undergraduate')
            ->orderByDesc('created_at')
            ->first();
        $NondegreeTimetable = Document::where('type', 'timetable')
            ->where('level', 'non-degree')
            ->orderByDesc('created_at')
            ->first();

        $almanac = Document::where('type', 'almanac')->first();
        // Fetch the latest news and events
        $news = NewsUpdate::orderBy('created_at', 'desc')->take(2)->get();
        $events = Event::orderBy('created_at', 'desc')->take(3)->get();

        // Combine the two collections
        $combinedItems = $news->concat($events);
        View::share('combinedItems', $combinedItems);


        //sharing joining instructions varibales to the view
        View::share('postgraduateJoiningInstruction', $postgraduateJoiningInstruction);
        View::share('undergrduateJoiningInstruction', $undergrduateJoiningInstruction);
        View::share('NondegreeJoiningInstruction', $NondegreeJoiningInstruction);

        //sharing fee-structure varibales to the view
        View::share('postgraduateFeeStructure', $postgraduateFeeStructure);
        View::share('undergrduateFeeStructure', $undergrduateFeeStructure);
        View::share('NondegreeFeeStructure', $NondegreeFeeStructure);

        //sharing timetable varibales to the view
        View::share('postgraduateTimetable', $postgraduateTimetable);
        View::share('undergraduateTimetable', $undergraduateTimetable);
        View::share('NondegreeTimetable', $NondegreeTimetable);

        View::share('almanac', $almanac);

        $news = NewsUpdate::orderBy('created_at', 'desc')->get();
        View::share('news', $news);

        $footer = Footer::where('category', 'popular-links')
            ->get();
        View::share('footer', $footer);

        $youtubeLink = Footer::where('category', 'youtube-link')->first();
        view::share('youtubeLink', $youtubeLink);

        //projects view shares
        $projectFooter = Project::all();
        view::share('projectFooter', $projectFooter);

        $projectConferences = ProjectConferences::all();
        view::share('projectConferences', $projectConferences);

        $projectPartners = ProjectPartner::all();
        view::share('projectPartners', $projectPartners);
    }
}
