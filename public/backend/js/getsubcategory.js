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
                            options += <option value="${subcategory.id}">${subcategory.subcategory_name}</option>;
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