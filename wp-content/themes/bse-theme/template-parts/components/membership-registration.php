<?php
/**
 * Template Part: Membership Registration
 */
?>
<div class="membership-registration">
    <form id="membershipRegistration" class="registration-form">
        <div class="form-section personal-info">
            <h3><?php _e('Personal Information', 'bse-theme'); ?></h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName"><?php _e('First Name', 'bse-theme'); ?></label>
                    <input type="text" class="form-control" id="firstName" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName"><?php _e('Last Name', 'bse-theme'); ?></label>
                    <input type="text" class="form-control" id="lastName" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email"><?php _e('Email', 'bse-theme'); ?></label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="phone"><?php _e('Phone', 'bse-theme'); ?></label>
                    <input type="tel" class="form-control" id="phone" required>
                </div>
            </div>
        </div>

        <div class="form-section professional-info">
            <h3><?php _e('Professional Information', 'bse-theme'); ?></h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="qualification"><?php _e('Qualification', 'bse-theme'); ?></label>
                    <select class="form-control" id="qualification" required>
                        <option value=""><?php _e('Select Qualification', 'bse-theme'); ?></option>
                        <option value="bachelor"><?php _e('Bachelor Degree', 'bse-theme'); ?></option>
                        <option value="master"><?php _e('Master Degree', 'bse-theme'); ?></option>
                        <option value="phd"><?php _e('PhD', 'bse-theme'); ?></option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="specialization"><?php _e('Engineering Specialization', 'bse-theme'); ?></label>
                    <select class="form-control" id="specialization" required>
                        <option value=""><?php _e('Select Specialization', 'bse-theme'); ?></option>
                        <option value="civil"><?php _e('Civil Engineering', 'bse-theme'); ?></option>
                        <option value="mechanical"><?php _e('Mechanical Engineering', 'bse-theme'); ?></option>
                        <option value="electrical"><?php _e('Electrical Engineering', 'bse-theme'); ?></option>
                        <option value="chemical"><?php _e('Chemical Engineering', 'bse-theme'); ?></option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="experience"><?php _e('Years of Experience', 'bse-theme'); ?></label>
                    <input type="number" class="form-control" id="experience" min="0" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="employer"><?php _e('Current Employer', 'bse-theme'); ?></label>
                    <input type="text" class="form-control" id="employer">
                </div>
            </div>
        </div>

        <div class="form-section membership-type">
            <h3><?php _e('Membership Type', 'bse-theme'); ?></h3>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="membership-options">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="membershipType" id="memberFellow" value="fellow">
                            <label class="form-check-label" for="memberFellow">
                                <?php _e('Fellow Member', 'bse-theme'); ?>
                                <span class="badge bg-primary"><?php _e('50.000 BD/year', 'bse-theme'); ?></span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="membershipType" id="memberFull" value="full">
                            <label class="form-check-label" for="memberFull">
                                <?php _e('Full Member', 'bse-theme'); ?>
                                <span class="badge bg-primary"><?php _e('40.000 BD/year', 'bse-theme'); ?></span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="membershipType" id="memberAssociate" value="associate">
                            <label class="form-check-label" for="memberAssociate">
                                <?php _e('Associate Member', 'bse-theme'); ?>
                                <span class="badge bg-primary"><?php _e('30.000 BD/year', 'bse-theme'); ?></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-section documents">
            <h3><?php _e('Required Documents', 'bse-theme'); ?></h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cvUpload"><?php _e('CV/Resume', 'bse-theme'); ?></label>
                    <input type="file" class="form-control" id="cvUpload" accept=".pdf,.doc,.docx" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="certificateUpload"><?php _e('Qualification Certificate', 'bse-theme'); ?></label>
                    <input type="file" class="form-control" id="certificateUpload" accept=".pdf,.jpg,.png" required>
                </div>
            </div>
        </div>

        <div class="form-section agreement">
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="termsAgreement" required>
                <label class="form-check-label" for="termsAgreement">
                    <?php _e('I agree to the terms and conditions', 'bse-theme'); ?>
                </label>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary btn-lg"><?php _e('Submit Application', 'bse-theme'); ?></button>
        </div>
    </form>
</div>