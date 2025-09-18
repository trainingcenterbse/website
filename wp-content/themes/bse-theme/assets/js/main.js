// Membership Fee Calculator
document.addEventListener('DOMContentLoaded', function() {
    const calculator = document.getElementById('membershipCalculator');
    if (calculator) {
        calculator.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const membershipType = document.getElementById('membershipType').value;
            const duration = parseInt(document.getElementById('duration').value);
            let basePrice = 0;

            // Base prices (sample values - adjust as needed)
            switch(membershipType) {
                case 'fellow':
                    basePrice = 50;
                    break;
                case 'member':
                    basePrice = 40;
                    break;
                case 'associate':
                    basePrice = 30;
                    break;
                case 'student':
                    basePrice = 15;
                    break;
            }

            // Calculate total fee
            const totalFee = basePrice * duration;

            // Display result
            document.getElementById('calculatedFee').textContent = totalFee.toFixed(3);
        });
    }
});

// Initialize Bootstrap components
document.addEventListener('DOMContentLoaded', function() {
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Initialize popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
});