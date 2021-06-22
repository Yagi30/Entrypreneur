<div class="jumbotron bg-warning">
    <h2 class="display-4 title-heading">Register & find Jobs</h2>
    <p class="title-desc">Helps passive and active jobseekers find better jobs. Get connected with over 45000
        recruiters.<br />Apply to jobs in just one click. Apply to thousands of jobs posted daily.</p>
</div>
<div class="form_section">
    <form action="signup.php" method="post">
        <h3>Login & Contact Details</h3>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fname">First Name: </label>
                <input type="text" class="form-control" name="fname" id="fname" placeholder="e.g: John" />
            </div>
            <div class="form-group col-md-6">
                <label for="lname">Last Name: </label>
                <input type="type" class="form-control" name="lname" id="lname" placeholder="e.g: Doe" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email: </label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                    placeholder="e.g: john@email.com" />
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Phone: </label>
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="eg: +91 123 532 5902" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Password: </label>
                <input type="password" class="form-control" name="password" id="password" />
            </div>
            <div class="form-group col-md-6">
                <label for="con_password">Confirm Password: </label>
                <input type="password" class="form-control" name="con_password" id="con_password" />
            </div>
        </div>
        <hr>
        <h3>Address Information</h3>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="address1">Address-1: </label>
                <input type="text" class="form-control" name="address1" id="address1" placeholder="Address 1" />
            </div>
            <div class="form-group col-md-6">
                <label for="address2">Address-2: </label>
                <input type="text" class="form-control" name="address2" id="address2" placeholder="Address 2" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">City: </label>
                <input type="text" class="form-control" name="city" id="city" placeholder="City" />
            </div>
            <div class="form-group col-md-6">
                <label for="state">State: </label>
                <input type="text" class="form-control" name="state" id="state" placeholder="City" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="pincode">Pincode: </label>
                <input type="tel" class="form-control" name="pincode" id="pincode" placeholder="City" />
            </div>
            <div class="form-group col-md-6">
                <label for="country">Country: </label>
                <input type="text" class="form-control" name="country" id="country" value="India" />
            </div>
        </div>
        <hr>
        <h3>Your Current Employment Details</h3>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="experience">How much work experience do you have: </label>
                <select name="experience" class="form-control" id="experience">
                    <option value="">Select</option>
                    <option value="1">1 year</option>
                    <option value="2">2 year</option>
                    <option value="3">3 year</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="skills">What are your Key Skills: </label>
                <input type="text" class="form-control" name="skills" id="skills"
                    placeholder="HTML, CSS, PHP, etc..." />
            </div>
        </div>
        <hr>
        <h3>Your Educational Qualifications</h3>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="graduation">Your Basic Education: </label>
                <select name="graduation" class="form-control" id="graduation">
                    <option value="">Select</option>
                    <option value="btech">B.Tech</option>
                    <option value="bsc">B>Sc</option>
                    <option value="bca">B.C.A</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="master">Your Masters Education: </label>
                <select name="master" class="form-control" id="master">
                    <option value="">Select</option>
                    <option value="mtech">M.Tech</option>
                    <option value="msc">M.Sc</option>
                    <option value="mca">M.C.A</option>
                </select>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Sign up</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
</div>