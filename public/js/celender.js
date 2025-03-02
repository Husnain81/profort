document.addEventListener("DOMContentLoaded", function () {
    // Get elements
    const calendarTrigger = document.getElementById("calendarTrigger");
    const calendarInput = document.getElementById("calendarInput");
    const calendarText = document.getElementById("calendarText");

    // Initialize Flatpickr
    flatpickr(calendarInput, {
        mode: "range", // Allows selecting a start and end date
        dateFormat: "d M Y",
        defaultDate: ["26 Dec 2024", "08 Jan 2025"],
        onClose: function (selectedDates, dateStr) {
            if (selectedDates.length === 2) {
                calendarText.textContent = `${dateStr.split(" to ")[0]} - ${dateStr.split(" to ")[1]}`;
            }
        }
    });

    // Open calendar when clicking the container
    calendarTrigger.addEventListener("click", function () {
        calendarInput.click(); // Triggers Flatpickr
    });
});
