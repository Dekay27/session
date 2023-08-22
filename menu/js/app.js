const app = document.getElementById('app');
const itemsList = document.getElementById('items-list');
const nameInput = document.getElementById('name');
const descriptionInput = document.getElementById('description');
const addItemButton = document.getElementById('addItem');

// Function to fetch and display items
function fetchItems() {
    // Implement AJAX or fetch API to get items from the API (api.php)
}

// Function to add a new item
function addItem() {
    const name = nameInput.value;
    const description = descriptionInput.value;

    // Implement AJAX or fetch API to add an item via the API (api.php)
}

// Initial fetch of items
fetchItems();

// Event listener for Add Item button
addItemButton.addEventListener('click', addItem);
