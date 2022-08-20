<?php include './header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <img src="/blueprint.jpg" class="w-100" alt="blueprint">
            <h3 class="py-3 text-center">โปรแกรมหาพื้นที่วงกลม</h3>
            <form action="/result.php?mode=circular" method="post">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <div class="form-group">
                            <label for="radius">รัศมี</label>
                            <input type="number" name="radius" id="radius" class="form-control" placeholder="ฐาน">
                        </div>
                        <button type="submit" class="btn btn-primary">คำนวน</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>