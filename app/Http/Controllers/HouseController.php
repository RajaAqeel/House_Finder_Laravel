<?php

namespace App\Http\Controllers;

use App\house;
use App\city;
use App\sub_area;
use App\house_owner;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\h_picture;
class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $ho = house_owner::where('user_id',Auth::user()->id)->first();
        $id =$ho->id;
        $city = city::where('id', $ho->city_id)->first();
        $sub_area = sub_area::where('id', $ho->sub_area_id)->first();
        $allHouses = house::where('house_owner_id', $id)->paginate(10);
        return view('my-properties')->with('allHouses', $allHouses)->with('city', $city)->with('sub_area', $sub_area)->with('ho', $ho);
    }

    public function favouriteProperties()
    {
        $ho = house_owner::where('user_id',Auth::user()->id)->first();
        $id =$ho->id;
        $city = city::where('id', $ho->city_id)->first();
        $sub_area = sub_area::where('id', $ho->sub_area_id)->first();
        $allHouses = house::where('house_owner_id', $id)->where('favourite', 'yes')->paginate(10);
        return view('favourite-properties')->with('allHouses', $allHouses)->with('city', $city)->with('sub_area', $sub_area)->with('ho', $ho);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-house-01');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required'],
            'type' => ['required'],
            'price' => 'required | regex:/^[0-9]+$/ | numeric',
            'negotiable' => ['required'],
            'bedroom' => ['required', 'regex:/^[0-9]+$/', 'numeric'],
            'bathroom' => ['required', 'regex:/^[0-9]+$/', 'numeric'],
            'unit' => ['required'],
            'area' => ['required', 'regex:/^[0-9]+$/', 'numeric'],
            'description' => ['required'],
            'city' => ['required'],
            'address' => ['required'],
            'sub_area' => ['required'],
            'img_url' => ['required'],
        ]);
        $houses = new house;
        $ho = house_owner::where('user_id',Auth::user()->id)->first();
        $houses->title = $request->input('title');
        $houses->type = $request->input('type');
        $houses->price = $request->input('price');
        $houses->bedrooms = $request->input('bedroom');
        $houses->bathrooms = $request->input('bathroom');
        $houses->area_unit = $request->input('unit');
        $houses->area_value = $request->input('area');
        $houses->description = $request->input('description');
        $houses->house_owner_id = $ho->id;
        $houses->city_id = $request->input('city');
        $houses->sub_area_id = $request->input('sub_area');
        $houses->address = $request->input('address');
        $houses->favourite = 'no';
        $houses->verified = 'no';
        $houses->status = 'Avl';
        $houses->negotiable = $request->input('negotiable');
        

        if ($request->hasFile('img_url')) {
            //Get Filename with Ext
            $fileNameWithExt = $request->file('img_url')->getClientOriginalName();
            //Get just Filename
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME );
            //Get just extension
            $extension = $request->file('img_url')->getClientOriginalExtension();
            //File to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('img_url')->storeAs('public/houses',$fileNameToStore);
            $houses->photo = $fileNameToStore;
       
        } else {
            $fileNameToStore = 'no_image';
        }
        //Check multiple file
        // if($request->hasfile('img_url'))
        // {
        //    foreach($request->file('img_url') as $file)
        //    {
        //     $fileNameWithExt = $file->getClientOriginalName();
        //     //Get just Filename
        //     $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME );
        //     //Get just extension
        //     $extension = $file->getClientOriginalExtension();
        //     //File to store
        //     $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        //     //Upload Image
        //     $path = $file->storeAs('public/uploads/houses',$fileNameToStore);
            
        //     $name = time().'.'.$file->extension();
            
        //     $np->pictures = $fileNameToStore;
        //     $np->house_id = $houses->id;
        //     $np->save();
        //    }
        // }
        $houses->save();
        return redirect('/my-properties');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\house  $house
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $allHouses = house::where('id', '!=', $id)->orderBy('created_at')->get();
        $house = house::find($id);
        $houseOwner = house_owner::where('id', $house->house_onwer_id)->first();
        $city_name = city::where('id', $house->city_id)->first();
        $sub_area_name = sub_area::where('id', $house->sub_area_id)->first();
        return view('properties-single2')->with('house', $house)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name)->with('allHouses', $allHouses)->with('houseOwner', $houseOwner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\house  $house
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $house = house::find($id);
        $cities = city::all();
        $city_name = city::where('id', $house->city_id)->first();
        $sub_area_name = sub_area::where('id', $house->sub_area_id)->first();
        return view('edit-property-information')->with('house', $house)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name)->with('cities', $cities);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\house  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => ['required'],
            'price' => 'required | regex:/^[0-9]+$/ | numeric',
            'negotiable' => ['required'],
            'bedroom' => ['required', 'regex:/^[0-9]+$/', 'numeric'],
            'bathroom' => ['required', 'regex:/^[0-9]+$/', 'numeric'],
            'unit' => ['required'],
            'area' => ['required', 'regex:/^[0-9]+$/', 'numeric'],
            'description' => ['required'],
            'img_url' => ['required'],
        ]);
        $houses = house::where('id', $id)->first();
        $ho = house_owner::where('user_id',Auth::user()->id)->first();
        $houses->title = $request->input('title');
        $houses->type = $request->input('type');
        $houses->price = $request->input('price');
        $houses->bedrooms = $request->input('bedroom');
        $houses->bathrooms = $request->input('bathroom');
        $houses->area_unit = $request->input('unit');
        $houses->area_value = $request->input('area');
        $houses->description = $request->input('description');
        $houses->house_owner_id = $ho->id;
        $houses->city_id = $request->input('city_id');
        $houses->sub_area_id = $request->input('sub_area');
        $houses->address = $request->input('hello');
        $houses->favourite = 'no';
        $houses->verified = 'no';
        $houses->status = 'Avl';
        $houses->negotiable = $request->input('negotiable');
        if ($request->hasFile('img_url')) {
            //Get Filename with Ext
            $fileNameWithExt = $request->file('img_url')->getClientOriginalName();
            //Get just Filename
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME );
            //Get just extension
            $extension = $request->file('img_url')->getClientOriginalExtension();
            //File to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('img_url')->storeAs('public/houses',$fileNameToStore);
            $houses->photo = $fileNameToStore;
       
        } else {
            $fileNameToStore = 'no_image';
        }
        $houses->update();
        return redirect('/my-properties')->with('success', 'House Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\house  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(house $house)
    {
        //
    }
    public function delete($id)
    {
        DB::table('houses')->where('id', $id)->delete();
        return redirect('/my-properties'); 
    }
    public function allHouses()
    {
        $houses = house::all();
        return view('all-registered-houses')->with('houses', $houses);
    }
    public function deleteHouse($id)
    {
        DB::table('houses')->where('id', $id)->delete();
        return redirect('/all-registered-houses'); 
    }
    public function favourite($id)
    {
        $house = house::where('id', $id)->first();
        $house->favourite = 'yes';
        $house->update();
        return redirect('/my-properties');
    }
    public function show1($id)
    {
        $house = house::find($id);
        $houseOwner = house_owner::where('id', $house->house_onwer_id);
        $city_name = city::where('id', $house->city_id)->first();
        $sub_area_name = sub_area::where('id', $house->sub_area_id)->first();
        return view('properties1-single2')->with('house', $house)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name);
    }
    public function statusForm($id)
    {
        $house = house::find($id);
        $cities = city::all();
        $city_name = city::where('id', $house->city_id)->first();
        $sub_area_name = sub_area::where('id', $house->sub_area_id)->first();
        return view('change-property-status')->with('house', $house)->with('city_name', $city_name)->with('sub_area_name', $sub_area_name)->with('cities', $cities);
    }
    public function changeStatus(Request $request, $id)
    {
        $this->validate($request, [
            'status' => ['required'],
        ]);
        $houses = house::where('id', $id)->first();
        $ho = house_owner::where('user_id',Auth::user()->id)->first();
        $houses->status = $request->input('status');
        $houses->update();
        return redirect('/my-properties')->with('success', 'Status Changed');
    }
}
