<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FeatureController extends Controller
{

    public function work()
    {
        $features = Feature::where('block', Feature::WORK)->paginate(10);

        return view('admin.home.feature.index',
            [
                'features' => $features,
            ]);
    }

    public function createWork()
    {
        return view('admin.home.feature.create');
    }

    public function storeWork(Request $request)
    {

        $validatedData = $request->validate([
            'content_en' => 'required|string',
            'content_ru' => 'required|string',
            'content_kz' => 'required|string',
        ]);
        $validatedData['block'] = Feature::WORK;

        Feature::create($validatedData);

        return redirect()->route('admin.feature.work.index')->with(['success' => 'Success']);
    }

    public function editWork(Feature $feature)
    {
        throw_unless($feature->block == Feature::WORK, NotFoundHttpException::class);
        return view('admin.home.feature.edit', compact('feature'));
    }

    public function updateWork(Request $request, Feature $feature)
    {
        throw_unless($feature->block == Feature::WORK, NotFoundHttpException::class);

        $validatedData = $request->validate([
            'content_en' => 'required|string',
            'content_ru' => 'required|string',
            'content_kz' => 'required|string',
        ]);

        $feature->update($validatedData);

        return redirect()->route('admin.feature.work.index')->with(['success' => 'Success']);
    }

    public function deleteWork(Feature $feature)
    {
        throw_unless($feature->block == Feature::WORK, NotFoundHttpException::class);
        $feature->delete();
        return redirect()->route('admin.feature.work.index')->with(['success' => 'Success']);
    }


    public function service()
    {
        $features = Feature::where('block', Feature::SERVICE)->paginate(10);

        return view('admin.service.index',
            [
                'features' => $features,
            ]);
    }

    public function createService()
    {
        return view('admin.service.create');
    }

    public function storeService(Request $request)
    {
        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_kz' => 'required|string|max:255',
            'content_en' => 'required|string',
            'content_ru' => 'required|string',
            'content_kz' => 'required|string',
            'image' => 'required|image|max:4096',
        ]);
        $validatedData['block'] = Feature::SERVICE;
        $validatedData = collect($validatedData);

        $image = $validatedData->get('image');
        $validatedData->forget('image')
            ->put('image', Main::handleUploadedImage($image));


        Feature::create($validatedData->toArray());

        return redirect()->route('admin.feature.service.index')->with(['success' => 'Success']);
    }

    public function editService(Feature $feature)
    {
        throw_unless($feature->block == Feature::SERVICE, NotFoundHttpException::class);
        return view('admin.service.edit', compact('feature'));
    }

    public function updateService(Request $request, Feature $feature)
    {
        throw_unless($feature->block == Feature::SERVICE, NotFoundHttpException::class);

        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_kz' => 'required|string|max:255',
            'content_en' => 'required|string',
            'content_ru' => 'required|string',
            'content_kz' => 'required|string',
            'image' => 'nullable|image|max:4096',
        ]);

        $validatedData = collect($validatedData);
        if ($request->hasFile('image')) {
            Storage::delete($feature->image);
            $image = $validatedData->get('image');
            $validatedData->forget('image')
                ->put('image', Main::handleUploadedImage($image));
        }
        $feature->update($validatedData->toArray());

        return redirect()->route('admin.feature.service.index')->with(['success' => 'Success']);
    }

    public function deleteService(Feature $feature)
    {
        throw_unless($feature->block == Feature::SERVICE, NotFoundHttpException::class);
        Storage::delete($feature->image);
        $feature->delete();
        return redirect()->route('admin.feature.service.index')->with(['success' => 'Success']);
    }


    public function tech()
    {
        $features = Feature::where('block', Feature::TECH)->paginate(10);

        return view('admin.tech.index',
            [
                'features' => $features,
            ]);
    }

    public function createTech()
    {
        return view('admin.tech.create');
    }

    public function storeTech(Request $request)
    {
        $validatedData = $request->validate([
            'content_en' => 'required|string',
            'content_ru' => 'required|string',
            'content_kz' => 'required|string',
        ]);
        $validatedData['block'] = Feature::TECH;

        Feature::create($validatedData);

        return redirect()->route('admin.feature.tech.index')->with(['success' => 'Success']);
    }

    public function editTech(Feature $feature)
    {
        throw_unless($feature->block == Feature::TECH, NotFoundHttpException::class);
        return view('admin.tech.edit', compact('feature'));
    }

    public function updateTech(Request $request, Feature $feature)
    {
        throw_unless($feature->block == Feature::TECH, NotFoundHttpException::class);

        $validatedData = $request->validate([
            'content_en' => 'required|string',
            'content_ru' => 'required|string',
            'content_kz' => 'required|string',
        ]);

        $feature->update($validatedData);

        return redirect()->route('admin.feature.tech.index')->with(['success' => 'Success']);
    }

    public function deleteTech(Feature $feature)
    {
        throw_unless($feature->block == Feature::TECH, NotFoundHttpException::class);
        $feature->delete();
        return redirect()->route('admin.feature.tech.index')->with(['success' => 'Success']);
    }


    public function home()
    {
        $features = Feature::where('block', Feature::HOME)->paginate(10);

        return view('admin.feature.index',
            [
                'features' => $features,
            ]);
    }

    public function createHome()
    {
        return view('admin.feature.create');
    }

    public function storeHome(Request $request)
    {
        $validatedData = $request->validate([
            'content_en' => 'required|string',
            'content_ru' => 'required|string',
            'content_kz' => 'required|string',
        ]);
        $validatedData['block'] = Feature::HOME;

        Feature::create($validatedData);

        return redirect()->route('admin.feature.home.index')->with(['success' => 'Success']);
    }

    public function editHome(Feature $feature)
    {
        throw_unless($feature->block == Feature::HOME, NotFoundHttpException::class);
        return view('admin.feature.edit', compact('feature'));
    }

    public function updateHome(Request $request, Feature $feature)
    {
        throw_unless($feature->block == Feature::HOME, NotFoundHttpException::class);

        $validatedData = $request->validate([
            'content_en' => 'required|string',
            'content_ru' => 'required|string',
            'content_kz' => 'required|string',
        ]);

        $feature->update($validatedData);

        return redirect()->route('admin.feature.home.index')->with(['success' => 'Success']);
    }

    public function deleteHome(Feature $feature)
    {
        throw_unless($feature->block == Feature::HOME, NotFoundHttpException::class);
        $feature->delete();
        return redirect()->route('admin.feature.home.index')->with(['success' => 'Success']);
    }

}
