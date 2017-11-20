<style type="text/css">
    .profile-img{
        max-width: 200px;
        border: 5px solid #fff;
        border-radius: 100%;
    }

    .list-group{
        margin-left: 20%;
        margin-right: 10%;
    }
</style>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <img src="pics/profile-pic.png" class="profile-img center-block" alt="Justleh Niel L. Arcillas">
                </div>

                <div class="panel-body">
                    <h7><?php echo e(Auth::user()->id); ?></h7> <br>
                    <h7><?php echo e(Auth::user()->name); ?></h7> <br>
                    <h7><?php echo e(Auth::user()->degree_program); ?></h7> <br>
                    <h7><?php echo e(Auth::user()->degree_level); ?></h7> <br>
                    <h7><?php echo e(Auth::user()->year_level); ?></h7> <br>  
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Second Semester, A.Y. 2017-2018
                </div>
                <div class="panel-body">
                    <h4>Personal Data</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item">My Login Account</a>
                        <a href="#" class="list-group-item">My Personal Information</a>
                        <a href="#" class="list-group-item">My Existing Accountability</a>
                        <a href="#" class="list-group-item">My Study Plan</a>
                        <a href="#" class="list-group-item">My Schedule and Grades</a>
                        <a href="#" class="list-group-item">My Class Syllabus</a>
                    </div> 
                    <h4>Apps</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Evaluate Teacher</a>
                    </div>
                    <h4>Registration</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Pre-Enlist Subjects</a>
                        <a href="/advising/<?php echo e(Auth::user()->id); ?>" class="list-group-item">Advising</a>
                        <a href="#" class="list-group-item">Update Your Enrollment Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>