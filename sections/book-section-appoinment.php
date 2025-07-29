<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $patientName = htmlspecialchars($_POST['patient_name'] ?? '');
    $doctorName = htmlspecialchars($_POST['doctor_name'] ?? '');
    $departmentName = htmlspecialchars($_POST['department_name'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $symptoms = htmlspecialchars($_POST['symptoms'] ?? '');
    $date = htmlspecialchars($_POST['date'] ?? '');

    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Appointment Summary</title>
        <link rel="stylesheet" href="../css/book-summary.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="summary-container">
            <h2>Appointment Summary</h2>
            <table class="summary-table">
                <tr>
                    <th>Patient Name</th>
                    <td>' . $patientName . '</td>
                </tr>
                <tr>
                    <th>Doctor</th>
                    <td>' . $doctorName . '</td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td>' . $departmentName . '</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>' . $phone . '</td>
                </tr>
                <tr>
                    <th>Symptoms</th>
                    <td>' . $symptoms . '</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>' . $date . '</td>
                </tr>
            </table>
        </div>
    </body>
    </html>
    ';
} else {
    echo '<p style="color:red;">Invalid request method.</p>';
}



?>