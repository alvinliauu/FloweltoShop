<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('page'); ?>
<form id="" class="form" accept="" action="/register" method="post">
    <?php echo csrf_field(); ?>
    
    <h4 class="text-center">Register</h4>
    <div class="card-body">
        
        <div class="form-group row">
            <label for="username" class="col-md-5 col-form-label text-md-right">Username</label>
            <div class="col-md-3">
                <input type="username" id="username" class="form-control" name="username" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="email" class="col-md-5 col-form-label text-md-right">E-Mail Address</label>
            <div class="col-md-3">
                <input type="email" id="email" class="form-control" name="email" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="password" class="col-md-5 col-form-label text-md-right">Password</label>
            <div class="col-md-3">
                <input type="password" id="password" class="form-control" name="password" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="password" class="col-md-5 col-form-label text-md-right">Confirm Password</label>
            <div class="col-md-3">
                <input type="password" id="password" class="form-control" name="password" required>
            </div>
        </div>
        
        <fieldset class="form-group">
            <div class="row">
                <label for="gender" class="col-md-5 col-form-label text-md-right">Gender</label>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" checked>
                        <label class="form-check-label" for="inlineRadio1">Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" checked>
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
            </div>
        </fieldset>
        
        <div class="form-group row">
            <label for="datebirth" class="col-md-5 col-form-label text-md-right">Date of Birth</label>
            <div class="col-md-3">
                <input class="form-control" type="date" value="" id="datebirth" name="datebirth" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="address" class="col-md-5 col-form-label text-md-right">Address</label>
            <div class="col-md-3">
                <textarea class="form-control" id="address" rows="3" name="address" required></textarea>
            </div>
        </div>
        
        <div class="col-md-6 offset-md-5">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\FloweltoShop\resources\views/register.blade.php ENDPATH**/ ?>