<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
       $sliders= Slider::paginate(5);
       return view ('sliders.index',compact('sliders'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {

        return view('sliders.create');

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $sliderRequest)
    {
        $data=$sliderRequest->validated();
        $data['users_id']=auth()->id();
        /* dd($data); */
        $post=Slider::create($data);
        if($sliderRequest->hasFile('image')){
            $post->clearMediaCollection('post-image');
            $post->addMediaFromRequest('image')
                ->toMediaCollection('post-image');
        }
        toastr()->timeOut(10000)->closeButton()->addSuccess('Article ajouter avec succès');
        return redirect()->route('sliders.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider): View
    {
        /* dd($slider->getFirstMediaUrl('post-image')); */
        return view('sliders.show', compact('slider'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider): View
    {
        return view('sliders.edit', compact('slider'));
        /* dd($slider->getFirstMediaUrl('post-image')); */
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderRequest $sliderRequest, Slider $slider)
    {
       /* dd($sliderRequest->all()); */
        $data = $sliderRequest->validated();
    $data['users_id']=auth()->id();

    $slider->update($data);
    if ($sliderRequest->hasFile('image')) {
        $slider->clearMediaCollection('post-image');
        $slider->addMediaFromRequest('image')
            ->toMediaCollection('post-image');
    }
    toastr()->timeOut(10000)->closeButton()->addSuccess('Article modifier avec succès');
    return redirect()->route('sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Article supprimer avec succès');
        return redirect()->route('sliders.index');
        //
    }
}
