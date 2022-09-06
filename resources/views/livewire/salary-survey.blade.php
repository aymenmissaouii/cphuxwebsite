<div>
    <div class="text-right mt-10 mr-5 mb-7">
       <p class="font-semibold mb-3">Filter by years of experience</p> 
        <select class="bg-gray-300 px-4 py-2 rounded font-semibold" wire:model="byYearOfexperience">
            <option value="">Select</option>
            @foreach ($yearsOfExperience as $year)
                <option value="{{$year->years_of_experience}}">{{$year->years_of_experience}} Years</option>
            @endforeach
        </select>
    </div>
    <div class="overflow-auto rounded-lg">
        <table class="w-full">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">No.</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Timestamp</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Permission</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Gender</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Postal Code</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Education</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Education institution</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Year of Experience</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Employment Commitment</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Employment Type</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Job Category</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Month Salary</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Job Title</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < $length; $i++)
                    <tr @if (($i+1)%2 ==0)
                    class="bg-gray-50"
                    @else
                    class="bg-white"  
                    @endif >
                        @foreach ($salarys[$i] as $salary)
                         <td class="p-3 text-sm text-gray-700">{{$salary}}</td> 
                        @endforeach
                    </tr>
                @endfor
            </tbody>
        </table>
        @if ($length)
            {{-- {{$salarys->links()}} --}}
        @endif
    </div>

</div>
