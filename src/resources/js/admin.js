$(function () {
    $('.edit').on('click', function (e) {
        e.preventDefault();
        const form = $(this).closest('form');
        const inputs = form.find('input');
        const saveBtn = form.find('button[type=submit]');
        const editBtn = form.find('.edit');
        inputs.each(function (index) {
            $(this).prop('disabled', false);
        })
        saveBtn.prop('disabled', false);
        editBtn.prop('disabled', true);
    });

    $('.add').on('click', function (e) {
        e.preventDefault();
        const form = $(this).closest('.branch');
        console.log(form)
        form.after('<h3>222</h3>');
        // console.log(form);
    });

    // Add branch
    document.querySelector('.add-branch').addEventListener('click', function (e) {
        const accordion = document.getElementById('accordionBranches');
        const itemCount = accordion.children.length + 1;
        const accordionItem = document.getElementById('accordion-item-template').content.cloneNode(true);

        accordionItem.querySelector('.accordion-header').setAttribute('id', `heading_${itemCount}`);
        accordionItem.querySelector('.accordion-button').setAttribute('data-bs-target', `#collapse_${itemCount}`);
        accordionItem.querySelector('.accordion-collapse').setAttribute('id', `collapse_${itemCount}`);

        accordion.append(accordionItem);
    });

    // Update branch
    document.querySelector('.accordion').addEventListener('click', function (e) {
        // Avoid iterating through buttons
        if (!e.target.classList.contains('update')) {
            return false;
        }
        e.preventDefault();
        const form = e.target.closest('form');
        const action = form.getAttribute('action');
        const csrf = form.querySelector('input[name=_token]').value;
        const formData = new FormData(form);

        fetch(action, {
            method: 'PUT',
            body: JSON.stringify(Object.fromEntries(formData)),
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrf,
            },
        })
            .then(response => response.json())
            .then(result => {
                Array.from(document.querySelectorAll('.invalid-feedback')).forEach(item => {
                    item.style.display = 'none';
                    item.innerHTML = '';
                })
                if (result.errors) {
                    const errors = result.errors;
                    for (const field in errors) {
                        const feedback = form.querySelector(`input[name=${field}] + .invalid-feedback`);
                        feedback.style.display = 'block';
                        feedback.innerHTML = errors[field][0];
                    }
                }
            })
    })
})
