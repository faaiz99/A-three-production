<div class="row mb-4">

    <div class="col-lg-8 mx-auto text-center">
        <h3 class="display-6 mt-5">Pick a date</h3>
        @if (Session::has('no'))
        <div class="alert alert-success">{{ Session::get('no') }}
        </div>
        @endif
        @if (Session::has('yes'))
        <div class="alert alert-success">{{ Session::get('yes') }}
        </div>
        @endif


        <h3 id="displayDate" style="color:green">{{ $dateSelected }}</h3>
        <form wire:submit.prevent= "submit" id="" action="" name="datePicker" id="datePicker">
            <label for="date"></label>
            <input wire:model = "dateSelected" name= "dateSelected" type="date" id="selectedDate" required value={{ $dateSelected }} >
            <button type="submit" class="btn btn-dark">Check Availability</button>
        </form>
    </div>
</div> <!-- End -->
