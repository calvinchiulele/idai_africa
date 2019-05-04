<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use App\Models\User;
use App\Models\Province;
use App\Models\District;
use App\Models\Volunteer;
use App\Models\VolunteersAsset;
use App\Models\VolunteersCategory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get_current_user_or_redirect(Request $request) {
        if (!$request->session()->has('user_phone')) {
            return redirect()->route('login');
        }
        $user_phone = session('user_phone');
        $user = User::where('phonenumber', $user_phone)->first();
        if (is_null($user)) {
            return redirect()->route('login');
        } else {
            return $user;
        }
    }

    public function showFirstStep(Request $request)
    {
        $provinces = Province::all();
        $districts = District::all();
        $user = $this->get_current_user_or_redirect($request);
        if (!isset($user->volunteer)) {
            return redirect()->route('login');
        }

        return view('volunteers.register-step-one')->with('provinces', $provinces)
            ->with('districts', $districts)
            ->with('user', $user);
    }

    public function showSecondStep(Request $request)
    {
        $user = $this->get_current_user_or_redirect($request);
        if (!isset($user->volunteer)) {
            return redirect()->route('login');
        }

        $categories = Category::all();
        $assets = Asset::all();

        $volunteer = $user->volunteer;

        $selected_categories = $volunteer->categories->pluck('id')->toArray();
        $selected_assets = $volunteer->assets->pluck('id')->toArray();

        return view('volunteers.register-step-two')
            ->with('volunteerid', $volunteer->id)
            ->with('categories', $categories)
            ->with('assets', $assets)
            ->with('volunteer_categories', $selected_categories)
            ->with('volunteer_assets', $selected_assets);
    }

    public function saveFirstStep(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phonenumber' => 'required'
        ]);

        $phone = $request->input('phonenumber');

        $user = User::where('phonenumber', $phone)->first();

        if ($user === null) {
            // Register a new user
            $user = new User();
        }

        if(!is_null($user))
        {
            // Save to the user table
            $user->name = $request->input('name');
            $user->phonenumber = $phone;
            $user->save();

            // Save to the volunteers table
            $volunteer = $user->volunteer;
            if (is_null($volunteer)) {
                // New record on the volunteers table
                $volunteer = new Volunteer();
            }
            $volunteer->districts_id = $request->input('district');
            $volunteer->users_id = $user->id;
            $volunteer->status = 1;
            $volunteer->save();
        }

        return redirect()->route('registration-step2');
    }

    public function saveSecondStep(Request $request)
    {
        $this->validate($request, [
            'volunteer_id' => 'required'
        ]);

        $selected_categories = $request->input('selected_categories');
        $selected_assets = $request->input('selected_assets');
        $volunteer_id = $request->input('volunteer_id');

        $assets = Asset::all();
        $categories = Category::all();

        if (is_array($selected_categories)) {
            if (count($selected_categories) > 0) {
                foreach ($categories as $category) {
                    if(in_array($category->id, $selected_categories)) {
                        // User has selected this category
                        // We should save it to the database if it's not there already
                        $new_category = VolunteersCategory::where('category_id', $category->id)
                            ->where('volunteers_id', $volunteer_id)->first();
                        if ($new_category === null) {
                            $new_category = new VolunteersCategory();
                            $new_category->category_id = $category->id;
                            $new_category->volunteers_id = $volunteer_id;
                            $new_category->save();
                        }
                    } else {
                        // User has not selected this category
                        // We should check if it is on the database
                        $category = VolunteersCategory::where('category_id', $category->id)
                            ->where('volunteers_id', $volunteer_id)->first();
                        if ($category != null) {
                            // It exists, let's delete it
                            // TODO: Use soft delete instead.
                            // Hard delete have been used here because
                            // Categories soft deleted were still being shown.
                            $category->forceDelete();
                        }
                    }
                }
            }
        } else {
            foreach ($categories as $category) {
                // No categories where selected
                // Let's delete them all
                $categoryToDelete = VolunteersCategory::where('category_id', $category->id)
                    ->where('volunteers_id', $volunteer_id)
                    ->first();
                if ($categoryToDelete != null) {
                    // It exists, let's delete it
                    // TODO: Use soft delete instead.
                    // Hard delete have been used here because
                    // Categories soft deleted were still being shown.
                    $categoryToDelete->forceDelete();
                }
            }
        }


        if (is_array($selected_assets)) {
            if (count($selected_assets) > 0) {
                foreach ($assets as $asset) {
                    if(in_array($asset->id, $selected_assets)) {
                        // User has selected this asset
                        // We should save it to the database if it's not there already
                        $new_asset = VolunteersAsset::where('assets_id', $asset->id)
                            ->where('volunteers_id', $volunteer_id)->first();
                        if ($new_asset === null) {
                            $new_asset = new VolunteersAsset();
                            $new_asset->assets_id = $asset->id;
                            $new_asset->volunteers_id = $volunteer_id;
                            $new_asset->save();
                        }
                    } else {
                        // User has not selected this asset
                        // We should check if it is on the database
                        $asset = VolunteersAsset::where('assets_id', $asset->id)
                            ->where('volunteers_id', $volunteer_id)->first();
                        if ($asset != null) {
                            // It exists, let's delete it
                            // TODO: Use soft delete instead.
                            // Hard delete have been used here because
                            // Assets soft deleted were still being shown.
                            $asset->forceDelete();
                        }
                    }
                }
            }
        } else {
            foreach ($assets as $asset) {
                // No categories where selected
                // Let's delete them all
                $assetToDelete = VolunteersAsset::where('assets_id', $asset->id)
                    ->where('volunteers_id', $volunteer_id)
                    ->first();
                if ($assetToDelete != null) {
                    // It exists, let's delete it
                    // TODO: Use soft delete instead.
                    // Hard delete have been used here because
                    // Assets soft deleted were still being shown.
                    $assetToDelete->forceDelete();
                }
            }
        }
        return redirect()->guest(route('profile'));
    }

    public function profile(Request $request) {
        $user = $this->get_current_user_or_redirect($request);
        if (!isset($user->volunteer)) {
            return redirect()->route('login');
        }
        $volunteer = $user->volunteer;
        if (!is_null($volunteer)) {
            return view('volunteers.profile')
                ->with('volunteer', $volunteer);
        }
        return view('volunteers.profile')
            ->with('volunteer', $volunteer);
    }

    public function save_session(Request $request) {
        $phone = $request->input('_user_phone');
        session(['user_phone' => $phone]);
        $user = $this->get_current_user_or_redirect($request);
        if (isset($user->organization)) {
            return redirect()->route('volunteers.list');
        } else {
            if (isset($user->name)) {
                return redirect()->route('profile');
            } else {
                return redirect()->route('registration-step1');
            }
        }
    }
}
