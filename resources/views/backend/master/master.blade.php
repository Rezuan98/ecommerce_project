<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body class="sb-nav-fixed">

    @include('backend.includes.header')

    @include('backend.includes.sidebar')

    

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    <script src="{{ asset('frontend/js/filter.js') }}"></script>
   
    {{-- <script src="{{ asset('backend/js/getsubcategory.js') }}"></script>
    <script src="{{ asset('backend/js/subcategory.js') }}"></script> --}}

    <!-- Initialize Select2 -->
   

    <!-- Optional SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   <script>
        $(document).ready(function() {
            // Initialize Select2 for all select elements with class 'js-example-basic-multiple'
            $('.js-example-basic-multiple').select2({
                placeholder: "Select an option",
                allowClear: true
            });
    
        });



        $(document).ready(function () {
        // Trigger event when a category is selected
        $('#category_id').on('change', function () {
            let categoryId = $(this).val(); // Get selected category ID
            // Clear existing subcategory options and show loading
            $('#subcategory_id').html('<option value="" selected disabled>Loading...</option>');

            // Make AJAX request to fetch subcategories
            if (categoryId) {
                $.ajax({
                    url: "{{ route('fetch.subcategory') }}", // Laravel route for subcategory fetching
                    type: "GET",
                    data: { category_id: categoryId }, // Send selected category ID
                    success: function (data) {
                        let options = '<option value="" selected disabled>Select a sub-category</option>'; // Default option
                        
                        // Populate subcategories if available
                        if (data.subcategories.length > 0) {
                            data.subcategories.forEach(subcategory => {
                                options += `<option value="${subcategory.id}">${subcategory.subcategory_name}</option>`;
                            });
                        } else {
                            options = '<option value="" selected disabled>No sub-categories available</option>';
                        }
                        
                        // Update the subcategory dropdown
                        $('#subcategory_id').html(options);
                    },
                    error: function () {
                        alert('Error fetching subcategories. Please try again later.');
                    }
                });
            }
        });
    });
    </script>

</body>
</html>
