<form action="#" method="POST">
    <div class="row">
        <!-- Basic Info Fields -->
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name*" name="firstname" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Middle Name*" name="middlename" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Last Name*" name="lastname" required>
            </div>
        </div>
    </div>

    <!-- Program Selection -->
    <h3>What Program are you applying for?</h3>
    <div class="form-group">
        <select class="form-control" id="programSelect" name="program" required>
            <option value="" disabled selected>Select Program Level*</option>
            <option value="Certification">Certification/License</option>
            <option value="Bachelors">Bachelor’s Degree</option>
            <option value="Masters">Master’s Degree</option>
            <option value="Doctorate">Doctorate Degree</option>
        </select>
    </div>

    {/* <!-- Sub-options for Program Level --> */}
    <div class="form-group" id="certificationOptions" style="display: none;">
        <label>Select Certification/License Program</label>
        <select class="form-control" name="certification">
            <option>Christian Administrator</option>
            <option>Christian Caregiver</option>
            <option>Christian Counselor</option>
            <option>Christian Life Coach</option>
            <option>Christian Mediator</option>
            <option>Christian Philosopher/Analyst</option>
            <option>Corporate Chaplain</option>
        </select>
    </div>

    <div class="form-group" id="bachelorsOptions" style="display: none;">
        <label>Select Bachelor’s Degree Program</label>
        <select class="form-control" id="bachelorSelect" name="bachelors">
            <option value="BTh">Bachelor of Theology (B.Th.)</option>
            <option value="BMin">Bachelor of Ministry (B.Min.)</option>
            <option value="BDiv">Bachelor of Divinity (B.Div.)</option>
        </select>
    </div>

    {/* <!-- Bachelor of Theology Sub-options --> */}
    <div class="form-group" id="bThOptions" style="display: none;">
        <label>Select Bachelor of Theology Specialization</label>
        <select class="form-control" name="bThSpecialization">
            <option>B.Th. Biblical Studies</option>
            <option>B.Th. Christian Apologetics</option>
            <option>B.Th. Christian Counseling</option>
            <option>B.Th. Christian Philosophy</option>
            <option>B.Th. Ecumenical Theology</option>
            <option>B.Th. Systematic Theology</option>
        </select>
    </div>
</form>
