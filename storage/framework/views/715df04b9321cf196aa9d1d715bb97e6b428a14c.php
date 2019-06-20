<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password"  >

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Birth day')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="date" class="form-control" name="Birth_day">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('relation_status')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="relation_status">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right"><?php echo e(__('age')); ?></label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control" name="age" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Education_level')); ?></label>

                            <div class="col-md-6">
                                <input id="Education_level" type="text" class="form-control" name="Education_level" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('gender')); ?></label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control" name="gender"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('homeonership')); ?></label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control" name="homeonership"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('internetconnection')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="internetconnection"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('material_status')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="material_status"  >
                            </div>
                        </div>


                        <div class="form-group row">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('movie_selector')); ?></label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="text" class="form-control" name="movie_selector"  >
                          </div>
                        </div>


                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('num_bathrooms')); ?></label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="text" class="form-control" name="num_bathrooms"  >
                        </div>
                        </div>


                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('num_bedrooms')); ?></label>

                        <div class="col-md-6">
                          <input id="password-confirm" type="text" class="form-control" name="num_bedrooms"  >
                        </div>
                        </div>


                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('num_cars')); ?></label>

                        <div class="col-md-6">
                        <input id="password-confirm" type="text" class="form-control" name="num_cars"  >
                        </div>
                        </div>


                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('num_cheildren')); ?></label>

                        <div class="col-md-6">
                        <input id="password-confirm" type="text" class="form-control" name="num_cheildren"  >
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('num_Tvs')); ?></label>

                        <div class="col-md-6">
                          <input id="password-confirm" type="text" class="form-control" name="num_Tvs"  >
                        </div>
                        </div>
                        <div class="form-group row">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('PPV_freq')); ?></label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="text" class="form-control" name="PPV_freq"  >
                          </div>
                        </div>
                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('buying_freq')); ?></label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="text" class="form-control" name="buying_freq"  >
                              </div>
                              </div>
                              <div class="form-group row">
                                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('format')); ?></label>

                                  <div class="col-md-6">
                                      <input id="password-confirm" type="text" class="form-control" name="format"  >
                                  </div>
                        </div>
                                  <div class="form-group row">
                                      <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('renting_freq')); ?></label>

                                      <div class="col-md-6">
                                          <input id="password-confirm" type="text" class="form-control" name="renting_freq"  >
                                      </div>
                                      </div>
                                      <div class="form-group row">
                                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Viewing_freq')); ?></label>

                                          <div class="col-md-6">
                                              <input id="password-confirm" type="text" class="form-control" name="Viewing_freq"  >
                                          </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Threater_freq')); ?></label>

                                              <div class="col-md-6">
                                                  <input id="password-confirm" type="text" class="form-control" name="Threater_freq"  >
                                              </div>
                                              </div>
                                            
                                                  <div class="form-group row">
                                                      <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tv_movie_freq')); ?></label>

                                                      <div class="col-md-6">
                                                          <input id="password-confirm" type="text" class="form-control" name="Tv_movie_freq"  >
                                                      </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tv_signal')); ?></label>

                                                          <div class="col-md-6">
                                                              <input id="password-confirm" type="text" class="form-control" name="Tv_signal"  >
                                                          </div>
                                                      </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HERO\Desktop\F\movies1\resources\views/auth/register.blade.php ENDPATH**/ ?>