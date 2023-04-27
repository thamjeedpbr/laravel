<div class="form-group overflow-hidden">
    <label>Appointment Type</label>
    <select class="form-control select2-show-search" name="appointment_type_id" id="appointmentType"
        data-placeholder="Select Appointment Type">
        <option label="Select Appointment Type"></option>
        @isset($appointmentTypes)
            @foreach ($appointmentTypes as $appointmentType)
                <option value="{{ $appointmentType->id }}"
                    @isset($appointment)
                    @if ($appointment->appointment_type_id == $appointmentType->id)
                        selected
                    @endif
                    @endisset>
                    {{ $appointmentType->name }}</option>
            @endforeach
        @endisset
    </select>
</div>
