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
use Carbon\Carbon;
use App\Models\PackageBooking;
use App\Models\Category;
use App\Models\Catering;
use App\Models\MUA;
use App\Models\Decoration;
use App\Models\Entertainment;
use App\Models\Photography;
use App\Models\Venue;
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


    public function team(){
        return view('team.team');
    }


    public function index2(){
        $categories = Category::orderByDesc('id')->get();
        $package_tours = PackageTour::orderByDesc('id')->take(3)->get();
        $package_tours_explore = PackageTour::orderByDesc('id')->get();
        return view('front.index2', compact('package_tours', 'categories', 'package_tours_explore'));
    }


    public function wedding_list(){
         $weddings = PackageTour::orderByDesc('id')->paginate(8);
        return view('front.wedding_list', compact('weddings'));
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
        return view('front.booking_test', compact('package_tours'));
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
        $venue = Venue::OrderByDesc('id')->get();
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



        DB::transaction(function() use ($request, $user, $package_tours, &$packageBookingId){
           $validated = $request->validated();

           $startDate = session('selected_Date');
           $totalDays = 1;

           $endDate = session('selected_Date');

           $sub_total = $package_tours->price  * 1;


            $validated['end_date'] = $endDate;
            $validated['user_id'] = $user->id;
            $validated['package_tour_id'] = $package_tours->id;
            $validated['sub_total'] = $sub_total;
            $validated['total_amount'] = $sub_total;
            $validated['status'] = 'pending';
            $validated['start_date'] = $startDate;
            $validated['total_days'] = $totalDays;
            $validated["quantity"] = 1;


            $packageBooking = PackageBooking::create($validated);
            $packageBookingId = $packageBooking->id;
        });

        if ($packageBookingId) {
            return redirect()->route('front.reservation.check');
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
