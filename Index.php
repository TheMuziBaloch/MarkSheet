
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Marksheet</title>
        <link rel="stylesheet" href="main.css">
        <style>
            #headingRow {
                background-color: green;
                color: white;
            }
            table {
                border-collapse: collapse;
                width: 60%;
            }
            th, td {
                border: 1px solid black;
                padding: 10px;
                text-align: center;
            }
            .markCell {
                color: black;
            }
        </style>
    </head>
    <body>

        <div class="marksheet-container" id="MarkSheet">
            <center>
                <h2 id="mainHeading">Student Marksheet</h2>
                <table>
                    <tr id="headingRow">
                        <th>Subject</th>
                        <th>Marks</th>
                        <th>Total Marks</th>
                    </tr>
                    <tr>
                        <td>Math</td>
                        <td id="math" class="markCell"></td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Computer Science</td>
                        <td id="computer" class="markCell"></td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Physics</td>
                        <td id="physics" class="markCell"></td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Urdu</td>
                        <td id="urdu" class="markCell"></td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td id="english" class="markCell"></td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>PST</td>
                        <td id="pst" class="markCell"></td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td><b>Total</b></td>
                        <td id="totalmarks" class="markCell"><b></b></td>
                        <td><b>550</b></td>
                    </tr>
                    <tr>
                        <td><b>Grade</b></td>
                        <td id="grade" colspan="2"><b></b></td>
                    </tr>
                </table>
                </center>
                
            <div class="button-container">

        <button onclick="PrintMarksheet()">Print Marksheet</button>

    </div>
            </div>

     <script>
    function getValidMarks(subject, maxMarks) {
        let marks;
        do {
            marks = parseInt(prompt(`Enter Your ${subject} Marks (0–${maxMarks})`));
            if (isNaN(marks) || marks < 0 || marks > maxMarks) {
                alert(`❌ Invalid input! Please enter a number between 0 and ${maxMarks} for ${subject}.`);
            }
        } while (isNaN(marks) || marks < 0 || marks > maxMarks);
        return marks;
    }

    window.onload = function () {
        let obtained_math = getValidMarks("Math", 100);
        let obtained_computer = getValidMarks("Computer", 100);
        let obtained_physics = getValidMarks("Physics", 100);
        let obtained_urdu = getValidMarks("Urdu", 100);
        let obtained_english = getValidMarks("English", 100);
        let obtained_pst = getValidMarks("PST", 50);

        let total = obtained_math + obtained_computer + obtained_physics + obtained_urdu + obtained_english + obtained_pst;

        // Grade logic
        let grade = "";
        if (total >= 440) grade = "A1 Grade";
        else if (total >= 385) grade = "A Grade";
        else if (total >= 330) grade = "B Grade";
        else if (total >= 275) grade = "C Grade";
        else if (total >= 220) grade = "D Grade";
        else grade = "Fail";

        // Show all marks and grade in alert
        alert(
            `🎓 Student Marksheet\n\n` +
            `Math: ${obtained_math}/100\n` +
            `Computer Science: ${obtained_computer}/100\n` +
            `Physics: ${obtained_physics}/100\n` +
            `Urdu: ${obtained_urdu}/100\n` +
            `English: ${obtained_english}/100\n` +
            `PST: ${obtained_pst}/50\n\n` +
            `Total Marks: ${total}/550\n` +
            `Grade: ${grade}`
        );

        // Display in table
        document.getElementById("math").innerHTML = obtained_math;
        document.getElementById("computer").innerHTML = obtained_computer;
        document.getElementById("physics").innerHTML = obtained_physics;
        document.getElementById("urdu").innerHTML = obtained_urdu;
        document.getElementById("english").innerHTML = obtained_english;
        document.getElementById("pst").innerHTML = obtained_pst;
        document.getElementById("totalmarks").innerHTML = `<b>${total}</b>`;
        document.getElementById("grade").innerHTML = `<b>${grade}</b>`;

        // Highlight failed subjects
        function highlightFail(id, marks, passing, rowIndex) {
            if (marks < passing) {
                document.getElementById(id).style.color = "red";
                document.querySelector("table").rows[rowIndex].style.backgroundColor = "red";
            }
        }

        highlightFail("math", obtained_math, 33, 1);
        highlightFail("computer", obtained_computer, 33, 2);
        highlightFail("physics", obtained_physics, 33, 3);
        highlightFail("urdu", obtained_urdu, 33, 4);
        highlightFail("english", obtained_english, 33, 5);
        highlightFail("pst", obtained_pst, 17, 6);

        if (grade === "Fail") {
            document.getElementById("headingRow").style.backgroundColor = "red";
            document.getElementById("mainHeading").style.color = "red";
        }
    };

    
</script>

</body>
</html>

    