// Example function to retrieve and use skill values from localStorage
function useSkillValues() {
    const skills = ['pythonSkill', 
        'javaSkill', 
        'cppSkill', 
        'csharpSkill', 
        'rSkill', 
        'phpSkill', 
        'webDevSkill', 
        'nodeSkill', 
        'mlSkill', 
        'dataSkill', 
        'sqlSkill', 
        'nosqlSkill', 
        'gameDevSkill', 
        'cryptoSkill', 
        'scapySkill',
        'multiSkill'];
    const skillValues = {};

    skills.forEach(skill => {
        skillValues[skill] = localStorage.getItem(skill); // Retrieve skill value
    });
}

                                              // for software
function calculateScoreSoftware() {
    // Collect and store selected values in local storage
    const skillsS = [
        'pythonSkill', 
        'javaSkill', 
        'cppSkill', 
        'csharpSkill', 
        'rSkill', 
        'phpSkill', 
        'webDevSkill', 
        'nodeSkill', 
        'mlSkill', 
        'dataSkill', 
        'sqlSkill', 
        'nosqlSkill', 
        'gameDevSkill', 
        'cryptoSkill', 
        'scapySkill',
        'multiSkill'
    ];
    skillsS.forEach(skill => {
        const selectElement = document.querySelector(`select[name="${skill}"]`);
        if (selectElement) { // Check if the select element exists
            const value = selectElement.value;
            localStorage.setItem(skill, value);
        } else {
            console.warn(`Select element for ${skill} not found.`);
        }
    });
    // Calculate and display average of skillsS
    const total = skillsS.reduce((acc, skill) => acc + (parseInt(localStorage.getItem(skill)) || 0), 0); // Handle null values
    const average = (total * 100) / 1600;

        // Create a progress bar element
        const progressBarS = document.createElement('div');
        progressBarS.className = 'progress-bar';
        progressBarS.style.width = `${average}%`; // Set width based on average
        progressBarS.innerText = `Your skill is: ${average.toFixed(2)} %`; // Display average text
        // Clear previous results and append the progress bar
        document.getElementById('result_software').innerHTML = ""; // Clear previous results
        document.getElementById('result_software').appendChild(progressBarS);
    
        // Check if the "Start Over" button already exists
        let startOverButton = document.getElementById('startOverButtonSoftware'); // Unique ID for software
        if (!startOverButton) {
            startOverButton = document.createElement('button'); // Create the button element
            startOverButton.id = 'startOverButtonSoftware'; // Set a unique ID for the button
            startOverButton.innerText = 'Explore more'; // Set button text
            startOverButton.onclick = () => {
                const currentFormS = document.querySelector('form[style="display: block;"]'); // Get the currently visible form
                if (currentFormS) {
                    currentFormS.reset(); // Reset the current form
                }
                document.getElementById('result_software').innerText = "";
                startOverButton.remove();
                window.location.href = 'interest.html';startOver
            };
            // Append the button to a specific container instead of the body
            const goSContainer = document.getElementById('goS');
            if (goSContainer) { // Check if goS exists
                goSContainer.appendChild(startOverButton);
            } else {
                console.warn('goS container not found.');
            }
        }
    }


//  for hardware
// null


document.getElementById("hardwareSkill").addEventListener("click", function() {
    window.location.href = "interest.html";
});