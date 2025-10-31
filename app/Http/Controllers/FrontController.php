<?php

namespace App\Http\Controllers;

use App\Models\PackageTour;
use Illuminate\Http\Request;
use App\Models\PackagePhoto;
use App\Http\Requests\StorePackageBookingRequest;
use App\Http\Requests\StorePackageBookingCheckoutRequest;
use App\Http\Requests\UpdatePackageBookingRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\PackageBank;
use Illuminate\Support\Facades\DB;
use App\Models\PackageBooking;
use App\Models\Category;
use App\Models\Catering;
use App\Models\MUA;
use App\Models\Decoration;
use App\Models\Entertainment;
use App\Models\Photography;
use App\Models\MC;


class FrontController extends Controller
{
    //
    public function index(){
        $categories = Category::orderByDesc('id')->get();
        $package_tours = PackageTour::orderByDesc('id')->take(3)->get();
        $package_tours_explore = PackageTour::orderByDesc('id')->get();
        return view('front.index', compact('package_tours', 'categories', 'package_tours_explore'));
    }


    public function about(){
        return view('front.about');
    }

    public function services(){
        return view('front.services');
    }

    public function login(){
        return view('front.login');
    }

    public function team(){
        return view('team.team');
    }

    public function success(PackageBooking $packageBooking){
        return view('front.success', compact('packageBooking'));
    }

    public function history(){
        return view('front.history');
    }


    public function index2(){
        $categories = Category::orderByDesc('id')->get();
        $package_tours = PackageTour::orderByDesc('id')->take(3)->get();
        $package_tours_explore = PackageTour::orderByDesc('id')->get();
        return view('front.index2', compact('package_tours', 'categories', 'package_tours_explore'));
    }


    public function wedding_list(Request $request){
        $query = PackageTour::query();

         // Filter berdasarkan nama kategori

        if ($request->has('category') && $request->category != '' && $request->category != 'all') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category); // filter berdasarkan slug
            });
         }

        if ($request->has('location') && $request->location != '') {
            // ubah slug jadi format nama di DB (contoh: "jakarta-barat" -> "Jakarta Barat")
            $locationName = ucwords(str_replace('-', ' ', $request->location));
            $query->where('location', $locationName);
        }

        // === Filter price (range) ===
        if ($request->has('price') && $request->price != '') {
            [$min, $max] = explode('-', $request->price);
            $query->whereBetween('price', [(int) $min, (int) $max]);
        }

        // Filter lain (status, search, dsb.)
        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'LIKE', '%' . $request->search . '%');
        }

        $weddings = $query->with('category')->orderByDesc('id')->paginate(8);
        $categories = Category::orderByDesc('id')->get();
        
        return view('front.wedding_list', compact('weddings', 'categories'));
    }

 

    public function category(Category $category){
        return view('front.category', compact('category'));
    }

    public function details(PackageTour $package_tours){
        $latestPhotos = PackagePhoto::orderByDesc('id')->where("package_tour_id", $package_tours["id"])->take(3)->get();
        $weddings = PackageTour::orderByDesc('id')->take(4)->get();
        return view('front.details_wedding', compact('package_tours', 'latestPhotos', 'weddings'));
    }

    public function book_test(PackageTour $package_tours){
        $catering = Catering::OrderByDesc('id')->get();
        $MUA = MUA::OrderByDesc('id')->get();
        $decoration = Decoration::OrderByDesc('id')->get();
        $entertainment = Entertainment::OrderByDesc('id')->get();
        $photography = Photography::OrderByDesc('id')->get();
        $MC = MC::OrderByDesc('id')->get();
        return view('front.booking_test', compact('package_tours', 'catering', 'MUA', 'decoration', 'entertainment', 'photography', 'MC'));
    }

    public function book(PackageTour $package_tours){
        return view('front.book', compact('package_tours'));
    }

    public function book_store_test(Request $request){
        return view('front.book');
    }

    public function checkReservation(){
        return view('front.reservation');
    }

    public function booking_request(PackageTour $package_tours){
        $catering = Catering::OrderByDesc('id')->get();
        $MUA = MUA::OrderByDesc('id')->get();
        $decoration = Decoration::OrderByDesc('id')->get();
        $entertainment = Entertainment::OrderByDesc('id')->get();
        $photography = Photography::OrderByDesc('id')->get();

        $MC = MC::OrderByDesc('id')->get();

        return view('front.booking_request', compact('package_tours', 'catering', 'MUA', 'decoration', 'entertainment', 'photography','venue', 'MC',));
    }



    public function calendarbooking(PackageTour $package_tours){
        $startDate = PackageBooking::where('status', 'success')
        ->pluck('start_date');
        return view('front.calendarbooking', compact('package_tours', "startDate"));
    }

    public function calendarbooking_request(Request $request, PackageTour $package_tours){

        $validated=$request->validate([
            'selected_Date' => 'required'
        ]);


            // Check if the validation failed
        if (!$validated) {
            return response()->json(['error' => 'Invalid date format or missing date.'], 422);
        }

        $request -> session()->put('selected_Date', $validated['selected_Date']);
        return redirect()->route('front.booking_request', $package_tours->slug);
    }

    public function book_store(StorePackageBookingRequest $request, PackageTour $package_tours){

    
        $user = Auth::user();
        $packageBookingId = null;

        DB::transaction(function () use ($request, $user, $package_tours, &$packageBookingId) {
        $validated = $request->validated();

        // Hitung total langsung dari harga paket
        $totalAmount = $package_tours->price;

        // Assign data tambahan ke validated
        $validated['user_id'] = $user->id;
        $validated['package_tour_id'] = $package_tours->id;
        $validated['total_amount'] = $totalAmount;
        $validated['status'] = 'pending';

        // Simpan ke database
        $packageBooking = PackageBooking::create($validated);
        $packageBookingId = $packageBooking->id;
    });

    if ($packageBookingId) {
        return redirect()->route('front.reservation.check', $packageBookingId);
    } else {
        return back()->withErrors('failed to create booking.');
    }
    }

    public function choose_bank(PackageBooking $packageBooking){
        $user = Auth::user();
        if($packageBooking->user_id != $user->id){
            abort(403);
        }



        $banks = PackageBank::all();
        $pacakgaeTour = PackageTour::where('id', $packageBooking->package_tour_id)->first();
        return view('front.choose_bank', compact('packageBooking', 'banks', 'pacakgaeTour'));
    }

    public function choose_bank_store(UpdatePackageBookingRequest $request, PackageBooking $packageBooking){

        $user = Auth::user();
        if($packageBooking->user_id != $user->id){
            abort(403);
        }
        DB::transaction(function() use($request, $packageBooking){
            $validated = $request->validated();
            $packageBooking->update([
                'package_bank_id' => $validated['package_bank_id'],
            ]);
        });
        return redirect()->route('front.book_payment', $packageBooking->id);
    }

    public function book_payment(PackageBooking $packageBooking){
        $packageTour = PackageTour::where('id', $packageBooking->package_tour_id);
        return view('front.book_payment', compact('packageBooking', 'packageTour'));
    }

    public function book_payment_store(StorePackageBookingCheckoutRequest $request, PackageBooking $packageBooking){
        $user = Auth::user();
        if($packageBooking->user_id != $user->id){
            abort(403);
        }

        DB::transaction(function() use($request, $user, $packageBooking){
            $validated = $request->validated();
            if($request->hasFile('proof')){
                $proofPath = $request->file('proof')->store('proofs', 'public');
                $validated['proof'] = $proofPath;
            }
            $packageBooking->update($validated);
    });

    return redirect()->route('front.book_finish');

}

    public function book_finish(){
        return view('front.book_finish');
    }

}
