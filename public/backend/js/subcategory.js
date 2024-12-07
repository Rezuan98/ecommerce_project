 // Fetch subcategories based on selected category
 $('#category_id').on('change', function () {
    let categoryId = $(this).val(); // Get selected category ID

    // Clear subcategory options and show loading message
    $('#subcategory_id').html('<option value="" selected disabled>Loading...</option>');

    // Make AJAX request to fetch subcategories
    if (categoryId) {
        $.ajax({
            url: "{{ route('fetch.subcategory') }}", // Laravel route for fetching subcategories
            type: "GET",
            data: { category_id: categoryId }, // Send selected category ID
            success: function (data) {
                let options = '<option value="" selected disabled>Select a sub-category</option>';

                // Populate subcategory dropdown
                if (data.subcategories.length > 0) {
                    data.subcategories.forEach(subcategory => {
                        options += `<option value="${subcategory.id}">${subcategory.subcategory_name}</option>`;
                    });
                } else {
                    options = '<option value="" selected disabled>No sub-categories available</option>';
                }

                // Update subcategory dropdown options
                $('#subcategory_id').html(options);
            },
            error: function () {
                alert('Error fetching subcategories. Please try again later.');
            }
        });
    }
});


//     $(document).ready(function () {
//         // Trigger event when a category is selected
//         $('#category_id').on('change', function () {
//             let categoryId = $(this).val(); // Get selected category ID
//     alert(categoryId);
//             // Clear existing subcategory options and show loading
//             $('#subcategory_id').html('<option value="" selected disabled>Loading...</option>');

//             // Make AJAX request to fetch subcategories
//             if (categoryId) {
//                 $.ajax({
//                     url: "{{ route('fetch.subcategory') }}", // Laravel route for subcategory fetching
//                     type: "GET",
//                     data: { category_id: categoryId }, // Send selected category ID
//                     success: function (data) {
//                         let options = '<option value="" selected disabled>Select a sub-category</option>'; // Default option
                        
//                         // Populate subcategories if available
//                         if (data.subcategories.length > 0) {
//                             data.subcategories.forEach(subcategory => {
//                                 options += `<option value="${subcategory.id}">${subcategory.subcategory_name}</option>`;
//                             });
//                         } else {
//                             options = '<option value="" selected disabled>No sub-categories available</option>';
//                         }
                        
//                         // Update the subcategory dropdown
//                         $('#subcategory_id').html(options);
//                     },
//                     error: function () {
//                         alert('Error fetching subcategories. Please try again later.');
//                     }
//                 });
//             }
//         });
//     });



    // js code for display category dropdown in backend
    document.addEventListener('DOMContentLoaded', () => {
        const dropdownItems = document.querySelectorAll('.dropdown-menu .dropdown-item');
        const dropdownButton = document.getElementById('dropdownMenuButton');
        const selectedDisplayInput = document.getElementById('selectedDisplay');

        dropdownItems.forEach(item => {
            item.addEventListener('click', (event) => {
                event.preventDefault(); // Prevent default anchor click behavior
                const selectedText = item.textContent.trim();
                const selectedValue = item.getAttribute('data-value');

                // Update the button text and hidden input value
                dropdownButton.textContent = selectedText;
                selectedDisplayInput.value = selectedValue;
            });
        });
    });