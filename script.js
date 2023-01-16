const emp_no = document.getElementById('emp_id');
const emp_name = document.getElementById('emp_name');
const dateob = document.getElementById('emp_dob');
const address_= document.getElementById('address_');

form.addEventlistner('submit',(e) => {
    let messages = [];
    if(emp_no.value === '' || emp_no.value == 'null'){
        messages.push('employee number is required');
    }
    if (messages.length > 0 ){
        e.preventDefault();
    }
});