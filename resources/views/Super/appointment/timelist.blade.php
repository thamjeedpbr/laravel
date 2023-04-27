<div class="form-group overflow-hidden">
    <label>Select Time</label>
    <select class="form-control select2-show-search" name="timelist_id" id="timelist_id" data-placeholder="Select Time" required>
        <option label="Select Time"></option>
        @isset($timelists)
            @foreach ($timelists as $timelist)
                <option value="{{ $timelist['start_at'] }}" start_at="{{ $timelist['start_at'] }}" end_at="{{ $timelist['end_at'] }}"
                @isset($appointment)
                @if ($appointment->start_at == $timelist['start_at'] )
                selected
            @endif
                @endisset
                > {{date("g:i a", strtotime($timelist['start_at']))." - ".date("g:i a", strtotime($timelist['end_at']))  }} </option>
            @endforeach
        @endisset

    </select>
</div>
