<h2>Applicant Information</h2>

<div class="field-group applicant-info">
  <div class="fg-row">
    <!-- First Name -->
    <div class="field">
      <label for="firstName">First Name</label>
      <input type="text" id="firstName" name="firstName" maxlength="50" pattern="[a-zA-Z\-.\s]+" required>
    </div>

    <!-- Middle Name -->
    <div class="field">
      <label for="middleName">Middle Name</label>
      <input type="text" id="middleName" name="middleName" pattern="[a-zA-Z\-.\s]+">
    </div>

    <!-- Last Name -->
    <div class="field">
      <label for="lastName">Last Name</label>
      <input type="text" id="lastName" name="lastName" maxlength="50" pattern="[a-zA-Z\-.\s]+" required>
    </div>
  </div><!-- /.fg-row -->

  <div class="fg-row">
    <!-- Date of Birth -->
    <div class="field field--dob">
      <label for="birthdate">Date of Birth</label>
      <input type="date" id="birthdate" name="birthdate" required>
    </div>

    <!-- Phone Number -->
    <div class="field field--phone">
      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phone" pattern="[0-9()\-\s]+" required>
    </div>

    <!-- Email Address -->
    <div class="field field--email">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required>
    </div>
  </div><!-- /.fg-row -->

  <div class="fg-row">
    <!-- Date Available for Work -->
    <div class="field field--workdate">
      <label for="dateAvailable">Date Available for Work</label>
      <input type="date" id="dateAvailable" name="dateAvailable" required>
    </div>

    <!-- Position Applied For -->
    <div class="field field--position">
      <label for="jobPosition">Position Applied For</label>
      <input type="text" id="jobPosition" name="jobPosition" required>
    </div>

    <!-- Legal U.S. Worker -->
    <div class="field--radio field--legal">
      <p class="alt-label">Do you have legal right to work in the United States?</p>
      <input type="radio" id="legalYes" name="legal" value="yes" required checked><label class="inner-label" for="legalYes">Yes</label></input>
      <input type="radio" id="legalNo" name="legal" value="no" required><label class="inner-label" for="legalNo">No</label></input>
    </div>
  </div><!-- /.fg-row -->

</div><!-- /.applicant-info -->