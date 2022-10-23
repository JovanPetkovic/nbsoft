

<div class="row d-flex justify-content-center">
    <form class="col-md-6 container" id="contactForm" action="/index.php" method="post">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="firstName">First Name</label>
                <input type="text"  name="firstName" class="form-control"   placeholder="Enter first name">
            </div>
            <div class="form-group col-md-6">
                <label for="lastName">Last Name</label>
                <input type="text"  name="lastName" class="form-control"   placeholder="Enter last name">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="birthYear">Birth Year</label>
                <input type="text"  name="birthYear" class="form-control"   placeholder="Enter birth year">
            </div>
            <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text"  name="city" class="form-control"   placeholder="Enter city">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="address">Address</label>
                <input type="text"  name="address" class="form-control"   placeholder="Enter address">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Select Sex</label>
                <select name="sex" class="form-control" id="exampleFormControlSelect1">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="form-check col-md-4 d-flex align-items-center">
                <input type="checkbox" class="form-check-input" name="newsletter" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Subscribe for newsletter</label>
            </div>
            <div class="col-md-1"></div>
            <button type="submit" class="btn btn-primary col-md-4">Submit</button>


        </div>
    </form>
</div>