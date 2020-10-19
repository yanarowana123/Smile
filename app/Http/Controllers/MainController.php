<?php


namespace App\Http\Controllers;


use App\Models\Feature;
use App\Models\Feedback;
use App\Models\Main;
use App\Models\Photo;
use App\Models\Staff;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $header = Main::where('page', Main::HOME)->where('block', Main::HEADER)->first();
        $innovation = Main::where('page', Main::HOME)->where('block', Main::FEATURE)->first();
        $consultant = Main::where('page', Main::HOME)->where('block', Main::CONSULTANT)->first();
        $howItWorks = Feature::where('block', Feature::WORK)->get();
        $innovationFeatures = Feature::where('block', Feature::TECH)->get();
        $features = Feature::where('block', Feature::HOME)->get();

        $about = Main::where('page', Main::ABOUT)->where('block', Main::HEADER)->first();
        $aboutImg = Photo::where('page', Photo::HOMEABOUT)->first();
        $slides = Photo::where('page', Photo::HOMESLIDER)->get();
        return view('pages.index', compact('header', 'innovation', 'consultant',
            'howItWorks', 'about', 'aboutImg', 'slides', 'innovationFeatures', 'features'));
    }

    public function about()
    {
        $header = Main::where('page', Main::ABOUT)->where('block', Main::HEADER)->first();
        $feature = Main::where('page', Main::ABOUT)->where('block', Main::FEATURE)->first();
        $images = Photo::where('page', Photo::ABOUT)->get();

        return view('pages.about', compact('header', 'feature', 'images'));
    }

    public function services()
    {
        $header = Main::where('page', Main::SERVICE)->where('block', Main::HEADER)->first();
        $features = Feature::where('block', Feature::SERVICE)->get();
        return view('pages.services', compact('header', 'features'));
    }

    public function staff()
    {
        $header = Main::where('page', Main::STAFF)->where('block', Main::HEADER)->first();
        $feature = Main::where('page', Main::ABOUT)->where('block', Main::FEATURE)->first();
        $staff = Staff::all();
        return view('pages.staff', compact('header', 'feature', 'staff'));
    }

    public function works()
    {
        $header = Main::where('page', Main::WORK)->where('block', Main::HEADER)->first();
        $feature = Main::where('page', Main::WORK)->where('block', Main::FEATURE)->first();
        $images = Photo::where('page', Photo::WORK)->get();
        return view('pages.our-works', compact('header', 'feature', 'images'));
    }

    public function contacts()
    {
        $header = Main::where('page', Main::CONTACT)->where('block', Main::HEADER)->first();
        return view('pages.contacts', compact('header'));
    }

    public function feedback(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'message' => 'required|string|max:700',
        ]);

        if ($validator->passes()) {
            $application = new Feedback();
            $application->name = $request->name;
            $application->phone = $request->phone;
            $application->email = $request->email;
            $application->message = $request->message;
            $application->save();
            return response()->json(['success' => __('main.form_success', ['name' => $request->name])]);
        }

        return response()->json(['error' => $validator->errors()->all()]);

    }
}
