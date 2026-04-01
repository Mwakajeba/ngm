<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class JobsController extends Controller
{
    /**
     * Job posts from language files (lang/{locale}/jobs.php → posts).
     *
     * @return array<int, array<string, mixed>>
     */
    private function jobs(): array
    {
        $posts = __('jobs.posts');
        if (! is_array($posts)) {
            return [];
        }

        return collect($posts)
            ->map(fn (array $job, string $slug) => array_merge(['slug' => $slug], $job))
            ->values()
            ->all();
    }

    public function index()
    {
        $jobs = $this->jobs();

        return view('jobs.index', compact('jobs'));
    }

    public function show(string $slug)
    {
        $job = collect($this->jobs())->firstWhere('slug', $slug);

        abort_unless($job, 404);

        return view('jobs.show', compact('job'));
    }

    public function apply(Request $request, string $slug)
    {
        $job = collect($this->jobs())->firstWhere('slug', $slug);
        abort_unless($job, 404);

        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'phone' => ['nullable', 'string', 'max:40'],
            'cv' => ['required', 'file', 'mimes:pdf', 'max:5120'], // 5MB
        ]);

        $safeName = Str::slug($validated['full_name']);
        $filename = $job['slug'].'-'.$safeName.'-'.now()->format('Ymd-His').'.pdf';

        $path = $request->file('cv')->storeAs('public/job-applications/'.$job['slug'], $filename);

        return back()->with([
            'application_submitted' => true,
            'stored_path' => $path ? Storage::url($path) : null,
        ]);
    }
}
