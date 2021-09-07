<?php
/**
 *======================================
 * HTML "name" attribute list
 *======================================
 *
 * Applicant Info *
 *  - firstName
 *  - middleName
 *  - lastName
 *  - phone
 *  - email
 *  - birthdate
 *  - jobPosition
 *  - dateAvailable
 *  - legal
 *
 * Residency
 *  ~ Current Address *
 *     - currentStreet
 *     - currentCity
 *     - currentState
 *     - currentZipcode
 *     - currentDuration
 *  ~ Mailing Address *
 *     - mailingStreet
 *     - mailingCity
 *     - mailingState
 *     - mailingZipcode
 *     - mailingDuration
 *  ~ Previous Address 1 *
 *     - prev1Street
 *     - prev1City
 *     - prev1State
 *     - prev1Zipcode
 *     - prev1Duration
 *  ~ Previous Address 2
 *     - prev2Street
 *     - prev2City
 *     - prev2State
 *     - prev2Zipcode
 *     - prev2Duration
 *  ~ Previous Address 3
 *     - prev3Street
 *     - prev3City
 *     - prev3State
 *     - prev3Zipcode
 *     - prev3Duration
 *
 * License
 *  ~ Current License *
 *     - currentLicenseState
 *     - currentLicenseNumber
 *     - currentLicenseType
 *     - currentLicenseEndorsements
 *     - currentLicenseExpDate
 *  ~ Previous License 1
 *     - prev1LicenseState
 *     - prev1LicenseNumber
 *     - prev1LicenseType
 *     - prev1LicenseEndorsements
 *     - prev1LicenseExpDate
 *  ~ Previous License 2
 *     - prev2LicenseState
 *     - prev2LicenseNumber
 *     - prev2LicenseType
 *     - prev2LicenseEndorsements
 *     - prev2LicenseExpDate
 *
 * Driving-Experience
 *  ~ Straight Truck
 *     - straightTruckType
 *     - straightTruckDateFrom
 *     - straightTruckDateTo
 *     - straightTruckMiles
 *  ~ Tractor & Semi-Trailer
 *     - tractorSemiType
 *     - tractorSemiDateFrom
 *     - tractorSemiDateTo
 *     - tractorSemiMiles
 *  ~ Tractor & 2 Trailers
 *     - tractorTrailersType
 *     - tractorTrailersDateFrom
 *     - tractorTrailersDateTo
 *     - tractorTrailersMiles
 *  ~ Tractor & Tanker
 *     - tractorTankerType
 *     - tractorTankerDateFrom
 *     - tractorTankerDateTo
 *     - tractorTankerMiles
 *  ~ Other
 *     - otherType
 *     - otherDateFrom
 *     - otherDateTo
 *     - otherMiles
 *
 * Accidents
 *  ~ Accident 1
 *     - accident1Date
 *     - accident1Description
 *     - accident1Fatalities
 *     - accident1Injuries
 *     - accident1Spill
 *  ~ Accident 2
 *     - accident2Date
 *     - accident2Description
 *     - accident2Fatalities
 *     - accident2Injuries
 *     - accident2Spill
 *  ~ Accident 3
 *     - accident3Date
 *     - accident3Description
 *     - accident3Fatalities
 *     - accident3Injuries
 *     - accident3Spill
 *
 * Legal
 *  ~ Conviction 1
 *     - conviction1Date
 *     - conviction1Description
 *     - conviction1State
 *     - conviction1Penalty
 *  ~ Conviction 2
 *     - conviction2Date
 *     - conviction2Description
 *     - conviction2State
 *     - conviction2Penalty
 *  ~ Conviction 3
 *     - conviction3Date
 *     - conviction3Description
 *     - conviction3State
 *     - conviction3Penalty
 *  - deniedLicense
 *  - suspendedLicense
 *
 * Employment
 *  ~ Current Employer
 *     - currentEmployerName
 *     - currentEmployerPhone
 *     - currentEmployerAddress
 *     - currentEmployerPositionHeld
 *     - currentEmployerDateFrom
 *     - currentEmployerDateTo
 *     - currentEmployerReasonForLeaving
 *     - currentEmployerSalary
 *     - currentEmployerGaps
 *     - currentEmployerSafetyRegulations
 *     - currentEmployerDoT
 *  ~ Previous Employer 1
 *     - prev1EmployerName
 *     - prev1EmployerPhone
 *     - prev1EmployerAddress
 *     - prev1EmployerPositionHeld
 *     - prev1EmployerDateFrom
 *     - prev1EmployerDateTo
 *     - prev1EmployerReasonForLeaving
 *     - prev1EmployerSalary
 *     - prev1EmployerGaps
 *     - prev1EmployerSafetyRegulations
 *     - prev1EmployerDoT
 *  ~ Previous Employer 2
 *     - prev2EmployerName
 *     - prev2EmployerPhone
 *     - prev2EmployerAddress
 *     - prev2EmployerPositionHeld
 *     - prev2EmployerDateFrom
 *     - prev2EmployerDateTo
 *     - prev2EmployerReasonForLeaving
 *     - prev2EmployerSalary
 *     - prev2EmployerGaps
 *     - prev2EmployerSafetyRegulations
 *     - prev2EmployerDoT
 *
 * Education
 *  ~ High School
 *     - hsNameLocation
 *     - hsCourseStudy
 *     - hsYearsCompleted
 *     - hsGraduated
 *     - hsDetails
 *  ~ College
 *     - collegeNameLocation
 *     - collegeCourseStudy
 *     - collegeYearsCompleted
 *     - collegeGraduated
 *     - collegeDetails
 *  ~ Other
 *     - otherNameLocation
 *     - otherCourseStudy
 *     - otherYearsCompleted
 *     - otherGraduated
 *     - otherDetails
 *
 * Sign *
 *  - applicantNamePrinted
 *  - applicantSignatureDate
 *  - applicantSignature
 *
 */
?>
<?php
/**
 *======================================
 * MySQL Database Columns
 *======================================
 *
 * Applicant-info
 *  - first_name
 *  - middle_name
 *  - last_name
 *  - phone
 *  - email
 *  - date_of_birth
 *  - job_position
 *  - date_available
 *  - legal_to_work
 *
 * Residency
 *  ~ Current Address
 *     - current_street
 *     - current_city
 *     - current_state
 *     - current_zipcode
 *     - current_duration
 *  ~ Mailing Address
 *     - mailing_street
 *     - mailing_city
 *     - mailing_state
 *     - mailing_zipcode
 *     - mailing_duration
 *  ~ Previous Address 1
 *     - prev1_street
 *     - prev1_city
 *     - prev1_state
 *     - prev1_zipcode
 *     - prev1_duration
 *  ~ Previous Address 2
 *     - prev2_street
 *     - prev2_city
 *     - prev2_state
 *     - prev2_zipcode
 *     - prev2_duration
 *  ~ Previous Address 3
 *     - prev3_street
 *     - prev3_city
 *     - prev3_state
 *     - prev3_zipcode
 *     - prev3_duration
 *
 * License
 *  ~ Current License
 *     - current_license_state
 *     - current_license_number
 *     - current_license_type
 *     - current_license_endorsements
 *     - current_license_exp_date
 *  ~ Previous License 1
 *     - prev1_license_state
 *     - prev1_license_number
 *     - prev1_license_type
 *     - prev1_license_endorsements
 *     - prev1_license_exp_date
 *  ~ Previous License 2
 *     - prev2_license_state
 *     - prev2_license_number
 *     - prev2_license_type
 *     - prev2_license_endorsements
 *     - prev2_license_exp_date
 *
 * Driving-Experience
 *  ~ Straight Truck
 *     - straight_truck_type
 *     - straight_truck_miles
 *     - straight_truck_date_from
 *     - straight_truck_date_to
 *  ~ Tractor & Semi-Trailer
 *     - tractor_semi_type
 *     - tractor_semi_date_from
 *     - tractor_semi_date_to
 *     - tractor_semi_miles
 *  ~ Tractor & 2 Trailers
 *     - tractor_trailers_type
 *     - tractor_trailers_date_from
 *     - tractor_trailers_date_to
 *     - tractor_trailers_miles
 *  ~ Tractor & Tanker
 *     - tractor_tanker_type
 *     - tractor_tanker_date_from
 *     - tractor_tanker_date_to
 *     - tractor_tanker_miles
 *  ~ Other
 *     - other_type
 *     - other_date_from
 *     - other_date_to
 *     - other_miles
 * Accidents
 *  ~ Accident 1
 *     - accident1_dates
 *     - accident1_description
 *     - accident1_fatalities
 *     - accident1_injuries
 *     - accident1_spill
 *  ~ Accident 2
 *     - accident2_dates
 *     - accident2_description
 *     - accident2_fatalities
 *     - accident2_injuries
 *     - accident2_spill
 *  ~ Accident 3
 *     - accident3_dates
 *     - accident3_description
 *     - accident3_fatalities
 *     - accident3_injuries
 *     - accident3_spill
 *
 * Legal
 *  ~ Conviction 1
 *     - conviction1_date
 *     - conviction1_description
 *     - conviction1_state
 *     - conviction1_penalty
 *  ~ Conviction 2
 *     - conviction2_date
 *     - conviction2_description
 *     - conviction2_state
 *     - conviction2_penalty
 *  ~ Conviction 3
 *     - conviction3_date
 *     - conviction3_description
 *     - conviction3_state
 *     - conviction3_penalty
 *  - denied_license
 *  - suspended_license
 *
 * Employment
 *  ~ Current Employer
 *     - current_employer_name
 *     - current_employer_phone
 *     - current_employer_address
 *     - current_employer_position
 *     - current_employer_date_from
 *     - current_employer_date_to
 *     - current_employer_reason
 *     - current_employer_salary
 *     - current_employer_gaps
 *     - current_employer_safety
 *     - current_employer_dot
 *  ~ Previous Employer 1
 *     - prev1_employer_name
 *     - prev1_employer_phone
 *     - prev1_employer_address
 *     - prev1_employer_position
 *     - prev1_employer_date_from
 *     - prev1_employer_date_to
 *     - prev1_employer_reason
 *     - prev1_employer_salary
 *     - prev1_employer_gaps
 *     - prev1_employer_safety
 *     - prev1_employer_dot
 *  ~ Previous Employer 2
 *     - prev2_employer_name
 *     - prev2_employer_phone
 *     - prev2_employer_address
 *     - prev2_employer_position
 *     - prev2_employer_date_from
 *     - prev2_employer_date_to
 *     - prev2_employer_reason
 *     - prev2_employer_salary
 *     - prev2_employer_gaps
 *     - prev2_employer_safety
 *     - prev2_employer_dot
 *
 * Education
 *  ~ High School
 *     - edu_hs_name_location
 *     - edu_hs_course_study
 *     - edu_hs_years_completed
 *     - edu_hs_graduated
 *     - edu_hs_details
 *  ~ College
 *     - edu_college_name_location
 *     - edu_college_course_study
 *     - edu_college_years_completed
 *     - edu_college_graduated
 *     - edu_college_details
 *  ~ Other
 *     - edu_other_name_location
 *     - edu_other_course_study
 *     - edu_other_years_completed
 *     - edu_other_graduated
 *     - edu_other_details
 *
 * Sign
 *  - applicant_name_printed
 *  - applicant_signature_date
 *  - applicant_signature
 */
?>
<?php
/**
 * ----------------------
 * REQUIRED Fields
 * ----------------------
 *  - first_name
 *  - middle_name
 *  - last_name
 *  - phone
 *  - email
 *  - date_of_birth
 *  - job_position
 *  - date_available
 *  - legal_to_work
 *  - current_street
 *  - current_city
 *  - current_state
 *  - current_zipcode
 *  - current_duration
 *  - mailing_street
 *  - mailing_city
 *  - mailing_state
 *  - mailing_zipcode
 *  - mailing_duration
 *  - current_license_state
 *  - current_license_number
 *  - current_license_type
 *  - current_license_endorsements
 *  - current_license_exp_date
 *  - denied_license
 *  - suspended_license
 *  - applicant_name_printed
 *  - applicant_signature_date
 *  - applicant_signature
 */
?>
<?php
/**
 *
 *
 *
 *
 */

$test_row = array(
  'first_name' => 'Hunter',
  'middle_name' => 'Samuel',
  'last_name' => 'Cox',
  'phone' => '(765) 571-2749',
  'email' => 'huntersamuelcox@icloud.com',
  'date_of_birth' => '1992-09-08',
  'job_position' => 'OTR Driver',
  'date_available' => '2021-04-07',
  'legal_to_work' => 'yes',
  'current_street' => '103 W Broad St',
  'current_city' => 'Kennard',
  'current_state' => 'IN',
  'current_zipcode' => '47351',
  'current_duration' => '2 years',
  'mailing_street' => 'PO Box 205',
  'mailing_city' => 'Kennard',
  'mailing_state' => 'IN',
  'mailing_zipcode' => '47351',
  'mailing_duration' => '2 years',
  'prev1_street' => '508 W 34th St',
  'prev1_city' => 'Connersville',
  'prev1_state' => 'IN',
  'prev1_zipcode' => '47331',
  'prev1_duration' => '1 year',
  'prev2_street' => '201 N Main St',
  'prev2_city' => 'Dunreith',
  'prev2_state' => 'IN',
  'prev2_zipcode' => '47333',
  'prev2_duration' => '2 years',
  'prev3_street' => '1205 S 22nd St',
  'prev3_city' => 'New Castle ',
  'prev3_state' => 'IN',
  'prev3_zipcode' => '47362',
  'prev3_duration' => '2 years',
  'current_license_state' => 'IN',
  'current_license_number' => '5400-33-4300',
  'current_license_type' => 'Operator',
  'current_license_endorsements' => 'None',
  'current_license_exp_date' => '2027-09-08',
  'prev1_license_state' => 'THIS FIELD WAS EMPTY',
  'prev1_license_number' => 'THIS FIELD WAS EMPTY',
  'prev1_license_type' => 'THIS FIELD WAS EMPTY',
  'prev1_license_endorsements' => 'THIS FIELD WAS EMPTY',
  'prev1_license_exp_date' => 'THIS FIELD WAS EMPTY',
  'prev2_license_state' => 'THIS FIELD WAS EMPTY',
  'prev2_license_number' => 'THIS FIELD WAS EMPTY',
  'prev2_license_type' => 'THIS FIELD WAS EMPTY',
  'prev2_license_endorsements' => 'THIS FIELD WAS EMPTY',
  'prev2_license_exp_date' => 'THIS FIELD WAS EMPTY',
  'straight_truck_type' => 'F-350 Diesel',
  'straight_truck_date_from' => '2019-11-01',
  'straight_truck_date_to' => '2020-02-15',
  'straight_truck_miles' => '100,000',
  'tractor_semi_type' => 'Some tractor/semi-trailer equipment.',
  'tractor_semi_date_from' => '2020-01-01',
  'tractor_semi_date_to' => '2021-01-01',
  'tractor_semi_miles' => '200,000',
  'tractor_trailers_type' => 'Some tractor & multiple trailers sorta equipment...',
  'tractor_trailers_date_from' => '2020-02-02',
  'tractor_trailers_date_to' => '2021-02-02',
  'tractor_trailers_miles' => '300,000',
  'tractor_tanker_type' => 'Some tractor/tanker equipment...',
  'tractor_tanker_date_from' => '2020-03-03',
  'tractor_tanker_date_to' => '2021-03-03',
  'tractor_tanker_miles' => '100,000',
  'other_type' => 'Some other types of equipment...',
  'other_date_from' => '2020-01-02',
  'other_date_to' => '2021-01-02',
  'other_miles' => '150,000',
  'accident1_date' => 'THIS FIELD WAS EMPTY',
  'accident1_description' => 'THIS FIELD WAS EMPTY',
  'accident1_fatalities' => 'THIS FIELD WAS EMPTY',
  'accident1_injuries' => 'THIS FIELD WAS EMPTY',
  'accident1_spill' => 'no',
  'accident2_date' => 'THIS FIELD WAS EMPTY',
  'accident2_description' => 'THIS FIELD WAS EMPTY',
  'accident2_fatalities' => 'THIS FIELD WAS EMPTY',
  'accident2_injuries' => 'THIS FIELD WAS EMPTY',
  'accident2_spill' => 'no',
  'accident3_date' => 'THIS FIELD WAS EMPTY',
  'accident3_description' => 'THIS FIELD WAS EMPTY',
  'accident3_fatalities' => 'THIS FIELD WAS EMPTY',
  'accident3_injuries' => 'THIS FIELD WAS EMPTY',
  'accident3_spill' => 'no',
  'conviction1_date' => 'THIS FIELD WAS EMPTY',
  'conviction1_description' => 'THIS FIELD WAS EMPTY',
  'conviction1_state' => 'THIS FIELD WAS EMPTY',
  'conviction1_penalty' => 'THIS FIELD WAS EMPTY',
  'conviction2_date' => 'THIS FIELD WAS EMPTY',
  'conviction2_description' => 'THIS FIELD WAS EMPTY',
  'conviction2_state' => 'THIS FIELD WAS EMPTY',
  'conviction2_penalty' => 'THIS FIELD WAS EMPTY',
  'conviction3_date' => 'THIS FIELD WAS EMPTY',
  'conviction3_description' => 'THIS FIELD WAS EMPTY',
  'conviction3_state' => 'THIS FIELD WAS EMPTY',
  'conviction3_penalty' => 'THIS FIELD WAS EMPTY',
  'denied_license' => 'No',
  'suspended_license' => 'No',
  'current_employer_name' => 'DIDO Renovations',
  'current_employer_phone' => '(765) 571-2749',
  'current_employer_address' => 'None',
  'current_employer_position' => 'Laborer',
  'current_employer_date_from' => '2020-10-01',
  'current_employer_date_to' => '2021-04-15',
  'current_employer_reason' => 'N/A',
  'current_employer_salary' => '$12/hr',
  'current_employer_gaps' => 'Had a couple month gap before this job because I didn\'t have a working vehicle, plus the  COVID pandemic and all that jazz.',
  'current_employer_safety' => 'no',
  'current_employer_dot' => 'no',
  'prev1_employer_name' => 'DDS',
  'prev1_employer_phone' => '(765) 571-2749',
  'prev1_employer_address' => '123 Fake Ave',
  'prev1_employer_position' => 'Laborer',
  'prev1_employer_date_from' => '2020-06-01',
  'prev1_employer_date_to' => '2020-09-12',
  'prev1_employer_reason' => 'Disagreements',
  'prev1_employer_salary' => '$18/hr',
  'prev1_employer_gaps' => 'No gap before this job.',
  'prev1_employer_safety' => 'no',
  'prev1_employer_dot' => 'no',
  'prev2_employer_name' => 'Crazy Horse Hops',
  'prev2_employer_phone' => '(765) 571-2749',
  'prev2_employer_address' => '4567 County Rd 300',
  'prev2_employer_position' => 'Laborer',
  'prev2_employer_date_from' => '2020-02-01',
  'prev2_employer_date_to' => '2020-06-01',
  'prev2_employer_reason' => 'Better job opportunity',
  'prev2_employer_salary' => '$13/hr',
  'prev2_employer_gaps' => 'Had a few month gap before this job because I was dealing with some personal things that kept me away from work.',
  'prev2_employer_safety' => 'no',
  'prev2_employer_dot' => 'no',
  'edu_hs_name_location' => 'Knightstown HS',
  'edu_hs_course_study' => 'General Studies',
  'edu_hs_years_completed' => '4',
  'edu_hs_graduated' => 'yes',
  'edu_hs_details' => 'THIS FIELD WAS EMPTY',
  'edu_college_name_location' => 'None',
  'edu_college_course_study' => 'THIS FIELD WAS EMPTY',
  'edu_college_years_completed' => 'THIS FIELD WAS EMPTY',
  'edu_college_graduated' => 'no',
  'edu_college_details' => 'THIS FIELD WAS EMPTY',
  'edu_other_name_location' => 'None',
  'edu_other_course_study' => 'THIS FIELD WAS EMPTY',
  'edu_other_years_completed' => 'THIS FIELD WAS EMPTY',
  'edu_other_graduated' => 'no',
  'edu_other_details' => 'THIS FIELD WAS EMPTY',
  'applicant_name_printed' => 'Hunter Cox',
  'applicant_signature_date' => '2021-04-07',
  'applicant_signature'=> 'Hunter Cox',
);
?>