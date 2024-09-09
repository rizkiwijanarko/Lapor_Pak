function toggleDropdown() {
    const dropdownContent = document.getElementById("dropdown-profile");
    const dropdownIcon = document.getElementById("dropdown-icon");

    // Toggle the hidden class for the dropdown content
    dropdownContent.classList.toggle("hidden");

    // Change the icon based on the dropdown state
    if (dropdownContent.classList.contains("hidden")) {
        dropdownIcon.setAttribute("name", "chevron-down");
    } else {
        dropdownIcon.setAttribute("name", "chevron-up");
    }
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    const dropdownContent = document.getElementById("dropdown-profile");
    const dropdownButton = document.getElementById("dropdown-button-profile");

    if (event.target === dropdownButton) {
        // If the click is on the button, toggle the dropdown
        toggleDropdown();
    } else if (
        !dropdownContent.contains(event.target) &&
        !dropdownButton.contains(event.target)
    ) {
        // If the click is outside the dropdown and button, close the dropdown
        if (!dropdownContent.classList.contains("hidden")) {
            dropdownContent.classList.add("hidden");
            // Reset the icon when closing
            document
                .getElementById("dropdown-icon")
                .setAttribute("name", "chevron-down");
        }
    }
};
