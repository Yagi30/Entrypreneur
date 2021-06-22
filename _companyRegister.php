<div class="jumbotron bg-success">
    <h2 class="display-4 title-heading">Register & find Jobs</h2>
    <p class="title-desc">Helps passive and active jobseekers find better jobs. Get connected with over 45000
        recruiters.<br />Apply to jobs in just one click. Apply to thousands of jobs posted daily.</p>
</div>
<div class="form_section">
    <form action="company_register_code.php" method="post">
        <h3>Login detils</h3>
        <hr>
        <div class="form-group col-md-6">
            <label for="email">Email: </label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                placeholder="e.g: john@email.com" />
        </div>
        <div class="form-group col-md-6">
            <label for="password">Password: </label>
            <input type="password" class="form-control" name="password" id="password" />
        </div>
        <div class="form-group col-md-6">
            <label for="con_password">Confirm Password: </label>
            <input type="password" class="form-control" name="con_password" id="con_password" />
        </div>
        <hr>
        <h3>Company details</h3>
        <hr>
        <div class="form-row px-3">
            <div class="form-group col-md-6">
                <label for="com_name">Company name: </label>
                <input type="text" class="form-control" name="com_name" id="com_name" />
            </div>
            <div class="form-group col-md-6">
                <label for="pincode">Industry: </label>
                <select name="industry" class="form-control" id="experience">
                    <option value="">Select</option>
                    <option value="electrical">Electrical</option>
                    <option value="software">Software</option>
                    <option value="textile">Textile</option>
                </select>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label>Company type: </label>
            <div class="radio">
                <strong class="d-flex align-items-center"><input type="radio" name="com_type" value="company" />
                    Company</strong>
                <strong class="d-flex align-items-center"><input type="radio" name="com_type" value="consultant" />
                    Consultant</strong>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="address">Address: </label>
            <textarea class="form-control" name="address" id="address"></textarea>
        </div>
        <div class="form-row px-3">
            <div class="form-group col-md-6">
                <label for="con_person">Contact person: </label>
                <input type="text" class="form-control" name="con_person" id="con_person" />
            </div>
            <div class="form-group col-md-6">
                <label for="con_number">Contact number: </label>
                <input type="text" class="form-control" name="con_number" id="con_number" />
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="about">About company: </label>
            <textarea class="form-control" name="about" id="about"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Register</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
</div>