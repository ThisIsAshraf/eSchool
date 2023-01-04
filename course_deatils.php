<?php include_once('./Partials/header.php');?>
<!-- Start Course Details Page Banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/course_deatils.jpg" alt="Cousrses"
            style="height: 800px; width:100%; object-fit:cover; box-shadow:10px;">
    </div>
</div>
<!-- End Course Details Page Banner -->

<!-- Start Course Details Container -->

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="./images/linux.jpg" class="img-thumbnail mx-auto" style="width: 200px;" alt="Linux">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: Linux Server Administration</h5>
                <p class="card-text">Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur
                    nihil rem amet atque facere? Nobis.</p>
                <p class="card-text">Duration: 38 hours</p>
                <form action="" method="POST">
                    <p class="card-text d-inline">Price: <small><del>&#36 2000</del></small> &#36 1350<span
                            class="font-weight-bolder"></span>
                    </p>
                    <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right"
                        name="course_enroll">Enroll Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 mb-2">
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Lesson ID</th>
                    <th scope="col">Lesson Name</th>
                </tr>
            </thead>
            <tbody>
                <th scope="row"> 11001</th>
                <td>Inroduction</td>
                <tr></tr>
            </tbody>
        </table>
    </div>
</div>

<!-- End Course Details Container -->

<!-- End Popular Courses -->
<?php include_once('./Partials/footer.php');?>