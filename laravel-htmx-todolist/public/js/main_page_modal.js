window.addEventListener('load', function () {
    // Get the modal element
    let modal = document.getElementById("myModal");

    // Get the form element
    let form = document.getElementById("myForm");

    // Get the submit button
    let submitBtn = form.querySelector("button[type='submit']");

    let tugle_search = document.getElementById('toogle_search_type');

    // Open the modal when the button is clicked
    document.querySelector("button[data-target='#myModal']").addEventListener("click", function () {
        modal.style.display = "block";
    });

    // Close the modal when the close button is clicked
    modal.querySelector(".close").addEventListener("click", function () {
        modal.style.display = "none";
    });

    // Handle form submission
    submitBtn.onclick = function () {
        let select_h_amp = document.getElementById('h_amp_select');
        let current_i = select_h_amp.selectedIndex;
        let page_link = select_h_amp[current_i].getAttribute('target');
        form.setAttribute('action', page_link);
    }
    form.addEventListener("submit", function (e) {
        // e.preventDefault(); // Prevent form from submitting

        // Get form values
        // Perform form validation or further processing here
        // Close the modal
        modal.style.display = "none";
    });

});