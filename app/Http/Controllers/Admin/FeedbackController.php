<?php


namespace App\Http\Controllers\Admin;


use App\Models\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;


class FeedbackController extends Controller
{
    public function index()
    {
        $applications = Feedback::latest()->paginate(10);
        return view('admin.application.index', compact('applications'));
    }

    public function makeContacted(Feedback $application)
    {
        $application->makeContacted();
        return redirect()->route('admin.feedback.index');
    }

    public function delete(Feedback $application)
    {
        $application->delete();
        return redirect()->route('admin.feedback.index');
    }


    public function edit(Feedback $application)
    {
        return view('admin.application.edit',
            [
                'application' => $application
            ]);
    }

    public function update(Request $request, Feedback $application)
    {

        $validatedData = $request->validate([
            'commentary' => 'nullable|string',
            'is_contacted' => 'string',
        ]);

        $application->update($validatedData);

        return redirect()
            ->route('admin.feedback.index')
            ->with('success', __('news.messages.success_updated'));
    }

}
