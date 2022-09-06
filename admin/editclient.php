<?php include 'topbar.php' ?>

<?php

$email = $_GET['email'];
$query = "select * from clients where email='" . $email . "';";
$result = $conn->query($query);
$name = "";
$password = "";
$phonenumber = "";
$picture = "";
$joindate = "";

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $name = $row['name'];
        $password = $row['password'];
        $phonenumber = $row['phonenumber'];
        $picture = $row['picture'];

        $joindate = $row['joindate'];
    }
}

?>




<div class="container-xl px-4 mt-4" id="edit-profile-section">
    <form method="post" action="editclientprofilecore.php" enctype="multipart/form-data">

        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img width="100px" height="100px" class="img-account-profile rounded-circle mb-2" src="../client/images/<?php echo $picture ?>" alt="profile picture">

                        <div class="small font-italic text-muted mb-4"></div>

                        <button class="btn btn-primary " type="button" class="buttoninput">
                            <i class="fa fa-fw fa-camera"></i>

                            <input type="file" name="image" class="fileinput" />
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">

                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Email</label>
                            <input disabled class="form-control" id="inputUsername" type="text" value="<?php echo $email ?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="name">Name</label>
                                <input class="form-control" name="name" id="name" type="text" value="<?php echo $name ?>">
                            </div>

                        </div>
                        <input hidden class="form-control"  type="text" name="email" value="<?php echo $email ?>">

                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="text" name="phonenumber" value="<?php echo $phonenumber ?>">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="joindate">Join Date</label>
                                <input disabled class="form-control" id="joindate" type="text" name="birthday" value="<?php echo $joindate ?>">
                            </div>
                        </div>

                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="password">Password</label>
                                <input class="form-control" name="password" id="password" type="text" value="<?php echo $password ?>">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Save changes</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<?php include 'footer.php' ?>