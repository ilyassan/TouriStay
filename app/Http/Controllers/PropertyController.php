<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function create()
    {
        $types = Type::all();
        $cities = City::all();

        return view('properties.create', compact("types", "cities"));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required|string|max:255",
            "type_id" => "required|exists:types,id",
            "bedrooms" => "required|numeric",
            "bathrooms" => "required|numeric",
            "city_id" => "required|exists:cities,id",
            "address" => "required|string|max:255",
            "description" => "required|string",
            "image" => "required|image|mimes:jpeg,png,jpg,gif|max:2048",
            "price" => "required|numeric",
            "available_from" => "required|date",
            "available_to" => "required|date|after_or_equal:available_from",
        ]);

        // Store the image
        $data["image"] = $request->file('image')->store('images', 'public');
        $data["user_id"] = Auth::id();
        
        // Create the experience
        Property::create($data);
        
        return back()->with("success", "Your property has been published successfully.");
    }
}
