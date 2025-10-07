<a href="{{route('front.details', $slug)}}">
              <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
                <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                  <img src="{{Storage::url($thumbnail)}}" class="w-full h-full object-cover" alt="thumbnails">
                </div>
                <div class="flex justify-between gap-2">
                  <div class="flex flex-col gap-1">
                    <p class="font-semibold two-lines">
                        {{$name}}
                    </p>
                    <div class="flex items-center gap-1">
                      <div class="w-4 h-4 flex shrink-0">
                        <img src="assets/icons/location-map.svg" alt="icon">
                      </div>
                      <span class="text-sm text-darkGrey tracking-035">
                        {{$location}}
                    </span>
                    </div>
                  </div>
                  <div class="flex flex-col gap-1 text-right">
                    <p class="text-sm leading-[21px]">
                      <span class="font-semibold text-[#4D73FF] text-nowrap">Rp {{number_format($price, 0, ',', '.')}}</span><br>
                      <span class="text-darkGrey">/{{$days}}</span>
                    </p>
                    <div class="flex items-center gap-1 justify-end">
                      <div class="w-4 h-4 flex shrink-0">
                        
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
</a>