 @props(['name', 'icon', 'options', 'label'])
 <div>
                             <div class="flex items-center border rounded-md px-3 py-2 w-full sm:w-auto  ">
                                <span class="text-gray-500 mr-2">
                                    <img src="{{ asset($icon) }}" alt="{{$name}}" class="size-8">
                                </span>
                                <div class="w-full">
                                    <label class="block text-sm font-medium ml-1">{{$label}}</label>
                                    <select name="{{$name}}" class="w-full outline-none bg-transparent text-sm text-gray-700">
                                         @foreach($options as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
</div>