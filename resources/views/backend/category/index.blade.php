@extends('backend.master.master')

@section('backend-contents')
<div class="container" style="margin-left:100px; margin-top:80px;">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header bg-light d-flex justify-content-between">
                    <h4 class="card-title">Category List</h4>
                    <a href="{{ route('create.category') }}" class="btn btn-info">Add New Category</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success') }}
                        </div>
                        <br>
                    @endif
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            
                            <tr class="bg-color-cyan">

                                <th scope="col">SL</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Display Position</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $key => $item)
<tr>
    <td>{{ $key + 1 }}</td>
    <td>{{ $item->name }}</td>
    <td>
        @if($item->icon)
            <img src="{{ asset('storage/' . $item->icon) }}" alt="Category Icon" style="width: 50px; height: 50px;">
        @else
            <span>No Icon</span>
        @endif
    </td>
    <td>
        <div class="dropdown">
            <form method="post" action="{{ route('post.display.position',['id'=>$item->id]) }}">
                @csrf
                <button class="btn btn-outline-primary dropdown-toggle dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 

                    <?php
                    $position = $item->home_position;
                    
                    if (in_array($position, [1, 2, 3, 4, 5])) {
                        echo "Display Position:" . $position;
                    } elseif ($position == 6) {
                        echo "Card-1";
                    } elseif ($position == 7) {
                        echo "Card-2";
                    } elseif ($position == 8) {
                        echo "Card-3";
                    } elseif ($position == 9) {
                        echo "Products";
                    } elseif ($position == 10) {
                        echo "Dumping";
                    } elseif ($position == 0) {
                        echo "None";
                    }
                    ?>
                    
                 
                  
                      
                 
                  
                    
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" data-value="1">Display-1</a></li>
                    <li><a class="dropdown-item" href="#" data-value="2">Display-2</a></li>
                    <li><a class="dropdown-item" href="#" data-value="3">Display-3</a></li>
                    <li><a class="dropdown-item" href="#" data-value="4">Display-4</a></li>
                    <li><a class="dropdown-item" href="#" data-value="5">Display-5</a></li>
                    <li><a class="dropdown-item" href="#" data-value="6">Card-1</a></li>
                    <li><a class="dropdown-item" href="#" data-value="7">Card-2</a></li>
                    <li><a class="dropdown-item" href="#" data-value="8">Card-3</a></li>
                    <li><a class="dropdown-item" href="#" data-value="9">Products</a></li>
                    <li><a class="dropdown-item" href="#" data-value="10">Dump</a></li>
                    <li><a class="dropdown-item" href="#" data-value="0">None</a></li>
                </ul>
                <input type="hidden" name="selected_display" class="selectedDisplay" value="{{ $item->home_position ?? 'null' }}">
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </td>
    <td>
        <div class="actioncontainer d-flex m-2 justify-content-between">
            <div class="action1">
                <a class="btn btn-outline-primary btn-sm" href="{{ route('edit.category', $item->id) }}">Edit</a>
                <a class="btn btn-outline-danger btn-sm" href="{{ route('delete.category', $item->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
            </div>
            <div class="action2"></div>
            <div class="action3"></div>
        </div>
    </td>
</tr>
@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
        const dropdownButton = dropdown.querySelector('.dropdownMenuButton');
        const dropdownItems = dropdown.querySelectorAll('.dropdown-item');
        const selectedDisplayInput = dropdown.querySelector('.selectedDisplay');

        dropdownItems.forEach(item => {
            item.addEventListener('click', (event) => {
                event.preventDefault(); // Prevent default anchor click behavior
                const selectedText = item.textContent.trim();
                const selectedValue = item.getAttribute('data-value');

                // Update the button text and hidden input value for this dropdown only
                dropdownButton.textContent = selectedText;
                selectedDisplayInput.value = selectedValue;
            });
        });
    });
});

</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@endsection
