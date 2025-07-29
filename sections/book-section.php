<?php

include("./data.php");


// book section function
if (!function_exists('appointmentSection')) {
    function appointmentSection($section)
    {
        echo '
        <section class="book_section layout_padding">
          <div class="container">
            <div class="row">
              <div class="col">
                <form action="sections/book-section-appoinment.php" method="POST">
                  <h4>' . htmlspecialchars($section['title']) . ' <span>' . htmlspecialchars($section['highlight']) . '</span></h4>
                  <div class="form-row ">
                    <div class="form-group col-lg-4">
                      <label for="inputPatientName">Patient Name </label>
                      <input type="text" class="form-control" id="inputPatientName" name="patient_name" placeholder="">
                    </div>
                    <div class="form-group col-lg-4">
                      <label for="inputDoctorName">Doctor\'s Name</label>
                      <select class="form-control wide" id="inputDoctorName" name="doctor_name">';

        foreach ($section['doctors'] as $doctor) {
            echo '<option value="' . htmlspecialchars($doctor) . '">' . htmlspecialchars($doctor) . '</option>';
        }

        echo '
                      </select>
                    </div>
                    <div class="form-group col-lg-4">
                      <label for="inputDepartmentName">Department\'s Name</label>
                      <select class="form-control wide" id="inputDepartmentName" name="department_name">';

        foreach ($section['departments'] as $department) {
            echo '<option value="' . htmlspecialchars($department) . '">' . htmlspecialchars($department) . '</option>';
        }

        echo '
                      </select>
                    </div>
                  </div>

                  <div class="form-row ">
                    <div class="form-group col-lg-4">
                      <label for="inputPhone">Phone Number</label>
                      <input type="number" class="form-control" id="inputPhone" name="phone" placeholder="XXXXXXXXXX">
                    </div>
                    <div class="form-group col-lg-4">
                      <label for="inputSymptoms">Symptoms</label>
                      <input type="text" class="form-control" id="inputSymptoms" name="symptoms" placeholder="">
                    </div>
                    <div class="form-group col-lg-4">
                      <label for="inputDate">Choose Date </label>
                      <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                        <input type="text" class="form-control" name="date" readonly>
                        <span class="input-group-addon date_icon">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="btn-box">
                    <button type="submit" class="btn ">Submit Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>';
    }
}