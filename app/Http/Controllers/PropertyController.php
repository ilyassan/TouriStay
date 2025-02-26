<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    
    public function index(Request $request)
    {
        $keyword = $request->has("keyword") ? "%" . $request->get("keyword") . "%" : "";
        $itemsToShow = $request->get("items") ?? 3;
        
        $properties = Property::with("city")
                                ->where("title", "LIKE", $keyword)
                                ->orWhere("description", "LIKE", $keyword)
                                ->orWhere("price", "LIKE", $keyword)
                                ->orWhere("bathrooms", "LIKE", $keyword)
                                ->orWhere("bedrooms", "LIKE", $keyword)
                                ->paginate($itemsToShow)
                                ->appends(request()->query());
        
        return view("properties.index", compact('properties'));
    }
}
