<div class="row">
    <div class="col-lg-6 col-md-offset-3">
        <h1 class="page-header">Forms</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-10 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Basic Form Elements
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                      <form>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                  </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                  </div>
                                      <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                          <input type="file" id="exampleInputFile">
                                            <p class="help-block">Example block-level help text here.</p>
                                            </div>


                                              <button type="submit" class="btn btn-default">Submit</button>
                                              </form>
                            
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-6">
                        <h1>Disabled Form States</h1>
                        <form role="form">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="disabledSelect">Disabled input</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="disabledSelect">Disabled select menu</label>
                                    <select id="disabledSelect" class="form-control">
                                        <option>Disabled select</option>
                                    </select>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Disabled Checkbox
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Disabled Button</button>
                            </fieldset>
                        </form>
                        <h1>Form Validation States</h1>
                        <form role="form">
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess">Input with success</label>
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning">Input with warning</label>
                                <input type="text" class="form-control" id="inputWarning">
                            </div>
                            <div class="form-group has-error">
                                <label class="control-label" for="inputError">Input with error</label>
                                <input type="text" class="form-control" id="inputError">
                            </div>
                        </form>
                        <h1>Input Groups</h1>
                        <form role="form">
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-eur"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Font Awesome Icon">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
