<?php

namespace App\Http\Controllers;

use App\Models\PackageTour;
use Illuminate\Http\Request;
use App\Models\PackagePhoto;
use App\Http\Controllers\PackageBookingController;
use App\Http\Requests\StorePackageBookingRequest;
use App\Http\Requests\StorePackageBookingCheckoutRequest;
use App\Http\Requests\UpdatePackageBookingRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\PackageBank;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\PackageBooking;
use App\Models\Category;


class FrontController extends Controller
{
    //
    public function index(){
        $categories = Category::orderByDesc('id')->get();
        $package_tours = PackageTour::orderByDesc('id')->take(3)->get();
        $package_tours_explore = PackageTour::orderByDesc('id')->get();
        return view('front.index', compact('package_tours', 'categories', 'package_tours_explore'));
    }

    public function category(Category $category){
        return view('front.category', compact('category'));
    }

    public function details(PackageTour $package_tours){
        $latestPhotos = PackagePhoto::orderByDesc('id')->where("package_tour_id", $package_tours["id"])->take(3)->get();
        return view('front.details', compact('package_tours', 'latestPhotos'));
    }

    public function book(PackageTour $package_tours){
        return view('front.book', compact('package_tours'));
    }

    public function book_store_test(Request $request){
        return view('front.book');
    }

    public function booking_request(Request $request){
        return view('front.booking_request');
    }

    public function calendarbooking(PackageTour $package_tours){
        return view('front.calendarbooking');
    }

    public function book_store(StorePackageBookingRequest $request, PackageTour $package_tours){
        $user = Auth::user();
        $bank = PackageBank::orderByDesc('id')->first();
        $packageBookingId = null;
        

        DB::transaction(function() use ($request, $user, $package_tours, $bank, &$packageBookingId){
           $validated =  $request->validated();

           $startDate = new Carbon($validated['start_date']);
           $totalDays = $package_tours->days - 1;

           $endDate = $startDate->addDays($totalDays);

           $sub_total = $package_tours->price  * $validated['quantity'];
           $insurance = 3000000 * $validated['quantity'];
           $tax = $sub_total * 0.10;

            $validated['end_date'] = $endDate;
            $validated['user_id'] = $user->id;
            $validated['is_paid'] = false;
            $validated['proof'] = 'dummytrx.png';
            $validated['package_tour_id'] = $package_tours->id;
            $validated['package_bank_id'] = $bank->id;
            $validated['insurance'] = $insurance;
            $validated['tax'] = $tax;
            $validated['sub_total'] = $sub_total;
            $validated['total_amount'] = $sub_total + $tax + $insurance;
           
            $packageBooking = PackageBooking::create($validated);
            $packageBookingId = $packageBooking->id;
        });

        if ($packageBookingId) {
            return redirect()->route('front.choose_bank', $packageBookingId);
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
