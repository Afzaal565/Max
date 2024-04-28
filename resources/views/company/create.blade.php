<x-admin-layout>
    <x-slot name="header">
        Add New Company
    </x-slot>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Company Form</h3>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="col-md-6">
                        <x-form.text-input type="text"  label="Company Name" inputName="name" inputId="company-name" value="" :error="$errors->get('name')" placeholder="Enter Name" />
                    </div>
                    <div class="col-md-6">
                        <x-form.text-input type="text"  label="Company Email" inputName="email" inputId="company-email" value="" :error="$errors->get('email')"  placeholder="Enter email address" />
                    </div>

                    <div class="col-md-12">
                        <label for="description" class="form-label">Company Description</label>
                        <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                    </div>

                    <div class="col-md-6">
                        <label for="formFile" class="form-label">Company Logo</label>
                        <input @class(['form-control', 'is-invalid' => count($errors->get('logo')) > 0 ]) name="logo" type="file" id="formFile">
                        @if (count($errors->get('logo')) > 0)
                            <div class="invalid-feedback">
                                {{ json_encode($errors->get('logo')) }}
                            </div>
                        @endif
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary float-end" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
