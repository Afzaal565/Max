<x-admin-layout>
    <x-slot name="header">
        Add New Employee
    </x-slot>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Employee Form</h3>
            </div>
            <div class="card-body">
                {{ $errors }}
                <form class="row g-3" action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="e-company" class="form-label">Select Employee Company</label>
                        <select class="form-select" aria-label="Default select example" name="company_id" id="e-company">
                            <option selected>Choose One</option>
                            @foreach ($companies as $key=>$value)
                                <option value="{{$key}}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <x-form.text-input type="text" label="Employee First Name" inputName="first_name"
                            inputId="Employee-name" value="" :error="$errors->get('name')" placeholder="Enter Name" />
                    </div>
                    <div class="col-md-6">
                        <x-form.text-input type="text" label="Employee Last Name" inputName="last_name"
                            inputId="Employee-name" value="" :error="$errors->get('name')" placeholder="Enter Name" />
                    </div>
                    <div class="col-md-6">
                        <x-form.text-input type="text" label="Employee Email" inputName="email"
                            inputId="Employee-email" value="" :error="$errors->get('email')"
                            placeholder="Enter email address" />
                    </div>

                    <div class="col-md-6">
                        <x-form.text-input type="tel" label="Employee Phone" inputName="phone"
                            inputId="Employee-email" value="" :error="$errors->get('email')"
                            placeholder="Enter email address" />
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary float-end" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>