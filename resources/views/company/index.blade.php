<x-admin-layout>
    <x-slot name="header">
        <h3>Company list page</h3>
    </x-slot>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Companies List</h3>
                    <a href="{{ route('companies.create') }}" class="btn btn-primary">Add new company</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company Logo</th>
                        <th scope="col">Campany Name</th>
                        <th scope="col">Company Email</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $key => $company)
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>
                                    {{-- {{ $company->logo }} --}}
                                    <img src="{{ asset('storage/'. $company->logo) }}" width="50" alt="" >
                                </td>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->email }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('companies.edit', $company->id ) }}" class="btn btn-primary me-2">Edit</a>
                                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{ $companies->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>