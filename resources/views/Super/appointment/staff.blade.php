<div class="form-group overflow-hidden">
    <label>Select Staff</label>
    <select class="form-control select2-show-search" name="staff_id" id="staff_id" data-placeholder="Select Staff" required>
        <option label="Select Staff"></option>
        @isset($staffs)
            @foreach ($staffs as $staff)
                <option value="{{ $staff['staff_id'] }}"
                @isset($appointment)
                    @if ($appointment->staff_id == $staff['staff_id'] )
                            selected
                    @endif
                @endisset
                > {{ $staff['staff_name'] }}</option>
            @endforeach
        @endisset

    </select>
</div>
