<?php include 'header.php' ?>

<div class="container mt-5 mb-5 ">
    <div class="card px-1 py-4">
        <div class="card-body">
            <div class="mb-3">
                <h6 class="card-title mb-3">This appointment is for <?php echo $name ?></h6>
            </div>
            <hr>

            <form action="hiremecore.php" method="post">
                <div class="mb-3">
                    <label for="fromdate" class="form-label">From</label>
                    <input type="date" name="fromdate" class="form-control" id="fromdate" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="details" class="form-label">Details</label>
                        <textarea name="details" required class="form-control rounded-0" id="details" rows="3"></textarea>
                    </div>
                </div>

                <div class="mb-3">
                    <label required for="transaction" class="form-label">Transaction id(Bkash)</label>
                    <input type="text" id="transaction" class="form-control" name = "transaction">
                </div>

                <div class="mb-3">
                    <input hidden type="text" name="id" class="form-control" value="<?php echo $_GET['id'] ?>">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


<?php include 'footer.php' ?>