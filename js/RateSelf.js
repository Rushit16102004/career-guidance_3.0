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
    function calculateScoreHardware() {
        // Collect and store selected values in local storage
        const skillsH = ['jsSkill1', 'pythonSkill2', 'javaSkill3', 'cppSkill4', 'htmlCssSkill5', 'rubySkill6', 'swiftSkill7', 'phpSkill8', 'goSkill9', 'rustSkill10', 'typescriptSkill11', 'kotlinSkill12', 'scalaSkill13', 'haskellSkill14', 'Experience15'];
        skillsH.forEach(skill => {
            const selectElement = document.querySelector(`select[name="${skill}"]`);
            if (selectElement) { // Check if the select element exists
                const value = selectElement.value;
                localStorage.setItem(skill, value);
            } else {
                console.warn(`Select element for ${skill} not found.`);
            }
        });
        // Calculate and display average of skills
        const total = skillsH.reduce((acc, skill) => acc + (parseInt(localStorage.getItem(skill)) || 0), 0); // Handle null values
        const average = (total * 100) / 1500;
    
        // Create a progress bar element
        const progressBarH = document.createElement('div');
        progressBarH.className = 'progress-bar';
        progressBarH.style.width = `${average}%`; // Set width based on average
        progressBarH.innerText = `Your skill is: ${average.toFixed(2)} %`; // Display average text
        // Clear previous results and append the progress bar
        document.getElementById('result_hardware').innerHTML = ""; // Clear previous results
        document.getElementById('result_hardware').appendChild(progressBarH);
    
        // Check if the "Start Over" button already exists
        let startOverButton = document.getElementById('startOverButtonHardware'); // Unique ID for hardware
        if (!startOverButton) {
            startOverButton = document.createElement('button'); // Create the button element
            startOverButton.id = 'startOverButtonHardware'; // Set a unique ID for the button
            startOverButton.innerText = 'Explore more'; // Set button text
            startOverButton.onclick = () => {
                const currentFormH = document.querySelector('form[style="display: block;"]'); // Get the currently visible form
                if (currentFormH) {
                    currentFormH.reset(); // Reset the current form
                }
                document.getElementById('result_hardware').innerText = "";
                startOverButton.remove();
                window.location.href = 'interest.html';
            };
            // Append the button to a specific container instead of the body
            const goHContainer = document.getElementById('goH');
            if (goHContainer) { // Check if goH exists
                goHContainer.appendChild(startOverButton);
            } else {
                console.warn('goH container not found.');
            }
        }
    }
    function toggleQuiz(formId) {
        const softwareForm = document.getElementById('quizForm_software');
        const hardwareForm = document.getElementById('quizForm_hardware');
        
        // Clear underline from both buttons
        document.getElementById('softwareSkill').classList.remove('underline');
        document.getElementById('hardwareSkill').classList.remove('underline');

        if (formId === 'quizForm_software') {
            softwareForm.style.display = softwareForm.style.display === 'none' ? 'block' : 'none';
            hardwareForm.style.display = 'none'; // Hide hardware form
            document.getElementById('softwareSkill').classList.add('underline'); // Underline software button
        } else {
            hardwareForm.style.display = hardwareForm.style.display === 'none' ? 'block' : 'none';
            softwareForm.style.display = 'none'; // Hide software form
            document.getElementById('hardwareSkill').classList.add('underline'); // Underline hardware button
        }
    }