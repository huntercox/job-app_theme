<h2>Traffic Convictions And Forfeitures For The Past 3 Years (Other Than Parking Violations)</h2>

<h3>Conviction 1</h3>
<!-- Conviction 1 -->
<div class="field-group conviction__1">
  <div class="fg-row">
    <div class="field field--date-convicted">
      <label for="conviction1Date">Date Convicted</label>
      <input type="date" id="conviction1Date" name="conviction1Date">
    </div>

    <div class="field field--state">
      <label for="conviction1State">State</label>
      <input type="text" id="conviction1State" name="conviction1State" maxlength="2" pattern="[A-Z]+">
    </div>

    <div class="field field--penalty">
      <label for="conviction1Penalty">Penalty</label>
      <input type="text" id="conviction1Penalty" name="conviction1Penalty" maxlength="255" pattern="[a-zA-Z\-.\s]+">
    </div>
  </div><!-- /.fg-row -->

  <div class="fg-row">
    <div class="field field--violation">
      <label for="conviction1Description">Violation</label>
      <textarea id="conviction1Description" name="conviction1Description" cols="30" rows="6"></textarea>
    </div>
  </div><!-- /.fg-row -->
</div><!-- /.field-group -->

<h3>Conviction 2</h3>
<!-- Conviction 2 -->
<div class="field-group conviction__2">
  <div class="fg-row">
    <div class="field field--date-convicted">
      <label for="conviction2Date">Date Convicted</label>
      <input type="date" id="conviction2Date" name="conviction2Date">
    </div>

    <div class="field field--state">
      <label for="conviction2State">State</label>
      <input type="text" id="conviction2State" name="conviction2State" maxlength="2" pattern="[A-Z]+">
    </div>

    <div class="field field--penalty">
      <label for="conviction2Penalty">Penalty</label>
      <input type="text" id="conviction2Penalty" name="conviction2Penalty" maxlength="255" pattern="[a-zA-Z\-.\s]+">
    </div>
  </div><!-- /.fg-row -->

  <div class="fg-row">
    <div class="field field--violation">
      <label for="conviction2Description">Violation</label>
      <textarea id="conviction2Description" name="conviction2Description" cols="30" rows="6"></textarea>
    </div>
  </div><!-- /.fg-row -->
</div><!-- /.field-group -->

<h3>Conviction 3</h3>
<!-- Conviction 3 -->
<div class="field-group conviction__3">
  <div class="fg-row">
    <div class="field field--date-convicted">
      <label for="conviction3Date">Date Convicted</label>
      <input type="date" id="conviction3Date" name="conviction3Date">
    </div>

    <div class="field field--state">
      <label for="conviction3State">State</label>
      <input type="text" id="conviction3State" name="conviction3State" maxlength="2" pattern="[A-Z]+">
    </div>

    <div class="field field--penalty">
      <label for="conviction3Penalty">Penalty</label>
      <input type="text" id="conviction3Penalty" name="conviction3Penalty" maxlength="255" pattern="[a-zA-Z\-.\s]+">
    </div>
  </div><!-- /.fg-row -->

  <div class="fg-row">
    <div class="field field--violation">
      <label for="conviction3Description">Violation</label>
      <textarea id="conviction3Description" name="conviction3Description" cols="30" rows="6"></textarea>
    </div>
  </div><!-- /.fg-row -->

</div><!-- /.field-group -->

<div class="field-group denied-suspended">
  <div class="fg-row">
    <!-- Denied License? -->
    <p class="alt-label">Have you ever been denied a license, permit, or privilege to operate a motor vehicle?</p>
    <div class="field">
      <input type="radio" id="deniedLicenseYes" name="deniedLicense" value="Yes" required><label class="inner-label" for="deniedLicenseYes">Yes</label></input>
      <input type="radio" id="deniedLicenseNo" name="deniedLicense" value="No" required checked><label class="inner-label" for="deniedLicenseNo">No</label></input>
    </div>

    <!-- Suspended License? -->
    <p class="alt-label">Has any license, permit, or privilege ever been suspended or revoked?</p>
    <div class="field">
      <input type="radio" id="suspendedLicenseYes" name="suspendedLicense" value="Yes" required><label class="inner-label" for="suspendedLicenseYes">Yes</label></input>
      <input type="radio" id="suspendedLicenseNo" name="suspendedLicense" value="No" required checked><label class="inner-label" for="suspendedLicenseNo">No</label></input>
    </div>
  </div><!-- /.fg-row -->
</div><!-- /.field-group -->