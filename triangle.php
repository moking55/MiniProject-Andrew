<?php include './header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <img src="/blueprint.jpg" class="w-100" alt="blueprint">
            <h3 class="py-3 text-center">โปรแกรมหาพื้นที่สามเหลี่ยม</h3>
            <form action="/result.php?mode=triangle" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="base">ฐาน</label>
                            <input type="number" name="base" id="base" class="form-control" placeholder="ฐาน">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="height">สูง</label>
                            <input type="number" name="height" id="height" class="form-control" placeholder="สูง">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">คำนวน</button>
            </form>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>