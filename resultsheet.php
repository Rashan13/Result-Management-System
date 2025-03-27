<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS Result sheet</title>
    <link rel="stylesheet" href="result.css">
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .header h2 {
            margin: 0;
        }

        .header img {
            max-height: 80px; /* Adjust the height as needed */
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        
        .buttons .cancel-btn {
            margin-left: auto;
        }
    </style>
</head>
<body>
    <div class="result-sheet">
        <div class="header">
            <h2>KDU RESULT SHEET</h2>
            <img src="kdu_logo.png" >
        </div>

        <div class="student-info">
            <p><strong>Name</strong> : Lakmal</p>
            <p><strong>Index No</strong> : 2342</p>
            <p><strong>Semester</strong> : 3</p>
        </div>

        <div class="result-summary">
            <h3>Result Summary</h3>
            <table>
                <thead>
                    <tr>
                        <th>Semester</th>
                        <th>Sub Module</th>
                        <th>Subject Area</th>
                        <th>Credits</th>
                        <th>Marks</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="8">Semester 3</td>
                        <td>Module I</td>
                        <td>POM</td>
                        <td>0.5</td>
                        <td>78</td>
                        <td><span class="grade-b">B</span></td>
                    </tr>
                    <tr>
                        <td>Module II</td>
                        <td>SE</td>
                        <td>2</td>
                        <td>96</td>
                        <td><span class="grade-a">A</span></td>
                    </tr>
                    <tr>
                        <td>Module III</td>
                        <td>NETWORKING</td>
                        <td>0.5</td>
                        <td>50</td>
                        <td><span class="grade-c">C</span></td>
                    </tr>
                    <tr>
                        <td>Module IV</td>
                        <td>CALCULAS</td>
                        <td>2</td>
                        <td>0</td>
                        <td><span class="grade-d">D</span></td>
                    </tr>
                    <tr>
                        <td>Module V</td>
                        <td>ENGLISH</td>
                        <td>2</td>
                        <td>0</td>
                        <td><span class="grade-d">D</span></td>
                    </tr>
                    <tr>
                        <td>Module VI</td>
                        <td>OOP</td>
                        <td>1.5</td>
                        <td>0</td>
                        <td><span class="grade-d">D</span></td>
                    </tr>
                    <tr>
                        <td>Module VII</td>
                        <td>Data Structure</td>
                        <td>2</td>
                        <td>0</td>
                        <td><span class="grade-d">D</span></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: right;">Total</td>
                        <td>26</td>
                        <td colspan="2"><span class="grade-d">D</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="buttons">
            <button onclick="window.print()">Print/Download</button>
            <button class="cancel-btn" onclick="window.location.href='view_results.php'">Cancel</button>
        </div>
    </div>
</body>
</html>
