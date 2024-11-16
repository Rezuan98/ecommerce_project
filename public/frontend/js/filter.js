// Placeholder functions for applying filters and sorting
function applyFilters() {
    const priceMin = document.getElementById("price_min").value;
    const priceMax = document.getElementById("price_max").value;
    const brand = document.getElementById("brand").value;
    const color = document.getElementById("color").value;

    // Logic to filter products based on selected filters (you would use an API or static data here)
    console.log("Applying filters:", { priceMin, priceMax, brand, color });
}

function applySorting() {
    const sortValue = document.getElementById("sort").value;

    // Logic to sort products based on selected sorting option (you would use an API or static data here)
    console.log("Applying sorting:", sortValue);
}
