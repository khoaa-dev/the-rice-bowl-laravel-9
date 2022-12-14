<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Session;
use App\Models\Package;
use App\Models\Menu;
use App\Models\PackageCriteria;
use App\Models\Criteria;
use App\Models\Food;
use App\Models\FoodCategory;
use App\Models\MenuFood;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('pages.service', compact('services'));
    }

    public function show($id, Request $request) 
    {
        $foods = Food::all();
        $categories = FoodCategory::all();
        $foodIds = $request->session()->get('foodIds', []);

        foreach ($foods as $food) {
            if (array_search($food->id, $foodIds) !== false) {
                $food->check = 'checked';
            } else {
                $food->check = '';
            }
        }

        $packages = Package::Where('serviceId', $id)->get();

        foreach ($packages as $package) {
            $package->criterias = PackageCriteria::Where('packageId', $package->id)->get();
            foreach ($package->criterias as $pc) {
                $pc->criteria = Criteria::findOrFail($pc->criteriaId);
            }
        }


        $menus = Menu::Where('serviceId', $id)->get();

        foreach ($menus as $menu) {
            $menu->menuFoods = MenuFood::Where('menuId', $menu->id)->get();
            $menu->cost = 0;
            foreach ($menu->menuFoods as $mf) {
                $mf->food = Food::findOrFail($mf->foodId);

                $menu->cost += $mf->food->price;
            }
        }

        $foods = Food::all();

        Session::put('serviceId', $id);
        return view('pages.package')->with('packages', $packages)
            ->with('menus', $menus)
            ->with('foods', $foods)
            ->with('categories', $categories);
    }
}
