<div class="form-group overflow-hidden">
    <label>Select Slot</label>
    <select class="form-control select2-show-search" name="slot" id="slot" data-placeholder="Select Slot">
        <option label="Select Slot"></option>
        @isset($slots)
            @foreach ($slots as $slot)
                <option value="{{ $slot['id'] }}"
                    @isset($appointment)
                        @if ($appointment->appointment_stot_id == $slot['id'])
                            selected
                        @endif
                    @endisset>
                    {{ $slot['name'] }} </option>
            @endforeach
        @endisset
    </select>
</div>
