<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming Skills Quiz</title>
    <link rel="stylesheet" href="css/RateSelf.css">
</head>
<body>
    <div class="container">
        <h1>self-assessment tests</h1>
        <button class="btn" id="softwareSkill" onclick="toggleQuiz('quizForm_software')">Technical Field</button>       <!--software as a Technical Field-->
        <!-- <button class="btn" id="hardwareSkill" onclick="toggleQuiz('quizForm_hardware')">Non-Technical Field</button>   hardware as a Non-Technical Field -->

<!-- software form -->
<form id="quizForm_software">
    <div>
        <div class="question">
            <label>1. On a scale of 0 to 100, how confident are you in your Python skills?</label>
            <select name="pythonSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>2. How would you rate your Java knowledge? (0-100)</label>
            <select name="javaSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>3. How do you feel about your skills in C and C++?</label>
            <select name="cppSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>4. Rate your proficiency in C#.</label>
            <select name="csharpSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>5. How would you assess your knowledge of R?</label>
            <select name="rSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>6. What’s your level of expertise in PHP?</label>
            <select name="phpSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>7. How comfortable are you with HTML, CSS, and JavaScript, including React?</label>
            <select name="webDevSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>8. How would you rate your skills in Node.js and Express.js?</label>
            <select name="nodeSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>9. How familiar are you with TensorFlow, PyTorch, and scikit-learn?</label>
            <select name="mlSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>10. Rate your experience with pandas and NumPy.</label>
            <select name="dataSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>11. How would you rate your SQL skills?</label>
            <select name="sqlSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>12. How do you feel about NoSQL databases?</label>
            <select name="nosqlSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>13. What’s your experience level with Unity and Unreal Engine?</label>
            <select name="gameDevSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>14. How knowledgeable are you about cryptography?</label>
            <select name="cryptoSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>15. How would you rate your skills with Scapy?</label>
            <select name="scapySkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
        <div class="question">
            <label>16. How would you rate your skills in OpenCV, Selenium, Matplotlib/Seaborn, Bash, PowerShell, and Requests?</label>
            <select name="multiSkill">
                <option value="0">Select</option>
                <option value="30">Beginner</option>
                <option value="50">Intermediate</option>
                <option value="70">Advanced</option>
                <option value="85">Expert</option>
                <option value="100">Master</option>
            </select>
        </div>
    </div>

        <button type="button" onclick="calculateScoreSoftware()">Submit</button>
        <div id="result_software"></div>
        <div id="goS"></div>
</form>

<!-- hardwate form -->
        <form id="quizForm_hardware" style="display: none;">
            <div class="question">
                <label>10000. How would you rate your JavaScript skills?</label>
                <select name="jsSkill1">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>2. How would you rate your Python skills?</label>
                <select name="pythonSkill2">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>3. How would you rate your Java skills?</label>
                <select name="javaSkill3">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>4. How would you rate your C++ skills?</label>
                <select name="cppSkill4">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>5. How would you rate your HTML/CSS skills?</label>
                <select name="htmlCssSkill5">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>6. How would you rate your Ruby skills?</label>
                <select name="rubySkill6">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>7. How would you rate your Swift skills?</label>
                <select name="swiftSkill7">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>8. How would you rate your PHP skills?</label>
                <select name="phpSkill8">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>9. How would you rate your Go skills?</label>
                <select name="goSkill9">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>10. How would you rate your Rust skills?</label>
                <select name="rustSkill10">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>11. How would you rate your TypeScript skills?</label>
                <select name="typescriptSkill11">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>12. How would you rate your Kotlin skills?</label>
                <select name="kotlinSkill12">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>13. How would you rate your Scala skills?</label>
                <select name="scalaSkill13">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>14. How would you rate your Haskell skills?</label>
                <select name="haskellSkill14">
                    <option value="0">Select</option>
                    <option value="19">Beginner</option>
                    <option value="40">Intermediate</option>
                    <option value="60">Advanced</option>
                    <option value="80">Expert</option>
                    <option value="100">Master</option>
                </select>
            </div>
            <div class="question">
                <label>15. Experience in tech field in month</label>
                <select name="Experience15">
                    <option value="0">Select</option>
                    <option value="0">beginner</option>
                    <option value="20">below 6 month</option>
                    <option value="45">6 to 12</option>
                    <option value="75">12 to 24</option>
                    <option value="100">above 24</option>
                </select>
            </div>
            <button type="button" onclick="calculateScoreHardware()">Submit</button>
            <div id="result_hardware"></div>
            <div id="goH"></div>
        </form>

    </div>
<script src="/JS/RateSelf.js"></script>
</body>
</html>