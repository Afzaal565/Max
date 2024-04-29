<x-admin-layout>
    <x-slot name="header">
        <h3>Employees list page</h3>
    </x-slot>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Employees List</h3>
                    <a href="{{ route('employees.create') }}" class="btn btn-primary">Add new employee</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Employee Email</th>
                        <th scope="col">Employee Phone</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $key => $employee)
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $employee->first_name }}</td>
                                <td>{{ $employee->last_name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('employees.edit', $employee->id ) }}" class="btn btn-primary me-2">Edit</a>
                                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
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
                  {{ $employees->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>