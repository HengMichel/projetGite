<?php 
session_start();
include_once "inc/header.php"; ?>
<div class="container">
    <form action="model/inscription.php" method="post">

        <div class="form-group mt-5 mb-5 d-flex">
            <label class="me-xl-5 link-warning bg-dark fw-medium">Gender :</label>
            <div class="form-check">
                <input class="form-check-input border-warning-subtle border-3 bg-transparent mt-3 translate-middle-y " type="radio" name="gender"  value="M">
                <label class="form-check-label link-warning bg-dark fw-medium lh-lg">Male</label>
            </div>
            <div class="form-check">
                <input class="form-check-input border-warning-subtle border-3 bg-transparent mt-3 translate-middle-y  m-0 float-md-none" type="radio" name="gender"  value="F">
                <label class="form-check-label link-warning bg-dark fw-medium lh-lg">Female</label>
            </div>
            <div class="form-check">
                <input class="form-check-input border-warning-subtle border-3 bg-transparent mt-3 translate-middle-y m-0 float-md-none" type="radio" name="gender" value="O">
                <label class="form-check-label link-warning bg-dark fw-medium lh-lg" >Other</label>
            </div>
        </div>

        <div class="row">

            <div class="form-group col-md-6">
                <label class="firstname bg-dark fw-medium link-success" for="firstname">Firstname :</label>
                <input type="text" class="form-control border-success border-4 mt-3" id="firstname" name="firstname" >
            </div>
     
            <div class="form-group col-md-6">
                <label class="lastname link-success bg-dark fw-medium" for="lastname">Lastname :</label>
                <input type="text" class="form-control border-success border-4 mt-3" id="lastname" name="lastname" >
            </div>

            <div class="form-group mt-3 col-md-6">
                <label class="email link-success bg-dark fw-medium" for="email">Email :</label>
                <input type="email" class="form-control border-success border-4 mt-3" id="email" name="email" >
            </div>
            <div class="form-group mt-3 col-md-6">
                <label class="password link-success bg-dark fw-medium" for="password">Password :</label>
                <input type="password" class="form-control border-success border-4 mt-3" id="password" name="password" >
            </div>

            <div class="form-group mt-3 col-md-6">
                <label class="address link-success bg-dark fw-medium">Address :</label>
                <input type="text" class="form-control border-success border-3 mt-3" name="address" >
            </div>
            <div class="form-group mt-3 col-md-6">
                <label class="phoneN link-success bg-dark fw-medium" >Phone number :</label>
                <input type="text" class="form-control border-success border-4 mt-3" name="phone" >
            </div>
        </div>
 
        <div class="form-group mt-3 col-md-5 m-auto">
            <label class="birthday link-warning bg-dark fw-medium" >Birthday:</label>
            <input type="date" class="form-control border-warning border-3 mt-3 fw-medium link-warning" name="birthday" >
        </div>
    
        <button type="submit" id="bouton" class="btn mt-5 mb-5 border-warning border-3 mt-2 bg-dark link-warning" name="submit" value="submit">Submit</button>
    </form>
</div>
<?php include_once "inc/footer.php"; ?>