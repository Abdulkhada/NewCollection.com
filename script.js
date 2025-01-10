function calculateAge() {
    // Get the birthdate input value
    let birthdate = document.getElementById('birthdate').value;
    
    if (!birthdate) {
        alert('Please select a birthdate');
        return;
    }
    
    // Create a Date object for the birthdate and current date
    let birthDateObj = new Date(birthdate);
    let currentDate = new Date();
    
    // Calculate the difference in years
    let age = currentDate.getFullYear() - birthDateObj.getFullYear();
    let month = currentDate.getMonth() - birthDateObj.getMonth();
    
    // Adjust the age if the birthday hasn't occurred yet this year
    if (month < 0 || (month === 0 && currentDate.getDate() < birthDateObj.getDate())) {
        age--;
    }
    
    // Display the calculated age
    document.getElementById('ageOutput').innerText = age;
    document.getElementById('ageResult').style.display = 'block';
}
